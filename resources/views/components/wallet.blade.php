<div class="px-6">
    <div id="card" class="jsc_card px-4 py-2 text-white bg-theme-dark w-full h-[200px] mx-auto rounded-lg ">
        <section class="flex  justify-between  flex-col">
            {{-- top --}}
            <div class=" flex justify-between items-center">
                <div>
                    <div class="jsc_username checked capitalize ">
                        {{ auth()->user()->firstname }}
                        {{ auth()->user()->lastname }}
                    </div>
                    <div class="text-xl font-bold">Binance Smart Chain</div>
                </div>
                <div>
                    <div class="w-[44px]">
                        <img src="{{ asset('qrcode.svg') }}" alt="">
                    </div>
                </div>
            </div>
            {{-- middle --}}
            <div class="mt-4">
                <img src="{{ asset('img/simcard.svg') }}" alt="">
                <div class="jsc_wallet_address mt-1 text-[11px]">0x0000000000000000000000000000000000000000</div>
            </div>
            {{-- bottom --}}
            <div class="mt-4">
                <div class="flex justify-between items-center">
                    <div>
                        <div class="text-gray-500 text-sm "> Total Balance </div>
                        <div class="flex">
                            <div class="text-white font-lg font-semibold jsc_balance"> 0.0 </div> <span>BNB</span>
                        </div>
                    </div>
                    <div>
                        <button type="button"
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add
                            funds</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="py-1 block w-full"></div>

<div class="px-6">

    <section id="mode_-1" class="">
        <div
            class="jsc_wc_connect cursor-pointer grid grid-cols-6 gap-3 border  rounded-lg w-full   items-center mx-auto h-[50px] justify-start pl-[48px]">
            <div class="col-span-1 flex items-center">
                <img src="{{ asset('img/walletconnect-circle-blue.svg') }}" class="w-[32px] mx-auto block">
            </div>
            <div class="col-span-5 flex items-center">
                <div class="text text-lg font-bold">Connect your wallet</div>
            </div>
        </div>
    </section>


    <section id="mode_0" class="hidden">
        <div class="w-full mx-auto">
            <div class="rounded-md w-full mx-auto bg-blue-50 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3 flex-1 md:flex md:justify-between">
                        <p class="text-sm text-blue-700"><strong>Wallet Address : </strong><span
                                class="text-xs break-all block jsc_wallet_address"></span></p>
                    </div>
                </div>
            </div>

            <div class="rounded-md mt-2 w-full mx-auto bg-red-50 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">Warning : </h3>
                        <div class="mt-2 text-sm text-red-700">
                            <ul role="list" class="list-disc pl-5 space-y-1">
                                <li>You can't change your wallet address after signup</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button"
                class="jsc_update_wallet mt-4 w-full items-center text-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit
                Wallet</button>
        </div>
    </section>

    <section id="mode_1" class="hidden">
        <div class="w-full mx-auto">
            <div class="rounded-md bg-blue-50 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3 flex-1 md:flex md:justify-between">
                        <p class="text-sm text-blue-700"><strong>Wallet Address : </strong><span
                                class="text-xs break-all block ">{{ auth()->user()->wallet ?? '' }}</span></p>
                    </div>
                </div>
            </div>
            <button type="button"
                class="jsc_wc_connect mt-4 w-full items-center text-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sync
                my
                Wallet</button>
        </div>

    </section>


    <section id="mode_2" class="hidden">
        <div class="w-full mx-auto">
            <div class="rounded-md bg-yellow-50 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-yellow-800">Your wallet is not match with your account</h3>
                        <div class="mt-2 text-sm text-yellow-700">
                            <p>
                                <strong> Your web3 wallet :</strong>
                                <span class="jsc_wallet_address text-xs break-all"></span>
                            </p>

                            <p class="mt-2">
                                <strong> Your account :</strong>
                                <span class="text-xs break-all">{{ auth()->user()->wallet ?? '' }}</span>
                            </p>

                        </div>
                        <button type="button"
                            class="jsc_wc_connect mt-4 w-full items-center text-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Disconnect
                        </button>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section id="mode_3" class="hidden">
        <div class="w-full mx-auto">

            <button type="button"
                class="jsc_wc_disconnect w-full items-center text-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Disconnect
                Wallet</button>
        </div>

    </section>
</div>

<style>
    #walletconnect-wrapper {
        display: none;
        /* FIXME its not perfect way */
    }
</style>
