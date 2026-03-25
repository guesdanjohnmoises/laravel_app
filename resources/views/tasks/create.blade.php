<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
</head>
<body>

<h1>Create Task</h1>

<form action="/tasks" method="POST">
    @csrf

    <label>Title:</label><br>
    <input type="text" name="title"><br><br>

    <label>Description:</label><br>
    <textarea name="description"></textarea><br><br>

    <button type="submit">Save</button>
</form>

<a href="/tasks">Back</a>

</body>
</html>