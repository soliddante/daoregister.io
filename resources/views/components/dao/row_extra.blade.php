<div class="jsc_extras_item grid gap-2 mt-1 grid-cols-12">
    <div class="col-span-4">
        <div class="mt-1 flex rounded-md shadow-sm">
            <span
                class="jsc_delete_extra inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                <ion-icon name="close-outline"></ion-icon>
            </span>
            <input type="text" value="{{ $key ?? '' }}" name="extra_key[]"
                class="flex-1 min-w-0 block w-full px-2 py-1 rounded-none rounded-r-md focus:ring-theme-500 focus:border-theme-500 sm:text-sm border-gray-300">
        </div>
    </div>
    <div class="col-span-6"> <input type="text" value="{{ $value ?? '' }}" name="extra_value[]"
            class="flex-1 min-w-0 block w-full px-2 py-1 mt-1  rounded-md focus:ring-theme-500 focus:border-theme-500 sm:text-sm border-gray-300">
    </div>
    <div class="col-span-2 flex items-center ">
        <div class="jsc_box" >
            <input value="{{ $pv ?? '' }}" type="hidden" class="jsc_checkbox_hidden" value="0" name="extra_pv[]">
            <input type="checkbox" {{ $pv ?? '' == 1 ? 'checked' : '' }}  class="jsc_checkbox_input focus:ring-theme-500 md:ml-4 h-4 w-4 text-theme-600 border-gray-300 rounded">
        </div>
    </div>
</div>
