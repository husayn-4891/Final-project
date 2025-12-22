@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="mb-4">
        <h1 class="mb-1">Edit Enrollment</h1>
        <p class="text-muted mb-0">Update enrollment details.</p>
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
            <form action="{{ route('enrollment.update', $enrollment->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Student</label>
                    <select name="studentId" class="form-select" required>
                        <option value="">-- Select Student --</option>
                        @foreach($students as $student)
                            <option value="{{ $student->id }}"
                                @selected(old('studentId', $enrollment->studentId) == $student->id)>
                                {{ $student->name ?? ('Student #'.$student->id) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Course</label>
                    <select name="courseId" class="form-select" required>
                        <option value="">-- Select Course --</option>
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}"
                                @selected(old('courseId', $enrollment->courseId) == $course->id)>
                                {{ $course->name }} ({{ $course->symbol }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Professor</label>
                    <select name="professorId" class="form-select" required>
                        <option value="">-- Select Professor --</option>
                        @foreach($professors as $professor)
                            <option value="{{ $professor->id }}"
                                @selected(old('professorId', $enrollment->professorId) == $professor->id)>
                                {{ $professor->name ?? ('Professor #'.$professor->id) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label">Mark (optional)</label>
                    <input type="number" name="mark"
                           value="{{ old('mark', $enrollment->mark) }}"
                           class="form-control" min="0" max="100" placeholder="0 - 100">
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('enrollment.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
