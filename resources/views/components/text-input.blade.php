@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-slate-900 text-white border-yellow-600  rounded-md shadow-sm']) !!}>
