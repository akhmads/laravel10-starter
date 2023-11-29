<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Change Profile') }}
        </h2>
    </x-slot>

    <x-hyco.flash-alert />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-hyco.form-section submit="store">
                <x-slot name="title">
                    {{ __('User Information') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('Update your user information and email address') }}.
                    <div class="hidden sm:block">
                        <div class="py-4">
                            <div class="border-t border-gray-200"></div>
                        </div>
                    </div>
                </x-slot>

                <x-slot name="form">
                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="name" :value="__('Name')" class="mb-1" />
                        <x-input id="name" wire:model="name" class="w-full" autofocus />
                        <x-input-error class="mt-2" for="name" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="email" :value="__('Email')" class="mb-1" />
                        <x-input id="email" wire:model="email" class="w-full" />
                        <x-input-error class="mt-2" for="email" />
                    </div>

                </x-slot>

                <x-slot name="actions">
                    <x-hyco.button wire:loading.attr="disabled" icon="check">Save Change</x-hyco.button>
                </x-slot>
            </x-form-section>

        </div>
    </div>
</div>
