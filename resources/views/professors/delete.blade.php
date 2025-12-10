@extends('template')
@section('content')

<div class="container mt-4">
    <div class="card shadow-sm p-4">
        <h2 class="fw-bold mb-4 text-danger">Delete Professor</h2>

        <p>Are you sure you want to delete <strong>{{ $professor->name }}</strong>?</p>

        <form action="{{ route('professors.destroy', $professor->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
        </form>
        <a href="{{ route('professors.index') }}" class="btn btn-secondary ms-2">Cancel</a>
    </div>
</div>

@endsection
