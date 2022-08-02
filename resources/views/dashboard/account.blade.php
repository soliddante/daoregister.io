<x-layouts.dashboard>
    <div class="border rounded px-8 py-12 bg-white mt-16 shadow block w-4/5 mx-auto ">
        <div class="grid-cols-2 gap-4 px-8 grid ">
            {{-- /***********************
                 ACCOUNT INFORMATION 
                ***********************/ --}}
            <div class="col-span-2">
                <h3 class="text-lg leading-6 font-semibold  text-theme-dark">Account Information</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
            </div>
            <div class="col-span-1">
                <x-ui.input name="email" type="email" lable="Email address"></x-ui.input>
            </div>
            <div class="col-span-1">
                <x-ui.input name="email_confrimation" type="email" lable="Email conftimation"></x-ui.input>
            </div>
            <div class="col-span-1 ">
                <x-ui.input name="phone" lable="Phone Number"></x-ui.input>
            </div>
            <div class="col-span-1">
                <div class="hidden">space</div>
            </div>
            <div class="col-span-1">
                <x-ui.input name="password" lable="Password" type="password"></x-ui.input>
            </div>
            <div class="col-span-1">
                <x-ui.input name="password_confrimation" lable="Password confrimation" type="password"></x-ui.input>
            </div>

            <div class="col-span-1">
                <x-ui.select name="security_answer" lable="security_question">
                    <option>Whats you favorite animal</option>
                </x-ui.select>
            </div>
            <div class="col-span-1">
                <x-ui.input name="security_answer" lable="Answer"></x-ui.input>
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
