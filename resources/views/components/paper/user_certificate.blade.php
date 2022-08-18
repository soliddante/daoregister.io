<section class="w-[700px] mx-auto jsc_account_nft bg-white shadow fixed -z-50 -top-[9000px]">
    <header>
        <div class="flex relative justify-between items-start">
            <div class="w-[90px] h-[90px] bg-[#E6C15F]"></div>
            <div class="text-sm mt-[30px] mr-[30px]">
                {{ date('M d, Y ') }}
            </div>
        </div>
        <div class=" relative z-30 ">
            <div class="flex">
                <img src="{{ asset('qrcode-black.svg') }}" class="w-[120px] h-[120px]  bg-white p-[8px]  -mt-[60px] ml-[30px]  " alt="">
                <div class="w-full pl-[14px] ">
                    <div class="text-2xl font-semibold ">
                        <span class="jsc_nft_fistname uppercase">
                            {{ auth()->user()->firstname }}
                        </span>
                        <span class="jsc_nft_lastname uppercase">
                            {{ auth()->user()->lastname }}
                        </span>
                    </div>
                    <div class="flex gap-4 items-center h-[20px] justify-between">
                        <div class="text jsc_nft_email">
                            {{ auth()->user()->email }}
                        </div>
                        <div class="h-[2px] mt-[22px] w-full bg-[#E6C15F]"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="px-[30px] mt-[20px]">
        <aside class="w-full">
            <div class="grid grid-cols-3  gap-3 divide-x   ">
                <div class="col-span-3">
                    <div class="text-theme-dark -mb-2 font-bold">
                        Personal information
                    </div>
                </div>
                <div class="col-span-1 pb-4 space-y-1 !border-0  ">
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm ">First name </div>
                        <div class="text-sm capitalize jsc_nft_firstname">
                            {{ auth()->user()->firstname }}
                        </div>
                    </div>
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm  ">
                            lastname
                        </div>
                        <div class="text-sm capitalize jsc_nft_lastname ">
                            {{ auth()->user()->lastname }}
                        </div>
                    </div>
                </div>
                <div class="col-span-1  space-y-1 border-r px-2   ">
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm">Gendar</div>
                        <div class="text-sm capitalize jsc_nft_gendar">
                            {{ auth()->user()->gendar }}
                        </div>
                    </div>
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm">Birthday</div>
                        <div class="text-sm jsc_nft_gendar">
                            {{ auth()->user()->birthday }}
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <aside class="border-t pt-5 mt-5">
            <div class="grid grid-cols-3 divide-x gap-3  ">
                <div class="col-span-3 ">
                    <div class="text-theme-dark  -mb-2 font-bold">
                        Carrier information
                    </div>
                </div>
                <div class="col-span-1 pb-4  space-y-1 !border-0">
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm">Profession</div>
                        <div class="text-sm capitalize">
                            {{ auth()->user()->profession }}
                        </div>
                    </div>
                </div>
                <div class="col-span-1 pb-4  space-y-1 px-2">
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm">Education</div>
                        <div class="text-sm capitalize"> {{ auth()->user()->education }} </div>
                    </div>
                </div>
                <div class="col-span-1 px-2  space-y-1 ">
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm">University</div>
                        <div class="text-sm capitalize"> {{ auth()->user()->university }}</div>
                    </div>
                </div>
            </div>
        </aside>
        <aside class="w-full border-t  pt-5 mt-5">
            <div class="grid grid-cols-3 gap-3  space-y-1 divide-x   ">
                <div class="col-span-3">
                    <div class="text-theme-dark -mb-2 font-bold">
                        Location information
                    </div>
                </div>
                <div class="col-span-1 pb-4 !border-0  ">
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm">Contry</div>
                        <div class="text-sm">{{ auth()->user()->country }}</div>
                    </div>
                </div>
                <div class="col-span-1 px-2  ">
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm">City</div>
                        <div class="text-sm">{{ auth()->user()->city }}</div>
                    </div>
                </div>
                <div class="col-span-1 pb-4 border-r px-2   ">
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm">Postal Code</div>
                        <div class="text-sm">{{ auth()->user()->postalcode }}</div>
                    </div>
                </div>
                <div class="col-span-3 !border-0">
                    <div class="w-full gap-8 -mt-2 flex justify-start">
                        <div class="font-bold text-sm">Address</div>
                        <div class="text-sm">{{ auth()->user()->address }}</div>
                    </div>
                </div>
            </div>
        </aside>
        <aside class="w-full border-t pt-5 mt-5">
            <div class="grid grid-cols-2 gap-3  space-y-1 divide-x ">
                <div class="col-span-2">
                    <div class="text-theme-dark -mb-2 font-bold">
                        Contact information
                    </div>
                </div>
                <div class="col-span-1 !border-0">
                    <div class="w-full gap-8 flex justify-start">
                        <div class="font-bold text-sm">Email </div>
                        <div class="text-sm">{{ auth()->user()->email }}</div>
                    </div>
                </div>
                <div class="col-span-1 px-2 ">
                    <div class="w-full gap-8  flex justify-start">
                        <div class="font-bold text-sm">Phone </div>
                        <div class="text-sm">{{ auth()->user()->phone }}</div>
                    </div>
                </div>
            </div>
        </aside>
        <aside class="w-full border-t pt-5 mt-5">
            <div class="grid grid-cols-2 gap-3  space-y-1 divide-x ">
                <div class="col-span-2">
                    <div class="text-theme-dark -mb-2 font-bold">
                        Language
                    </div>
                </div>
                <div class="col-span-1  pb-4 !border-0">
                    <div class="w-full gap-8 flex  justify-start">
                        <div class="font-bold text-sm">Primary language </div>
                        <div class="text-sm">{{ auth()->user()->language_first }}</div>
                    </div>
                </div>
                <div class="col-span-1 pb-4 px-2 ">
                    <div class="w-full gap-8  flex justify-start">
                        <div class="font-bold text-sm">Secondary language </div>
                        <div class="text-sm">{{ auth()->user()->language_second }}</div>
                    </div>
                </div>
            </div>
        </aside>
        <aside class="border-t pt-5 mt-5">
            <div class="grid grid-cols-3 divide-x gap-3  ">
                <div class="col-span-3 ">
                    <div class="text-theme-dark  -mb-2 font-bold">
                        Social media Accounts
                    </div>
                </div>
                <div class="col-span-1 pb-4  space-y-1 !border-0">
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm">Instagram</div>
                        <div class="text-sm">{{ auth()->user()->instagram ?? '-' }}</div>
                    </div>
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm">Facebook</div>
                        <div class="text-sm">{{ auth()->user()->facebook ?? '-' }}</div>
                    </div>
                </div>
                <div class="col-span-1 pb-4 space-y-1 px-2">
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm">Twitter</div>
                        <div class="text-sm">{{ auth()->user()->twitter ?? '-' }}</div>
                    </div>
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm">Linkedin</div>
                        <div class="text-sm">{{ auth()->user()->linkedin ?? '-' }}</div>
                    </div>
                </div>
                <div class="col-span-1  pb-4 px-2  space-y-1 ">
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm">WhatsApp</div>
                        <div class="text-sm">{{ auth()->user()->whatsapp ?? '-' }}</div>
                    </div>
                    <div class="w-full flex justify-between">
                        <div class="font-bold text-sm">Telegarm</div>
                        <div class="text-sm">{{ auth()->user()->telegram ?? '-' }}</div>
                    </div>
                </div>
            </div>
        </aside>
        <aside class="pt-8 mb-4 ">
            <div class="text-xs bg-[#E6C15F] font-semibold  w-max pl-[30px] pr-2 pb-4 -ml-[30px] mb-4">
                Wallet Addresss : {{ auth()->user()->wallet }}
            </div>
            <span></span>
        </aside>
    </main>
</section>
