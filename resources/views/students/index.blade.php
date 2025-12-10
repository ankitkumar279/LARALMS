@extends('template')
@section('content')

<div class="row mb-3">
    <div class="col">
        <h1 class="display-4">Students</h1>
    </div>
    <div class="col text-end">
        <a href="{{ route('students.create') }}" class="btn btn-primary">Add New Student</a>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="row">
    @foreach($students as $student)
    <div class="col-md-4 mb-3">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h4 class="card-title fw-bold fs-5">{{ $student->fname }} {{ $student->lname }}</h4>
                <p class="card-text"><strong>Email:</strong> {{ $student->email ?? 'N/A' }}</p>

                <a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-info me-2">View</a>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning">Edit</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
