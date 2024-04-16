@props(['textColor', 'bgColor'])

@php
    $textColor = $textColor ?? 'white';
    // match ($textColor) {
    //     'gray' => 'text-gray-800',
    //     'blue' => 'text-blue-800',
    //     'white' => 'text-white',
    //     'red' => 'text-red-800',
    //     'yellow' => 'text-yellow-800',
    //     default => 'text-gray-800',
    // };

    $bgColor = $bgColor ?? '#c32222d1';
    //  match ($bgColor) {
    //     'gray' => 'bg-gray-100',
    //     'white' => 'bg-white-100',
    //     'blue' => 'bg-blue-100',
    //     'red' => 'bg-red-800',
    //     'yellow' => 'bg-yellow-100',
    //     default => 'bg-gray-100',
    // };
@endphp

<button {{$attributes}}
   class="rounded-xl px-3 py-1 text-base"
   style="color: {{ $textColor }};
          background-color: {{ $bgColor }};">
   {{$slot}}
</button>
