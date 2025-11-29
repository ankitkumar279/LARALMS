@extends('template')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">View all Courses</h1>
    </div>
</div>

<a href="{{ route('courses.create') }}">Add New Course</a>

<div class="row">
@foreach($courses as $course)
<div class="col-md-4 mb-3">
<div class="card" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title">{{ $course->name }}</h5>
<p class="card-text">{{ $course->code }}</p>
<a href="{{ route('courses.show', $course->id) }}" class="card-link">View</a>
<a href="{{ route('courses.edit', $course->id) }}" class="card-link">Edit</a>
</div>
</div>
</div>
@endforeach
</div>
@endsection
