@props(['icon' => ''])

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center bg-blue-500 hover:bg-blue-400 text-white disabled:opacity-75 disabled:cursor-wait delay-50 duration-300 ease-in-out rounded-md px-4 py-2 tracking-widest focus:outline-none focus:ring-2 focus:ring-blue-300 focus:ring-offset-2']) }}>

    @if($icon=='plus')
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
    </svg>
    @endif

    @if($icon=='check')
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
    </svg>
    @endif

    @if($icon=='arrow-left')
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
    </svg>
    @endif

    @if($icon=='x-mark')
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
    </svg>
    @endif

    {{ $slot }}

</button>
