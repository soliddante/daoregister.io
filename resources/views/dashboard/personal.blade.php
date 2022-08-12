<x-layouts.dashboard>
    <form id="form" action="{{ route('user_update') }}">

        <div class="border rounded px-8 py-12 bg-white mt-4 mb-4 md:mt-16 shadow block md:w-4/5 w-[92vw] mx-auto ">
            <div class="grid-cols-2 md:gap-4 gap-y-4 px-0 md:px-8 grid">
                {{-- /***********************
                 Personal INFORMATION 
                ***********************/ --}}
                <div class="col-span-2">
                    <h3 class="text-lg leading-6 font-semibold  text-theme-dark">Personal Information</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
                </div>
                <div class="md:col-span-1 col-span-2">
                    <x-ui.input name="firstname" lable="Firstname" placeholder="{{ auth()->user()->firstname }}"></x-ui.input>
                </div>
                <div class="md:col-span-1 col-span-2">
                    <x-ui.input name="lastname" lable="Lastname" placeholder="{{ auth()->user()->lastname }}"></x-ui.input>
                </div>
                <div class="col-span-2">
                    <x-ui.input name="birthday" lable="Date of birth" type="date" value="{{ auth()->user()->birthday }}"></x-ui.input>
                </div>

                <div class="col-span-2">
                    <fieldset class="mt-2">
                        <div class="flex justify-between lg:justify-start lg:gap-8 ">
                            <label class="text-sm font-medium text-gray-900">Gendar</label>
                            <div class="flex gap-4">
                                <div class="flex items-center">
                                    <input id="man" value="man" @if (auth()->user()->gendar == 'man') checked @endif name="gendar"
                                        type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                    <label for="man" class="ml-1 block text-sm font-medium text-gray-700"> Man </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="woman" value="woman" name="gendar" type="radio"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                        @if (!auth()->user()->gendar == 'man') checked @endif>
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
                <div class="md:col-span-1 col-span-2">
                    <x-ui.input name="profession" lable="profession" placeholder="{{ auth()->user()->profession }}"></x-ui.input>
                </div>
                <div class="md:col-span-1 col-span-2">
                    <x-ui.input name="education" lable="education" placeholder="{{ auth()->user()->education }}"></x-ui.input>
                </div>
                <div class="col-span-2">
                    <x-ui.input name="university" lable="university" placeholder="{{ auth()->user()->university }}"></x-ui.input>
                </div>
                <div class="md:col-span-1 col-span-2">
                    <x-ui.select name="language_first" lable="Primary language">
                        <option value="English" @if (auth()->user()->first_language == 'English') selected @endif>English</option>
                    </x-ui.select>
                </div>
                <div class="md:col-span-1 col-span-2">
                    <x-ui.select name="language_second" lable="Secondary language">
                        <option value="Spanish" @if (auth()->user()->language_second == 'Spanish') selected @endif>Spanish</option>
                    </x-ui.select>
                </div>
                {{-- /*********
                 SUBMIT
                ***********/ --}}
                <div class=" col-span-2 flex justify-end ">
                    <x-ui.button size="md" type="submit">Update</x-ui.button>
                </div>
            </div>
        </div>
    </form>

</x-layouts.dashboard>
