<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\company;
use App\Models\User;
use App\Models\PostJob;


class CompanyController extends Controller
{
/*--===============  show cmpany in the Dashboard company  page  =============*/

    public function index()
    {
        $company = Company::all(); // Retrieve all companies from the database
        return view('admin.company', compact('company'));
    }


/*--===============  show cmpany in the company Rate page  =============*/

    public function CompanyRate()
    {
        $company = Company::all(); // Retrieve all companies from the database
        return view('Companeis_Rate', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'owner' => 'required|max:100',
        'company_name' => 'nullable|max:5000',
        'phone' => 'required|max:100',
        'email' => 'required|email|unique:companies,email|max:100',
        'company_size' => 'nullable|max:100',
        'position' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation rules
    ]);

    // Create a new company record
    $company = new Company;
    $company->owner = $request->input('owner');
    $company->company_name = $request->input('company_name');
    $company->phone = $request->input('phone');
    $company->email = $request->input('email');
    $company->company_size = $request->input('company_size');
    $company->position = $request->input('position');

    // Handle image upload if a file is provided
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagePath = $image->store('images', 'public'); // Store the image file in the "public/images" directory
        $company->image = $imagePath;
    }

    // Save the company record
    $company->save();
    

    return redirect('Post-job');
}

    /**
     * Display the specified resource.
     */
    public function show(company $company)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = company::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }

    public function search(Request $request)
    {
        $searchText = $request->search;
        $company = company::where('company_name', 'LIKE', "%$searchText%")
            ->orWhere('id', 'LIKE', "%$searchText%")
            ->orWhere('phone', 'LIKE', "%$searchText%")
            ->get();
    
        return view('admin.company', compact('company'));
    }
}
