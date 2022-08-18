<x-layout.app>
    <div class="max-w-7xl p-8 my-24 rounded shadow bg-white mx-auto">
        <div class="grid grid-cols-6">
            <div class="col-span-6">
                <div class="font-semibold text-xl mb-4"> Sent messages</div>
            </div>
            <div class="col-span-6 border-b border-gray-700 mb-2 pb-1 ">
                <div class="grid-cols-12 grid">
                    <div class="col-span-2">Title</div>
                    <div class="col-span-5">Summary</div>
                    <div class="col-span-2 ">Sender</div>
                    <div class="col-span-1 text-center">Minted</div>
                    <div class="col-span-1 text-center">Status</div>
                    <div class="col-span-1 text-end">Acction</div>
                </div>
            </div>
            <div class="col-span-6 ">
                @foreach ($letters as $letter)
                    <div class="cursor-pointer  w-full grid grid-cols-12 justify-between items-center border-b hover:border-gray-300 hover:shadow-sm hover:bg-gray-50  py-3">
                        <div class="col-span-2 gap-4 ">
                            <div class="font-semibold"> {{ Str::limit($letter->title, 18) }} </div>
                        </div>
                        <div class="col-span-5">
                            <div>
                                {{ Str::limit($letter->content, 50) }}
                            </div>
                        </div>
                        <div class="text-gray-500 col-span-2"> {{ auth()->user()->where('id', $letter->receiver_id)->first()->email }}</div>
                        <div class="text-gray-500 col-span-1 text-center">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="text-gray-500 col-span-1 text-center">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="col-span-1 flex justify-end">
                            <div class="flex  text-xs w-max  rounded  text-white divide-x">
                                <a href="{{ route('dao/letter.show', ['letter_id' => $letter->id]) }}" class="block px-2 py-1 bg-gray-800 hover:bg-gray-600 rounded-l  text-white">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <div class="block px-2 py-1 bg-gray-800 hover:bg-gray-600  text-white">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="block px-2 py-1 bg-gray-800 hover:bg-gray-600  rounded-r text-white">
                                    <i class="fas fa-download"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />


        </div>
    </div>
    </div>

</x-layout.app>
