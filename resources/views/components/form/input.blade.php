<div>
    @if (isset($lable))
        <label for="email" class="block text-sm font-medium text-gray-700  capitalize {{ $lable_class ?? '' }}"> {{ $lable ?? '' }}</label>
    @endif
    <div class="mt-1">
        <input {!! isset($disabled) ? 'disabled' : '' !!} @isset($readonly) readonly @endisset
            @isset($empty) onfocus="this.removeAttribute('readonly');"
            readonly @endisset autocomplete="nope"
            value="{{ $value ?? '' }}" type="{{ $type ?? 'text' }}" name="{{ $name ?? '' }}" id="{{ $id ?? '' }}"
            class="shadow-sm focus:ring-theme-500 focus:border-theme-500 block w-full sm:text-sm border-gray-300 rounded-md {{ $class ?? '' }}"
            placeholder="{{ $placeholder ?? '' }}">
    </div>
</div>
