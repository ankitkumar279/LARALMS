@extends('template')
@section('content')

<div class="container mt-4">
    <div class="card shadow-sm p-4">
        <h2 class="fw-bold mb-4 text-danger">Delete Student</h2>

        <p>Are you sure you want to delete <strong>{{ $student->fname }} {{ $student->lname }}</strong>?</p>

        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
        </form>
        <a href="{{ route('students.index') }}" class="btn btn-secondary ms-2">Cancel</a>
    </div>
</div>

@endsection
