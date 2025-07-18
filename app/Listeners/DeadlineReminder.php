<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\TaskDeadline;
use App\Mail\TaskDeadlineReminder;
use Illuminate\Support\Facades\Mail;

class DeadlineReminder
{

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TaskDeadline $event): void
    {
        $task = $event->task;
        $user = $task->assignee;

        if (
            $user &&
            $user->email &&
            $user->role !== 'Guest' ) {
            Mail::to($user->email)->send(new TaskDeadlineReminder($task));
        }
    }
}
