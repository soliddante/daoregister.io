<x-layout.app>

    <div class="p-4 mx-auto my-20 bg-white rounded shadow max-w-7xl">

        <div class="grid grid-cols-12">
            <div class="flex justify-between col-span-12 py-2 ">
                <div class="flex items-center gap-2 font-semibold ">
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

            <div class="col-span-2 px-4 py-2 border ">
                <div>Sender : </div>
            </div>
            <div class="col-span-10 px-4 py-2 border ">
                {{ auth()->user()->where('id', $letter->sender_id)->first()->email }}
            </div>
            <div class="col-span-2 px-4 py-2 border ">
                <div>Receiver : </div>
            </div>
            <div class="col-span-10 px-4 py-2 border ">
                {{ auth()->user()->where('id', $letter->receiver_id)->first()->email }}
            </div>
            <div class="col-span-2 px-4 py-2 border ">
                <div>Token : </div>
            </div>
            <div class="col-span-10 px-4 py-2 border ">
                {{ $letter->token }}
            </div>
            <div class="col-span-2 px-4 py-2 border ">
                <div>Content : </div>
            </div>
            <div class="col-span-10 px-4 py-2 border ">
                {{ $letter->content }}
            </div>
        </div>
        {{-- /*********
        EXTRA
        *********/ --}}
        <div class="grid grid-cols-12 mt-6">
            <div class="col-span-12 py-2 font-semibold ">
                <div> Extra Fields</div>
            </div>
            @foreach (json_decode($letter->extra_fields) as $extra)
                <div class="col-span-2 px-4 py-2 border ">
                    <div> {{ $extra->key }}</div>
                </div>
                <div class="col-span-10 px-4 py-2 border ">
                    {{ $extra->value }}
                </div>
            @endforeach
        </div>
        {{-- /*********
        * SIGNS *
        *********/ --}}
        <div class="grid grid-cols-12 mt-6">
            <div class="col-span-12 py-2 font-semibold ">
                <div>Signatures</div>
            </div>
            <div class="flex items-end col-span-10">
                <div class="flex items-center p-4 border">
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
                <div class="flex items-center p-4 border">
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
            <div class="flex items-end justify-end col-span-2 gap-1">
                <button class="px-4 py-1 text-white bg-red-800 text-smv">Refuse</button>
                <button class="px-4 py-1 text-white bg-theme-dark text-smv">Accept</button>
            </div>
        </div>
    </div>
</x-layout.app>
