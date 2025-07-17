@props(['label', 'name', 'type' => 'text', 'value' => '', 'required' => false])

<div class="mb-4">
  <label class="block text-sm font-medium mb-1" for="{{ $name }}">{{ $label }}</label>
  <input
    type="{{ $type }}"
    name="{{ $name }}"
    id="{{ $name }}"
    value="{{ old($name, $value) }}"
    {{ $required ? 'required' : '' }}
    {{ $attributes->merge(['class' => 'w-full border px-3 py-2 rounded']) }}
  />
</div>
