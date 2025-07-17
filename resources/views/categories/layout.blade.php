<x-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold">All Categories</h2>
  </x-slot>

  <x-alert />

  <div class="py-4 max-w-5xl mx-auto">
    <a href="{{ route('categories.create') }}">
      <x-button>Create Category</x-button>
    </a>

    <div class="overflow-x-auto bg-white mt-4 rounded shadow">
      <table class="min-w-full">
        <thead class="bg-gray-100">
          <tr>
            <th class="p-3 text-left">Category Name</th>
            <th class="p-3 text-left">Task Count</th>
            @can('TIT-manage-categories')
            <th class="p-3 text-left">Actions</th>
            @endcan
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
          <tr class="border-b">
            <td class="p-3">{{ $category->name }}</td>
            <td class="p-3">{{ $category->tasks_count }}</td>
            @can('TIT-manage-categories')
            <td class="p-3 space-x-2">
              <a href="{{ route('categories.edit', $category) }}" class="text-blue-600 text-sm">Edit</a>
              <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline">
                @csrf @method('DELETE')
                <button type="submit" class="text-red-600 text-sm">Delete</button>
                @endcan
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</x-layout>