<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
</head>
<body>

<h1>Tasks</h1>

<a href="/tasks/create">Add Task</a>

<ul>
@forelse($tasks as $task)
    <li>
        {{ $task->title }}

        <a href="/tasks/{{ $task->id }}">View</a>
        <a href="/tasks/{{ $task->id }}/edit">Edit</a>

        <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
@empty
    <p>No tasks yet.</p>
@endforelse
</ul>

</body>
</html>