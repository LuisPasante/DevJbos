@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
{{-- 
@props(['disabled' => false])

<input 
    type="file"
    @disabled($disabled) 
    {{ $attributes->merge(['class' => 'block w-full mt-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}
> --}}