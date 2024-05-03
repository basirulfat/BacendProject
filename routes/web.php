<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LocalControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostJobController;

Route::get('/home', [HomeController::class, 'redirect']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/*=================== Admin panal =======================*/

          /*---Users---*/
Route::resource('/user', AdminController::class);
Route::get('/user', [AdminController::class, 'search'])->name('user.search');



         /*--- company---*/
 Route::resource('/company', CompanyController::class);
 Route::get('/company', [CompanyController::class, 'search'])->name('company.search');
 


Route::get("/posts",function(){
    return view('admin.posts');
});

Route::get("/category",function(){
    return view('admin.category');
});


// Admin panal

/*========= post job  =============*/
// Route::resource('postjob', PostJobController::class);
// Route::resource('postjob',PostJobController::class)->middleware('auth');
Route::resource('/postjob', PostJobController::class);



 Route::get('/companyRegister', function () {
    return view('companyRegister');
});

Route::get('/Post-job', function () {
    if (!Auth::check()) {
        return redirect('companyRegister');
    }
     else
      {
        return view('Post-job');
    }
    });


/*========= post job  =============*/



Route::get("/",function(){
    return view('index');
});

Route::get("/About",function(){
    return view('About');
});
Route::get("/blog",function(){
    return view('blog');
});
Route::get("/Companeis_Rate",function(){
    return view('Companeis_Rate');
});
Route::get("/Contact_Us",function(){
    return view('Contact_Us');
});
Route::get("/CreateCV",function(){
    return view('CreateCV');
});
Route::get("/Dashboarded",function(){
    return view('Dashboarded');
});
Route::get("/FAQ",function(){
    return view('FAQ');
});
Route::get("/find-job",function(){
    return view('find-job');
});
Route::get("/guide-resume-in-afghanjb",function(){
    return view('guide-resume-in-afghanjb');
});
Route::get("/guide",function(){
    return view('guide');
});
Route::get("/guideExperience",function(){
    return view('guideExperience');
});

Route::get("/resume",function(){
    return view('resume');
});

Route::get("/showJobs",function(){
    return view('showJobs');
});
Route::get("/Top_company",function(){
    return view('Top_company');
});



// Localization
Route::get('/locale/{lang}', [LocalControler::class,'setlocale']);