@props([])

<div class="py-12">
    <div {{ $attributes->merge(['class' => 'max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6 text-sm']) }}>
        {{ $slot }}
    </div>
</div>
