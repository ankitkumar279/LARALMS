@extends('template')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title fw-bold mb-3">Course Details</h2>

            <p><strong>Name:</strong> {{ $course->name }}</p>
            <p><strong>Code:</strong> {{ $course->code }}</p>
            <p><strong>Description:</strong> {{ $course->description ?? 'N/A' }}</p>

            <div class="mt-4">
                <a href="{{ route('courses.index') }}" class="btn btn-secondary me-2">Back to all Courses</a>

                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Course</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
