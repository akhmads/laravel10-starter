@props(['show' => ''])

@if (!empty($show))
<img src="{{ asset('avatar/'.$show) }}" alt="" class="object-cover w-[75px] h-[75px] rounded-full mt-2 mb-3" />
@endif

<input type="file" {!! $attributes->merge(['class' => 'focus:ring-indigo-500']) !!} />
