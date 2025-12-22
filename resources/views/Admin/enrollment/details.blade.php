@extends('layouts.admin')

@section('content')
<div class="container py-4">

    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
        <div>
            <h1 class="mb-1">Enrollment Details</h1>
            <p class="text-muted mb-0">See enrollment information.</p>
        </div>

        <a href="{{ route('enrollment.index') }}" class="btn btn-outline-secondary mt-2 mt-sm-0">
            Back
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="text-muted small">Student</div>
                    <div class="fw-semibold">{{ $enrollment->student->name ?? '—' }}</div>
                </div>

                <div class="col-md-4">
                    <div class="text-muted small">Course</div>
                    <div class="fw-semibold">
                        {{ $enrollment->course->name ?? '—' }}
                        <span class="badge text-bg-secondary ms-2">{{ $enrollment->course->symbol ?? '' }}</span>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="text-muted small">Professor</div>
                    <div class="fw-semibold">{{ $enrollment->professor->name ?? '—' }}</div>
                </div>

                <div class="col-md-4">
                    <div class="text-muted small">Mark</div>
                    <div class="fw-semibold">
                        {{ $enrollment->mark !== null ? $enrollment->mark : 'N/A' }}
                    </div>
                </div>
            </div>

            <hr>

            <div class="d-flex gap-2">
                <a href="{{ route('enrollment.edit', $enrollment->id) }}" class="btn btn-primary">
                    Edit
                </a>

                <form action="{{ route('enrollment.destroy', $enrollment->id) }}" method="POST"
                      onsubmit="return confirm('Delete this enrollment?');" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
