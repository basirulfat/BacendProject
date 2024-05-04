<?php


use App\Http\Controllers\LocalControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonalInformationController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ResumeController;






Auth::routes();
// Route::get('/home', [RegisterController::class, 'redirect']);
Route::get('/home', [LoginController::class, 'redirect']);
Route::get('/home', [HomeController::class, 'redirect']);
Route::resource('personalInformation',PersonalInformationController::class)->middleware('auth');
Route::resource('education',EducationController::class)->middleware('auth');
Route::resource('experience',ExperienceController::class)->middleware('auth');
Route::resource('skill',SkillController::class)->middleware('auth');
Route::get('resume',[ResumeController::class,'index'])->name('resume.index')->middleware('auth');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

<<<<<<< HEAD



=======
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


>>>>>>> 94f8f749174a7b4b8d94ecfec00db6a00ee62247
// Admin panal

/*========= post job  =============*/


/*========= post job  =============*/





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
Route::get("/companyRegister",function(){
    return view('companyRegister');
});
<<<<<<< HEAD

=======
Route::get("/resume",function(){
    return view('resume');
});
Route::get("/post-job",function(){
    return view('post-job');
});
>>>>>>> 94f8f749174a7b4b8d94ecfec00db6a00ee62247
Route::get("/showJobs",function(){
    return view('showJobs');
});
Route::get("/Top_company",function(){
    return view('Top_company');
});
<<<<<<< HEAD
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======

// // Coockies Route
// Route::get('/',[CookieController::class, 'setCookie']);


// Localization
Route::get('/locale/{lang}', [LocalControler::class,'setlocale']);
>>>>>>> 94f8f749174a7b4b8d94ecfec00db6a00ee62247
