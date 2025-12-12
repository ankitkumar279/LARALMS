@extends('template')
@section('content')

<div class="container mt-4">
    <div class="card shadow-sm p-4">
        <h2 class="fw-bold mb-4">Add New Course</h2>

        <form action="{{ route('courses.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Course Name">
                @error('name')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="code" class="form-label">Course Code</label>
                <input type="text" class="form-control" id="code" name="code" value="{{ old('code') }}" placeholder="Course Code">
                @error('code')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <lable>Selete Professor:</lable><br>
            <select name="professor_id" id="professor_id" class="form-select mb-3">
                <option  value="" selected disabled>Select Professor</option>
                @foreach($professors as $professor)
                    <option value="{{ $professor->id }}">{{ $professor->name }}</option>
                @endforeach
                </select>
                <br>
            <!-- <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" placeholder="Description">
                @error('description')
                    <div style="color: red;">{{ $message }}</div>
                @enderror -->
            </div>

            <button type="submit" class="btn btn-success">Add Course</button>
            <a href="{{ route('courses.index') }}" class="btn btn-secondary ms-2">Back to Courses</a>
        </form>
    </div>
</div>

@endsection
