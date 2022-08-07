@php

$dao_unsigns = auth()
    ->user()
    ->daos()
    ->where('partner_accepted', '1')
    ->get();

@endphp
<x-layouts.dashboard>
    <section class="p-8">
        <div class="grid grid-cols-3">
            @foreach ($dao_unsigns as $dao_unsign)
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex items-center justify-center flex-col relative h-48 bg-theme-dark text-white">
                        <div class="text-4xl font-bold">{{ $dao_unsign->name ?? '' }}</div>
                        <div>{{ $dao_unsign->type ?? '' }}</div>
                        <a href="{{ route('show_dao', ['dao_id' => $dao_unsign->id]) }}" class="absolute -bottom-4 right-4 "><button type="button"
                                class="flex items-center gap-2 px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Read
                                Contract <ion-icon name="barcode" class="-mb-1"></ion-icon></button></a>
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <div class="grid grid-cols-2">
                                <div class="col-span-2">
                                    <div class="text-lg font-medium text-theme-dark">Contract Type</div>
                                </div>
                                <div class="col-span-2 ">
                                    <div>{{ $dao_unsign->type ?? '' }}</div>
                                </div>
                                <div class="col-span-2 mt-2 ">
                                    <div class="text-lg font-medium text-theme-dark">Date of Establishment</div>
                                </div>
                                <div class="col-span-2">
                                    <div>2022 JUN 13</div>
                                </div>
                                <div class="col-span-2 mt-2">
                                    <div class="text-lg font-medium text-theme-dark">Company worth </div>
                                </div>
                                <div class="col-span-2">
                                    <div>40.00BNB </div>
                                </div>
                                <div class="col-span-2 mt-2">
                                    <div class="text-lg font-medium text-theme-dark">Number of partners </div>
                                </div>
                                <div class="col-span-2">
                                    <div>3 Members </div>
                                </div>


                            </div>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only">Roel Aufderehar</span>
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#" class="hover:underline"> Roel Aufderehar </a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="2020-03-16"> dantevelli@gmail.com </time>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</x-layouts.dashboard>
