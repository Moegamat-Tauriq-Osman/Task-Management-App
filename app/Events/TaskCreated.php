<?php
namespace App\Events;

use App\Models\TITtask;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TaskCreated
{
    use Dispatchable, SerializesModels;

    public $task;

    public function __construct(TITtask $task)
    {
        $this->task = $task;
    }
}
