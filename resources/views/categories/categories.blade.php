<x-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold">{{ isset($category) ? 'Edit Category' : 'Create Category' }}</h2>
  </x-slot>

  <div class="py-4 max-w-3xl mx-auto">
    <x-alert />

    <form method="POST" action="{{ isset($category) ? route('categories.update', $category) : route('categories.store') }}">
      @csrf
      @if(isset($category)) @method('PUT') @endif

      <x-input name="name" label="Category Name" :value="$category->name ?? ''" required />

      <div class="mt-4">
        <x-button>{{ isset($category) ? 'Update Category' : 'Create Category' }}</x-button>
        <a href="{{ route('categories.index') }}" class="ml-4 text-sm text-gray-500">Cancel</a>
      </div>
    </form>
  </div>
</x-layout>