<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\company;
use App\Models\PostJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jobs\DeletePostJob;
use Carbon\Carbon;

class PostJobController extends Controller
{
     /*-============show data in slider in index page page ==========*/
    //  public function slider()
    //  {
    //      $jobs = PostJob::all();
    //      return view('index',compact('jobs'));
    //  }
/* ============show data in index page ============ */
    public function index()
    {
        $jobs = PostJob::with('company')->paginate(9);
        $company = Company::all(); // Retrieve all companies from the database
        $posts = new PostJob();
        $results = $posts->getProductsByCategory();
        $r=collect($results)->zip('posts');
        return view('index', compact('jobs','r'));
    }
 /*-============show data in find-job page ==========*/
    public function findJob()
    {
        $post = PostJob::with('company')->paginate(12);
        return view('find-job',compact('post'));
    }
/*-============show data in showjob page ==========*/
     public function showjobs()
     {   $initialMarkers = [];
         $post = PostJob::all();
         return view('showJobs',compact('post','initialMarkers'));
     }
/*-============ post job from dashboard ==========*/
     public function adminPost(){
        $post = PostJob::all();
        return view('admin.posts',compact('post'));
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('Post-job');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company=Company::where('company_name',$request->company)->first();
        
        // return $company;
        
        $jobPost = new PostJob();
        $jobPost->user_id = auth()->id();
        $jobPost->company_id = $company->id;
        $jobPost->jobTitle = $request->input('jobTitle');
        $jobPost->jobDescription = $request->input('jobDescription');
        $jobPost->applyLink = $request->input('applyLink');
        $jobPost->category = $request->input('category');
        $jobPost->jobType = $request->input('jobType');
        $jobPost->location = $request->input('location');
        $jobPost->skills = $request->input('skills');
        $jobPost->experience = $request->input('experience');
        $jobPost->seniority = $request->input('seniority');
        $jobPost->salary = $request->input('salary');
        $jobPost->postingTime = $request->input('postingTime');
        $jobPost->expairTime = $request->input('expairTime');
    
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoPath = $logo->store('public/logos'); // Store the image and get the file path
            $jobPost->logo = $logoPath;
        }
    
        $jobPost->save();

        $expirationTime = Carbon::parse($jobPost->expairTime);

        // Schedule the post deletion using Laravel's task scheduler
        $expirationTime = Carbon::parse($jobPost->expairTime);
        $deleteJob = (new DeletePostJob($jobPost))->delay($expirationTime);
        dispatch($deleteJob);

        return redirect('showJobs')->with('success', 'Job added successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(PostJob $postJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostJob $postJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostJob $postJob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = PostJob::find($id);
        if (!$post) {
            return redirect()->back()->with('error', 'User not found');
        }
        $post->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
  /*-============ search jobs in admin panall ==========*/
    public function search(Request $request)
    {
        $searchText = $request->search;
    
        $post = PostJob::query()
            ->where('id', 'LIKE', "%{$searchText}%")
            ->orWhere('category', 'LIKE', "%{$searchText}%")
            ->orWhere('location', 'LIKE', "%{$searchText}%")
            ->orWhere('jobTitle', 'LIKE', "%{$searchText}%")
            ->orWhereHas('company', function($query) use ($searchText) {
                $query->where('company_name', 'LIKE', "%{$searchText}%");
            })
            ->get();
    
        return view('admin.posts', compact('post'));
    }
    
    
    public function postscount(){
      
       
    }
}
