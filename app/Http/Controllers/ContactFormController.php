<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = ContactForm::all();
        return view("admin.contact", compact("contact"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.contact");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate( [
            "name"=> "required",
            "email"=> "required|email",
            "telephone"=>"required|10",
            "type"=> "",
            "subject"=> "required",
            "description"=> "required",

        ]);

        

        $contact = new ContactForm();
        $contact->user_id = auth()->id();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->telephone = $request->telephone;
        $contact->type = $request->type;
        $contact->subject = $request->subject;
        $contact->description = $request->description;

        $contact->save();
        return redirect()->back()->with("success","Your data is send successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactForm $contactForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactForm $contactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactForm $contactForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = ContactForm::find($id);
        if (!$contact) {
            return redirect()->back()->with('error', 'User not found');
        }
        $contact->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
    public function search(Request $request)
    {
        $searchText = $request->search;
        $contact = ContactForm::where('name', 'LIKE', "%$searchText%")
            ->orWhere('id', 'LIKE', "%$searchText%")
            ->orWhere('telephone', 'LIKE', "%$searchText%")
            ->get();
    
        return view('admin.contact', compact('contact'));
    }
}
