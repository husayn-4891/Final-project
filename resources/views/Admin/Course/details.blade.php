@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
        <div>
            <h1 class="mb-1">Course Details</h1>
            <p class="text-muted mb-0">View course information.</p>
        </div>
        <a href="{{ route('course.index') }}" class="btn btn-outline-secondary mt-2 mt-sm-0">Back</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="text-muted small">Course Name</div>
                    <div class="fw-semibold">{{ $course->name }}</div>
                </div>

                <div class="col-md-3">
                    <div class="text-muted small">Course ID</div>
                    <div><span class="badge text-bg-secondary">{{ $course->symbol }}</span></div>
                </div>

                <div class="col-md-3">
                    <div class="text-muted small">Units</div>
                    <div class="fw-semibold">{{ $course->unit }}</div>
                </div>
            </div>

            <hr>

            <div class="d-flex gap-2">
                <a href="{{ route('course.edit', $course->id) }}" class="btn btn-primary">Edit</a>

                <form action="{{ route('course.destroy', $course->id) }}" method="POST"
                      onsubmit="return confirm('Delete this course?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
