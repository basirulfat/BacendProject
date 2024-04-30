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
        return view('admin.myusers', compact('users'));
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

/*==================== Search For User *===================== */

    public function search(Request $request)
    {
        $searchText = $request->search;
        $users = User::where('name', 'LIKE', "%$searchText%")
        ->orWhere('id', 'LIKE', "%$searchText%")
        ->orWhere('phone', 'LIKE', "%$searchText%")->get();
        return view('admin.myusers', compact('users'));
    }

/*==================== Delete User *===================== */ 

    public function delete_user($id)
        {
            $user = User::find($id);
            if (!$user) {
                return redirect()->back()->with('error', 'User not found');
            }
            $user->delete();
            return redirect()->back()->with('success', 'User deleted successfully');
        }

/*==================== Update The  User *===================== */


}





