<?php

namespace App\Http\Controllers;
use App\Models\Education;
use App\Models\experience;
use App\Models\PersonalInformation;
use App\Models\Skill;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;


class downloadPDFController extends Controller
{
    public function PDFindex()
    {
       
        return view('resume');

       
    }
}
