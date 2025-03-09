<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

    

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function ()  {
     
    $jobs= Job::with('employer')->latest()->cursorPaginate();
    // simplePaginate();
    //paginate(25);
    return view('jobs.index',[
        'jobs'=>$jobs
    ]);
        
});

Route::get('/jobs/create',function(){
    return view('jobs.create');
});
Route::get('/jobs/{id}',function($id) {
    
           $job=Job::find($id);
          
    
    return view('jobs.show',['job'=>$job]);
});
Route::post('/jobs',function(){
    // dd('Posted here');
    // dd(request()->all());
    // dd(request('title'));
    request()->validate([
        'title'=>['required','min:3'],
        'salary'=>['required']
    ]);
    Job::create([
        'title'=>request('title'),
        'salary'=>request('salary'),
        'employer_id'=>1
    ]);
});
Route::get('/contact', function () {
    return view('contact');
});