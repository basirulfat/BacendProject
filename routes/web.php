<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonalInformationController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\GoogelAuthController;
use App\Http\Controllers\mapController;
use App\Http\Controllers\showjobmapController;


Auth::routes();
Route::get('/', [mapController::class, 'index']);
Route::get('/showjob', [showjobmapController::class, 'index']);
Route::get('/home', [LoginController::class, 'redirect']);
Route::get('/index', [HomeController::class, 'redirect']);
Route::get('auth/google',[GoogelAuthController::class,'redirects'])->name('google-auth');
Route::get('auth/google/call-back',[GoogelAuthController::class,'callbackGoogle']);
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

Route::get("/Top_company",function(){
    return view('Top_company');
});

