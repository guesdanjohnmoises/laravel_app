<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">

    <h1 class="text-2xl font-bold text-blue-500 mb-4 text-center">
        Create Task
    </h1>

    <form action="/tasks" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block font-semibold">Title:</label>
            <input type="text" name="title" 
                   class="w-full border rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div>
            <label class="block font-semibold">Description:</label>
            <textarea name="description" 
                      class="w-full border rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
        </div>

        <button type="submit" 
                class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
            Save
        </button>
    </form>

    <a href="/tasks" 
       class="block text-center mt-4 text-blue-500 hover:underline">
        Back
    </a>

</div>

</body>
</html>