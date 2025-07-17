<x-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold">{{ isset($task) ? 'Edit Task' : 'Create Task' }}</h2>
  </x-slot>

  <div class="py-4 max-w-4xl mx-auto">
    <x-alert />

    <form method="POST" action="{{ isset($task) ? route('tasks.update', $task) : route('tasks.store') }}">
      @csrf
      @if(isset($task)) @method('PUT') @endif

      @if(auth()->user()->role === 'Team Member' && isset($task))
      <x-select name="status" label="Status"
        :options="['Pending'=>'Pending','In Progress'=>'In Progress','Completed'=>'Completed']"
        :selected="$task->status ?? ''" />
      @else

      <x-input name="title" label="Title" :value="$task->title ?? ''" required />
      <x-text-area name="description" label="Description" :value="$task->description ?? ''" />

      <x-select name="category_id" label="Category"
        :options="$categories->pluck('name', 'id')"
        :selected="$task->category_id ?? ''" />

      @if(auth()->user()->role === 'Admin')
      <x-select name="assigned_to" label="Assign To"
        :options="$users->pluck('name', 'id')"
        :selected="$task->assigned_to ?? ''" />
      @endif

      <x-select name="priority" label="Priority"
        :options="['Low'=>'Low','Medium'=>'Medium','High'=>'High']"
        :selected="$task->priority ?? ''" />

      <x-select name="status" label="Status"
        :options="['Pending'=>'Pending','In Progress'=>'In Progress','Completed'=>'Completed']"
        :selected="$task->status ?? ''" />

      <x-input type="date" name="deadline" label="Deadline"
        :value="isset($task) ? $task->deadline->format('Y-m-d') : ''" required />
      @endif

      <div class="mt-4">
        <x-button>{{ isset($task) ? 'Update Task' : 'Create Task' }}</x-button>
        <a href="{{ route('tasks.index') }}" class="ml-4 text-sm text-gray-500">Cancel</a>
      </div>
    </form>
  </div>
</x-layout>