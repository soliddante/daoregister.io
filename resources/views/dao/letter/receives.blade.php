<x-layout.app>
    <div class="p-8 mx-auto my-24 bg-white rounded shadow max-w-7xl">
        <div class="grid grid-cols-6">
            <div class="flex items-center justify-between col-span-6">
                <div class="mb-4 text-xl font-semibold"> Receives messages</div>
                <div class="mb-4 text-xl ">
                    <x-form.select class="font-light w-[200px]">
                        <option value="1" >ALL DAOS </option>
                        <option value="1" >Dao 1 </option>
                        <option value="1" >Dao 2 </option>
                    </x-form.select>
                </div>
            </div>
            <div class="col-span-6 pb-1 mb-2 border-b border-gray-700 ">
                <div class="grid grid-cols-12">
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
                    <div class="grid items-center justify-between w-full grid-cols-12 py-3 border-b cursor-pointer hover:border-gray-300 hover:shadow-sm hover:bg-gray-50">
                        <div class="col-span-2 gap-4 ">
                            <div class="font-semibold"> {{ Str::limit($letter->title, 18) }} </div>
                        </div>
                        <div class="col-span-5">
                            <div>
                                {{ Str::limit($letter->content, 50) }}
                            </div>
                        </div>
                        <div class="col-span-2 text-gray-500"> {{ auth()->user()->where('id', $letter->receiver_id)->first()->email }}</div>
                        <div class="col-span-1 text-center text-gray-500">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="col-span-1 text-center text-gray-500">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="flex justify-end col-span-1">
                            <div class="flex text-xs text-white divide-x rounded w-max">
                                <a href="{{ route('dao/letter.show', ['letter_id' => $letter->id]) }}" class="block px-2 py-1 text-white bg-gray-800 rounded-l hover:bg-gray-600">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <div class="block px-2 py-1 text-white bg-gray-800 hover:bg-gray-600">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="block px-2 py-1 text-white bg-gray-800 rounded-r hover:bg-gray-600">
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
