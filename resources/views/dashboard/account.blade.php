<x-layouts.dashboard>
    <form id="form" action="{{ route('user_update') }}">
        <div class="border rounded px-8 py-12 bg-white mt-4  md:mt-16 shadow block md:w-4/5 w-[90vw] mx-auto ">
            <div class="grid-cols-2 md:gap-4 gap-y-4 px-0 md:px-8 grid ">
                {{-- /***********************
                 ACCOUNT INFORMATION 
                ***********************/ --}}
                <div class="col-span-2">
                    <h3 class="text-lg leading-6 font-semibold  text-theme-dark">Account Information</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Just fill in the inputs you want to change</p>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <x-ui.input name="email" id="email" type="email" lable="Email address" placeholder="{{ auth()->user()->email }}" empty></x-ui.input>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <x-ui.input name="email_confrimation" id="email_confrimation" type="email" lable="Email conftimation" placeholder="{{ auth()->user()->email }}" empty></x-ui.input>
                </div>
                <div class="col-span-2 md:col-span-1 ">
                    <x-ui.input name="phone" id="phone" lable="Phone Number" class="global_phone" placeholder="{{ auth()->user()->phone }}" empty> </x-ui.input>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <div class="hidden">space</div>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <x-ui.input name="password" id="password" lable="Password" type="password" placeholder="********" empty></x-ui.input>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <x-ui.input name="password_confrimation" id="password_confrimation" lable="Password confrimation" type="password" placeholder="********" empty></x-ui.input>
                </div>

                <div class="col-span-2 md:col-span-1">
                    <x-ui.select name="security_question" id="security_question" lable="security question">
                        <option>Whats you favorite animal</option>
                    </x-ui.select>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <x-ui.input name="security_answer" id="security_answer" lable="Answer" placeholder="{{ auth()->user()->security_answer }}"></x-ui.input>
                </div>

                {{-- /*********
                 SUBMIT
                ***********/ --}}
                <div class="col-span-2 md:col-span-1 col-start-2 flex justify-end ">
                    <x-ui.button size="md" type="submit">Update</x-ui.button>
                </div>
            </div>
        </div>
    </form>
   
</x-layouts.dashboard>
