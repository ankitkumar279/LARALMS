@extends('template')
@section('content')
<h3>delete Student</h3>
<form action="{{ route ('courses.destroy', $courses->id) }}" method="POST"> @method('DELETE')
    {{ csrf_field()  }}
    <p>Are you sure you want to delete {{ $student->fname }} {{ $student->lname }}?</p>
    <input type="submit" value="Delete Student">
</form>
@endsection