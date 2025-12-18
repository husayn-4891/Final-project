<!DOCTYPE html>
<html>
<head>
    <title>Course Details</title>
</head>
<body>

<h1>Course Details</h1>

<p><strong>Name:</strong> {{ $course->name }}</p>
<p><strong>Course ID:</strong> {{ $course->symbol }}</p>
<p><strong>Units:</strong> {{ $course->unit }}</p>

<a href="{{ route('course.index') }}">Back</a>

</body>
</html>
