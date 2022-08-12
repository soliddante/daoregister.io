<x-layouts.app>
    {{-- @if (auth()->user()->type != 'writer')
        <script>
            window.location.href = "{{ URL::previous() }}";
        </script>
    @endif
    <script>
        if (connectionStatus != 1 || currentAccount == null || databaseWallet.length == 0 || currentAccount != databaseWallet) {
            window.location.href = "{{ URL::previous() }}";
        }
    </script> --}}

 
    <x-dao_modal />
    <form action="{{ route('store_dao') }}" class="jsc_form">
        <input type="hidden" name="reform_number" value="{{ $reform_number ?? 0 }}">
        <input type="hidden" name="is_subset" value="1">
        <input type="hidden" name="parent_id" value="{{ $dao->id }}">
        <input type="hidden" name="token" class="jsc_random_token" value="{{ rand('100', '99999999') }}">
        <section class="pt-4 my-4  space-y-8 divide-y divide-gray-200 rounded bg-white border-gray-200 px-4 border">
            {{-- information --}}
            <article>
                <h1 class="text-2xl  leading-8 font-bold text-gray-900">
                    Generate Dao</h1>
                <div class="text-xs text-gray-500 ">
                    Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Eius, facere ipsum.
                    Neque
                </div>
                <h3 class="text-lg pt-8 leading-6 font-bold text-gray-900">
                    Information</h3>
                <p class="mt-1 text-xs   text-gray-500">On
                    the page about this item will put a link
                    to this URL, which users can click</p>
                <div class="mt-2 grid grid-cols-2 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-3 col-span-1">
                        <label for="name" class="block text-sm font-medium text-gray-700">
                            Name
                        </label>
                        <div class="mt-1">
                            <input type="text" value="{{ $dao->name }}" name="name" id="name"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                    <div class="sm:col-span-3 col-span-1">
                        <label for="symbol" class="block text-sm font-medium text-gray-700">
                            Symbol </label>
                        <div class="mt-1">
                            <input type="text" value="{{ $dao->symbol }}" name="symbol" id="symbol"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                    <div class="sm:col-span-3 col-span-2">
                        <label for="type" class="block text-sm font-medium text-gray-700">
                            Type
                        </label>
                        <div class="mt-1">
                            <select id="type" name="type"
                                class="jsc_type_select shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                <option value="Limited company">
                                    LTD : Limited company
                                </option>
                                <option value="Limited liability company">
                                    LLC : Limited liability
                                    company</option>
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-3 col-span-2">
                        <label for="worth" class="block text-sm font-medium text-gray-700">
                            Worth
                        </label>
                        <div class="mt-1">
                            <input type="text" value="{{ $dao->worth }}" id="worth" name="worth"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">

                        </div>
                    </div>
                </div>
            </article>
            {{-- partners --}}

            <article>
                <h3 class="text-lg pt-8 leading-6 font-bold text-gray-900">
                    Partners</h3>
                <p class="mt-1 text-xs   text-gray-500">On
                    the page about this item will put a link
                    to this URL, which users can click</p>
                <div class="grid text-sm gap-2 mt-4 mb-1 text-gray-700 grid-cols-12">
                    <div class="col-span-4">name</div>
                    <div class="col-span-6">account</div>
                    <div class="col-span-2">share</div>
                </div>
                <div class="jsc_partners">
                    @php
                        $pivot = DB::table('dao_user')
                            ->where('dao_id', $dao->id)
                            ->get();
                    @endphp
                    @foreach ($pivot as $partner)
            
                        <x-partner_update email="{{ $partner->partner_email }}" share="{{ $partner->partner_share }}"
                            type="{{ $partner->partner_type }}" />
                    @endforeach
                </div>
                <div class="flex items-center justify-end mt-2">
                    <div
                        class="jsc_partners_add inline-flex items-center justify-center px-3 py-2 border border-transparent text-xs font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
                        Member +
                    </div>
                </div>
            </article>
            {{-- voting --}}
            <article>
                <h3 class="text-lg pt-8 leading-6 font-bold text-gray-900">
                    Voting</h3>
                <p class="mt-1 text-xs   text-gray-500">On
                    the page about this item will put a link
                    to this URL, which users can click</p>
                <fieldset class="mt-4">
                    <div class="space-y-3 text-sm">
                        <div class="relative flex items-start">
                            <div class="flex items-center h-5">
                                <input value="owner_only" name="vote_mode" type="radio" @if ($dao->vote_mode == 'owner_only') checked @endif
                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                            </div>
                            <div class="ml-3 ">
                                <label for="small" class="font-medium  text-gray-700">Owner
                                    :
                                </label>
                                <span id="small-description" class="text-gray-500 ">Require
                                    owner
                                    vote only</span>
                            </div>
                        </div>

                        <div class="relative flex items-start">
                            <div class="flex items-center h-5">
                                <input value="majority" name="vote_mode" @if ($dao->vote_mode == 'majority') checked @endif type="radio"
                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                            </div>
                            <div class="ml-3 ">
                                <label for="medium" class="font-medium text-gray-700 ">Majority
                                    :
                                </label>
                                <span id="medium-description" class="text-gray-500 ">Require
                                    Majority
                                    votes only</span>
                            </div>
                        </div>

                        <div class="relative flex items-start">
                            <div class="flex items-center h-5">
                                <input value="both" name="vote_mode" @if ($dao->vote_mode == 'both') checked @endif type="radio"
                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                            </div>
                            <div class="ml-3 ">
                                <label for="large" class="font-medium  text-gray-700">Both
                                    :
                                </label>
                                <span id="large-description" class="text-gray-500 ">Require
                                    Majority
                                    and owner votes </span>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </article>
            {{-- main contract --}}
            <article>
                <h3 class="text-lg pt-8 leading-6 font-bold text-gray-900">
                    Document</h3>
                <p class="mt-1 text-xs   text-gray-500">On
                    the page about this item will put a link
                    to this URL, which users can click</p>
                <div class="mt-4 w-full">
                    <textarea id="thetextarea" class="jsc_contract" name="document">{{ $dao->document }}</textarea>
                </div>
            </article>
            {{-- extra fields --}}
            <article>
                <h3 class="text-lg pt-8 leading-6 font-bold text-gray-900">
                    Extra Fields</h3>
                <p class="mt-1 text-xs   text-gray-500">On
                    the page about this item will put a link
                    to this URL, which users can click</p>
                <div class="grid grid-cols-12 gap-2">
                    <div class="col-span-4">
                        <span class="text-gray-700 text-sm">Key</span>
                    </div>
                    <div class="col-span-6">
                        <span class="text-gray-700 text-sm">Value</span>
                    </div>
                    <div class="col-span-2">
                        <span class="text-gray-700 text-sm">Privtie</span>
                    </div>
                </div>
                <div class="jsc_extras">
                    {{-- {{ $dao->extras }} --}}
                    @foreach (json_decode($dao->extras) as $extra)
                        <x-extra key="{{ $extra->key }}" value="{{ $extra->value }}" pv="{{ $extra->pv }}" />
                    @endforeach
                </div>
                <div class="flex justify-start mt-2">
                    <div
                        class="jsc_extras_add inline-flex items-center justify-center px-3 py-2 border border-transparent text-xs font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
                        Extra Field +
                    </div>
                </div>
            </article>
            {{-- submit --}}
            <article>
                <div class="flex justify-between mt-4 pb-4 ">
                    <div class="relative flex items-start">
                        <div class="flex  items-center mt-0.5 h-5">
                            <input name="lazy" type="checkbox" checked
                                class="jsc_lazy focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="comments" class="font-medium text-gray-700">Lazy
                                Minting</label>
                            <p id="comments-description" class="text-gray-500 text-xs">
                                Dont pay
                                fee for now</p>
                        </div>
                    </div>
                   
                </div>
            </article>
            <article class="py-4 flex justify-end">
                <div
                class="jsc_submit cursor-pointer ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
               Re-form Dao
            </div>
            </article>
        </section>
    </form>

    <div class="jsc_partner_modal hidden">
        <div class="p-4 jsc_before_mail_sent">
            <p>Enter your partner mail: </p>
            <input type="mail" class="new_partnet_email border rounded py-2  w-full mt-2 px-2" placeholder="mail@example.com" id="">
            <button type="button" disabled
                class="jsc_partner_email_submit block items-center mt-2 px-4 py-2 border border-transparent
                 text-base font-medium rounded-md shadow-sm filter opacity-40 text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Add
                Partner</button>
            <div class="jsc_email_not_exists_alert hidden  mt-2 text-sm bg-blue-50 rounded-lg py-4 px-4 text-blue-700">This email does not exist in
                the database. Do you
                want to send an invitation
                email?<br>

                <strong>After registration, the user is automatically added to Dao</strong>
                <button disabled class="jsc_send_invite_mail_button px-3 py-2 block mt-2 text-white bg-blue-700 filter opacity-40 rounded"> Send
                    invitation mail </button>
            </div>
        </div>
        <div class="p-4 jsc_after_mail_sent hidden">
            <div class="jsc_email_not_exists_alert hidden  text-center mt-2 text-sm bg-green-50 rounded-lg py-4 px-4 text-green-700">
                <ion-icon class="text-3xl font-semibold block mx-auto text-center" name="checkmark-circle"></ion-icon>
                <div>Invitation mail sent successfully</div>
                <button type="button"
                    class="jsc_close_modal  mx-auto block items-center mt-2 px-6 py-2 border border-transparent
                 text-base font-medium rounded-md shadow-sm   text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Close </button>
            </div>
        </div>
    </div>


    <script>
        // partners
        $('.jsc_partners_add').on('click', function() {
            $('.jsc_partners').append(`<x-partner />`);
        })
        $('body').on('change', '.jsc_partner_select',
            function() {
                if ($(this).val() == 'delete') {
                    $(this).closest('.jsc_partners_item')
                        .remove();
                }
            })
        // extrafields
        $('.jsc_extras_add').on('click', function() {
            $('.jsc_extras').append(`<x-extra />`);



        })
        $('body').on('click', '.jsc_delete_extra', function() {
            $(this).closest('.jsc_extras_item')
                .remove();
        })
        // submit
        $('.jsc_submit').on('click', () => {
            if ($('.jsc_lazy').prop('checked') ==
                true) {
                $('.jsc_form').attr('action',
                    '{{ route('store_dao') }}')
                $('.jsc_form').submit();
            } else {
                $('.jsc_modal').removeClass('hidden');
                $('.jsc_dao_type').text($(
                    '.jsc_type_select option:selected'
                ).val());
                $('.jsc_dao_name').text($(
                    'input[name="name"]').val());
                $('.jsc_dao_document').html(tinymce.get(
                    "thetextarea").getContent());


                const elementToSave = document
                    .querySelector(
                        ".jsc_modal_contract");
                html2canvas(elementToSave, {
                    windowWidth: 1400,
                    width: 600
                }).then(canvas => {
                    let image = canvas
                        .toDataURL(
                            "image/jpeg");
                    $('.jsc_contract_image')
                        .attr('src', image)
                    $('.jsc_contract_image_link')
                        .attr('href', image)
                });

            }
        })
    </script>
    {{-- tiny --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.1/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '.jsc_contract',
            menubar: ' edit view insert format tools table help',
        });
    </script>
    <script>
        let ipfs =
            'https://ipfs.io/ipfs/QmaSED9ZSbdGts5UZqueFJjrJ4oHH3GnmGJdSDrkzpYqRS?filename=the-chainlink-knight.json'
        let token = $('.jsc_random_token').val();

        $('.jsc_do_magic').on('click', function() {
            ipfs =
                'https://ipfs.io/ipfs/QmaSED9ZSbdGts5UZqueFJjrJ4oHH3GnmGJdSDrkzpYqRS?filename=the-chainlink-knight.json'
            token = $('.jsc_random_token').val();
            const web3 = new Web3(window.ethereum);
            const dao_contract_abi = [{
                    "anonymous": false,
                    "inputs": [{
                            "indexed": true,
                            "internalType": "address",
                            "name": "owner",
                            "type": "address"
                        },
                        {
                            "indexed": true,
                            "internalType": "address",
                            "name": "approved",
                            "type": "address"
                        },
                        {
                            "indexed": true,
                            "internalType": "uint256",
                            "name": "tokenId",
                            "type": "uint256"
                        }
                    ],
                    "name": "Approval",
                    "type": "event"
                },
                {
                    "anonymous": false,
                    "inputs": [{
                            "indexed": true,
                            "internalType": "address",
                            "name": "owner",
                            "type": "address"
                        },
                        {
                            "indexed": true,
                            "internalType": "address",
                            "name": "operator",
                            "type": "address"
                        },
                        {
                            "indexed": false,
                            "internalType": "bool",
                            "name": "approved",
                            "type": "bool"
                        }
                    ],
                    "name": "ApprovalForAll",
                    "type": "event"
                },
                {
                    "anonymous": false,
                    "inputs": [{
                            "indexed": true,
                            "internalType": "address",
                            "name": "previousOwner",
                            "type": "address"
                        },
                        {
                            "indexed": true,
                            "internalType": "address",
                            "name": "newOwner",
                            "type": "address"
                        }
                    ],
                    "name": "OwnershipTransferred",
                    "type": "event"
                },
                {
                    "anonymous": false,
                    "inputs": [{
                            "indexed": true,
                            "internalType": "address",
                            "name": "from",
                            "type": "address"
                        },
                        {
                            "indexed": true,
                            "internalType": "address",
                            "name": "to",
                            "type": "address"
                        },
                        {
                            "indexed": true,
                            "internalType": "uint256",
                            "name": "tokenId",
                            "type": "uint256"
                        }
                    ],
                    "name": "Transfer",
                    "type": "event"
                },
                {
                    "inputs": [{
                            "internalType": "address",
                            "name": "to",
                            "type": "address"
                        },
                        {
                            "internalType": "uint256",
                            "name": "tokenId",
                            "type": "uint256"
                        }
                    ],
                    "name": "approve",
                    "outputs": [],
                    "stateMutability": "nonpayable",
                    "type": "function"
                },
                {
                    "inputs": [{
                            "internalType": "address",
                            "name": "recipient",
                            "type": "address"
                        },
                        {
                            "internalType": "string",
                            "name": "tokenURI",
                            "type": "string"
                        },
                        {
                            "internalType": "uint256",
                            "name": "tokenId",
                            "type": "uint256"
                        }
                    ],
                    "name": "mintNFT",
                    "outputs": [{
                        "internalType": "uint256",
                        "name": "",
                        "type": "uint256"
                    }],
                    "stateMutability": "nonpayable",
                    "type": "function"
                },
                {
                    "inputs": [],
                    "name": "renounceOwnership",
                    "outputs": [],
                    "stateMutability": "nonpayable",
                    "type": "function"
                },
                {
                    "inputs": [{
                            "internalType": "address",
                            "name": "from",
                            "type": "address"
                        },
                        {
                            "internalType": "address",
                            "name": "to",
                            "type": "address"
                        },
                        {
                            "internalType": "uint256",
                            "name": "tokenId",
                            "type": "uint256"
                        }
                    ],
                    "name": "safeTransferFrom",
                    "outputs": [],
                    "stateMutability": "nonpayable",
                    "type": "function"
                },
                {
                    "inputs": [{
                            "internalType": "address",
                            "name": "from",
                            "type": "address"
                        },
                        {
                            "internalType": "address",
                            "name": "to",
                            "type": "address"
                        },
                        {
                            "internalType": "uint256",
                            "name": "tokenId",
                            "type": "uint256"
                        },
                        {
                            "internalType": "bytes",
                            "name": "data",
                            "type": "bytes"
                        }
                    ],
                    "name": "safeTransferFrom",
                    "outputs": [],
                    "stateMutability": "nonpayable",
                    "type": "function"
                },
                {
                    "inputs": [{
                            "internalType": "address",
                            "name": "operator",
                            "type": "address"
                        },
                        {
                            "internalType": "bool",
                            "name": "approved",
                            "type": "bool"
                        }
                    ],
                    "name": "setApprovalForAll",
                    "outputs": [],
                    "stateMutability": "nonpayable",
                    "type": "function"
                },
                {
                    "inputs": [{
                            "internalType": "address",
                            "name": "from",
                            "type": "address"
                        },
                        {
                            "internalType": "address",
                            "name": "to",
                            "type": "address"
                        },
                        {
                            "internalType": "uint256",
                            "name": "tokenId",
                            "type": "uint256"
                        }
                    ],
                    "name": "transferFrom",
                    "outputs": [],
                    "stateMutability": "nonpayable",
                    "type": "function"
                },
                {
                    "inputs": [{
                        "internalType": "address",
                        "name": "newOwner",
                        "type": "address"
                    }],
                    "name": "transferOwnership",
                    "outputs": [],
                    "stateMutability": "nonpayable",
                    "type": "function"
                },
                {
                    "inputs": [],
                    "stateMutability": "nonpayable",
                    "type": "constructor"
                },
                {
                    "inputs": [{
                        "internalType": "address",
                        "name": "owner",
                        "type": "address"
                    }],
                    "name": "balanceOf",
                    "outputs": [{
                        "internalType": "uint256",
                        "name": "",
                        "type": "uint256"
                    }],
                    "stateMutability": "view",
                    "type": "function"
                },
                {
                    "inputs": [{
                        "internalType": "uint256",
                        "name": "tokenId",
                        "type": "uint256"
                    }],
                    "name": "getApproved",
                    "outputs": [{
                        "internalType": "address",
                        "name": "",
                        "type": "address"
                    }],
                    "stateMutability": "view",
                    "type": "function"
                },
                {
                    "inputs": [{
                            "internalType": "address",
                            "name": "owner",
                            "type": "address"
                        },
                        {
                            "internalType": "address",
                            "name": "operator",
                            "type": "address"
                        }
                    ],
                    "name": "isApprovedForAll",
                    "outputs": [{
                        "internalType": "bool",
                        "name": "",
                        "type": "bool"
                    }],
                    "stateMutability": "view",
                    "type": "function"
                },
                {
                    "inputs": [],
                    "name": "name",
                    "outputs": [{
                        "internalType": "string",
                        "name": "",
                        "type": "string"
                    }],
                    "stateMutability": "view",
                    "type": "function"
                },
                {
                    "inputs": [],
                    "name": "owner",
                    "outputs": [{
                        "internalType": "address",
                        "name": "",
                        "type": "address"
                    }],
                    "stateMutability": "view",
                    "type": "function"
                },
                {
                    "inputs": [{
                        "internalType": "uint256",
                        "name": "tokenId",
                        "type": "uint256"
                    }],
                    "name": "ownerOf",
                    "outputs": [{
                        "internalType": "address",
                        "name": "",
                        "type": "address"
                    }],
                    "stateMutability": "view",
                    "type": "function"
                },
                {
                    "inputs": [{
                        "internalType": "bytes4",
                        "name": "interfaceId",
                        "type": "bytes4"
                    }],
                    "name": "supportsInterface",
                    "outputs": [{
                        "internalType": "bool",
                        "name": "",
                        "type": "bool"
                    }],
                    "stateMutability": "view",
                    "type": "function"
                },
                {
                    "inputs": [],
                    "name": "symbol",
                    "outputs": [{
                        "internalType": "string",
                        "name": "",
                        "type": "string"
                    }],
                    "stateMutability": "view",
                    "type": "function"
                },
                {
                    "inputs": [{
                        "internalType": "uint256",
                        "name": "tokenId",
                        "type": "uint256"
                    }],
                    "name": "tokenURI",
                    "outputs": [{
                        "internalType": "string",
                        "name": "",
                        "type": "string"
                    }],
                    "stateMutability": "view",
                    "type": "function"
                }
            ];

            const contract_address =
                "0x3d0FfEA8dc6AA0CD48136b61E4b76ea037A815d9";
            const theContract = new web3.eth.Contract(
                dao_contract_abi, contract_address,
                function(e, processedContract) {
                    console.log(processedContract);
                });

            theContract.methods.mintNFT(currentAccount,
                ipfs, token).send({
                from: currentAccount
            }, function(error, hash) {
                console.log(hash);
                if (hash != '') {
                    $('.jsc_form').submit();
                }
            })

        })
    </script>
    <script>
        $('body').on('change', '.jsc_checkbox_input', function() {
            if ($(this).prop('checked') == true) {
                $(this).parent().children('.jsc_checkbox_hidden').val(1)
            } else {
                $(this).parent().children('.jsc_checkbox_hidden').val(0)
            }
        })
    </script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <script>
        // mail regex
        $('.new_partnet_email').on('keyup', function() {


            let xemail = new RegExp('^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$', 'i');
            if (xemail.test($(this).val())) {
                console.log($(this).val());
                console.log(xemail);
                console.log('yes');

                $('.jsc_partner_email_submit').prop('disabled', false)
                $('.jsc_partner_email_submit').removeClass('opacity-40')
                $('.jsc_send_invite_mail_button').prop('disabled', false)
                $('.jsc_send_invite_mail_button').removeClass('opacity-40')
            } else {
                console.log('no');
                console.log($(this).val());
                console.log(xemail);
                $('.jsc_partner_email_submit').prop('disabled', true)
                $('.jsc_partner_email_submit').addClass('opacity-40')
                $('.jsc_send_invite_mail_button').prop('disabled', true)
                $('.jsc_send_invite_mail_button').addClass('opacity-40')
            }
        })

        let selected_input;
        $('body').on('click', '.jsc_partner_new_input',
            function(e) {

                if (e.target !== selected_input) {
                    selected_input = e.target;
                    $('.new_partnet_email').val('');
                    $('.jsc_partner_email_submit').show();
                    $('.jsc_before_mail_sent').show();
                    $('.jsc_after_mail_sent').hide();
                    $('.jsc_email_not_exists_alert').hide();

                }


                if (!$(selected_input).hasClass('js_disable')) {
                    $('.jsc_partner_modal').modal();
                }



            })
        $('.jsc_partner_email_submit').on('click', function() {
            //  is mail exists?
            $.ajax({
                type: "get",
                url: "{{ route('check_exist_by_mail') }}",
                data: {
                    email: $('.new_partnet_email').val(),
                },
                success: function(response) {
                    if (response == 1) {
                        //yes
                        $.modal.close();
                        $(selected_input).val($('.new_partnet_email').val())
                    } else {
                        //no
                        $(selected_input).val();
                        $('.jsc_partner_email_submit').hide();
                        $('.jsc_email_not_exists_alert').show();

                    }
                    console.log(response);
                }
            });

        })
        $(".jsc_send_invite_mail_button").on('click', function() {
            // send mail
            $.ajax({
                type: "get",
                url: "{{ route('send_mail_to_user') }}",
                data: {
                    email: $('.new_partnet_email ').val(),
                },
                success: function(response) {
                    console.log(response);
                    $(selected_input).val($('.new_partnet_email ').val());
                    $.ajax({
                        type: "get",
                        url: "{{ route('create_empty_mail_user') }}",
                        data: {
                            'email': $('.new_partnet_email ').val()
                        },
                        dataType: "dataType",
                        success: function(response) {
                            console.log(response);
                        }
                    });


                    $('.jsc_before_mail_sent').hide();
                    $('.jsc_after_mail_sent').show();
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.dir(xhr.status);
                    console.dir(xhr.responseText);
                    console.dir(thrownError);
                }
            });
        })
        $('.jsc_close_modal').on('click', function() {
            $.modal.close();

        })
    </script>
</x-layouts.app>
