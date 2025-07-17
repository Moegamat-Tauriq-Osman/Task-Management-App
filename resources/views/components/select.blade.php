@props(['label', 'name', 'options' => [], 'selected' => null])

<div class="mb-4">
  <label class="block text-sm font-medium mb-1" for="{{ $name }}">{{ $label }}</label>
  <select name="{{ $name }}" id="{{ $name }}"
    {{ $attributes->merge(['class' => 'w-full border px-3 py-2 rounded']) }}>
    @foreach ($options as $key => $labelText)
      <option value="{{ $key }}" {{ (old($name, $selected) == $key) ? 'selected' : '' }}>
        {{ $labelText }}
      </option>
    @endforeach
  </select>
</div>
