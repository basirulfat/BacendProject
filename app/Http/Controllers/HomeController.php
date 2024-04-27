<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Model\User;

class HomeController extends Controller
{
   
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype == '0'){
                
                return view('index');
            }
            else{

                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
    }
}

