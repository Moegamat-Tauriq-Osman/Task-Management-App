@props(['type' => 'submit', 'color' => 'blue'])

<button type="{{ $type }}"
    {{ $attributes->merge([
        'class' => "bg-{$color}-600 hover:bg-{$color}-700 text-white px-4 py-2 rounded shadow-sm text-sm"
    ]) }}>
    {{ $slot }}
</button>
