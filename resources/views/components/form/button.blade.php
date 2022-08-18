@php
if (!isset($size)) {
    $size = 'md';
}
@endphp


@switch($size)
    @case('xs')
        <button type="{{ $type ?? 'button' }}"
            class=" {{ $class ?? '' }} flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-theme-600 hover:bg-theme-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-theme-500">{{ $slot }}
            </button>
    @break

    @case('sm')
        <button type="{{ $type ?? 'button' }}"
            class="{{ $class ?? '' }} inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-theme-600 hover:bg-theme-700
            focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-theme-500">{{ $slost }}</button>
    @break

    @case('md')
        <button type="{{ $type ?? 'button' }}"
            class="{{ $class ?? '' }} inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-theme-600 hover:bg-theme-700 focus:outline-none
            focus:ring-2 focus:ring-offset-2 focus:ring-theme-500">{{ $slot }}</button>
    @break

    @case('lg')
        <button type="{{ $type ?? 'button' }}"
            class="{{ $class ?? '' }} inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-theme-600 hover:bg-theme-700 focus:outline-none
            focus:ring-2 focus:ring-offset-2 focus:ring-theme-500">{{ $slot }}</button>
    @break

    @case('xl')
        <button type="button"
            class="{{ $class ?? '' }} inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-theme-600 hover:bg-theme-700 focus:outline-none focus:ring-2
            focus:ring-offset-2 focus:ring-theme-500">{{ $slot }}</button>
    @break
@endswitch
