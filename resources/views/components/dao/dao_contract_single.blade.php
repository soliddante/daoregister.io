<div class="w-[600px] fixed  mt-10 bg-[#efefef] -top-[5000px] -z-50 ">
    <div class="jsc_contract">
        <header>
            <div id="label" class="w-[130px]  h-[185px] top-0 bg-[#3A3A3A]  flex items-center justify-center    relative z-10 left-[70px] ">
                <div>
                    <img src="{{ asset('qrcode.svg') }}" class="w-[90px]  mt-[44px]" alt="">
                    <div class="text-white font-medium -mt-2 text-center">{{ $dao->name }} </div>
                </div>

            </div>
            <div id="ribbon" class="w-[600px]   pr-[70px] flex items-center justify-end h-[70px] text-white bg-[#173d7a]  relative -top-[105px] left-0 ">
                <div class="w-max">
                    <div class="flex items-center -mt-[18px]  justify-between">
                        <div class="font-medium">{{ $dao->type }}</div>
                        <div class=" text-xs">Jun 04, 2022</div>
                    </div>
                    <div class="text-xs">0xD613e89BcF5D54eCbCD82a29Eede797A38Fc14c0</div>
                </div>
            </div>
        </header>

        <div id="body" class="px-[70px] -mt-[30px]  prose w-full">
            {!! $dao->document !!}
        </div>

        <footer class="px-[70px]">
            <div class="font-medium">Partners Signature</div>
            <div class="grid grid-cols-5 mt-4">
                <div>
                    <img class="mx-auto" src="{{ asset('qrcode-black.svg') }}" alt="">
                    <div class="tet-center text-xs">Dante velli</div>
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
                <div class="w-[130px] h-[3px] mb-[4px] bg-[#173d7b]"></div>
                <div class="w-[130px] h-[20px] bg-[#173d7b]"></div>
            </div>
        </footer>
    </div>
</div>
