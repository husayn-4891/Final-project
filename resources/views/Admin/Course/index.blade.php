@extends('layouts.admin')

@section('content')
<div class="container py-4">

    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
        <div>
            <h1 class="mb-1">Courses</h1>
            <p class="text-muted mb-0">View, add, edit, and delete courses.</p>
        </div>

        <a href="{{ route('course.create') }}" class="btn btn-primary mt-2 mt-sm-0">
            + Add New Course
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="p-3">Course Name</th>
                            <th class="p-3">Course ID</th>
                            <th class="p-3">Units</th>
                            <th class="p-3 text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($courses as $course)
                            <tr>
                                <td class="p-3 fw-semibold">{{ $course->name }}</td>
                                <td class="p-3">
                                    <span class="badge text-bg-secondary">{{ $course->symbol }}</span>
                                </td>
                                <td class="p-3">{{ $course->unit }}</td>
                                <td class="p-3 text-end">
                                    <div class="d-inline-flex gap-2">
                                        <a href="{{ route('course.show', $course->id) }}"
                                           class="btn btn-outline-secondary btn-sm">
                                            View
                                        </a>

                                        <a href="{{ route('course.edit', $course->id) }}"
                                           class="btn btn-outline-primary btn-sm">
                                            Edit
                                        </a>

                                        <form action="{{ route('course.destroy', $course->id) }}" method="POST"
                                              onsubmit="return confirm('Delete this course?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="p-4 text-center text-muted">
                                    No courses found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
