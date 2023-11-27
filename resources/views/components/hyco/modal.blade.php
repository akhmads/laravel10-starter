@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="">
            <div class="mt-3 text-center sm:mt-0 sm:text-left">
                <h3 class="text-lg font-medium text-gray-900">
                    {{ $title }}
                </h3>

                <div class="mt-4 text-sm text-gray-600">
                    {{ $content }}
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right gap-6">
        {{ $footer }}
    </div>
</x-modal>
