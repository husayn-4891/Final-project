@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Department Details</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('department.index') }}">Departments</a></li>
        <li class="breadcrumb-item active">Details</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-info-circle me-1"></i>
            Department Information
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="fw-bold">Name:</label>
                <p>{{ $department->name }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Symbol:</label>
                <p>{{ $department->symbol }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Created At:</label>
                <p>{{ $department->created_at }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Updated At:</label>
                <p>{{ $department->updated_at }}</p>
            </div>

            <a href="{{ route('department.edit', $department->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('department.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
