<nav class="bg-white  w-full shadow ">
    <div class="DIS_max-w-7xl mx-auto px-2 sm:px-6 lg:px-6">
        <div class="relative flex justify-between h-[64px]">
            <div class="flex-0 flex items-center justify-center sm:items-stretch sm:justify-start">

                <div class="hidden  md:flex md:space-x-8">
                    <a href="{{ route('start') }}"
                        class="{{ Route::is('start') ? 'border-theme-500 text-gray-900' : 'border-transparent  text-gray-500' }}   inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Discover </a>
                    <a href="{{ route('create_dao') }}"
                        class="jsc_anchor_create_dao {{ Route::is('create_dao') ? 'border-theme-500' : 'border-transparent' }} text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Generate
                        Dao </a>
                    <a href="{{ route('contact') }}"
                        class="{{ Route::is('contact') ? 'border-theme-500 text-gray-900' : 'border-transparent  text-gray-500' }} text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Contact </a>
                    <a href="{{ route('terms') }}"
                        class="{{ Route::is('terms') ? 'border-theme-500 text-gray-900' : 'border-transparent  text-gray-500' }} text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Terms and Conditions </a>

                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex gap-4 items-center">
                <div class="flex items-center">
                    <ion-icon class="text-gray-600 text-[24px]" name="person-outline"></ion-icon>
                </div>
                <div class="ml-1 relative">
                    <div>
                        <button type="button">
                            <div class="gls_menu_show h-8 w-8 rounded-full flex justify-end items-center">
                                <ion-icon class="text-gray-600 text-[24px]" name="wallet-outline"></ion-icon>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
