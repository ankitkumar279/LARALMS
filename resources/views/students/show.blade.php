@extends('template')

@section('content')
<h1>Student Details</h1>
<p><strong>First Name:</strong> {{ $student->fname }}</p>
<p><strong>Last Name:</strong> {{ $student->lname }}</p>
<p><strong>Email:</strong> {{ $student->email }}</p>
<form action="{{ route('students.destroy', $student->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Student</button>
</form>
<a href="{{ route('students.index') }}">Back to all students</a>
@endsection
