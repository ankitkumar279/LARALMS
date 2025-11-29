@extends('template')
@section('content')
<h3>Edit Course</h3>

<form action="{{ route('courses.update', $course->id) }}" method="POST">
    @method('PUT')
    {{ csrf_field() }}

    <input type="text" name="name" value="{{ $course->name }}" placeholder="Course Name"><br><br>
    <input type="text" name="code" value="{{ $course->code }}" placeholder="Course Code"><br><br>
    <input type="text" name="description" value="{{ $course->description }}" placeholder="Description"><br><br>

    <input type="submit" value="Update Course">
</form>

<a href="{{ route('courses.index') }}">Back to all courses</a>
@endsection
