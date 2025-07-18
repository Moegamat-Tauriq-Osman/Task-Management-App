@component('mail::message')
# Reminder: Task Deadline 

The deadline for the task **{{ $task->title }}** is due on **{{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}**.

Please ensure all work is completed on time.

Thanks,<br>
{{ config('app.name') }}
@endcomponent