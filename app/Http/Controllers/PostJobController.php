<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\company;
use App\Models\PostJob;
use Illuminate\Http\Request;

class PostJobController extends Controller
{
  


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('Post-job');
        $companies = Company::all(); // Retrieve all companies from the database

        return view('Post-job', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
 public function store(Request $request)
{
    $jobPost = new PostJob();
    $jobPost->company_id = $request->input('company_id');
    $jobPost->user_id = auth()->id();
    $jobPost->jobTitle = $request->input('jobTitle');
    $jobPost->jobDescription = $request->input('jobDescription');
    $jobPost->applyLink = $request->input('applyLink');
    $jobPost->jobType = $request->input('jobType');
    $jobPost->location = $request->input('location');
    $jobPost->skills = $request->input('skills');
    $jobPost->experience = $request->input('experience');
    $jobPost->seniority = $request->input('seniority');
    $jobPost->salary = $request->input('salary');
    $jobPost->postingTime = $request->input('postingTime');
    $jobPost->expairTime = $request->input('expairTime');

    $jobPost->save();
    dd($jobPost);

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
    public function destroy(PostJob $postJob)
    {
        //
    }
}
