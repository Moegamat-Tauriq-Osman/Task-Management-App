@props(['status', 'tasks'])

<div class="bg-white p-4 rounded shadow">
  <h3 class="text-lg font-bold mb-4">{{ $status }}</h3>

  @forelse ($tasks->where('status', $status) as $task)
    <div class="border rounded p-3 mb-3">
      <h4 class="font-semibold">{{ $task->title }}</h4>
      <p class="text-sm text-gray-600">{{ $task->description }}</p>
      <p class="text-sm">Deadline: {{ $task->deadline ? $task->deadline->format('Y-m-d') : 'N/A' }}</p>
      <p class="text-sm">Assigned to: {{ $task->assignee->name ?? 'Unassigned' }}</p>
      <x-badge type="{{ $task->priority }}" />

      <div class="mt-2 space-x-2">
        <a href="{{ route('tasks.edit', $task) }}" class="text-blue-600 hover:underline text-sm">Edit</a>

        <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this task?');">
          @csrf
          @method('DELETE')
          <button type="submit" class="text-red-600 hover:underline text-sm">Delete</button>
        </form>
      </div>
    </div>
  @empty
    <p class="text-sm text-gray-400">No tasks in this category.</p>
  @endforelse
</div>
