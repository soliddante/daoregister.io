<x-layouts.dashboard>
    <div class="border rounded px-8 py-12 bg-white mt-16 shadow block w-4/5 mx-auto ">
        <div class="grid-cols-2 gap-4 px-8 grid ">
            {{-- /***********************
                Address 
                ***********************/ --}}
            <div class="col-span-2">
                <h3 class="text-lg leading-6 font-semibold  text-theme-dark">Address and locations</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
            </div>
            <div class="col-span-1">
                <x-ui.select name="country" lable="country">
                    <option value="US" @if (auth()->user()->country == 'US') selected @endif>US</option>
                </x-ui.select>

            </div>
            <div class="col-span-1">
                <x-ui.select name="City" lable="city">
                    <option value="New York" @if (auth()->user()->city == 'New York') selected @endif>New York</option>
                </x-ui.select>
            </div>
            <div class="col-span-1">
                <x-ui.input name="postalcode" lable="postalcode" placeholder="{{ auth()->user()->postalcode }}" ></x-ui.input>
            </div>
            <div class="col-span-2">
                <x-ui.textarea name="address" lable="Address" class="h-[150px]">{{ auth()->user()->address }}</x-ui.textarea>
            </div>
            {{-- /*********
                 SUBMIT
                ***********/ --}}
            <div class="col-span-2 flex justify-end ">
                <x-ui.button size="md">Submit</x-ui.button>
            </div>
        </div>
    </div>
</x-layouts.dashboard>
