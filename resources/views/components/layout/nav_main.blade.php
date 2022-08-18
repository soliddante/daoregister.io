@include('components.layout.links')

<nav class="bg-white fixed top-0 right-0 w-full z-50   shadow glb_navigation css_hidden_full">
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
                    @foreach (Config::get('GLOBAL_top_menu_links') as $link)
                        @if ($link['parent'] == 'no')
                            <div class="relative  top-5">
                                <a href="{{ route($link['route']) }}"
                                    class=" {{ Route::is($link['route']) ? 'border-theme-500 text-gray-900' : 'border-transparent hover:text-gray-700 cursor-pointer text-gray-500' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium pb-[18px] ">
                                    {{ $link['name'] }}
                                </a>
                            </div>
                        @endif
                        @if ($link['parent'] == 'yes')
                            <div class="relative  top-5 jsc_parent_link">
                                <div class=" border-transparent hover:text-gray-700 cursor-pointer text-gray-500  inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium pb-[18px] ">
                                    {{ $link['name'] }}
                                </div>
                                <div class="rounded jsc_child_link hidden  absolute left-4 top-8 py-2 px-6 shadow bg-white ">
                                    @foreach ($link['sub'] as $sublink)
                                        <a href="{{ route($sublink['route']) }}" class=" py-1 block text-gray-600">
                                            {{ $sublink['name'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
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
                                <ion-icon class="text-gray-600 text-[24px]" name="wallet-outline"></ion-icon>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</nav>
<div class="w-full mb-[64px] css_hidden_full"></div>
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
    $('.jsc_parent_link').on('mouseover', function() {
        $('.jsc_child_link').show();
    })
    $('.jsc_parent_link').on('mouseout', function() {
        $('.jsc_child_link').hide();
    })
</script>
<x-layout.menu_main />

<x-code.web3></x-code.web3>
