<!DOCTYPE html>
<html>
<head>
    <title>Add Course</title>
</head>
<body>

<h1>Add Course</h1>

<form action="{{ route('course.store') }}" method="POST">
    @csrf

    <label>Course Name</label><br>
    <input type="text" name="name" required><br><br>

    <label>Course ID</label><br>
    <input type="text" name="symbol" required><br><br>

    <label>Units</label><br>
    <input type="number" name="unit" required><br><br>

    <button type="submit">Save</button>
</form>

<br>
<a href="{{ route('course.index') }}">Back</a>

</body>
</html>
