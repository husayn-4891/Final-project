@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="mb-4">
        <h1 class="mb-1">Add Course</h1>
        <p class="text-muted mb-0">Create a new course record.</p>
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
            <form action="{{ route('course.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Course Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                           placeholder="e.g., Web Development" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Course ID</label>
                    <input type="text" name="symbol" value="{{ old('symbol') }}" class="form-control"
                           placeholder="e.g., CS201" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Units</label>
                    <input type="number" name="unit" value="{{ old('unit') }}" class="form-control"
                           placeholder="e.g., 3" required>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route('course.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
