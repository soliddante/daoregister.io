<div id="card" class="jsc_card px-4 py-2 text-white bg-theme-dark  w-[320px] h-[200px] mx-auto rounded-lg ">
    <section class="flex  justify-between  flex-col">
        {{-- top --}}
        <div class=" flex justify-between items-center">
            <div>
                <div class="jsc_username ">
                    {{-- {{ auth()->user()->firstname}}
                   {{ auth()->user()->lastname}} --}}
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
<div class="py-1 block w-full"></div>

<section id="mode_-1" class="hidden">
    <div class="jsc_wc_connect cursor-pointer grid grid-cols-6 gap-3 border  rounded-lg w-[320px]   items-center mx-auto h-[50px] justify-start pl-[48px]">
        <div class="col-span-1 flex items-center">
            <img src="{{ asset('img/walletconnect-circle-blue.svg') }}" class="w-[32px] mx-auto block">
        </div>
        <div class="col-span-5 flex items-center">
            <div class="text text-lg font-bold">Connect your wallet</div>
        </div>
    </div>
</section>


<section id="mode_0" class="hidden">
    <div class="w-[320px] mx-auto">
        <div class="rounded-md w-[320px] mx-auto bg-blue-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/information-circle -->
                    <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3 flex-1 md:flex md:justify-between">
                    <p class="text-sm text-blue-700"><strong>Wallet Address : </strong><span class="text-xs break-all block jsc_wallet_address"></span></p>

                </div>
            </div>
        </div>

        <div class="rounded-md mt-2 w-[320px] mx-auto bg-red-50 p-4">
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
    <div class="w-[320px] mx-auto">
        <div class="rounded-md bg-blue-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/information-circle -->
                    <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3 flex-1 md:flex md:justify-between">
                    <p class="text-sm text-blue-700"><strong>Wallet Address : </strong><span class="text-xs break-all block ">{{ auth()->user()->wallet }}</span></p>
                </div>
            </div>
        </div>
        <button type="button"
            class="jsc_wc_connect mt-4 w-full items-center text-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sync
            my
            Wallet</button>
    </div>

</section>

<style>
    #walletconnect-wrapper {
        display: none;
    }
</style>
<script>
    let currentAccount = null;
    let connectionMode = null;
    let databaseWallet = "{{ auth()->user()->wallet }}";
    let provider = new WalletConnectProvider({
        infuraId: "43fc8fa086844be0831a586fe4b764b5",
        chainId: 3,
    })
    provider.enable();
    $('.jsc_wc_connect').on('click', () => {
        $('#walletconnect-wrapper').show();
    });
    provider.wc.on('connect', function() {
        window.location.reload();
    })



    $('.jsc_update_wallet').on('click', function() {
        if (databaseWallet.length == 0) {
            $.ajax({
                type: "get",
                url: "{{ route('update_user_wallet') }}",
                data: {
                    wallet: currentAccount
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        }
    });

    ConnectionMode();

    function getCurrentAccount() {
        web3.eth.getAccounts().then(function(accounts) {
            currentAccount = accounts[0];
            console.log(currentAccount);
            ConnectionMode()
        }).catch(function(e) {
            console.log(e);
        })
    }


    function ConnectionMode() {
        /*
         * MODE -1 = WALLET CONNECTED || DATABASE EMPTY
         * MODE 0 =  WALLET NOT CONNECTED || DATABASE EMPTY 
         * MODE 1 = WALLET NOT CONNECTED || DATABASE FULL
         * MODE 2 = WALLET CONNECTED || DATABASE FULL || NOT MATCH
         * MODE 3 = WALLET CONNECTED || DATABASE FULL || MATCH
         */
        if (currentAccount == null && databaseWallet.length == 0) {
            connectionMode = '-1';
        }
        if (currentAccount != null && databaseWallet.length == 0) {
            connectionMode = '0';
            $('.jsc_wallet_address').text(currentAccount);
        }
        if (currentAccount == null && databaseWallet.length != 0) {
            connectionMode = '1';
        }
        if (currentAccount != null && databaseWallet.length != 0 && currentAccount != databaseWallet) {
            connectionMode = '2';
        }
        if (currentAccount != null && databaseWallet.length != 0 && currentAccount == databaseWallet) {
            connectionMode = '3';
        }
        showConnectionSection();
    }

    function showConnectionSection() {
        if (connectionMode == '-1') {
            $("#mode_-1").show();
        }
        if (connectionMode == '0') {
            $("#mode_0").show();
        }
        if (connectionMode == '1') {
            $("#mode_1").show();
        }
        if (connectionMode == '2') {
            $("#mode_2").show();
        }
        if (connectionMode == '3') {
            $("#mode_3").show();
        }

    }
</script>
