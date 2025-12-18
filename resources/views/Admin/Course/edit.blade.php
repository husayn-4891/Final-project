<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>

<h1>Edit Course</h1>

<form action="{{ route('course.update', $course->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Course Name</label><br>
    <input type="text" name="name" value="{{ $course->name }}" required><br><br>

    <label>Course ID</label><br>
    <input type="text" name="symbol" value="{{ $course->symbol }}" required><br><br>

    <label>Units</label><br>
    <input type="number" name="unit" value="{{ $course->unit }}" required><br><br>

    <button type="submit">Update</button>
</form>

<br>
<a href="{{ route('course.index') }}">Back</a>

</body>
</html>
