<x-layouts.app>
    {{-- this is hidden --}}
    <div class="w-[600px] fixed  mt-10 bg-[#efefef] -top-[5000px] -z-50 ">
        <div class="jsc_contract">
            <header>
                <div id="label" class="w-[130px]  h-[185px] top-0 bg-[#3A3A3A]  flex items-center justify-center    relative z-10 left-[70px] ">
                    <div>
                        <img src="{{ asset('qrcode.svg') }}" class="w-[90px]  mt-[44px]" alt="">
                        <div class="text-white font-medium -mt-2 text-center">{{ $dao->name }} </div>
                    </div>

                </div>
                <div id="ribbon" class="w-[600px]   pr-[70px] flex items-center justify-end h-[70px] bg-[#DEC173]  relative -top-[105px] left-0 ">
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
                    <div class="w-[130px] h-[3px] mb-[4px] bg-[#E4C374]"></div>
                    <div class="w-[130px] h-[20px] bg-[#E4C374]"></div>
                </div>
            </footer>
        </div>
    </div>
    {{-- start --}}
    <section class="bg-white rounded border mt-2 py-8 md:w-[690px] md:mx-auto">
        <div class="grid grid-cols-2 md:w-[690px] md:mx-auto ">
            <div class="col-span-2 px-2">
                <div class="flex justify-between items-start mb-4">

                    <div class="flex items-center">
                        <div class="border-[2px] mr-1 w-[30px] h-[30px] font-bold items-center justify-center flex  text-center border-theme-dark rounded-md">L</div>
                        <div class="text-sm">
                            <div class="font-medium">{{ $dao->name }}</div>
                            <div class="-mt-[4px]">{{ $dao->type }}</div>
                        </div>
                    </div>
                    <div class="flex gap-3 text-sm items-center">
                        <div class="flex gap-1 items-center">
                            <ion-icon name="heart-outline"></ion-icon>
                            <span>46</span>
                        </div>
                        <div class="flex gap-1 items-center">
                            <ion-icon name="eye"></ion-icon>
                            <span>1200</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-1 pl-2 text-sm bg-theme-light bg-opacity-30 py-2">
                <div class=" font-medium text-theme-dark">Contract Type</div>
            </div>
            <div class="col-span-1 text-sm bg-theme-light bg-opacity-30 py-2 ">
                <div>Limited Liability Company</div>
            </div>
            <div class="col-span-1  pl-2 text-sm  bg-opacity-30 py-2 ">
                <div class=" font-medium text-theme-dark">Date of Establishment</div>
            </div>
            <div class="col-span-1 text-sm  bg-opacity-30 py-2">
                <div>2022 JUN 13</div>
            </div>
            <div class="col-span-1  pl-2 text-sm bg-theme-light bg-opacity-30 py-2">
                <div class=" font-medium text-theme-dark">Company worth </div>
            </div>
            <div class="col-span-1 text-sm bg-theme-light bg-opacity-30 py-2">
                <div>{{ number_format($dao->worth) }} BNB</div>
            </div>
            <div class="col-span-1 pl-2 text-sm  bg-opacity-30 py-2">
                <div class=" font-medium text-theme-dark">Number of partners </div>
            </div>
            <div class="col-span-1 text-sm  bg-opacity-30 py-2">
                <div>3 Members </div>
            </div>
            <div class="col-span-1  pl-2 text-sm bg-theme-light bg-opacity-30 py-2">
                <div class=" font-medium text-theme-dark">Token ID </div>
            </div>
            <div class="col-span-1 text-sm bg-theme-light bg-opacity-30 py-2">
                <div>{{ $dao->token }} </div>
            </div>
            <div class="col-span-1 pl-2 text-sm  bg-opacity-30 py-2">
                <div class=" font-medium text-theme-dark">Contract </div>
            </div>
            <div class="col-span-1 text-sm  bg-opacity-30 py-2">
                <div> <a class="text-xs text-theme-light underline " href="https://ropsten.etherscan.io/address/0x3d0FfEA8dc6AA0CD48136b61E4b76ea037A815d9"> 0x3d0FfEA8dc6AA0CD48136b61E4b76ea037A815d9 </a> </div>
            </div>
        </div>
        <div class="mt-8 grid gap-2 grid-cols-2 px-2 ">
            <div class="col-span-1 md:text-center md:col-span-2">
                <div class="font-bold text-lg md:text-3xl md:mb-1">{{ $dao->name }} {{ $dao->type }} </div>
                @php
                    function character_limiter($str, $n = 600, $end_char = '&#8230;')
                    {
                        if (strlen($str) < $n) {
                            return $str;
                        }
                    
                        $str = preg_replace('/\s+/', ' ', str_replace(["\r\n", "\r", "\n"], ' ', $str));
                    
                        if (strlen($str) <= $n) {
                            return $str;
                        }
                    
                        $out = '';
                        foreach (explode(' ', trim($str)) as $val) {
                            $out .= $val . ' ';
                    
                            if (strlen($out) >= $n) {
                                $out = trim($out);
                                return strlen($out) == strlen($str) ? $out : $out . $end_char;
                            }
                        }
                    }
                @endphp
                <div class="text-xs  md:mx-auto md:text-sm md:px-[30px] ">{!! character_limiter($dao->document) !!}</div>
                <div class="flex md:w-[350px] md:mt-4 md:mx-auto gap-2 mt-2">
                    <a download="contract"
                        class="jsc_contract_download  text-center block w-full items-center px-2 py-1 border border-transparent text-xs md:text-sm   font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save
                        <ion-icon name="download"></ion-icon>
                    </a>
                    <button type="button"
                        class="w-full items-center px-2 py-1 border border-transparent text-xs md:text-sm    font-medium  rounded shadow-sm  text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Share
                        <ion-icon name="share"></ion-icon>
                    </button>
                </div>
            </div>
            <div class="col-span-1  md:col-span-2">
                <a class="jsc_contract_image_link ">
                    <img data-fancybox class="border jsc_contract_image md:w-[360px] md:mt-12 md:mx-auto">
                </a>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">

    <script>
        const elementToSave = document.querySelector(".jsc_contract");
        html2canvas(elementToSave, {
            windowWidth: 1400,
            width: 600
        }).then(canvas => {
            let image = canvas.toDataURL("image/jpeg");
            $('.jsc_contract_image').attr('src', image)
            $('.jsc_contract_image_link').attr('href', image)
            $('.jsc_contract_download').attr('href', image)
        });
    </script>
</x-layouts.app>
