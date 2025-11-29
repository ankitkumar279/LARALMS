<?php

use App\Models\Student;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// enable CRUD routes
Route::resource('students', StudentController::class);

Route::resource('courses', CourseController::class);

