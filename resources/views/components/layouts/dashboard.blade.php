<x-layouts.app_full>
    @php
        function aClass($route)
        {
            if (Route::is($route)) {
                echo 'bg-indigo-800 text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium';
            } else {
                echo 'text-indigo-100 hover:bg-indigo-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium';
            }
        }
        function bClass($route)
        {
            if (Route::is($route)) {
                echo 'bg-indigo-800 text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium';
            } else {
                echo 'text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium';
            }
        }
    @endphp

    <div class="h-full flex bg-gray-50">
        <!-- Narrow sidebar -->
        <div class="hidden w-28 bg-indigo-700 overflow-y-auto md:block">
            <div class="w-full py-6 flex flex-col items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('start') }}">
                        <ion-icon class="text-3xl text-white" name="prism"></ion-icon>
                    </a>
                </div>
                <div class="flex-1 mt-6 w-full px-2 space-y-1">
                    <a href="{{ route('dashboard_account') }}" class="{!! aClass('dashboard_account') !!}">
                        <ion-icon class="text-2xl" name="barcode-outline"></ion-icon>
                        <span class="mt-2 text-center">Account</span>
                    </a>

                    <a href="{{ route('dashboard_personal') }}" class="{!! aClass('dashboard_personal') !!}">
                        <ion-icon class="text-2xl" name="person-outline"></ion-icon>
                        <span class="mt-2">Personal</span>
                    </a>

                    <a href="{{ route('dashboard_address') }}" class="{!! aClass('dashboard_address') !!}">
                        <ion-icon class="text-2xl" name="map-outline"></ion-icon>
                        <span class="mt-2">Address</span>
                    </a>
                    <a href="{{ route('dashboard_social') }}" class="{!! aClass('dashboard_social') !!}">
                        <ion-icon class="text-2xl" name="share-social-outline"></ion-icon>
                        <span class="mt-2">Social</span>
                    </a>

                    <a href="{{ route('dashboard_request') }}" class="{!! aClass('dashboard_request') !!}">
                        <ion-icon class="text-2xl" name="git-pull-request-outline"></ion-icon>
                        <span class="mt-2">Requests</span>
                    </a>

                    <a href="{{ route('dashboard_daos') }}" class="{!! aClass('dashboard_daos') !!}">
                        <ion-icon class="text-2xl" name="contract-outline"></ion-icon>
                        <span class="mt-2">DAOs</span>
                    </a>

                    <a href="{{ route('dashboard_upgrade') }}" class="{!! aClass('dashboard_upgrade') !!}">
                        <ion-icon class="text-2xl" name="flask-outline"></ion-icon>
                        <span class="mt-2">Upgrade</span>
                    </a>



                </div>
            </div>
        </div>

        <div class="md:hidden hidden jsc_dash_menu">
            <div class="fixed inset-0 z-40 flex">
                <div class="fixed inset-0 bg-gray-600 bg-opacity-75 jsc_dash_close_menu"></div>


                <div class="relative max-w-xs w-full bg-indigo-700 pt-5 pb-4 flex-1 flex flex-col">


                    <div class="flex-shrink-0 px-4 flex items-center">
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="Workflow">
                    </div>
                    <div class="mt-5 flex-1 h-0 px-2 overflow-y-auto">
                        <nav class="h-full flex flex-col">
                            <div class="space-y-1">
                                <a href="{{ route('dashboard_account') }}" class="{!! bClass('dashboard_account') !!}">
                                    <ion-icon class="text-2xl" name="barcode-outline"></ion-icon>
                                    <span class="ml-3 text-center">Account</span>
                                </a>

                                <a href="{{ route('dashboard_personal') }}" class="{!! bClass('dashboard_personal') !!}">
                                    <ion-icon class="text-2xl" name="person-outline"></ion-icon>
                                    <span class="ml-3">Personal</span>
                                </a>

                                <a href="{{ route('dashboard_address') }}" class="{!! bClass('dashboard_address') !!}">
                                    <ion-icon class="text-2xl" name="map-outline"></ion-icon>
                                    <span class="ml-3">Address</span>
                                </a>
                                <a href="{{ route('dashboard_social') }}" class="{!! bClass('dashboard_social') !!}">
                                    <ion-icon class="text-2xl" name="share-social-outline"></ion-icon>
                                    <span class="ml-3">Social</span>
                                </a>

                                <a href="{{ route('dashboard_upgrade') }}" class="{!! bClass('dashboard_upgrade') !!}">
                                    <ion-icon class="text-2xl" name="flask-outline"></ion-icon>
                                    <span class="ml-3">Upgrade</span>
                                </a>

                            </div>
                        </nav>
                    </div>
                </div>

                <div class="flex-shrink-0 w-14">
                </div>
            </div>
        </div>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="w-full">
                <x-layouts.nav_dashboard></x-layouts.nav_dashboard>
            </header>

            <div class="flex-1 flex items-stretch overflow-hidden">
                <main class="flex-1  overflow-y-auto">
                    <section aria-labelledby="primary-heading" class="min-w-0 flex-1 h-full  flex flex-col lg:order-last">
                        {{ $slot }}
                    </section>
                    <div class="pb-28 block w-full "></div>
                </main>
                <div class="py-4 w-96"></div>
                <aside class="hidden w-96 bg-white border-l border-gray-200  fixed  right-0 top-0 h-screen overflow-y-auto lg:block">
                    <x-layouts.menu_inner nofooter></x-layouts.menu_inner>

                </aside>
            </div>
        </div>
    </div>
    <x-walletjs></x-walletjs>
    <script></script>
    {{-- contract_abi --}}
    <script>
        var database_ipfs = null;
    </script>
    {{-- set contract_abi --}}
    <x-upgrade_json></x-upgrade_json>
    {{-- set database_ipfs --}}
    <x-create_ipfs_js></x-create_ipfs_js>
    {{-- solidity --}}
    <script>
        const web3 = new Web3(provider);
        $('.jsc_upgrade_magic_button').on('click', function() {
            $('.jsc_check_your_wallet').delay(2000).show();
            let contract_address = "0x22aC4FeA7E8EF9D78C2c96A4B1A80D26b1e46cC6";
            let contract = new web3.eth.Contract(contract_abi, contract_address);
            let tokenId = database_ipfs.token;
            let recipient = databaseWallet;
            let tokenURI = database_ipfs.json;
            contract.methods.mintNFT(tokenId, recipient, tokenURI).send({
                from: databaseWallet
            }, function(error, transactionHash) {
                console.log(error);
                console.log(transactionHash);
                if (transactionHash.length != 0) {
                    $('.show_hide_after_generate').hide();
                    $('.show_after_hash_recived').show();
                    //  change user type
                    $.ajax({
                        type: "post",
                        url: "{{ route('user_update') }}",
                        data: {
                            type: "1",
                        },
                        success: function(response) {
                            window.location.reload();
                        }
                    });
                }
            });
        })
    </script>

</x-layouts.app_full>
