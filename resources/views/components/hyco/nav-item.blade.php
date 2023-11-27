@props(['active' => false])

@if($active)
<a {!! $attributes->merge(['class' => 'px-4 py-2 mt-2 text-sm font-medium text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 hover:bg-gray-200 delay-50 duration-300 ease-in-out']) !!}>
@else
<a {!! $attributes->merge(['class' => 'px-4 py-2 mt-2 text-sm font-medium text-gray-500 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 hover:bg-gray-200 delay-50 duration-300 ease-in-out']) !!}>
@endif

    {{ $slot }}
</a>
