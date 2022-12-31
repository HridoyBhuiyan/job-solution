<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Models\Job;
use Faker\Guesser\Name;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $datas=Job::get();
    return view('Welcome',compact('datas'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('redirects',[HomeController::class,'index']);

Route::get('/addjob',[JobsController::class,'addjob'])->name('jobAdd');
Route::post('/savejob',[JobsController::class,'jobsave'])->name('jobSave');
Route::get('/joblist',[JobsController::class,'joblist'])->name('jobList');
Route::get('/addcategory',[JobsController::class,'addcategory'])->name('addcategory');
Route::post('/savecategory',[JobsController::class,'categorySave'])->name('categorySave');
Route::get('/edit/{id}',[JobsController::class,'jobEdit'])->name('jobEdit');
Route::post('/updatejob/{id}',[JobsController::class,'jobUpdate'])->name('jobUpdate');
Route::get('/jobDetails/{id}',[JobsController::class,'jobDetails'])->name('jobDetails');
Route::get('/delete/{id}',[JobsController::class,'jobdelete'])->name('jobdelete');




Route::get('/govt_jobs',[HomeController::class,'govJob'])->name('user.govjob');
Route::get('/govdst_jobs',[HomeController::class,'govJob'])->name('user.jobdetails');
Route::get('/Ddfsgsdetails',[JobsController::class,'jobDetails'])->name('user.intern');
//Route::get('/Ddfsgsdetdfsdafails',[JobsController::class,'jobDetails'])->name('user.hotjobs');
