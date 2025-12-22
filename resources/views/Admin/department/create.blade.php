@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Create Department</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('department.index') }}">Departments</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-plus me-1"></i>
            Add New Department
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('department.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Department Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="mb-3">
                    <label for="symbol" class="form-label">Symbol</label>
                    <input type="text" class="form-control" id="symbol" name="symbol" value="{{ old('symbol') }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('department.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
