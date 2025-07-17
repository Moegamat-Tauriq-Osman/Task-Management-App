<?php

namespace App\Observers;

use App\Models\TITtask;
use Illuminate\Support\Facades\Log;

class TITtaskObserver
{
    public function created(TITtask $task): void
    {
        
        Log::info('Task created: ' . $task->title);
    }

    public function updated(TITtask $task): void
    {
        Log::info('Task updated: ' . $task->title);
    }

    public function deleted(TITtask $task): void
    {
        Log::warning('Task deleted: ' . $task->title);
    
}
}