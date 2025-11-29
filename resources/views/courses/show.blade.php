@extends('template')
@section('content')
<h1>Course Details</h1>
<p><strong>Name:</strong> {{ $course->name }}</p>
<p><strong>Code:</strong> {{ $course->code }}</p>
<p><strong>Description:</strong> {{ $course->description }}</p>
<form action="{{ route('courses.destroy', $course->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Course</button>
</form>
<a href="{{ route('courses.index') }}">Back to all courses</a>
@endsection
