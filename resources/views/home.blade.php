@extends('template')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="display-3 fw-bold">WELCOME TO LARALMS</h1>
    </div>

    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm p-4">
                <h3 class="card-title fw-bold">Students</h3>
                <a href="{{ route('students.index') }}" class="btn btn-primary">Go to Students</a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm p-4">
                <h3 class="card-title fw-bold">Professors</h3>
                <a href="{{ route('professors.index') }}" class="btn btn-primary">Go to Professors</a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm p-4">
                <h3 class="card-title fw-bold">Courses</h3>
                <a href="{{ route('courses.index') }}" class="btn btn-primary">Go to Courses</a>
            </div>
        </div>
    </div>
</div>
@endsection
