@props([])

<div {{ $attributes->merge(['class' => 'flex items-center p-4 bg-white border border-gray-200 rounded-lg shadow-xs dark:bg-gray-800']) }}>
    {{ $slot }}
</div>
