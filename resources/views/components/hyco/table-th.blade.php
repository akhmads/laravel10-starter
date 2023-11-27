@props([ 'name','label','sort' ])

<th {!! $attributes->merge(['class' => 'px-4 py-2 text-left']) !!}>
    <div class="flex items-center">

        {!! Illuminate\Support\Str::of($label ?? $name)->replace(['-','_'],' ')->title() !!}

        @if(isset($sort[$name]) AND $sort[$name] == 'asc')
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-1"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" /></svg>
        @endif

        @if(isset($sort[$name]) AND $sort[$name] == 'desc')
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-1"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
        @endif

    </div>
</th>
