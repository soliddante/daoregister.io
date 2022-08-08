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

        .jsc_request_alert {
            display: none !important;
        }
    </style>

    @php
        
        $dao_mode = null;
        $signed_daos_display = DB::table('dao_user')
            ->where('dao_id', $dao->id)
            ->where('partner_type', '!=', 'observer')
            ->where('partner_accepted', 1);
        $refuse_daos_display = DB::table('dao_user')
            ->where('dao_id', $dao->id)
            ->where('partner_type', '!=', 'observer')
            ->where('partner_accepted', '-1');
        // NOT SUBSET | ALL PARTNERS AND HESABDARS SHOULD SIGN
        if ($dao->is_subset == 0) {
            $unsignet_daos = DB::table('dao_user')
                ->where('dao_id', $dao->id)
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
                        ->where('dao_id', $dao->id)
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
                        ->where('dao_id', $dao->id)
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
                        ->where('dao_id', $dao->id)
                        ->where('partner_type', '!=', 'observer')
                        ->where('partner_accepted', 0);
                    $owner_not_signed = DB::table('dao_user')
                        ->where('dao_id', $dao->id)
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
            <img src="{{ asset('img/daobg.jpg') }}" class="w-full  h-full object-cover">
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
                            <div class="flex gap-2 text-sm items-center">
                                <button class="jsc_mint_bulk bg-theme-dark text-white py-1 px-2 rounded">Bulk minting</button>
                                {{-- this is last refund --}}
                                @php
                                    $updatable = false;
                                    // if this is parent0 check it has child
                                    if ($dao->parent_id == 0) {
                                        if (App\Models\Dao::where('parent_id', $dao->id)->exists()) {
                                            // if has child
                                            $updatable = false;
                                        } else {
                                            // if not
                                            $updatable = true;
                                        }
                                    }
                                    
                                    // if not parent 0 fimd last parent then find last child check this is that or not
                                    if ($dao->parent_id != 0) {
                                        $parent = App\Models\Dao::where('id', $dao->parent_id)->first();
                                        $last_child = App\Models\Dao::where('parent_id', $parent->id)
                                            ->latest('reform_number')
                                            ->first();
                                        if ($dao->id == $last_child->id) {
                                            $updatable = true;
                                        } else {
                                            $updatable = false;
                                        }
                                    }
                                @endphp

                                @if ($updatable == true)
                                    @if ($dao->published == 1)
                                        <a class="py-1 bg-theme-light text-white px-2 rounded"
                                            href="{{ route('reform_dao', ['dao_id' => $dao->id]) }}">Update
                                            Dao</a>
                                    @else
                                        <a class="jsc_no_update cursor-not-allowed py-1 bg-gray-400 text-white px-2 rounded" href="#">Update
                                            Dao</a>
                                        <script>
                                            tippy('.jsc_no_update', {
                                                content: "Contract should published before update   ",
                                            });
                                        </script>
                                    @endif
                                @endif
                                <select name="" class="jsc_branches_select text-sm p-0 pl-2 pr-8 rounded h-[28px]" id="">
                                    @if ($dao->parent_id == 0)

                                        <option value="{{ route('show_dao', ['dao_id' => $dao->id]) }}">Brach :
                                            {{ sprintf('%04d', $dao->reform_number) }}
                                            | ID : {{ $dao->id }} </option>



                                        @foreach (App\Models\Dao::where('parent_id', $dao->id)->get() as $branch)
                                            <option value="{{ route('show_dao', ['dao_id' => $branch->id]) }}">Brach :
                                                {{ sprintf('%04d', $branch->reform_number) }}
                                                | ID : {{ $branch->id }}</option>
                                        @endforeach
                                    @else
                                        @php
                                            $main_parent = App\Models\Dao::where('id', $dao->parent_id)->first();
                                        @endphp
                                        <option value="{{ route('show_dao', ['dao_id' => $main_parent->id]) }}">Brach :
                                            {{ sprintf('%04d', $main_parent->reform_number) }}
                                            | ID : {{ $main_parent->id }}</option>
                                        </option>


                                        @foreach (App\Models\Dao::where('parent_id', $main_parent->id)->get() as $branch)
                                            <option value="{{ route('show_dao', ['dao_id' => $branch->id]) }}">
                                                Brach :
                                                {{ sprintf('%04d', $branch->reform_number) }}
                                                | ID : {{ $branch->id }}</option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>
                        </div>
                    </div>
                </article>
                <article>

                    @php
                        $unsigned_daos = DB::table('dao_user')
                            ->where('dao_id', $dao->id)
                            ->where('partner_type', '!=', 'observer')
                            ->where('partner_accepted', '0');
                    @endphp
                    @if ($unsigned_daos->exists() && $dao->published != 1)
                        <div class="rounded-md bg-yellow-50 mb-8 mt-4 p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3 w-full ">
                                    <h3 class="text-sm text-yellow-800 font-bold">Contract is not published yet </h3>

                                    <div class="grid text-sm mt-2 text-yellow-700  grid-cols-3 w-full">
                                        <div class="col-span-1">
                                            <div>
                                                Voting requires
                                            </div>

                                        </div>
                                        <div class="col-span-2">
                                            <div>
                                                @switch($dao->vote_mode)
                                                    @case('owner_only')
                                                        <strong> Owner : </strong>
                                                        Require owner vote only
                                                    @break

                                                    @case('majority')
                                                        <strong> Majority : </strong>
                                                        Require Majority votes only
                                                    @break

                                                    @case('both')
                                                        <strong> Both : </strong>
                                                        Require Majority and Owner votes
                                                    @break

                                                    @default
                                                @endswitch
                                            </div>
                                        </div>
                                        <div class="col-span-3">
                                            <hr class="border-yellow-700 my-2">
                                        </div>
                                        <div class="col-span-1">
                                            Partners who signed
                                        </div>
                                        <div class="col-span-2">

                                            @if ($signed_daos_display->count() != 0)
                                                @foreach ($signed_daos_display->get() as $signed_dao_display)
                                                    <li class="mb-1 flex items-center">
                                                        <div>
                                                            {{ $signed_dao_display->partner_email }}
                                                        </div>
                                                        <div class="bg-green-600 text-xs ml-2 px-2 py-0.5 text-white rounded "> Signed </div>

                                                    </li>
                                                @endforeach
                                            @else
                                                -
                                            @endif

                                        </div>
                                        <div class="col-span-3">
                                            <hr class="border-yellow-700 my-2">
                                        </div>
                                        <div class="col-span-1">
                                            Partners who not desided
                                        </div>
                                        <div class="col-span-2">
                                            @if ($unsigned_daos->count() != 0)
                                                @foreach ($unsigned_daos->get() as $unsigned_dao)
                                                    <li class="mb-1 flex items-center">
                                                        <div>
                                                            {{ $unsigned_dao->partner_email }}
                                                        </div>
                                                        <div class="bg-yellow-600 text-xs ml-2 px-2 py-0.5 text-white rounded ">Not signed </div>

                                                    </li>
                                                @endforeach
                                            @else
                                                -
                                            @endif
                                        </div>
                                        <div class="col-span-3">
                                            <hr class="border-yellow-700 my-2">
                                        </div>
                                        <div class="col-span-1">
                                            Partners who Refuse
                                        </div>
                                        <div class="col-span-2">
                                            @if ($refuse_daos_display->count() != 0)
                                                @foreach ($refuse_daos_display->get() as $refuse_dao_display)
                                                    <li class="mb-1 flex items-center">
                                                        <div>
                                                            {{ $refuse_dao_display->partner_email }}
                                                        </div>
                                                        <div class="bg-red-600 text-xs ml-2 px-2 py-0.5 text-white rounded "> Refused </div>
                                                    </li>
                                                @endforeach
                                            @else
                                                -
                                            @endif
                                        </div>
                                        <div class="col-span-3">
                                            <hr class="border-yellow-700 my-2">
                                        </div>
                                        <div class="col-span-1">
                                            Voting statistic
                                        </div>
                                        <div class="col-span-1">
                                            <div class="w-full rounded border border-green-800 h-[16px] mt-0.5">
                                                <div class=" rounded bg-green-800 h-[15px]"
                                                    style="width:{{ $signed_daos_display->sum('partner_share') }}%;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <span class="text-green-800 ml-2">
                                                {{ $signed_daos_display->sum('partner_share') }}
                                                <span class="-ml-1">%</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endif


                </article>
                <article class="grid grid-cols-2 md:mx-auto ">
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
    @if ($dao->published != 1 &&
        auth()->user()->daos()->where('dao_id', $dao->id)->wherePivot('partner_accepted', '0')->exists())
        <section>
            <div class="px-4 pt-[50px] block w-full"> </div>
            <div class="fixed bottom-0 w-full right-0 h-[60px] bg-blue-100 shadow flex items-center justify-center ">
                <div>
                    You are invited to participate in this Dao. Do you accept this request?
                    {{-- TODO HARD REJECT --}}
                </div>
                <form action="accept_join_dao">
                    <input type="hidden" name="dao_id" value="{{ $dao->id }}">
                    <button type="submit" class="bg-theme-dark text-white py-1 px-4 rounded cursor-pointer ml-4 mr-1 "> Sign contract</button>
                </form>
                <form action="refuse_join_dao">
                    <input type="hidden" name="dao_id" value="{{ $dao->id }}">
                    <button type="submit" class="bg-red-800 text-white py-1 px-4 rounded cursor-pointer ">Refeuse Sign</button>
                </form>

            </div>
        </section>
    @endif

    @if ($dao->published != 1 &&
        auth()->user()->daos()->where('dao_id', $dao->id)->wherePivot('partner_accepted', '-1')->exists())
        <section>
            <div class="px-4 pt-[50px] block w-full"> </div>
            <div class="fixed bottom-0 w-full right-0 h-[60px] bg-blue-100 shadow flex items-center justify-center ">
                <div>
                    You have already refused to accept this contract
                    {{-- TODO HARD REJECT --}}
                </div>
                <form action="accept_join_dao">
                    <input type="hidden" name="dao_id" value="{{ $dao->id }}">
                    <button type="submit" class="bg-theme-dark text-white py-1 px-4 rounded cursor-pointer ml-4 mr-1 ">I changed my mind, Sign
                        contract</button>
                </form>
            </div>
        </section>
    @endif
    <script src="{{ asset('js/jquery.modal.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/jquery.modal.min.css') }}" />
    <div class="jsc_bulk_modal px-4 py-8">
        @php
            $current_dao = $dao;
            if (App\Models\Dao::where('id', $current_dao->parent_id)->exists()) {
                $parent_dao = App\Models\Dao::where('id', $current_dao->parent_id)->first();
                $branch_daos = App\Models\Dao::Where('parent_id', $parent_dao->id)->get();
            } else {
                $parent_dao = $current_dao;
                $branch_daos = App\Models\Dao::Where('parent_id', $current_dao->id)->get();
            }
            
        @endphp
        <table class="w-full min-w-full divide-y divide-gray-300 rounded-t">
            <thead class="bg-gray-50">

                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Id</th>
                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">Branch</th>
                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">Token</th>
                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">Publish status</th>
                <th scope="col" class="px-3 py-3.5  text-sm font-semibold text-center text-gray-900">Minted</th>

            </thead>
            <tr>
                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $parent_dao->id }}</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-900">{{ $parent_dao->reform_number }}</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-900">{{ $parent_dao->token }}</td>
                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-center rounded text-white px-2  text-xs font-medium sm:pr-6">
                    <span class="w-[110px] block {{ $parent_dao->published == 1 ? 'bg-green-600' : ' bg-gray-800' }} rounded py-1 px-2">
                        {{ $parent_dao->published == 1 ? 'Published' : 'Unprepared' }}
                </td>
                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-center rounded text-white px-2  text-xs font-medium sm:pr-6">
                    <span class="w-[60px] block {{ $parent_dao->is_minted == 1 ? 'bg-green-600' : ' bg-gray-800' }} rounded py-1 px-2">
                        {{ $parent_dao->is_minted == 1 ? 'True' : 'False' }}
                </td>
                </span>
            </tr>

            @foreach ($branch_daos as $item)
                <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $item->id }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-900">{{ $item->reform_number }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-900">{{ $item->token }}</td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-center rounded text-white px-2  text-xs font-medium sm:pr-6">
                        <span class="w-[110px] block {{ $item->published == 1 ? 'bg-green-600' : ' bg-gray-800' }} rounded py-1 px-2">
                            {{ $item->published == 1 ? 'Published' : 'Unprepared' }}
                    </td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-center rounded text-white px-2  text-xs font-medium sm:pr-6">
                        <span class=" w-[60px] block {{ $item->is_minted == 1 ? 'bg-green-600' : ' bg-gray-800' }} rounded py-1 px-2">
                            {{ $item->is_minted == 1 ? 'True' : 'False' }}
                    </td>
                    </span>
                </tr>
            @endforeach
        </table>
        {{-- inja mitoonim az parent dao estedafe konim vali nemikonim ke too controller herfeyi tar debug konim --}}
        <a href="{{ route('dao_ipfs_create', ['dao_id' => $dao->id]) }}"
            class="block w-full py-2 text-sm mt-6 bg-theme-dark text-white text-center rounded">Mint all lazy contracts</a>

    </div>
    <script>
        $('.jsc_bulk_modal').modal();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <script>
        $('.jsc_branches_select option[value="{{ URL::full() }}"]').prop('selected', true);
        $('.jsc_branches_select').on('change', function() {
            window.location.href = $(this).val();
        })
    </script>
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
