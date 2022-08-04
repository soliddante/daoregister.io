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
                    <div>
                        <ion-icon class="text-3xl text-white" name="prism"></ion-icon>
                    </div>
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
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Content area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="w-full">
                <div class="relative z-10 flex-shrink-0 h-16 bg-white border-b border-gray-200 shadow-sm flex">
                    <button type="button" class="jsc_dash_open border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
                        <!-- Heroicon name: outline/menu-alt-2 -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </button>
                    <div class="flex-1 flex justify-between px-4 sm:px-6">
                        <div class="flex-1 flex">
                            <form class="w-full flex md:ml-0" action="#" method="GET">
                                {{-- top left div --}}
                            </form>
                        </div>
                        <div class="ml-2 flex items-center space-x-4 sm:ml-6 sm:space-x-6">
                            <!-- Profile dropdown -->
                            <div class="relative flex-shrink-0">
                                <div>
                                    <button type="button" class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button" aria-expanded="false"
                                        aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
                                    </button>
                                </div>


                            </div>

                            <button type="button" class="flex bg-indigo-600 p-1 rounded-full items-center justify-center text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <!-- Heroicon name: outline/plus-sm -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                <span class="sr-only">Add file</span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main content -->
            <div class="flex-1 flex items-stretch overflow-hidden">
                <main class="flex-1  overflow-y-auto">
                    <!-- Primary column -->
                    <section aria-labelledby="primary-heading" class="min-w-0 flex-1 h-full  flex flex-col lg:order-last">
                        {{ $slot }}
                    </section>
                    <div class="pb-28 block w-full "></div>
                </main>

                <aside class="hidden w-96 bg-white border-l border-gray-200 overflow-y-auto lg:block">
                    <x-layouts.menu_inner nofooter></x-layouts.menu_inner>

                </aside>
            </div>
        </div>
    </div>
    <x-walletjs></x-walletjs>
    {{-- for upgrade codes here --}}
    <script>
        if (connectionMode != 3) {
            $('.jsc_wallet_error').show();
        } else {
            $('.jsc_upgrade_section').show();
        }
        $('.jsc_dash_close_menu').on('click', function(e) {
            $('.jsc_dash_menu').hide();
        })
        $('.jsc_dash_open').on('click', function(e) {
            $('.jsc_dash_menu').show();
        })
    </script>
    {{-- contract_abi --}}
    <script>
        var database_ipfs = null;
    </script>
    {{-- set contract_abi --}}
    <x-upgrade_json></x-upgrade_json>
    {{-- set database_ipfs --}}
    <x-create_ipfs_js></x-create_ipfs_js>
    {{-- solidity --}}

    {{-- test --}}
    <script>   
        const web3x = new Web3(provider);
        var contract_addressX = "0x22aC4FeA7E8EF9D78C2c96A4B1A80D26b1e46cC6";
        var contractX = new web3x.eth.Contract(contract_abi, contract_addressX);
    </script>
    {{-- endtest --}}
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
            });
        })
    </script>

</x-layouts.app_full>
