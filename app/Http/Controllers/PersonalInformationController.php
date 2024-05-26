<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class PersonalInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $users= PersonalInformation::all();
        return view('personalInformation.index', compact('users')); // Pass the users to the view
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
        'full_name' => 'required|alpha|min:5|max:50',
        'second_name' => 'required|min:5|max:50',
        'email' => 'required|email|unique:users,email|max:255',
        'phone' => 'required|regex:/^07[0-9]{8}$/',
        'address' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation rules as needed
        'gender' => 'required',
        'date_of_birth' => 'date', 
        'military_service_status' => 'required',
        'country' => 'required',
        'city' => 'required',
        ]
           );

          if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('images', 'public');
                $imageUrl = asset('storage/' . $imagePath);
            } else {
                $imageUrl = null;
            }
           
            $personal = new PersonalInformation();
            $personal->user_id = auth()->id();
            $personal->full_name = $request->input('full_name');
            $personal->second_name = $request->input('second_name');
            $personal->email = $request->input('email');
            $personal->phone = $request->input('phone');
            $personal->address = $request->input('address');
            $personal->image = $imageUrl; // Store the image URL
            $personal->gender = $request->input('gender');
            $personal->date_of_birth = $request->input('date_of_birth');
            $personal->military_service_status = $request->input('military_service_status');
            $personal->country = $request->input('country');
            $personal->city = $request->input('city');

            $personal->save();
            

            return redirect()->back()->with('success', 'Data has been stored successfully!');   
    }
   
    /**
     * Display the specified resource.
     */
    public function show(PersonalInformation $personalInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalInformation $personalInformation)
    {  
        $user = $personalInformation;
         return view('personalInformation.edit', compact('user'));
        
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonalInformation $personalInformation)
    {
        $request->validate([
            'full_name' => 'required',
            'second_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'required',
            'gender' => 'required',
            // 'date_of_brith' => 'required,
            'military_service_status' => 'required',
            'country' => 'required',
            'city' => 'required',
    
            
    
    
    
            // Add more validation rules for other fields if needed
             ]);
              if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imagePath = $image->store('images', 'public');
                    $imageUrl = asset('storage/' . $imagePath);
                } else {
                    $imageUrl = null;
                }
               
                $personal = new PersonalInformation();
                $personal->user_id = auth()->id();
                $personal->full_name = $request->input('full_name');
                $personal->second_name = $request->input('second_name');
                $personal->email = $request->input('email');
                $personal->phone = $request->input('phone');
                $personal->address = $request->input('address');
                $personal->image = $imageUrl; // Store the image URL
                $personal->gender = $request->input('gender');
                $personal->date_of_birth = $request->input('date_of_birth');
                $personal->military_service_status = $request->input('military_service_status');
                $personal->country = $request->input('country');
                $personal->city = $request->input('city');
    
                $personal->save();
                
    
                return redirect()->back()->with('success', 'Data has been stored successfully!');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalInformation $personalInformation)
    {
        $personalInformation->delete();
        return back();
    }
}
