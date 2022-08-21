<style>
    html,
    body {
        background: white !important;
    }
</style>
@php
$dao_group_daos = App\Models\Dao::where('group', $dao->group)->get();
$dao_users = DB::table('dao_user')
    ->where('dao_id', $dao->id)
    ->get();
$dao_main_users = $dao_users->where('partner_type', '!=', 'observer');
$dao_main_users_who_signed = $dao_main_users->where('partner_accepted', 1);
$dao_main_users_who_refused = $dao_main_users->where('partner_accepted', -1);
$dao_main_users_who_not_signed = $dao_main_users->where('partner_accepted', 0);
$is_all_group_daos_published = !App\Models\Dao::where('group', $dao->group)
    ->where('published', 0)
    ->exists();
@endphp

<x-layout.app>
    <div class="opacity-0 filter">
        <x-dao.dao_contract_single :dao="$dao"></x-dao.dao_contract_single>
    </div>
    <div class="grid w-full grid-cols-14">
        <div class="col-span-5">
            <img src="{{ asset('img/daobg.jpg') }}" class="object-cover w-full h-full">
        </div>
        <div class="col-span-8">
            <section class="px-4 py-8 bg-white ">
                <article class="grid grid-cols-2 md:mx-auto ">
                    <div class="col-span-2 px-2">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center">
                                <div class="border-[2px] mr-1 w-[30px] h-[30px] font-bold items-center justify-center flex  text-center border-theme-dark rounded-md">
                                    L</div>
                                <div class="text-sm">
                                    <div class="font-medium">{{ $dao->name }}</div>
                                    <div class="-mt-[4px]">{{ $dao->type }}</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 text-sm">


                                @if ($is_all_group_daos_published)
                                    <a class="px-2 py-1 text-white rounded bg-theme-light" href="{{ route('reform_dao', ['dao_id' => $dao->id]) }}">Update
                                        Dao</a>
                                @else
                                    <a class="px-2 py-1 text-white bg-gray-300 rounded cursor-not-allowed jsc_no_update" href="#">Update
                                        Dao</a>
                                    <script>
                                        tippy('.jsc_no_update', {
                                            content: "Last update still not published ",
                                        });
                                    </script>
                                @endif


                                <select class="jsc_branches_select text-sm p-0 pl-2 pr-8 rounded h-[28px]" id="">
                                    @foreach ($dao_group_daos as $in_group_dao)
                                        <option value="{{ route('show_dao', ['dao_id' => $in_group_dao->id]) }}"> {{ $in_group_dao->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </article>
                <article>

                    @if ($dao->published != 1)
                        <div class="p-4 mt-4 mb-8 rounded-md bg-blue-50">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="w-full ml-3 ">
                                    <h3 class="text-sm font-bold text-blue-800">Contract is not published yet </h3>
                                    <div class="grid w-full grid-cols-3 mt-2 text-sm text-blue-700">
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
                                            <hr class="my-2 border-blue-700">
                                        </div>
                                        <div class="col-span-1">
                                            Partners who signed
                                        </div>
                                        <div class="col-span-2">
                                            @if ($dao_main_users_who_signed->count() > 0)
                                                @foreach ($dao_main_users_who_signed as $user)
                                                    <li class="flex items-center mb-1">
                                                        <div>
                                                            {{ $user->partner_email }}
                                                        </div>
                                                        <div class="bg-green-600 text-xs ml-2 px-2 py-0.5 text-white rounded "> Signed </div>
                                                    </li>
                                                @endforeach
                                            @else
                                                -
                                            @endif
                                        </div>
                                        <div class="col-span-3">
                                            <hr class="my-2 border-blue-700">
                                        </div>
                                        <div class="col-span-1">
                                            Partners who not desided
                                        </div>
                                        <div class="col-span-2">
                                            @if ($dao_main_users_who_not_signed->count() > 0)
                                                @foreach ($dao_main_users_who_not_signed as $user)
                                                    <li class="flex items-center mb-1">
                                                        <div>
                                                            {{ $user->partner_email }}
                                                        </div>
                                                        <div class="bg-blue-600 text-xs ml-2 px-2 py-0.5 text-white rounded ">Not signed </div>
                                                    </li>
                                                @endforeach
                                            @else
                                                -
                                            @endif
                                        </div>
                                        <div class="col-span-3">
                                            <hr class="my-2 border-blue-700">
                                        </div>
                                        <div class="col-span-1">
                                            Partners who Refuse
                                        </div>
                                        <div class="col-span-2">
                                            @if ($dao_main_users_who_refused->count() != 0)
                                                @foreach ($dao_main_users_who_refused as $refuse_dao_display)
                                                    <li class="flex items-center mb-1">
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
                                            <hr class="my-2 border-blue-700">
                                        </div>
                                        <div class="col-span-1">
                                            Voting statistic
                                        </div>
                                        <div class="col-span-1">
                                            <div class="w-full rounded border border-green-800 h-[16px] mt-0.5">
                                                <div class=" rounded bg-green-800 h-[15px]" style="width:{{ $dao_main_users_who_signed->sum('partner_share') }}%;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <span class="ml-2 text-green-800">
                                                {{ $dao_main_users_who_signed->sum('partner_share') }}
                                                <span class="-ml-1">%</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endif
                </article>
                <article class="grid grid-cols-2 md:mx-auto ">
                    <div class="col-span-1 py-2 pl-2 text-sm bg-gray-800 bg-opacity-5">
                        <div class="font-medium text-theme-dark">Contract Type</div>
                    </div>
                    <div class="col-span-1 py-2 text-sm bg-gray-800 bg-opacity-5 ">
                        <div>Limited Liability Company</div>
                    </div>
                    <div class="col-span-1 py-2 pl-2 gray-800 bg-opacity-5 ">
                        <div class="font-medium text-theme-dark">Date of Establishment</div>
                    </div>
                    <div class="col-span-1 py-2 gray-800 bg-opacity-5">
                        <div>2022 JUN 13</div>
                    </div>
                    <div class="col-span-1 py-2 pl-2 text-sm bg-gray-800 bg-opacity-5">
                        <div class="font-medium text-theme-dark">Company worth </div>
                    </div>
                    <div class="col-span-1 py-2 text-sm bg-gray-800 bg-opacity-5">
                        <div>{{ number_format($dao->worth) }} BNB</div>
                    </div>
                    <div class="col-span-1 py-2 pl-2 gray-800 bg-opacity-5">
                        <div class="font-medium text-theme-dark">Number of partners </div>
                    </div>
                    <div class="col-span-1 py-2 gray-800 bg-opacity-5">
                        <div>3 Members </div>
                    </div>
                    <div class="col-span-1 py-2 pl-2 text-sm bg-gray-800 bg-opacity-5">
                        <div class="font-medium text-theme-dark">Token ID </div>
                    </div>
                    <div class="col-span-1 py-2 text-sm bg-gray-800 bg-opacity-5">
                        <div>{{ $dao->token }} </div>
                    </div>
                    <div class="col-span-1 py-2 pl-2 gray-800 bg-opacity-5">
                        <div class="font-medium text-theme-dark">Contract </div>
                    </div>
                    <div class="col-span-1 py-2 gray-800 bg-opacity-5">
                        <div> <a class="text-xs underline text-theme-light " href="https://ropsten.etherscan.io/address/0x3d0FfEA8dc6AA0CD48136b61E4b76ea037A815d9">
                                0x3d0FfEA8dc6AA0CD48136b61E4b76ea037A815d9 </a> </div>
                    </div>
                    <div class="col-span-1 py-2 pl-2 text-sm bg-gray-800 bg-opacity-5">
                        <div class="font-medium text-theme-dark">Reform number</div>
                    </div>
                    <div class="col-span-1 py-2 text-sm bg-gray-800 bg-opacity-5">
                        <div>{{ sprintf('%04u', $dao->reform_number) }} </div>
                    </div>
                    <div class="col-span-1 py-2 pl-2 gray-800 bg-opacity-5">
                        <div class="font-medium text-theme-dark">Publish Status </div>
                    </div>
                    <div class="col-span-1 py-2 gray-800 bg-opacity-5">
                        <div> {{ $dao->published == 1 ? 'True' : 'False' }} </div>
                    </div>
                </article>
                <article class="grid grid-cols-2 gap-2 px-2 mt-8 ">
                    <div class="col-span-1 md:text-center md:col-span-2">
                        <div class="text-lg font-bold md:text-3xl md:mb-1">{{ $dao->name }} {{ $dao->type }} </div>
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
                                class="items-center block w-full px-2 py-1 text-xs font-medium text-center text-white bg-indigo-600 border border-transparent rounded shadow-sm jsc_contract_download md:text-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save
                                <ion-icon name="download"></ion-icon>
                            </a>
                            <button type="button"
                                class="items-center w-full px-2 py-1 text-xs font-medium text-indigo-700 bg-indigo-100 border border-transparent rounded shadow-sm md:text-sm hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Share
                                <ion-icon name="share"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <a class="jsc_contract_image_link ">
                            <img data-fancybox class="border jsc_contract_image md:w-[360px] md:mt-12 md:mx-auto">
                        </a>
                    </div>
                </article>
            </section>
        </div>
        <div class="flex flex-col pt-8 space-y-3 items-centercol-span-1">
            @php
                $buttons = [
                    [
                        'icon' => 'fa-light fa-mailbox',
                        'link' => '#',
                        'text' => 'Letters',
                    ],
                    [
                        'icon' => 'fa-light fa-box',
                        'link' => '#',
                        'text' => 'Products',
                    ],
                    [
                        'icon' => 'fa-light fa-coins',
                        'link' => '#',
                        'text' => 'Croudfund',
                    ],
                    [
                        'icon' => 'fa-light fa-border-all',
                        'link' => '#',
                        'text' => 'Accounting',
                    ],
                ];
            @endphp
            @foreach ($buttons as $button)
                <button_dao_show--side>
                    <a href="{{ $button['link'] }}">
                        <inner>
                            <icon>
                                <i class="{{ $button['icon'] }}"></i>
                            </icon>
                            <text>
                                {{ $button['text'] }}
                            </text>
                        </inner>
                    </a>
                </button_dao_show--side>
            @endforeach



        </div>
    </div>

    @if ($dao->published != 1 &&
        auth()->user()->daos()->where('dao_id', $dao->id)->wherePivot('partner_accepted', '0')->exists())
        <section>
            <div class="px-4 pt-[50px] block w-full"> </div>
            <div class="fixed bottom-0 w-full right-0 h-[60px] bg-blue-100 shadow flex items-center justify-center ">
                <div>
                    You are invited to participate in this Dao. Do you accept this request?

                </div>
                <form action="accept_join_dao">
                    <input type="hidden" name="dao_id" value="{{ $dao->id }}">
                    <button type="submit" class="px-4 py-1 ml-4 mr-1 text-white rounded cursor-pointer bg-theme-dark "> Sign contract</button>
                </form>
                <form action="refuse_join_dao">
                    <input type="hidden" name="dao_id" value="{{ $dao->id }}">
                    <button type="submit" class="px-4 py-1 text-white bg-red-800 rounded cursor-pointer ">Refeuse Sign</button>
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

                </div>
                <form action="accept_join_dao">
                    <input type="hidden" name="dao_id" value="{{ $dao->id }}">
                    <button type="submit" class="px-4 py-1 ml-4 mr-1 text-white rounded cursor-pointer bg-theme-dark ">I changed my mind, Sign
                        contract</button>
                </form>
            </div>
        </section>
    @endif
    <script src="{{ asset('js/jquery.modal.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/jquery.modal.min.css') }}" />
    <div class="hidden px-4 py-8 jsc_bulk_modal">
        @php
            $current_dao = App\Models\Dao::where('id', $dao->id)->first();
            if ($current_dao->parent_id == 0) {
                $parent_dao = $current_dao;
            } else {
                $parent_dao = App\Models\Dao::where('id', $current_dao->parent_id)->first();
            }
            $branches_daos = App\Models\Dao::where('parent_id', $parent_dao->id)->get();
            // dd($dao_mode);
            $all_daos = [];
            array_push($all_daos, $parent_dao->toArray());
            foreach ($branches_daos->toArray() as $branch_dao) {
                array_push($all_daos, $branch_dao);
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
            @foreach ($all_daos as $item)
                <tr>
                    <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">{{ $item['id'] }}</td>
                    <td class="px-3 py-4 text-sm text-center text-gray-900 whitespace-nowrap">{{ $item['reform_number'] }}</td>
                    <td class="px-3 py-4 text-sm text-center text-gray-900 whitespace-nowrap">{{ $item['token'] }}</td>
                    <td class="relative px-2 py-4 pl-3 pr-4 text-xs font-medium text-center text-white rounded whitespace-nowrap sm:pr-6">
                        <span class="w-[110px] block {{ $item['published'] == 1 ? 'bg-green-600' : ' bg-gray-800' }} rounded py-1 px-2">
                            {{ $item['published'] == 1 ? 'Published' : 'Unprepared' }}
                    </td>
                    <td class="relative px-2 py-4 pl-3 pr-4 text-xs font-medium text-center text-white rounded whitespace-nowrap sm:pr-6">
                        <span class=" w-[60px] block {{ $item['is_minted'] == 1 ? 'bg-green-600' : ' bg-gray-800' }} rounded py-1 px-2">
                            {{ $item['is_minted'] == 1 ? 'True' : 'False' }}
                    </td>
                    </span>
                </tr>
            @endforeach
        </table>
        {{-- inja mitoonim az parent dao estedafe konim vali nemikonim ke too controller herfeyi tar debug konim --}}
        <form class="jsc_ipfs_form" method="POST" action="{{ route('dao_ipfs_create') }}">
            @csrf
            <input type="hidden" name="dao_id" value="{{ $dao->id }}">
            <div class="block w-full py-2 mt-6 text-sm text-center text-white rounded cursor-pointer jsc_ipfs_form_submit bg-theme-dark">Mint all
                lazy
                contracts</div>
        </form>
    </div>
    <script></script>
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
</x-layout.app>
{{-- <x-daodesign_generator :dao="$dao"> </x-daodesign_generator> --}}
<script>
    $('.jsc_ipfs_form_submit').on('click', function(e) {
        $('.jsc_ipfs_form_submit').addClass('!bg-gray-300 !pointer-event-none !cursor-wait')
        e.preventDefault();
        var ctr = 0;
        $('.jsc_ipfs_contracts').each(function(i, obj) {
            html2canvas(obj, {
                windowWidth: 1400,
                width: 600
            }).then(canvas => {
                ctr++;
                $('<input>', {
                    type: 'text',
                    name: 'ipfs_images_data_array[]',
                    class: 'jsc_hiddens w-96 hidden text-xs',
                    value: JSON.stringify({
                        'dao_id': $(obj).attr('data-daoid'),
                        'dao_token': $(obj).attr('data-daotoken'),
                        'image': canvas.toDataURL("image/jpeg"),
                    }),
                }).appendTo('.jsc_ipfs_form');
                if ($('.jsc_ipfs_contracts').length == ctr) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('dao_ipfs_create') }}",
                        data: $('.jsc_ipfs_form').serializeArray(),
                        success: function(response) {
                            if (response == 1) {
                                // do solidity
                                console.log(response);
                                mintDaoNft();
                                // if solidity ok
                                // do change status
                                // if change status ok 
                                // do refresh
                            }
                        }
                    })
                }
            });
        });
    })
</script>
{{-- <x-dao_nft_abi></x-dao_nft_abi> --}}


{{-- return var dao_nft_abi --}}
<script>
    let tokenId = []
    let tokenURI = []
    let recipient = "{{ auth()->user()->wallet }}";
    let xweb3 = new Web3(provider);
    //






    function mintDaoNft() {


        $.each($('[name="ipfs_images_data_array[]"').serializeArray(), function(index, element) {
            $.ajax({
                url: "{{ route('find_dao_ipfs_by_token') }}",
                data: {
                    'token': JSON.parse(element.value).dao_token
                },
                success: function(response) {
                    tokenId.push(JSON.parse(element.value).dao_token)
                    tokenURI.push(response.json);
                },
            })
        })


        let myInterval = setInterval(() => {
            if (tokenURI.length == $('[name="ipfs_images_data_array[]"').length) {
                console.log(tokenId);
                console.log(tokenURI);
                clearInterval(myInterval);

                let contract_address = "0x1df63417e8Dd9D68cA3758AA703456A6Ac72bF6a";
                let contract = new xweb3.eth.Contract(dao_nft_abi, contract_address);



                contract.methods.mintNFT(tokenId, recipient, tokenURI).send({
                    from: "{{ auth()->user()->wallet }}"
                }, function(error, transactionHash) {
                    console.log(error);
                    console.log(transactionHash);
                    if (transactionHash) {
                        console.log(transactionHash);
                        let foreach_end_flag = [];
                        tokenId.forEach(element => {
                            $.ajax({
                                type: "get",
                                url: "{{ route('change_dao_minted_status') }}",
                                data: {
                                    dao_token: element
                                },
                                success: function(response) {
                                    foreach_end_flag.push(response);
                                },
                                error: function(e, r, z) {
                                    console.log(e)
                                    console.log(r)
                                    console.log(z)
                                }
                            });
                        });
                        secondinterval = setInterval(() => {
                            if (foreach_end_flag.length == tokenId.length) {
                                console.log('everything done fine');
                                window.location.reload();
                                clearInterval(secondinterval);

                            }
                        }, 50);
                    }
                });

            }
        }, 50);




    }
</script>
<script>
    $('.jsc_mint_bulk_open_modal').on('click', function() {
        $('.jsc_bulk_modal').modal();
    })
</script>
