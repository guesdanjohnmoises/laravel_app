<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-10">

    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">

        <h1 class="text-2xl font-bold mb-4">Create Task</h1>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <label class="block mb-2 font-semibold">Title:</label>
            <input type="text" name="title"
                class="w-full border p-2 rounded mb-4">

            <label class="block mb-2 font-semibold">Description:</label>
            <textarea name="description"
                class="w-full border p-2 rounded mb-4"></textarea>

            <button type="submit"
                class="bg-green-500 text-white px-4 py-2 rounded">
                Save Task
            </button>
        </form>

        <a href="{{ route('tasks.index') }}"
           class="block mt-4 text-blue-500">
           ← Back
        </a>

    </div>

</body>
</html>