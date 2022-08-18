<x-layout.dashboard>
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
                    <x-form.input name="email" id="email" type="email" lable="Email address" value="{{ auth()->user()->email }}" disabled class="bg-gray-100"></x-form.input>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <x-form.input name="email_confrimation" id="email_confrimation" type="email" lable="Email conftimation" value="{{ auth()->user()->email }}" disabled class="bg-gray-100">
                    </x-form.input>
                </div>
                <div class="col-span-2 md:col-span-1 ">
                    <x-form.input name="phone" id="phone" lable="Phone Number" class="global_phone" placeholder="{{ auth()->user()->phone }}" empty> </x-form.input>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <div class="hidden">space</div>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <x-form.input name="password" id="password" lable="Password" type="password" placeholder="********" empty></x-form.input>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <x-form.input name="password_confrimation" id="password_confrimation" lable="Password confrimation" type="password" placeholder="********" empty></x-form.input>
                </div>

                <div class="col-span-2 md:col-span-1">
                    <x-form.select name="security_question" id="security_question" lable="security question">
                        <option>Whats you favorite animal</option>
                    </x-form.select>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <x-form.input name="security_answer" id="security_answer" lable="Answer" placeholder="{{ auth()->user()->security_answer }}">
                    </x-form.input>
                </div>

                {{-- /*********
                 SUBMIT
                ***********/ --}}
                <div class="col-span-2  flex justify-end ">
                    <x-form.button size="md" type="submit">Update</x-form.button>
                </div>
            </div>
        </div>
    </form>

</x-layout.dashboard>
