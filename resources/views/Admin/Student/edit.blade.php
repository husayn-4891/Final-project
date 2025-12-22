@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Student: {{ $student->name }}</h6>
        </div>
        <div class="card-body">
            
            {{-- Validation Error Messages --}}
            @if ($errors->any())
                <div class="alert alert-danger shadow-sm">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('student.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT') {{-- Required for Update routes --}}
                
                <div class="mb-3">
                    <label class="form-label font-weight-bold">Student Number</label>
                    <input type="text" name="stNo" class="form-control" oldvalue="{{ $student->stNo }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">Full Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $student->email }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current password">
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">Average (GPA)</label>
                    <input type="number" step="0.01" name="avg" class="form-control" value="{{ $student->avg }}">
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">Status</label>
                    <select name="status" class="form-control">
                        <option value="active" {{ $student->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="notActive" {{ $student->status == 'notActive' ? 'selected' : '' }}>Not Active</option>
                        <option value="dismissed" {{ $student->status == 'dismissed' ? 'selected' : '' }}>Dismissed</option>
                    </select>
                </div>

                <hr>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary px-4">Update Student</button>
                    <a href="{{ route('student.index') }}" class="btn btn-secondary px-4">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection