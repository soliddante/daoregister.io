<x-layout.dashboard>

    <x-paper.user_certificate></x-paper.user_certificate>



    <section class="hidden jsc_wallet_error px-4 mt-8">
        <div class="rounded-md bg-red-100 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quarat repellendus qui enim iure porro deserunt officia atque
                        incidunt, neque culpa repudiandae molestiae est tempora sunt. Dolores totam ipsam doloremque!
                    </p>
                    <div class="lg:flex gap-2 jsc_hide_after_generate">
                        <div class="lg:mt-4 mt-2 order-last">
                            <div
                                class="rounded-b lg:rounded absolute bottom-0 left-0 w-full lg:w-max  lg:static d-w-max lg:text-base text-sm items-center gap-2 flex bg-theme-light bg-opacity-10 text-theme-dark lg:px-4 px-3 py-2">
                                <div>Current level : </div>
                                <ion-icon name="book-outline"></ion-icon>
                                <div>
                                    Observer
                                </div>
                            </div>
                        </div>
                        <x-form.button class="mt-4 jsc_generate_nft ">Generate</x-form.button>
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
                        <div class="rounded-md bg-green-50 p-4 pb-6">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
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
                                            <div class="jsc_check_your_wallet text-blue-700 hidden text-sm px-3 py-2 ml-2 "> Check your wallet and
                                                confirm transaction.
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
                        <div class="rounded-md bg-blue-50 p-4 pb-6">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <ion-icon name="alarm-outline" class="h-5 w-5 text-blue-600"></ion-icon>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-bold text-blue-800">Transaction Sent Successfully</h3>
                                    <div class="mt-2 text-sm text-blue-700">
                                        <p>Wait a few moment. After your NFT is minted in the blockchain, your account will be changed to professional
                                            user level.</p>
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
                                <ion-icon name="diamond-outline" class="h-5 w-5 text-green-400"></ion-icon>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">Your subscription is <strong>Premium</strong> and you can sign or create
                                    a new contract</p>
                            </div>
                            <div class="ml-auto pl-3">
                                <div class="-mx-1.5 -my-1.5">
                                    <a href="{{ auth()->user()->ipfs()->latest()->first()->image }}" data-fancybox type="button"
                                        class="inline-flex items-center px-3 py-2 border  border-transparent text-sm leading-4 font-semibold rounded-md text-green-700 bg-green-100 hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Watch
                                        certificate </a>
                                </div>
                            </div>
                        </div>
                        Share it
                        <div class="shareon" data-url="{{ auth()->user()->ipfs()->latest()->first()->image }}">
                            <a class="facebook"></a>
                            <a class="linkedin"></a>
                            <a class="mastodon"></a>
                            <a class="odnoklassniki"></a>
                            <a class="pinterest"></a>
                            <a class="pocket"></a>
                            <a class="reddit"></a>
                            <a class="telegram"></a>
                            <a class="twitter"></a>
                            <a class="viber"></a>
                            <a class="vkontakte"></a>
                            <a class="whatsapp"></a>
                        </div>
                    </div>
                    <div class="grid grid-cols-2">
                        @php
                            $ipfs = auth()
                                ->user()
                                ->ipfs()
                                ->latest()
                                ->first();
                        @endphp
                        <div class="col-span-1">
                            Fullname
                        </div>
                        <div class="col-span-1">
                            <span class="capitalize">{{ $ipfs->firstname }} {{ $ipfs->lastname }}</span>
                        </div>
                        <div class="col-span-1">
                            Email
                        </div>
                        <div class="col-span-1">
                            <span>{{ $ipfs->email }}</span>
                        </div>
                        <div class="col-span-1">
                            Contract
                        </div>
                        <div class="col-span-1">
                            <span>0x22aC4FeA7E8EF9D78C2c96A4B1A80D26b1e46cC6</span>
                        </div>
                        <div class="col-span-1">
                            Token
                        </div>
                        <div class="col-span-1">
                            <span>{{ $ipfs->token }}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>

    <div class="hidden border jsc_generated_image  rounded px-8 py-12 bg-white mt-16 shadow  w-4/5 mx-auto ">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link href="https://cdn.jsdelivr.net/npm/shareon@2/dist/shareon.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/shareon@2/dist/shareon.iife.js" defer init></script>

    <x-code.create_nft_user></x-code.create_nft_user>
</x-layout.dashboard>
