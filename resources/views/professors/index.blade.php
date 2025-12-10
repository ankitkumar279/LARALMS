@extends('template')
@section('content')

<div class="row mb-3">
    <div class="col">
        <h1 class="display-4">Professors</h1>
    </div>
    <div class="col text-end">
        <a href="{{ route('professors.create') }}" class="btn btn-primary">Add New Professor</a>
    </div>
</div>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="row">
    @foreach($professors as $professor)
    <div class="col-md-4 mb-3">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h4 class="card-title fw-bold fs-5">{{ $professor->name }}</h4>

                <a href="{{ route('professors.show', $professor->id) }}" class="btn btn-sm btn-info me-2">View</a>
                <a href="{{ route('professors.edit', $professor->id) }}" class="btn btn-sm btn-warning">Edit</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
