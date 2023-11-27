<div>
    @if(session()->has('success'))
    <div class="fixed top-[82px] z-50 left-1/2 -translate-x-1/2 inline-flex item-center bg-green-50 text-green-700 border border-green-200 px-6 py-4 rounded-lg">
        {{ session('success') }}
        <button type="button" class="" onclick="this.parentNode.remove()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 ml-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    @endif

    @if(session()->has('error'))
    <div class="fixed top-[82px] z-50 left-1/2 -translate-x-1/2 inline-flex item-center bg-red-50 text-red-700 border border-red-200 px-6 py-4 rounded-lg">
        {{ session('error') }}
        <button type="button" class="" onclick="this.parentNode.remove()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 ml-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    @endif
</div>
