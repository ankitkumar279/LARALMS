@extends('template')
@section('content')

<div class="container mt-4">
    <div class="card shadow-sm p-4">
        <h2 class="fw-bold mb-4">Add New Professor</h2>

        <form action="{{ route('professors.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Professor Name</label>
                <input type="text" id="name" name="name" placeholder="Professor Name">
               @error('name')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Add Professor</button>
            <a href="{{ route('professors.index') }}" class="btn btn-secondary ms-2">Back to Professors</a>
        </form>
    </div>
</div>

@endsection
