@extends('template')
@section('content')
<h3>Add Course</h3>

<form action="{{ route('courses.store') }}" method="POST">
    {{ csrf_field() }}

    <input type="text" name="name" placeholder="Course Name"><br><br>
    <input type="text" name="code" placeholder="Course Code"><br><br>
    <input type="text" name="description" placeholder="Description"><br><br>

    <input type="submit" value="Add Course">
</form>

<a href="{{ route('courses.index') }}">Back to all courses</a>
@endsection
