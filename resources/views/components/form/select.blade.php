<div>
    @if (isset($lable))
        <label for="email" class="block text-sm font-medium text-gray-700  capitalize {{ $lable_class ?? '' }}"> {{ $lable ?? '' }}</label>
    @endif
    <div class="mt-1">
        <select name="{{ $name ?? '' }}" id=" {{ $id ?? '' }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md {{ $class ?? '' }}" placeholder="{{ $placeholder ?? '' }}">
            {{ $slot }}
        </select>
    </div>
</div>
