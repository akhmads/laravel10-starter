@props([])

<a {!! $attributes->merge(['class' => 'block px-4 py-2 mt-2 text-sm font-medium text-gray-500 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline delay-50 duration-300 ease-in-out']) !!}>
    {{ $slot }}
</a>
