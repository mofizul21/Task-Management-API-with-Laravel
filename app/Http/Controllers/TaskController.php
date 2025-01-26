<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller {
    // 1. Create a task
    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $task = Task::create($validated);

        return response()->json($task, 201); 
    }


    // 2. Retrieve a list of tasks
    public function index() {
        $tasks = Task::all();

        return response()->json($tasks, 200);
    }

    // 3. Mark a task as completed
    public function update(Request $request, $id) {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['error' => 'Task not found'], 404);
        }

        $task->status = 'completed';
        $task->save();

        return response()->json($task, 200);
    }

    // 4. Delete a task
    public function destroy($id) {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['error' => 'Task not found'], 404);
        }

        $task->delete();

        return response()->json(['message' => 'Task deleted successfully'], 200);
    }
}
