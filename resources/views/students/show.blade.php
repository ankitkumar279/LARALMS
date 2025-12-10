@extends('template')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title fw-bold mb-3">Student Details</h2>

            <p><strong>First Name:</strong> {{ $student->fname }}</p>
            <p><strong>Last Name:</strong> {{ $student->lname }}</p>
            <p><strong>Email:</strong> {{ $student->email }}</p>

            <div class="mt-4">
                <a href="{{ route('students.index') }}" class="btn btn-secondary me-2">Back to all Students</a>

                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Student</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
