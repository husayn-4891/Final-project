<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
</head>
<body>

<h1>Courses</h1>

<a href="{{ route('course.create') }}">Add New Course</a>

<hr>

@if($courses->count() > 0)
    @foreach ($courses as $course)
        <div>
            <strong>Course Name:</strong> {{ $course->name }} <br>
            <strong>Course ID:</strong> {{ $course->symbol }} <br>
            <strong>Units:</strong> {{ $course->unit }} <br>

            <a href="{{ route('course.edit', $course->id) }}">Edit</a> |

            <form action="{{ route('course.destroy', $course->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        <hr>
    @endforeach
@else
    <p>No courses found.</p>
@endif

</body>
</html>
