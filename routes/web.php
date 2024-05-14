<?php

use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LocalControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostJobController;
use App\Http\Controllers\PersonalInformationController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ResumeController;





/*=================== Redirect To home page =======================*/

use App\Http\Controllers\GoogelAuthController;
use App\Http\Controllers\mapController;
use App\Http\Controllers\showjobmapController;


Auth::routes();
Route::get('/', [mapController::class, 'index']);
Route::get('/showjob', [showjobmapController::class, 'index']);

Route::get('/index', [HomeController::class, 'redirect'])->name('home.redirect')->middleware('auth');;
Route::get('auth/google',[GoogelAuthController::class,'redirects'])->name('google-auth');
Route::get('auth/google/call-back',[GoogelAuthController::class,'callbackGoogle']);



// Route::get('/home', [RegisterController::class, 'redirect']);

// Route::get('/home', [LoginController::class, 'redirect']);
Route::get('/home', [HomeController::class, 'redirect'])->name('home.redirect');

Route::resource('personalInformation',PersonalInformationController::class)->middleware('auth');
Route::resource('education',EducationController::class)->middleware('auth');
Route::resource('experience',ExperienceController::class)->middleware('auth');
Route::resource('skill',SkillController::class)->middleware('auth');
Route::get('resume',[ResumeController::class,'index'])->name('resume.index')->middleware('auth');

Route::get('resume/download',[ResumeController::class,'download'])->name('resume.download')->middleware('auth');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home', [HomeController::class, 'redirect'])->name('home.redirect');

/*=================== Redirect To home page =======================*/


/*=================== Admin panal =======================*/

                 /*---Users---*/
Route::resource('/user', AdminController::class);
Route::get('/user', [AdminController::class, 'search'])->name('user.search');
Route::get('/home', [AdminController::class, 'countData'])->name('home.countData');


                /*--- company---*/
 Route::resource('/company', CompanyController::class);
 Route::get('/company', [CompanyController::class, 'search'])->name('company.search');
 Route::get('/Companeis_Rate', [CompanyController::class, 'CompanyRate'])->name('Companeis_Rate.CompanyRate');

 
              /*--- posts---*/
Route::resource('posts', PostJobController::class);
Route::get('/posts', [PostJobController::class, 'adminPost'])->name('posts');
Route::get('/posts', [PostJobController::class, 'search'])->name('posts.search');
      /*---show cart data in the index page  ---*/
Route::get('/', [PostJobController::class, 'index'])->name('jobs.index');




Route::get("/category",function(){
    return view('admin.category');
});

// Admin panal


/*========= post job  =============*/

/*======================= post job  ====================*/

Route::resource('/postjob', PostJobController::class);
Route::get('/find-job', [PostJobController::class, 'findJob']);
Route::get('/showJobs', [PostJobController::class, 'showjobs']);
// Route::get('/index', [PostJobController::class, 'postSearch']);
Route::get('/search', [PostJobController::class, 'postSearch'])->name('postSearch');

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


/*======================== post job  ======================*/



Route::get("/About",function(){
    return view('About');
});
Route::get("/blog",function(){
    return view('blog');
});


Route::get("/Dashboarded",function(){
    return view('Dashboarded');
});
Route::get("/FAQ",function(){
    return view('FAQ');
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


Route::get("/Top_company",function(){
    return view('Top_company');
});

// Localization
Route::get('/locale/{lang}', [LocalControler::class,'setlocale']);





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



/*========= Contact form  =============*/
Route::resource('/contact', ContactFormController::class);


Route::get('/cotact', [ContactFormController::class, 'search'])->name('contact.search');


route::get('companies',[PostJobController::class,'postscount']);
/*========= Contact form  =============*/

