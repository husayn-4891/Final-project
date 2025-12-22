@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Professors List</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Professors</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Professors
            <a href="{{ route('professor.create') }}" class="btn btn-primary btn-sm float-end">Add New Professor</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($professors as $professor)
                    <tr>
                        <td>{{ $professor->name }}</td>
                        <td>{{ $professor->email }}</td>
                        <td>{{ $professor->department->name ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('professor.show', $professor->id) }}" class="btn btn-info btn-sm text-white">View</a>
                            <a href="{{ route('professor.edit', $professor->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('professor.destroy', $professor->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection