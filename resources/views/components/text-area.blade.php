@props(['label', 'name', 'value' => ''])

<div class="mb-4">
  <label class="block text-sm font-medium mb-1" for="{{ $name }}">{{ $label }}</label>
  <textarea name="{{ $name }}" id="{{ $name }}"
    {{ $attributes->merge(['class' => 'w-full border px-3 py-2 rounded']) }}
  >{{ old($name, $value) }}</textarea>
</div>
