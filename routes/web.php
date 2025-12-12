<?php

use App\Models\Student;
use App\Models\Course;
use App\Models\Professor;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfessorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// enable CRUD routes
Route::resource('students', StudentController::class);

Route::resource('courses', CourseController::class);

Route::resource('professors', ProfessorController::class);

Route::get(
    'courses',
    [CourseController::class, 'index']
            ) ->name('courses.index');

Route::get(
    'coursesbystudent/{id}',
    [CourseController::class, 'coursesbystudent']
            ) ->name('courses.coursesbystudent');


// require __DIR__ .'/setting.php';