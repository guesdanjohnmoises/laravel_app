<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // Show all tasks
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // Show create form
    public function create()
    {
        return view('tasks.create');
    }

    // Store new task
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('/tasks')->with('success', 'Task created successfully!');
    }

    // Show single task
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    // Show edit form
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Update task
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $task->update($request->all());

        return redirect('/tasks')->with('success', 'Task updated successfully!');
    }

    // Delete task
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks')->with('success', 'Task deleted successfully!');
    }
}