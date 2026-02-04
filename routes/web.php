<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/about', function () {
//     $name= "Niles Morales";
//     $email= "niles@sp.com";


//     return view("about")->with('name', $name)->with('email', $email);


// });

// Route::get('/about', function(){
//     return view('about');
// });


Route::get('/contact', function () {
    return view('contact');
});

Route::controller(StudentController::class)->group(function(){
    
    Route::get('students','index');
    Route::get('about','about'); 
});
