@props(['type'])

@php
  $colors = [
    'Pending' => 'bg-yellow-100 text-yellow-800',
    'In Progress' => 'bg-blue-100 text-blue-800',
    'Completed' => 'bg-green-100 text-green-800',
    'High' => 'bg-red-100 text-red-800',
    'Medium' => 'bg-yellow-100 text-yellow-800',
    'Low' => 'bg-green-100 text-green-800',
  ];
@endphp

<span class="text-xs px-2 py-1 rounded-full {{ $colors[$type] ?? 'bg-gray-100 text-gray-700' }}">
  {{ $type }}
</span>
