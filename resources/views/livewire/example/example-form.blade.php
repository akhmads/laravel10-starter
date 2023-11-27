<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Example Manager') }}
            </h2>
            <div class="flex justify-end gap-8">
                {{-- <a href="#" class="hover:text-sky-500 {{ routeIs('') }}">General</a>
                <a href="#" class="hover:text-sky-500">Address</a> --}}
            </div>
        </div>
    </x-slot>

    <x-hyco.flash-alert />
    <div wire:loading class="fixed top-0">
        <x-hyco.loading />
    </div>

    {{-- @if(session()->has('success'))
    <x-banner style="danger" :message="session('success')" />
    @endif --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-hyco.form-section submit="store">
                <x-slot name="title">
                    {{ __('Example Information') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('Update your example information.') }}
                </x-slot>

                <x-slot name="form">
                    <div class="col-span-6 sm:col-span-3">
                        <x-label for="name" :value="__('Name')" class="mb-1" />
                        <x-input id="name" wire:model="name" class="w-full" autofocus />
                        <x-input-error class="mt-2" for="name" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-hyco.label for="code" :value="__('Code')" />
                        <x-input id="code" wire:model="code" class="w-full bg-slate-100" readonly="" />
                        <x-input-error class="mt-2" for="code" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-label :value="__('Gender')" class="mb-1" />
                        <x-hyco.select wire:model="gender" :options="\App\Models\Gender::pluck('gender','gender')" class="w-full"></x-hyco.select>
                        <x-input-error class="mt-2" for="gender" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-label for="birth_date" :value="__('Birth Date')" class="mb-1" />
                        <x-input type="date" id="birth_date" wire:model="birth_date" class="w-full" />
                        <x-input-error class="mt-2" for="birth_date" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-label for="email" :value="__('Email')" class="mb-1" />
                        <x-input id="email" wire:model="email" class="w-full" />
                        <x-input-error class="mt-2" for="email" />
                    </div>

                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="active" :value="__('Active')" class="mb-1" />
                        <x-hyco.checkbox id="active" wire:model.live="active" value="1" :checked="$active" class="" />
                        <x-input-error class="mt-2" for="active" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="address" :value="__('Address')" class="mb-1" />
                        <x-hyco.textarea id="address" wire:model="address" class="w-full h-[100px]"></x-hyco.textarea>
                        <x-input-error class="mt-2" for="address" />
                    </div>

                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="avatar" :value="__('Avatar')" class="mb-1" />
                        <x-hyco.input-avatar id="avatar" wire:model.live="avatar" :show="$showAvatar" />
                        <x-input-error class="mt-2" for="avatar" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-label for="contact_id" :value="__('Contact')" class="mb-1" />
                        <livewire:example.contact-picker id="contact_id" :value="$contact_id" />
                        <x-input-error class="mt-2" for="contact_id" />
                    </div>


                </x-slot>

                <x-slot name="actions">
                    <x-hyco.link href="{{ route('example') }}" wire:navigate icon="x-mark" class="bg-yellow-500 hover:bg-yellow-400">Back</x-hyco.link>
                    <x-hyco.button wire:loading.attr="disabled" icon="check">Save</x-hyco.button>
                </x-slot>
            </x-hyco.form-section>

            <div class="hidden sm:block">
                <div class="py-8">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>

            @if (!empty($set_id))
            <livewire:example.address-form :example_id="$set_id" wire:key="example_address_{{ $set_id }}" />
            @endif
        </div>
    </div>

</div>
