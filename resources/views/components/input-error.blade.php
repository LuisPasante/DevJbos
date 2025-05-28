@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'border border-red-500 bg-red-100 text-red-500 font-bold uppercase p-2 mt-2 text-xs  ']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
