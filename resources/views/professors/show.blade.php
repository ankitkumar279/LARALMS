@extends('template')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title fw-bold mb-3">Professor Details</h2>

            <p><strong>Name:</strong> {{ $professor->name }}</p>
            <div class="mt-4">
                <a href="{{ route('professors.index') }}" class="btn btn-secondary me-2">Back to all Professors</a>

                <form action="{{ route('professors.destroy', $professor->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Professor</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
