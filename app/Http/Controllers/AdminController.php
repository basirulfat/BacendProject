<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{

/*====================  Show User *===================== */ 
    public function showUsers()
    {
        $users = User::all(); 
    
        return view('admin.myusers', ['users' => $users]);
    }

/*==================== Add a New User *===================== */ 
    public function add_user(Request $request)
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

/*==================== Delete User *===================== */ 
    public function delete_user($id)
    {
      $users=User::find($id);
      $users->delete();
      return redirect()->back()->with('success','user deleted successfully');
    }
}
