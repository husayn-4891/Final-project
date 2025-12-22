@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="mb-4">
        <h1 class="mb-1">Edit Course</h1>
        <p class="text-muted mb-0">Update the course information.</p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <div class="fw-semibold mb-2">Please fix the following:</div>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('course.update', $course->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Course Name</label>
                    <input type="text" name="name" value="{{ old('name', $course->name) }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Course ID</label>
                    <input type="text" name="symbol" oldvalue="{{ old('symbol', $course->symbol) }}" class="form-control" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Units</label>
                    <input type="number" name="unit" value="{{ old('unit', $course->unit) }}" class="form-control" required>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('course.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
