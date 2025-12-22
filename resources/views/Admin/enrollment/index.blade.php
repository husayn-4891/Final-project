@extends('layouts.admin')

@section('content')
<div class="container py-4">

    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
        <div>
            <h1 class="mb-1">Enrollments</h1>
            <p class="text-muted mb-0">Manage student enrollments.</p>
        </div>

        <a href="{{ route('enrollment.create') }}" class="btn btn-primary mt-2 mt-sm-0">
            + Add Enrollment
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
                            <th class="p-3">Student</th>
                            <th class="p-3">Course</th>
                            <th class="p-3">Professor</th>
                            <th class="p-3">Mark</th>
                            <th class="p-3 text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($enrollments as $enrollment)
                            <tr>
                                <td class="p-3">
                                    {{ $enrollment->student->name ?? '—' }}
                                </td>
                                <td class="p-3">
                                    {{ $enrollment->course->name ?? '—' }}
                                    <div class="text-muted small">
                                        {{ $enrollment->course->symbol ?? '' }}
                                    </div>
                                </td>
                                <td class="p-3">
                                    {{ $enrollment->professor->name ?? '—' }}
                                </td>
                                <td class="p-3">
                                    @if($enrollment->mark !== null)
                                        <span class="badge text-bg-success">{{ $enrollment->mark }}</span>
                                    @else
                                        <span class="text-muted">N/A</span>
                                    @endif
                                </td>
                                <td class="p-3 text-end">
                                    <div class="d-inline-flex gap-2">
                                        <a href="{{ route('enrollment.show', $enrollment->id) }}"
                                           class="btn btn-outline-secondary btn-sm">
                                            View
                                        </a>

                                        <a href="{{ route('enrollment.edit', $enrollment->id) }}"
                                           class="btn btn-outline-primary btn-sm">
                                            Edit
                                        </a>

                                        <form action="{{ route('enrollment.destroy', $enrollment->id) }}" method="POST"
                                              onsubmit="return confirm('Delete this enrollment?');" class="d-inline">
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
                                <td colspan="5" class="p-4 text-center text-muted">
                                    No enrollments found.
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
