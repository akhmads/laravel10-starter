@props([])

<tr {!! $attributes->merge(['class' => 'bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800']) !!}>
    {{ $slot }}
</tr>
