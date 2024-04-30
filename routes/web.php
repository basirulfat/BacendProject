<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;

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
Route::get('/users',[AdminController::class,'showUsers']);
Route::post('/users', [AdminController::class, 'add_user']);
Route::delete('/users/{id}', [AdminController::class, 'delete_user'])->name('users.delete');
// Route::get('/users/{id}', [AdminController::class, 'update_user']);
Route::get('/users',[AdminController::class,'search']);


         /*--- company---*/


Route::get("/posts",function(){
    return view('admin.posts');
});

Route::get("/category",function(){
    return view('admin.category');
});

Route::get("/company",function(){
    return view('admin.company');
});
// Admin panal

/*========= post job  =============*/


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
Route::get("/companyRegister",function(){
    return view('companyRegister');
});
Route::get("/resume",function(){
    return view('resume');
});
Route::get("/post-job",function(){
    return view('post-job');
});
Route::get("/showJobs",function(){
    return view('showJobs');
});
Route::get("/Top_company",function(){
    return view('Top_company');
});