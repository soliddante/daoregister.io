<x-layouts.dashboard>
    <div class="border rounded px-8 py-12 bg-white mt-16 shadow block w-4/5 mx-auto ">
        <div class="grid-cols-2 gap-4 px-8 grid ">
            {{-- /***********************
                 Personal INFORMATION 
                ***********************/ --}}
            <div class="col-span-2">
                <h3 class="text-lg leading-6 font-semibold  text-theme-dark">Personal Information</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
            </div>
            <div class="col-span-1">
                <x-ui.input name="firstname" lable="Firstname"></x-ui.input>
            </div>
            <div class="col-span-1">
                <x-ui.input name="lastname" lable="Lastname"></x-ui.input>
            </div>
            <div class="col-span-2">
                <x-ui.input name="birthday" lable="Date of birth" type="date"></x-ui.input>
            </div>

            <div class="col-span-2">
                <fieldset class="mt-2">
                    <div class="flex justify-between lg:justify-start lg:gap-8 ">
                        <label class="text-sm font-medium text-gray-900">Gendar</label>
                        <div class="flex gap-4">
                            <div class="flex items-center">
                                <input id="man" value="man" name="gendar" " type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                <label for="man" class="ml-1 block text-sm font-medium text-gray-700"> Man </label>
                            </div>
                            <div class="flex items-center">
                                <input id="woman" value="woman" name="gendar" " type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                <label for="woman" class="ml-1 block text-sm font-medium text-gray-700"> Woman </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>

            {{-- /*********
                 Carrier
                ***********/ --}}
            <div class="col-span-2">
                <hr class="my-4">
            </div>
            <div class="col-span-2">
                <h3 class="text-lg leading-6 font-semibold  text-theme-dark">Carrier information</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
            </div>
            <div class="col-span-1">
                <x-ui.input name="profession" lable="profession"></x-ui.input>
            </div>
            <div class="col-span-1">
                <x-ui.input name="education" lable="education"></x-ui.input>
            </div>
            <div class="col-span-2">
                <x-ui.input name="university" lable="university"></x-ui.input>
            </div>
            <div class="col-span-1">
                <x-ui.select name="first_language" lable="Primary language">
                    <option value="English">English</option>
                </x-ui.select>
            </div>
            <div class="col-span-1">
                <x-ui.select name="first_language" lable="Secondary language">
                    <option value="Spanish">Spanish</option>
                </x-ui.select>
            </div>
            {{-- /*********
                 SUBMIT
                ***********/ --}}
            <div class="col-span-1 col-start-2 flex justify-end ">
                <x-ui.button size="md">Submit</x-ui.button>
            </div>
        </div>
    </div>
</x-layouts.dashboard>
