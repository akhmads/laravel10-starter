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

                <div class="flex flex-col-reverse lg:items-start gap-8 lg:flex-row lg:justify-between p-14">

                    <div class="prose">
                        <h2>Laravel 10 Starter</h2>
                        <p>Laravel 10 Starter includes tailwindcss, livewire and several standard features like user login, register and user management.</p>
                        <h3>Feature</h3>
                        <ul>
                        <li>User Login, register, change user profile, change user password</li>
                        <li><a href="{{ url('user') }}">User manager</a> with CRUD functionality, pagination, search and sort</li>
                        <li><a href="{{ url('example') }}">Example resource</a></li>
                        </ul>
                        <h3>Example resource include</h3>
                        <ul>
                        <li>Table list and form like Text input, Textarea, Select, Checkbox</li>
                        <li>Auto code generator field</li>
                        <li>Email field with unique validation</li>
                        <li>Upload an avatar</li>
                        <li>Contact picker</li>
                        </ul>

                        <div class="mt-10">
                            <p>Github : <a href="https://github.com/akhmads/laravel10-starter" target="_blank" class="text-indigo-600 no-underline hover:underline">https://github.com/akhmads/laravel10-starter</a></p>
                            <x-hyco.link href="https://saweria.co/akhmads" class="no-underline flex flex-row items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-6 h-6" viewBox="0 0 512 512"><path d="M368 80h64a16 16 0 0116 16v34a46 46 0 01-46 46h-34M96 80h272v192a80 80 0 01-80 80H176a80 80 0 01-80-80V80h0zM64 416h336" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                Buy Me a Coffee
                            </x-hyco.link>
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/illust1.svg') }}" class="inline">

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
