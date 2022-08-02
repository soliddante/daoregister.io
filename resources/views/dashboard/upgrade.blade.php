<x-layouts.dashboard>

    <section class="hidden jsc_wallet_error px-4 mt-8">
        <div class="rounded-md bg-red-100 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/x-circle -->
                    <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-semibold text-red-800 ">Problem with wallet connection</h3>
                    <div class="mt-2 text-sm text-red-700">
                        <ul role="list" class="list-disc pl-5 space-y-1">
                            <li>You should connect your wallet before upgrade account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hidden jsc_upgrade_section border rounded px-8 py-12 bg-white mt-16 shadow  w-4/5 mx-auto ">
        <div class="col-span-2">
            <div class="flex w-full items-center justify-between">
                <div class="text-lg leading-6 font-semibold  text-theme-dark ">Upgrade Profile</div>
            </div>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quarat repellendus qui enim iure porro deserunt officia atque incidunt, neque culpa repudiandae molestiae est tempora sunt. Dolores totam ipsam doloremque!
            </p>
            <div class="flex mt-4 justify-between items-center">
                <x-ui.button>Upgrade</x-ui.button>
                <div class="rounded items-center gap-2 flex bg-theme-light bg-opacity-10 text-theme-dark px-4 py-2">
                    <div>Current level : </div>
                    <ion-icon name="book-outline"></ion-icon>
                    <div>
                        Observer
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="px-2 my-8 bg-"></div>
    <section class="w-[700px] mx-auto  bg-white shadow bg-white-200">
        <header>
            <div class="flex relative justify-between items-start">
                <div class="w-[90px] h-[90px] bg-[#E6C15F]"></div>
                <div class="text-sm mt-[30px] mr-[30px]">Jun 20 ,1998</div>
            </div>
            <div class=" relative z-30 ">
                <div class="flex">
                    <img src="{{ asset('qrcode-black.svg') }}" class="w-[120px]  bg-white p-[8px]  -mt-[60px] ml-[30px]  " alt="">
                    <div class="w-full pl-[14px] ">
                        <div class="text-2xl font-semibold">DANIAL ZADRAFIEE</div>
                        <div class="flex gap-4 items-center h-[20px] justify-between">
                            <div class="text ">subdanial@gmail.com</div>
                            <div class="h-[2px] mt-[5px] w-full bg-[#E6C15F]"></div>

                        </div>
                    </div>
                </div>

            </div>
        </header>
        <main class="px-[30px] mt-[20px]">

            <aside class="w-full">
                <div class="grid grid-cols-3  gap-3 divide-x   ">
                    <div class="col-span-3">
                        <div class="text-theme-dark -mb-2 font-bold">
                            Personal information
                        </div>
                    </div>
                    <div class="col-span-1 space-y-1 !border-0  ">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">First name </div>
                            <div class="text-sm">Danial</div>
                        </div>
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Lastname</div>
                            <div class="text-sm">Male</div>
                        </div>
                    </div>
                    <div class="col-span-1  space-y-1 border-r px-2   ">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Gendar</div>
                            <div class="text-sm">Male</div>
                        </div>
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Birthday</div>
                            <div class="text-sm">Jun 20, 2022</div>
                        </div>
                    </div>

                </div>
            </aside>
            <aside class="border-t pt-5 mt-5">
                <div class="grid grid-cols-3 divide-x gap-3  ">
                    <div class="col-span-3 ">
                        <div class="text-theme-dark  -mb-2 font-bold">
                            Carrier information
                        </div>
                    </div>
                    <div class="col-span-1   space-y-1 !border-0">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Profession</div>
                            <div class="text-sm">Engenier</div>
                        </div>

                    </div>
                    <div class="col-span-1  space-y-1 px-2">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Education</div>
                            <div class="text-sm">Art</div>
                        </div>
                    </div>
                    <div class="col-span-1 px-2  space-y-1 ">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">University</div>
                            <div class="text-sm">Amirkabir Uni</div>
                        </div>
                    </div>
                </div>
            </aside>

            <aside class="w-full border-t pt-5 mt-5">
                <div class="grid grid-cols-3 gap-3  space-y-1 divide-x   ">
                    <div class="col-span-3">
                        <div class="text-theme-dark -mb-2 font-bold">
                            Location information
                        </div>
                    </div>
                    <div class="col-span-1 !border-0  ">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Contry</div>
                            <div class="text-sm">US</div>
                        </div>

                    </div>
                    <div class="col-span-1 px-2  ">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">City</div>
                            <div class="text-sm">New York</div>
                        </div>
                    </div>
                    <div class="col-span-1 border-r px-2   ">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Postal Code</div>
                            <div class="text-sm">123456</div>
                        </div>

                    </div>
                    <div class="col-span-3">
                        <div class="w-full gap-8 -mt-2 flex justify-start">
                            <div class="font-bold text-sm">Address</div>
                            <div class="text-sm">1566 Johnny Lane</div>
                        </div>
                    </div>
                </div>
            </aside>
            <aside class="w-full border-t pt-5 mt-5">
                <div class="grid grid-cols-2 gap-3  space-y-1 divide-x ">
                    <div class="col-span-2">
                        <div class="text-theme-dark -mb-2 font-bold">
                            Contact information
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="w-full gap-8 flex justify-start">
                            <div class="font-bold text-sm">Email </div>
                            <div class="text-sm">subdanial@gmail.com</div>
                        </div>
                    </div>
                    <div class="col-span-1 px-2 ">
                        <div class="w-full gap-8  flex justify-start">
                            <div class="font-bold text-sm">Phone </div>
                            <div class="text-sm">+989035366888</div>
                        </div>
                    </div>
                </div>

            </aside>


            <aside class="w-full border-t pt-5 mt-5">
                <div class="grid grid-cols-2 gap-3  space-y-1 divide-x ">
                    <div class="col-span-2">
                        <div class="text-theme-dark -mb-2 font-bold">
                            Language
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="w-full gap-8 flex justify-start">
                            <div class="font-bold text-sm">Primary language </div>
                            <div class="text-sm">English</div>
                        </div>
                    </div>
                    <div class="col-span-1 px-2 ">
                        <div class="w-full gap-8  flex justify-start">
                            <div class="font-bold text-sm">Secondary language </div>
                            <div class="text-sm">Spanish</div>
                        </div>
                    </div>
                </div>

            </aside>

            <aside class="border-t pt-5 mt-5">
                <div class="grid grid-cols-3 divide-x gap-3  ">
                    <div class="col-span-3 ">
                        <div class="text-theme-dark  -mb-2 font-bold">
                            Social media Accounts
                        </div>
                    </div>
                    <div class="col-span-1   space-y-1 !border-0">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Instagram</div>
                            <div class="text-sm">Engenier</div>
                        </div>
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Facebook</div>
                            <div class="text-sm">Art</div>
                        </div>
                    </div>
                    <div class="col-span-1  space-y-1 px-2">

                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Twitter</div>
                            <div class="text-sm">Amirkabir Uni</div>
                        </div>
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Likedin</div>
                            <div class="text-sm">Amirkabir Uni</div>
                        </div>
                    </div>
                  
                    <div class="col-span-1 px-2  space-y-1 ">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">WhatsApp</div>
                            <div class="text-sm">Amirkabir Uni</div>
                        </div>
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Telegarm</div>
                            <div class="text-sm">Amirkabir Uni</div>
                        </div>
                    </div>

                </div>
            </aside>
            <aside class="pt-8  ">
                <span class="text-xs bg-[#E6C15F] font-semibold flex w-max pl-[30px] pr-2 py-1 -ml-[30px] mb-4">
                    Wallet Addresss : 0x095fa042Eba3C28cf874E9f59aE82c72B5F014a1
                </span>
                <span></span>
            </aside>
        </main>
    </section>


    {{-- <div class="w-full flex justify-between">
        <div class="font-bold text-sm">Primary Language</div>
        <div class="text-sm">Amirkabir Uni</div>
    </div>
    <div class="w-full flex justify-between">
        <div class="font-bold text-sm">Second Language</div>
        <div class="text-sm">Amirkabir Uni</div>
    </div> --}}
</x-layouts.dashboard>
