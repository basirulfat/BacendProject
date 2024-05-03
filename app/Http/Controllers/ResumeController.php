<?php

namespace App\Http\Controllers;
use App\Models\PersonalInformation;
use App\Models\Education;
use App\Models\experience;
use App\Models\Skill;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\View;

class ResumeController extends Controller
{   
    
   
    public function index(){

        $user = auth()->user();
        $users = PersonalInformation::all();
        $education=Education::all();
        $Experience=experience::all();
        $skill=Skill::all();
        return view('resume', compact('users', 'user','education','Experience','skill'));
    }
    public function create(){
        
        return view('createCV');
    }
   
}
