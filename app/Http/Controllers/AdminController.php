<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\company;
use App\Models\PostJob;
use Carbon\Carbon;

class AdminController extends Controller
{   



/*=============== Count Data in  Dashboark ===============*/

    public function countData(){
        $users = User::where('usertype','0')->count();
        $admins = User::where('usertype','1')->count();
        $companies =Company::count();
        $posts = PostJob::count();
        return view("admin.mydashboard",compact("users", "admins","companies","posts"));
    }
    /*--===============  show Users in the Dashboard company  page  =============*/
    public function index()
    {
        $users = User::paginate(2);
        return view('admin.myusers', compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $users = new User();
     
        $users->name=$request->name;
        $users->email=$request->email;
        $users->phone=$request->phone;
        $users->address=$request->address;
        $users->password=$request->password;
        $users->save();
        return redirect()->back()->with('Message','user added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id); // Assuming you have a "User" model

        return view('admin.myusers', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');

    }

    
    public function search(Request $request)
    {
        $searchText = $request->search;
        $users = User::where('name', 'LIKE', "%$searchText%")
            ->orWhere('id', 'LIKE', "%$searchText%")
            ->orWhere('phone', 'LIKE', "%$searchText%")
            ->get();
    
        return view('admin.myusers', compact('users'));
    }

}
