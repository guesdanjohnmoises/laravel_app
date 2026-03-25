<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>

<h1>Edit Task</h1>

<form action="/tasks/{{ $task->id }}" method="POST">
    @csrf
    @method('PUT')

    <label>Title:</label><br>
    <input type="text" name="title" value="{{ $task->title }}"><br><br>

    <label>Description:</label><br>
    <textarea name="description">{{ $task->description }}</textarea><br><br>

    <button type="submit">Update</button>
</form>

<a href="/tasks">Back</a>

</body>
</html>