<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $skill=auth()->user()->skills;
        // dd($skills);
        return view('skills.index',compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("CreateCV");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
            'skill' => 'required|alpha|min:5|max:50',

            ]
               );
        $skill = new Skill();
        $skill->user_id=auth()->id();
        $skill->skill=$request->input('skill');
        $skill->Skill_level=$request->input('Skill_level');
        $skill->save();
        return redirect()->back()->with('success', 'Data has been stored successfully!');   
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return view('skills.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $skill->update($request->all());
        return redirect()->route('skill.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return back();
    }
}
