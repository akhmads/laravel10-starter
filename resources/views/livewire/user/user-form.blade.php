<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Manager') }}
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
                    <div class="text-sm mt-5 space-y-2">
                        <p>{{ __('Password is required for creating data but optional in editing') }}.</p>
                        <p>{{ __('Use a strong password and change it regularly') }}.</p>
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

                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="password" :value="__('Password')" class="mb-1" />
                        <x-input type="password" id="password" wire:model="password" class="w-full" />
                        <x-input-error class="mt-2" for="password" />
                    </div>

                </x-slot>

                <x-slot name="actions">
                    <x-hyco.link href="{{ route('user') }}" wire:navigate icon="x-mark" class="bg-yellow-500 hover:bg-yellow-400">Back</x-hyco.link>
                    <x-hyco.button wire:loading.attr="disabled" icon="check">Save</x-hyco.button>
                </x-slot>
            </x-form-section>

        </div>
    </div>
</div>
