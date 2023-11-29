<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Change Password') }}
        </h2>
    </x-slot>

    <x-hyco.flash-alert />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-hyco.form-section submit="store">
                <x-slot name="title">
                    {{ __('User Password') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('Update your password') }}.
                    <div class="hidden sm:block">
                        <div class="py-4">
                            <div class="border-t border-gray-200"></div>
                        </div>
                    </div>
                    <div class="text-sm mt-5 space-y-2">
                        <p>{{ __('Use a strong password and change it regularly') }}.</p>
                    </div>
                </x-slot>

                <x-slot name="form">
                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="current_password" :value="__('Current Password')" class="mb-1" />
                        <x-input type="password" id="current_password" wire:model="current_password" class="w-full" />
                        <x-input-error class="mt-2" for="current_password" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="new_password" :value="__('New Password')" class="mb-1" />
                        <x-input type="password" id="new_password" wire:model="new_password" class="w-full" />
                        <x-input-error class="mt-2" for="new_password" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="confirm_password" :value="__('Password Confirmation')" class="mb-1" />
                        <x-input type="password" id="confirm_password" wire:model="confirm_password" class="w-full" />
                        <x-input-error class="mt-2" for="confirm_password" />
                    </div>
                </x-slot>

                <x-slot name="actions">
                    <x-hyco.button wire:loading.attr="disabled" icon="check">Save Change</x-hyco.button>
                </x-slot>
            </x-form-section>

        </div>
    </div>
</div>
