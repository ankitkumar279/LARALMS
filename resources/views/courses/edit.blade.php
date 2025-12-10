@extends('template')
@section('content')

<div class="container mt-4">
    <div class="card shadow-sm p-4">
        <h2 class="fw-bold mb-4">Edit Course</h2>

        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $course->name) }}" placeholder="Course Name">
                @error('name')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="code" class="form-label">Course Code</label>
                <input type="text" class="form-control" id="code" name="code" value="{{ old('code', $course->code) }}" placeholder="Course Code">
                @error('code')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $course->description) }}" placeholder="Description">
                @error('description')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Course</button>
            <a href="{{ route('courses.index') }}" class="btn btn-secondary ms-2">Back to Courses</a>
        </form>
    </div>
</div>

@endsection
