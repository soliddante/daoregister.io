<div class="w-[600px] fixed -top-[200000px] jsc_modal_contract   mt-10 bg-[#efefef]  ">
    <div>
        <header>
            <div id="label" class="w-[130px]  h-[185px] top-0 bg-[#3A3A3A]  flex items-center justify-center    relative z-10 left-[70px] ">
                <div>
                    <img src="{{ asset('qrcode.svg') }}" class="w-[90px]  mt-[44px]" alt="">
                    <div class="text-white font-medium -mt-2 text-center"> <span class="jsc_dao_name"></span> </div>
                </div>

            </div>
            <div id="ribbon" class="w-[600px]   pr-[70px] flex items-center justify-end h-[70px] bg-[#DEC173]  relative -top-[105px] left-0 ">
                <div class="w-max">
                    <div class="flex items-center -mt-[18px]  justify-between">
                        <div class="font-medium"><span class="jsc_dao_type"></span></div>
                        <div class=" text-xs">Jun 04, 2022</div>
                    </div>
                    <div class="text-xs">0xD613e89BcF5D54eCbCD82a29Eede797A38Fc14c0</div>
                </div>
            </div>
        </header>

        <div class="px-[70px] -mt-[30px]  prose w-full">
            <div class="jsc_dao_document prose">

            </div>
        </div>

        <footer class="px-[70px]">
            <div class="font-medium">Partners Signature</div>
            <div class="grid grid-cols-5 mt-4">
                <div>
                    <img class="mx-auto" src="{{ asset('qrcode-black.svg') }}" alt="">
                    <div class="tetx-center text-xs">Dante velli</div>
                </div>
                <div>
                    <img class="mx-auto" src="{{ asset('qrcode-black.svg') }}" alt="">
                    <div class="text-center text-xs">John Doe</div>
                </div>
                <div>
                    <img class="mx-auto" src="{{ asset('qrcode-black.svg') }}" alt="">
                    <div class="text-center text-xs">Anne Frank</div>
                </div>
                <div>
                    <img class="mx-auto" src="{{ asset('qrcode-black.svg') }}" alt="">
                    <div class="text-center text-xs">Jeff Dunham</div>
                </div>
                <div>
                    <img class="mx-auto" src="{{ asset('qrcode-black.svg') }}" alt="">
                    <div class="text-center text-xs">Danica Patrick</div>
                </div>
            </div>
            <div class="mt-[25px]">
                <div class="w-[130px] h-[3px] mb-[4px] bg-[#E4C374]"></div>
                <div class="w-[130px] h-[20px] bg-[#E4C374]"></div>
            </div>
        </footer>
    </div>
</div>



<!-- This example requires Tailwind CSS v2.0+ -->
<div class="jsc_modal hidden fixed z-10  inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-[300px] sm:w-full sm:p-6">
            <div>

                <div class="mt-3 text-center sm:mt-5">
                    <div class="text-center font-bold text-xl mb-4">Check contract IPFS image</div>

                    <a data-fancybox class="jsc_contract_image_link">
                        <img class="jsc_contract_image w-[240px] mx-auto border-2">
                    </a>
                </div>
            </div>
            <div class="mt-5 sm:mt-8 sm:grid w-[240px] mx-auto block sm:grid-cols-2 sm:gap-2 sm:grid-flow-row-dense">
                <button type="button"
                    class="jsc_do_magic w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">Mint now</button>
                <button type="button"
                    class="jsc_modal_close mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">

<script>
    $('.jsc_modal_close').on('click', function() {
        $('.jsc_modal').addClass('hidden');
    })
</script>



<script></script>
