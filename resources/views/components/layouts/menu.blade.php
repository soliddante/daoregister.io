<div class="gls_menu hidden fixed top-[64px] right-0 w-screen  h-screen bg-black bg-opacity-40 z-40">
    <div id="menu" class="jsc_right_menu md:w-[360px] w-full absolute bg-white h-screen right-0 top-0">
        <nav class="h-16 shadow flex w-full items-center">


            <div>
                <div class="flex gap-2 items-center px-4">
                    <ion-icon class="text-3xl" name="person-circle"></ion-icon>
                    <span class="font-medium">My Wallet</span>
                </div>
            </div>



            <div class="jsc_wallet_error absolute  w-full l-0 hidden ">
                <div class="bg-red-100 p-4 w-full ">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <!-- Heroicon name: solid/exclamation -->
                            <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-red-700">
                                You should connect your wallet to create dao
                                <a href="{{ route('start') }}" class="font-medium underline text-yellow-700 hover:text-yellow-600"> back to discovery </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>



        </nav>
        <section class="mt-4">
            <x-wallet />
        </section>
    </div>

</div>
<script>
    $('.gls_menu').on('click', function(e) {
        if (!($(e.target).hasClass('jsc_right_menu') || $(e.target).parents().hasClass('jsc_right_menu'))) {
            $('.gls_menu').fadeOut()
        }
    })
</script>
