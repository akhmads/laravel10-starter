@props([])

@php $rounded = isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md'; @endphp

<div>
    <div {{ $attributes->merge(['class' => 'px-4 py-5 bg-white sm:p-6 shadow space-y-6 ' . $rounded]) }}>
        {{ $slot }}
    </div>
    @if (isset($actions))
        <div class="flex items-center justify-end gap-4 px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
            {{ $actions }}
        </div>
    @endif
</div>
