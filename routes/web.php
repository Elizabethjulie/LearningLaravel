<?php
use App\Http\Controllers\JobController;
use App\Http\Controllers\TodController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

    

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', [JobController::class,'index']);
     


Route::get('/jobs/create',[JobController::class,'create']);
    

Route::get('/jobs/{id}',[JobController::class,'show']);

Route::post('/jobs',[JobController::class,'store']);

Route::get('/jobs/{id}',[JobController::class,'edit']);

Route::patch('/jobs/{id}',[JobController::class,'update']); 

Route::delete('/jobs/{id}',[JobController::class,'destroy']);

Route::get('/contact', function () {
    return view('contact');
});