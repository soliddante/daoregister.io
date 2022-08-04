<x-layouts.dashboard>


    <script>
        Fancybox.bind('[data-fancybox="x"]', {
            Toolbar: {
                display: [{
                        id: "prev",
                        position: "center"
                    },
                    {
                        id: "counter",
                        position: "center"
                    },
                    {
                        id: "next",
                        position: "center"
                    },
                    "zoom",
                    "slideshow",
                    "fullscreen",
                    "download",
                    "thumbs",
                    "close",
                ],
            },
        });
    </script>

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
    <section class="hidden relative jsc_upgrade_section border rounded px-8 py-12 bg-white mt-16 shadow  w-4/5 mx-auto ">

        @if (auth()->user()->type != 1)
            <div class="grid grid-cols-5 gap-4 ">
                <div class="col-span-5 lg:col-span-3">
                    <div class="flex w-full items-center justify-between">
                        <div class="text-lg leading-6 font-semibold  text-theme-dark ">Upgrade Profile</div>
                    </div>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quarat repellendus qui enim iure porro deserunt officia atque incidunt, neque culpa repudiandae molestiae est tempora sunt. Dolores totam ipsam doloremque!
                    </p>
                    <div class="lg:flex gap-2 jsc_hide_after_generate">
                        <div class="lg:mt-4 mt-2 order-last">
                            <div class="rounded-b lg:rounded absolute bottom-0 left-0 w-full lg:w-max  lg:static d-w-max lg:text-base text-sm items-center gap-2 flex bg-theme-light bg-opacity-10 text-theme-dark lg:px-4 px-3 py-2">
                                <div>Current level : </div>
                                <ion-icon name="book-outline"></ion-icon>
                                <div>
                                    Observer
                                </div>
                            </div>
                        </div>
                        <x-ui.button class="mt-4 jsc_generate_nft ">Generate</x-ui.button>
                    </div>


                </div>
                <div class="col-span-5 lg:col-span-2 flex items-end">
                    <div class="w-full">
                        <a class="jsc_contract_image_link" data-fancybox>
                            <img src="" class="w-full  shadow  jsc_contract_image">
                        </a>

                    </div>
                </div>

                <div class="col-span-5">
                    <div class="show_hide_after_generate hidden">
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="rounded-md bg-green-50 p-4 pb-6">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <!-- Heroicon name: solid/check-circle -->
                                    <svg class="h-5 w-5 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-bold text-green-800">Account NFT Generated Successfully</h3>
                                    <div class="mt-2 text-sm text-green-700">
                                        <p>Your ipfs file is ready. To upgrade the user level, you need to mint it in the blockchain
                                    </div>
                                    <div class="mt-4">
                                        <div class="-mx-2 -my-1.5 flex">
                                            <button type="button"
                                                class="jsc_upgrade_magic_button bg-green-700 px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-50 focus:ring-green-600">Upgrade
                                                Account
                                                <ion-icon class="text-lg -mb-1" name="flask"></ion-icon>
                                            </button>
                                            <div class="jsc_check_your_wallet text-blue-700 hidden text-sm px-3 py-2 ml-2 "> Check your wallet and confirm transaction.

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-span-5">
                    <div class="show_after_hash_recived hidden">
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="rounded-md bg-blue-50 p-4 pb-6">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <!-- Heroicon name: solid/check-circle -->
                                    <ion-icon name="alarm-outline" class="h-5 w-5 text-blue-600"></ion-icon>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-bold text-blue-800">Transaction Sent Successfully</h3>
                                    <div class="mt-2 text-sm text-blue-700">
                                        <p>Wait a few moment. After your NFT is minted in the blockchain, your account will be changed to professional user level.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @else
            <div class="grid grid-cols-5 gap-4">
                <div class="col-span-5">


                    <div class="rounded-md bg-green-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <!-- Heroicon name: solid/check-circle -->
                                <ion-icon name="diamond-outline" class="h-5 w-5 text-green-400"></ion-icon>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">Your subscription is <strong>Premium</strong> and you can sign or create a new contract</p>
                            </div>
                            <div class="ml-auto pl-3">
                                <div class="-mx-1.5 -my-1.5">
                                    <a href="{{ auth()->user()->ipfs()->latest()->first()->image }}" data-fancybox="x" 
                                        class="inline-flex items-center px-3 py-2 border  border-transparent text-sm leading-4 font-semibold rounded-md text-green-700 bg-green-100 hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Watch
                                        certificate </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </section>
    <section class="w-[700px]  mx-auto jsc_account_nft bg-white shadow fixed -z-50 -top-[9000px]">
        <header>
            <div class="flex relative justify-between items-start">
                <div class="w-[90px] h-[90px] bg-[#E6C15F]"></div>
                <div class="text-sm mt-[30px] mr-[30px]">
                    {{ date('M d, Y ') }}
                </div>
            </div>
            <div class=" relative z-30 ">
                <div class="flex">
                    <img src="{{ asset('qrcode-black.svg') }}" class="w-[120px] h-[120px]  bg-white p-[8px]  -mt-[60px] ml-[30px]  " alt="">
                    <div class="w-full pl-[14px] ">
                        <div class="text-2xl font-semibold ">
                            <span class="jsc_nft_fistname uppercase">
                                {{ auth()->user()->firstname }}
                            </span>
                            <span class="jsc_nft_lastname uppercase">
                                {{ auth()->user()->lastname }}

                            </span>

                        </div>
                        <div class="flex gap-4 items-center h-[20px] justify-between">
                            <div class="text jsc_nft_email">
                                {{ auth()->user()->email }}

                            </div>
                            <div class="h-[2px] mt-[22px] w-full bg-[#E6C15F]"></div>
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
                    <div class="col-span-1 pb-4 space-y-1 !border-0  ">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm ">First name </div>
                            <div class="text-sm capitalize jsc_nft_firstname">
                                {{ auth()->user()->firstname }}
                            </div>
                        </div>
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm  ">
                                lastname
                            </div>
                            <div class="text-sm capitalize jsc_nft_lastname ">
                                {{ auth()->user()->lastname }}
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1  space-y-1 border-r px-2   ">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Gendar</div>
                            <div class="text-sm capitalize jsc_nft_gendar">
                                {{ auth()->user()->gendar }}
                            </div>
                        </div>
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Birthday</div>
                            <div class="text-sm jsc_nft_gendar">
                                {{ auth()->user()->birthday }}

                            </div>
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
                    <div class="col-span-1 pb-4  space-y-1 !border-0">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Profession</div>
                            <div class="text-sm capitalize">
                                {{ auth()->user()->profession }}
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 pb-4  space-y-1 px-2">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Education</div>
                            <div class="text-sm capitalize"> {{ auth()->user()->education }} </div>
                        </div>
                    </div>
                    <div class="col-span-1 px-2  space-y-1 ">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">University</div>
                            <div class="text-sm capitalize"> {{ auth()->user()->university }}</div>
                        </div>
                    </div>
                </div>
            </aside>
            <aside class="w-full border-t  pt-5 mt-5">
                <div class="grid grid-cols-3 gap-3  space-y-1 divide-x   ">
                    <div class="col-span-3">
                        <div class="text-theme-dark -mb-2 font-bold">
                            Location information
                        </div>
                    </div>
                    <div class="col-span-1 pb-4 !border-0  ">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Contry</div>
                            <div class="text-sm">{{ auth()->user()->country }}</div>
                        </div>
                    </div>
                    <div class="col-span-1 px-2  ">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">City</div>
                            <div class="text-sm">{{ auth()->user()->city }}</div>
                        </div>
                    </div>
                    <div class="col-span-1 pb-4 border-r px-2   ">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Postal Code</div>
                            <div class="text-sm">{{ auth()->user()->postalcode }}</div>
                        </div>
                    </div>
                    <div class="col-span-3 !border-0">
                        <div class="w-full gap-8 -mt-2 flex justify-start">
                            <div class="font-bold text-sm">Address</div>
                            <div class="text-sm">{{ auth()->user()->address }}</div>
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
                    <div class="col-span-1 !border-0">
                        <div class="w-full gap-8 flex justify-start">
                            <div class="font-bold text-sm">Email </div>
                            <div class="text-sm">{{ auth()->user()->email }}</div>
                        </div>
                    </div>
                    <div class="col-span-1 px-2 ">
                        <div class="w-full gap-8  flex justify-start">
                            <div class="font-bold text-sm">Phone </div>
                            <div class="text-sm">{{ auth()->user()->phone }}</div>
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
                    <div class="col-span-1  pb-4 !border-0">
                        <div class="w-full gap-8 flex  justify-start">
                            <div class="font-bold text-sm">Primary language </div>
                            <div class="text-sm">{{ auth()->user()->language_first }}</div>
                        </div>
                    </div>
                    <div class="col-span-1 pb-4 px-2 ">
                        <div class="w-full gap-8  flex justify-start">
                            <div class="font-bold text-sm">Secondary language </div>
                            <div class="text-sm">{{ auth()->user()->language_second }}</div>
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
                    <div class="col-span-1 pb-4  space-y-1 !border-0">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Instagram</div>
                            <div class="text-sm">{{ auth()->user()->instagram ?? '-' }}</div>
                        </div>
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Facebook</div>
                            <div class="text-sm">{{ auth()->user()->facebook ?? '-' }}</div>
                        </div>
                    </div>
                    <div class="col-span-1 pb-4 space-y-1 px-2">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Twitter</div>
                            <div class="text-sm">{{ auth()->user()->twitter ?? '-' }}</div>
                        </div>
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Linkedin</div>
                            <div class="text-sm">{{ auth()->user()->linkedin ?? '-' }}</div>
                        </div>
                    </div>
                    <div class="col-span-1  pb-4 px-2  space-y-1 ">
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">WhatsApp</div>
                            <div class="text-sm">{{ auth()->user()->whatsapp ?? '-' }}</div>
                        </div>
                        <div class="w-full flex justify-between">
                            <div class="font-bold text-sm">Telegarm</div>
                            <div class="text-sm">{{ auth()->user()->telegram ?? '-' }}</div>
                        </div>
                    </div>
                </div>
            </aside>
            <aside class="pt-8 mb-4 ">
                <div class="text-xs bg-[#E6C15F] font-semibold  w-max pl-[30px] pr-2 pb-4 -ml-[30px] mb-4">
                    Wallet Addresss : {{ auth()->user()->wallet }}
                </div>
                <span></span>
            </aside>
        </main>
    </section>
    <div class="border jsc_generated_image hidden rounded px-8 py-12 bg-white mt-16 shadow  w-4/5 mx-auto ">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">


</x-layouts.dashboard>
