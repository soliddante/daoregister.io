<x-layouts.app>
    <style>
        html,
        body {
            background: white !important;
        }

        .css_main_div {
            width: 100% !important;
            max-width: 100% !important;
            padding: 0 !important;
        }
    </style>

    @php
        
        $dao_mode = null;
        
        // NOT SUBSET | ALL PARTNERS AND HESABDARS SHOULD SIGN
        if ($dao->is_subset == 0) {
            $unsignet_daos = DB::table('dao_user')
                ->where('partner_type', '!=', 'observer')
                ->where('partner_accepted', 0);
        
            if ($unsignet_daos->exists()) {
                $dao_mode = 0; //all members not vote
            } else {
                $dao_mode = 10;
            }
        }
        if ($dao->is_subset == 1) {
            switch ($dao->type) {
                case 'owner_only':
                    $unsignet_daos = DB::table('dao_user')
                        ->where('partner_type', '==', 'owner')
                        ->where('partner_accepted', 0);
                    if ($unsignet_daos->exists()) {
                        $dao_mode = 1; //owner not signed
                    } else {
                        $dao_mode = 10;
                    }
                    break;
                case 'majority':
                    $unsignet_daos = DB::table('dao_user')
                        ->where('partner_type', '!=', 'observer')
                        ->where('partner_accepted', 0);
                    $unsignet_daos_share = $unsignet_daos->sum('partner_share');
                    if ($unsignet_daos->exists() && $unsignet_daos_share < 51) {
                        $dao_mode = 2; //majority share not enough
                    } else {
                        $dao_mode = 10;
                    }
                    break;
                case 'both':
                    $unsignet_daos = DB::table('dao_user')
                        ->where('partner_type', '!=', 'observer')
                        ->where('partner_accepted', 0);
                    $owner_not_signed = DB::table('dao_user')
                        ->where('partner_type', '==', 'owner')
                        ->where('partner_accepted', 0)
                        ->exists();
                    $unsignet_daos_share = $unsignet_daos->sum('partner_share');
        
                    if (($unsignet_daos->exists() && $unsignet_daos_share < 51) || $owner_not_signed) {
                        $dao_mode = 3; //majority share not enough or owner not vote
                    } else {
                        $dao_mode = 10;
                    }
                    break;
            }
        }
        
        // dd($dao_mode);
        
    @endphp
  





    <style>
        .jsc_request_alert {
            display: none !important;
        }
    </style>
    {{-- this is hidden --}}
    @php
        $unsigned_daos = DB::table('dao_user')
            ->where('dao_id', $dao->id)
            ->where('partner_type', '!=', 'observer')
            ->where('partner_accepted', '0');
    @endphp
    @if ($unsigned_daos->exists() && $dao->published != 1)
        <div class="rounded-md bg-yellow-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3 ">
                    <h3 class="text-sm text-yellow-800 font-bold">Contract is not published yet </h3>
                    <div class="mt-2 text-sm text-yellow-700">
                        <p>
                            There is {{ $unsigned_daos->count() }} Partner Doesn't Sign contract
                        </p>
                        @foreach ($unsigned_daos->get() as $unsigned_daos)
                            <li class="mt-1">
                                {{ $unsigned_daos->partner_email }}
                            </li>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    @endif





    {{-- hidden dao start --}}
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

    {{-- hidden dao end --}}
    <div class="grid-cols-12 grid w-full">
        <div class="col-span-5">
            <img src="{{ asset('img/daobg.jpg') }}" class="w-full min-h-screen h-full object-cover">
        </div>
        <div class="col-span-7">

            <section class="bg-white py-8 px-10  ">
                <article class="grid grid-cols-2 md:mx-auto ">
                    <div class="col-span-2 px-2">
                        <div class="flex justify-between items-start mb-4">

                            <div class="flex items-center">
                                <div
                                    class="border-[2px] mr-1 w-[30px] h-[30px] font-bold items-center justify-center flex  text-center border-theme-dark rounded-md">
                                    L</div>
                                <div class="text-sm">
                                    <div class="font-medium">{{ $dao->name }}</div>
                                    <div class="-mt-[4px]">{{ $dao->type }}</div>
                                </div>
                            </div>
                            <div class="flex gap-3 text-sm items-center">
                                <a class="py-1 bg-theme-dark text-white px-2 rounded" href="{{ route('reform_dao', ['dao_id' => $dao->id]) }}">Update
                                    Dao</a>

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
                        <div> <a class="text-xs text-theme-light underline "
                                href="https://ropsten.etherscan.io/address/0x3d0FfEA8dc6AA0CD48136b61E4b76ea037A815d9">
                                0x3d0FfEA8dc6AA0CD48136b61E4b76ea037A815d9 </a> </div>
                    </div>
                    <div class="col-span-1  pl-2 text-sm bg-theme-light bg-opacity-30 py-2">
                        <div class=" font-medium text-theme-dark">Reform number</div>
                    </div>
                    <div class="col-span-1 text-sm bg-theme-light bg-opacity-30 py-2">
                        <div>{{ sprintf('%04u', $dao->reform_number) }} </div>
                    </div>
                    <div class="col-span-1 pl-2 text-sm  bg-opacity-30 py-2">
                        <div class=" font-medium text-theme-dark">Publish Status </div>
                    </div>
                    <div class="col-span-1 text-sm  bg-opacity-30 py-2">
                        <div> {{ $dao->published == 1 ? 'True' : 'False' }} </div>
                    </div>
                </article>
                <article class="mt-8 grid gap-2 grid-cols-2 px-2 ">
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
                </article>
            </section>
        </div>

    </div>
    {{-- TODO SHOW USER SHARES AND JOINER SHARE BOLDER --}}
    @if (auth()->user()->daos()->where('dao_id', $dao->id)->wherePivot('partner_accepted', '0')->exists())
        <section>
            <div class="px-4 pt-[50px] block w-full"> </div>
            <div class="fixed bottom-0 w-full right-0 h-[40px] bg-green-100 shadow flex items-center justify-center ">
                <div>
                    You are invited to participate in this Dao. Do you accept this request?
                    {{-- TODO HARD REJECT --}}
                </div>
                <form action="accept_join_dao">
                    <input type="hidden" name="dao_id" value="{{ $dao->id }}">
                    <button type="submit" class="bg-green-500 text-white px-2 rounded cursor-pointer mx-4">Accept and Sign contract</button>

                </form>
            </div>
        </section>
    @endif



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
