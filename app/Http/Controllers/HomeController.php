<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Model\User;

class HomeController extends Controller
{
    public function redirect()

    {
        // Add your logic for the index method here
        // For example, you can return a view or perform some other actions
        if(Auth::id()){
            if(Auth::user()->usertype == '0'){
                
                $initialMarkers = []; // Initialize the $initialMarkers variable with an empty array
                return view('index', compact('initialMarkers'));
            }
            else{

                return view('admin.mydashboard');
            }
        }
        else{
            return redirect()->back();
        }

    }
   
}

