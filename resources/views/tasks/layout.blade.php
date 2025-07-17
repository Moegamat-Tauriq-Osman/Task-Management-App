<x-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold">All Tasks</h2>
  </x-slot>

  <x-alert />

  <div class="py-4 max-w-7xl mx-auto">
    <a href="{{ route('tasks.create') }}">
      <x-button>Create Task</x-button>
    </a>

    <div class="overflow-x-auto bg-white mt-4 rounded shadow">
      <table class="min-w-full">
        <thead class="bg-gray-100">
          <tr>
            <th class="p-3">Title</th>
            <th class="p-3">Assigned To</th>
            <th class="p-3">Category</th>
            <th class="p-3">Priority</th>
            <th class="p-3">Status</th>
            <th class="p-3">Deadline</th>
            <th class="p-3">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tasks as $task)
          <tr class="border-b">
            <td class="p-3">{{ $task->title }}</td>
            <td class="p-3">{{ $task->assignee->name ?? 'N/A' }}</td>
            <td class="p-3">{{ $task->category->name ?? 'N/A' }}</td>
            <td class="p-3"><x-badge type="{{ $task->priority }}" /></td>
            <td class="p-3"><x-badge type="{{ $task->status }}" /></td>
            <td class="p-3">{{ $task->deadline->format('Y-m-d') }}</td>
            <td class="p-3 space-x-2">
              <a href="{{ route('tasks.edit', $task) }}" class="text-blue-600 text-sm">Edit</a>
              <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                @csrf @method('DELETE')
                <button type="submit" class="text-red-600 text-sm">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</x-layout>