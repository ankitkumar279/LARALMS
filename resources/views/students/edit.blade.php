@extends('template')
@section('content')
<h3>Edit Student</h3>
<form action="{{ route ('students.update', $student->id) }}" method="POST"> @method('PUT')
    {{ csrf_field()  }}
    <input type="text" name="fname" value="{{ $student->fname }}" placeholder="First Name"><br><br>
    <input type="text" name="lname" value="{{ $student->lname }}" placeholder="Last Name"><br><br>
    <input type="email" name="email" value="{{ $student->email }}" placeholder="Email"><br><br>
    <input type="submit" value="Update Student">    
</form>
<a href="{{ route('students.index') }}">Back to all students</a>
@endsection