@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Student Details</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('student.index') }}">Students</a></li>
        <li class="breadcrumb-item active">Details</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-info-circle me-1"></i>
            Student Information
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="fw-bold">Full Name:</label>
                <p>{{ $student->name }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Student Number:</label>
                <p>{{ $student->stNo }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Email:</label>
                <p>{{ $student->email }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Average (GPA):</label>
                <p>{{ $student->avg ?? 'N/A' }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Status:</label>
                <p>
                    <span class="badge {{ $student->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                        {{ ucfirst($student->status) }}
                    </span>
                </p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Created At:</label>
                <p>{{ $student->created_at }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Updated At:</label>
                <p>{{ $student->updated_at }}</p>
            </div>

            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('student.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
