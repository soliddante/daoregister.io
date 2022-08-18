<x-layout.app>

    <div class="max-w-7xl p-4 rounded my-20 shadow mx-auto bg-white">

        <div class="grid grid-cols-12">
            <div class="py-2 flex justify-between col-span-12 ">
                <div class=" font-semibold items-center flex gap-2">
                    <div>
                        <a href="{{ URL::previous() }}" class="text-lg">
                            <i class="fa-light fa-circle-chevron-left"></i>
                        </a>
                    </div>
                    <div>
                        {{ $letter->title }}
                    </div>
                </div>
                <div class="flex gap-2">
                </div>
            </div>

            <div class=" border  px-4  py-2 col-span-2">
                <div>Sender : </div>
            </div>
            <div class=" border  px-4  py-2 col-span-10">
                {{ auth()->user()->where('id', $letter->sender_id)->first()->email }}
            </div>
            <div class=" border  px-4  py-2 col-span-2">
                <div>Receiver : </div>
            </div>
            <div class=" border  px-4  py-2 col-span-10">
                {{ auth()->user()->where('id', $letter->receiver_id)->first()->email }}
            </div>
            <div class=" border  px-4  py-2 col-span-2">
                <div>Token : </div>
            </div>
            <div class=" border  px-4  py-2 col-span-10">
                {{ $letter->token }}
            </div>
            <div class=" border  px-4  py-2 col-span-2">
                <div>Content : </div>
            </div>
            <div class=" border  px-4  py-2 col-span-10">
                {{ $letter->content }}
            </div>
        </div>
        {{-- /*********
        EXTRA
        *********/ --}}
        <div class="grid grid-cols-12 mt-6">
            <div class="py-2 font-semibold col-span-12 ">
                <div> Extra Fields</div>
            </div>
            @foreach (json_decode($letter->extra_fields) as $extra)
                <div class=" border  px-4  py-2 col-span-2">
                    <div> {{ $extra->key }}</div>
                </div>
                <div class=" border  px-4  py-2 col-span-10">
                    {{ $extra->value }}
                </div>
            @endforeach
        </div>
        {{-- /*********
        * SIGNS *
        *********/ --}}
        <div class="grid grid-cols-12 mt-6">
            <div class="py-2 font-semibold col-span-12 ">
                <div>Signatures</div>
            </div>
            <div class="col-span-10 flex items-end">
                <div class="p-4 border items-center flex">
                    <div>
                        <img src="{{ asset('qrcode-black.svg') }}" alt="">
                    </div>
                    <div class="pl-2">
                        <div class="font-semibold">
                            Sender
                        </div>
                        <div>
                            {{ auth()->user()->where('id', $letter->sender_id)->first()->email }}
                        </div>
                        <div>
                            {{ auth()->user()->where('id', $letter->sender_id)->first()->firstname }}
                        </div>

                    </div>
                </div>
                <div class="p-4 border items-center flex">
                    <div>
                        <img src="{{ asset('qrcode-black.svg') }}" alt="">
                    </div>
                    <div class="pl-2">
                        <div class="font-semibold">
                            Reciver
                        </div>
                        <div>
                            {{ auth()->user()->where('id', $letter->sender_id)->first()->email }}
                        </div>
                        <div>
                            {{ auth()->user()->where('id', $letter->sender_id)->first()->firstname }}
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-span-2 flex  gap-1 justify-end items-end">
                <button class="bg-red-800 py-1 text-smv  px-4 text-white">Refuse</button>
                <button class="bg-theme-dark py-1 text-smv  px-4 text-white">Accept</button>
            </div>
        </div>
    </div>
</x-layout.app>
