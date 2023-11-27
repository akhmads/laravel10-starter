@props(['data'])

<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6 text-sm">

        <div class="flex flex-row items-start justify-between gap-5">
            <div {{ $headingLeft->attributes->merge(['class' => 'grid grid-cols-12 gap-2 grow' ]) }}>
                {{ $headingLeft ?? '' }}
            </div>
            <div {{ $headingLeft->attributes->merge(['class' => 'flex flex-row justify-end shrink-0' ]) }}>
                {{ $headingRight ?? '' }}
            </div>
        </div>

        <div class="w-full mx-auto">
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700 overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-slate-800">

                    {{ $header ?? '' }}

                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">

                    {{ $slot }}

                    </tbody>
                </table>
            </div>
        </div>

        {{ $footer ?? '' }}

    </div>
</div>
