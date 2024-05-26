<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $education =auth()->user()->education;
        return view('education.index',compact('education'));
        
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CreateCV');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate(
            [
            'school_name' => 'required|alpha|min:5|max:50',
            'university_name' => 'required|alpha|min:5|max:50',
            'description' => 'required',
            'start_year' => 'date', 
            'end_year' => 'date', 
            'country' => 'required',
            'city' => 'required',
            ]
               );
        
        $education = new Education();
        $education->user_id=auth()->id();
        $education->school_name=$request->input('school_name');
        $education->field_of_study=$request->input('field_of_study');
        $education->degree_level=$request->input('degree_level');
        $education->start_year=$request->input('start_year');
        $education->end_year=$request->input('end_year');
        $education->university_name=$request->input('university_name');
        $education->university_type=$request->input('university_type');
        $education->country=$request->input('country');
        $education->city=$request->input('city');
        $education->description=$request->input('description');
        $education->save();
        return redirect()->route('education.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {   
        return view('education.edit',compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
       
        $education->update($request->all());
        return redirect()->route('education.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return back();
    }
}
