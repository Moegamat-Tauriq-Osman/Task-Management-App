<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TITtask;

class TITdashboardController extends Controller
{
    /**
     * Display the dashboard.
     */
    public function index()
    {
        $user = auth()->user();

        $tasks = ($user->role === 'Admin')
            ? TITtask::with('category', 'assignee')->get()
            : TITtask::with('category', 'assignee')->where('assigned_to', $user->id)->get();

        return view('dashboard', compact('tasks'));
    }
}
