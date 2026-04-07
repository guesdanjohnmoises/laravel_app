<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen p-10">

    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">

        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">
             Task List ng lahat
        </h1>

        <div class="text-center">
            <a href="{{ route('tasks.create') }}" 
               class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-lg shadow">
               + Add Task
            </a>
        </div>

        @if(session('success'))
            <div class="mt-4 p-3 bg-green-100 text-green-700 rounded text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="mt-6 space-y-4">

            @forelse($tasks as $task)

                <div class="p-4 border rounded-lg bg-gray-50 shadow-sm">

                    <h2 class="text-lg font-semibold text-gray-800">
                        {{ $task->title }}
                    </h2>

                    @if($task->description)
                        <p class="text-gray-600 mt-1">
                            {{ $task->description }}
                        </p>
                    @endif

                    <p class="text-sm text-gray-400 mt-2">
                        Created at:
                        {{ $task->created_at->timezone('Asia/Manila')->format('F d, Y - h:i A') }}
                    </p>

                </div>

            @empty

                <div class="text-center text-gray-500">
                    No tasks yet.
                </div>

            @endforelse

        </div>

    </div>

</body>
</html>