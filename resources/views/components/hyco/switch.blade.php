@props(['value' => '', 'checked' => '', 'disabled' => false])

{{-- <label class="flex items-center cursor-pointer select-none text-dark dark:text-white">
   <div class="relative">
      <input
         type="checkbox"
         class="peer sr-only"
         {{ $disabled ? 'disabled' : '' }} {!! $attributes !!}
         {{ $checked ? 'checked' : '' }}
        />
      <div class="block h-8 rounded-full box bg-dark dark:bg-dark-2 w-14 peer-checked:bg-primary"></div>
      <div class="absolute flex items-center justify-center w-6 h-6 transition bg-white rounded-full dot left-1 top-1 dark:bg-dark-5 peer-checked:translate-x-full peer-checked:dark:bg-white"></div>
   </div>
</label> --}}

<label x-data="{ch : {{ $value==$checked ? 'true' : 'false' }}}" class="relative inline-flex items-center cursor-pointer">
    <input type="checkbox" x-bind:checked="ch" {{ $value==$checked ? 'checked' : '' }} {{ $disabled ? 'disabled' : '' }} class="sr-only peer">
    <div @click="ch = ! ch" class="group peer ring-0 bg-gray-400  rounded-full outline-none duration-300 after:duration-300 w-24 h-10  shadow-md peer-checked:bg-emerald-500  peer-focus:outline-none  after:content-['✖️']  after:rounded-full after:absolute after:bg-gray-50 after:outline-none after:h-8 after:w-10 after:top-1 after:left-1 after:-rotate-180 after:flex after:justify-center after:items-center peer-checked:after:translate-x-12 peer-checked:after:content-['✔️'] peer-hover:after:scale-95 peer-checked:after:rotate-0">
    </div>
    <div x-text="ch"></div>
</label>
