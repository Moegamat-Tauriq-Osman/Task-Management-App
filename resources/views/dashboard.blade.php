<x-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Dashboard</h2>
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
        <x-task-block status="Pending" :tasks="$tasks" />
        <x-task-block status="In Progress" :tasks="$tasks" />
        <x-task-block status="Completed" :tasks="$tasks" />
    </div>
</x-layout>

