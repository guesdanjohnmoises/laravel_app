<!DOCTYPE html>
<html>
<head>
    <title>View Task</title>
</head>
<body>

<h1>Task Details</h1>

<p><strong>Title:</strong> {{ $task->title }}</p>
<p><strong>Description:</strong> {{ $task->description }}</p>

<a href="/tasks">Back</a>

</body>
</html>