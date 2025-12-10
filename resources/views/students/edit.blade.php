@extends('template')
@section('content')

<div class="container mt-4">
    <div class="card shadow-sm p-4">
        <h2 class="fw-bold mb-4">Edit Student</h2>

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" value="{{ old('fname', $student->fname) }}" placeholder="First Name">
                @error('fname')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" value="{{ old('lname', $student->lname) }}" placeholder="Last Name">
                @error('lname')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $student->email) }}" placeholder="Email">
                @error('email')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Student</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary ms-2">Back to Students</a>
        </form>
    </div>
</div>

@endsection
