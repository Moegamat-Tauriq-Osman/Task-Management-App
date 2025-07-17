<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\TITtask;
use App\Models\TITcategory;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TITtaskController extends Controller
{
    use AuthorizesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->guard()->user();


        $tasks = match ($user->role) {
            'Admin' => TITtask::with('category', 'assignee')->get(),
            default => TITtask::with('category', 'assignee')->where('assigned_to', $user->id)->get(),
        };

        return view('tasks.layout', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = TITcategory::all();
        $users = User::whereIn('role', ['Admin', 'Team Member'])->get();

        return view('tasks.tasks', compact('categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'priority' => 'required|in:Low,Medium,High',
            'status' => 'required|in:Pending,In Progress,Completed',
            'deadline' => 'required|date',
        ]);

        $validated['assigned_to'] = auth()->user()->role === 'Admin'
            ? $request->assigned_to
            : auth()->id();

        TITtask::create($validated);

        return redirect()->route('tasks.layout')->with('success', 'Task created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit(int $id)
    {
        $task = TITtask::findOrFail($id);
        $this->authorize('update', $task);

        $categories = TITcategory::all();
        $users = User::whereIn('role', ['Admin', 'Team Member'])->get();

        return view('tasks.tasks', compact('task', 'categories', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     */
    public function update(Request $request, int $id)
    {
        $task = TITtask::findOrFail($id);
        $this->authorize('update', $task);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'priority' => 'required|in:Low,Medium,High',
            'status' => 'required|in:Pending,In Progress,Completed',
            'deadline' => 'required|date',
        ]);

        if (auth()->user()->role === 'Admin') {
            $validated['assigned_to'] = $request->assigned_to;
        }

        $task->update($validated);

        return redirect()->route('tasks.layout')->with('success', 'Task updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy(int $id)
    {
        $task = TITtask::findOrFail($id);
        $this->authorize('delete', $task);

        $task->delete();

        return redirect()->route('tasks.layout')->with('success', 'Task deleted successfully.');
    }
}
