<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TodoController extends Controller
{
    public function index()
    {
        // Get only the logged-in user's todos
        $todos = Auth::user()->todos;
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        // Create the todo with the authenticated user's ID and set the add_date
        Auth::user()->todos()->create([
            'title' => $request->input('title'),
            'add_date' => Carbon::now()->toDateString(),
            'start_time' => Carbon::now()->toTimeString(),
        ]);

        return redirect()->route('todos.index')->with('success', 'To-do Created Successfully.');
    }

    public function edit(Todo $todo)
    {
        // Ensure the user can only edit their own todos
        if ($todo->user_id != Auth::id()) {
            abort(403);
        }

        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        // Ensure the user can only update their own todos
        if ($todo->user_id != Auth::id()) {
            abort(403);
        }

        $request->validate([
            'title' => 'required',
            'completed' => 'boolean'
        ]);

        $todoData = [
            'title' => $request->input('title'),
            'completed' => $request->input('completed')
        ];

        // If the todo is marked as completed, set the complete_time
        if ($request->input('completed')) {
            $todoData['complete_time'] = Carbon::now()->toTimeString();
        }

        $todo->update($todoData);

        return redirect()->route('todos.index')->with('success', 'To-Do updated successfully.');
    }

    public function destroy(Todo $todo)
    {
        // Ensure the user can only delete their own todos
        if ($todo->user_id != Auth::id()) {
            abort(403);
        }

        $todo->delete();
        return redirect()->route('todos.index')->with('success', 'To-Do deleted successfully.');
    }
}
