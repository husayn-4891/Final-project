@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Professor Details</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('professor.index') }}">Professors</a></li>
        <li class="breadcrumb-item active">Details</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-info-circle me-1"></i>
            Professor Information
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="fw-bold">ID:</label>
                <p>{{ $professor->id }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Name:</label>
                <p>{{ $professor->name }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Email:</label>
                <p>{{ $professor->email }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Department:</label>
                <p>{{ $professor->department->name ?? 'No Department Assigned' }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Created At:</label>
                <p>{{ $professor->created_at->format('M d, Y') }}</p>
            </div>

            <a href="{{ route('professor.edit', $professor->id) }}" class="btn btn-warning">Edit Info</a>
            <a href="{{ route('professor.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection