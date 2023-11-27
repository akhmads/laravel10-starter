<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4 mb-6">
                <livewire:widget.user-card type="users" lazy />
                <livewire:widget.user-card type="invoice" lazy />
                <livewire:widget.user-card type="cash" lazy />
                <livewire:widget.user-card type="bank" lazy />
            </div> --}}

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-10 prose">

                    <h1>Hello world.</h1>

                    <img src="{{ asset('assets/images/illust1.svg') }}" class="object-center">

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
