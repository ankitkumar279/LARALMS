@extends('template')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="display-3 fw-bold">Welcome to Laralms</h1>
        <p class="lead">Manage Students, Professors, and Courses easily</p>
    </div>

    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm p-4">
                <h3 class="card-title fw-bold">Students</h3>
                <p class="card-text">View, add, edit, or delete students.</p>
                <a href="{{ route('students.index') }}" class="btn btn-primary">Go to Students</a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm p-4">
                <h3 class="card-title fw-bold">Professors</h3>
                <p class="card-text">View, add, edit, or delete professors.</p>
                <a href="{{ route('professors.index') }}" class="btn btn-primary">Go to Professors</a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm p-4">
                <h3 class="card-title fw-bold">Courses</h3>
                <p class="card-text">View, add, edit, or delete courses.</p>
                <a href="{{ route('courses.index') }}" class="btn btn-primary">Go to Courses</a>
            </div>
        </div>
    </div>
</div>
@endsection
