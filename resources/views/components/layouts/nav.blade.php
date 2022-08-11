<nav class="bg-white fixed top-0 right-0 w-full z-50   shadow glb_navigation">
    <div class="DIS_max-w-7xl mx-auto px-2 sm:px-6 lg:px-6">
        <div class="relative flex justify-between h-[64px]">
            <div class="flex-0 flex items-center justify-center sm:items-stretch sm:justify-start">
                <a href="{{ route('start') }}" class="flex-shrink-0  text-theme-dark flex gap-2 items-center">
                    <div>
                        <ion-icon class="text-3xl  mt-[6.5px]" name="prism-outline"></ion-icon>
                    </div>
                    <div class="font-bold text-lg">DaoRegister</div>
                </a>
                <div class="hidden md:ml-6 md:flex md:space-x-8">
                    <a href="{{ route('start') }}"
                        class="{{ Route::is('start') ? 'border-indigo-500 text-gray-900' : 'border-transparent  text-gray-500' }}   inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Discover </a>

                    <a href="{{ route('create_dao') }}"
                        class="jsc_anchor_create_dao {{ Route::is('create_dao') ? 'border-indigo-500' : 'border-transparent' }} text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Generate
                        Dao </a>
                    <a href="{{ route('terms') }}"
                        class="{{ Route::is('terms') ? 'border-indigo-500 text-gray-900' : 'border-transparent  text-gray-500' }} text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Terms and Conditions </a>
                    <a href="{{ route('contact') }}"
                        class="{{ Route::is('contact') ? 'border-indigo-500 text-gray-900' : 'border-transparent  text-gray-500' }} text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Contact </a>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex gap-4 items-center">
                <a href="{{ route('dashboard_account') }}" class="flex items-center">
                    <ion-icon class="text-gray-600 text-[24px]" name="person-outline"></ion-icon>
                </a>
                <!-- Profile dropdown -->
                <div class="ml-1 relative">
                    <div>
                        <button type="button">
                            <div class="gls_menu_show h-8 w-8 rounded-full flex justify-end items-center">
                                <ion-icon class="text-gray-600 mb-[-13px] text-[24px]" name="wallet-outline"></ion-icon>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="origin-top-right  absolute right-12 -mt-3 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" --}}
        {{-- tabindex="-1"> --}}
        {{-- <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a> --}}
        {{-- <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a> --}}
        {{-- <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a> --}}
        {{-- </div> --}}
    </div>


</nav>
<div class="w-full mb-[64px]"></div>
<script>
    $('.gls_menu_show').on('click', () => {
        $('.gls_menu').show();
    })

    $('.jsc_anchor_create_dao').on('click', function(e) {
        e.preventDefault();
        var userType = "{{ auth()->user()->type ?? '0' }}";
        if (userType != 'writer') {
            $('.gls_menu_show').click();
            $('.jsc_account_type_error').show();
            $('.jsc_account_type_error').delay(10000).fadeOut();
        }
    })
</script>
<x-layouts.menu />
