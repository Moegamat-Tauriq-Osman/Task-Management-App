@component('mail::message')
# Reminder: Task Deadline 

The deadline for the task **{{ $task->title }}** is due on **{{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}**.

Thanks,
<h3>Task Management</h3>

@endcomponent