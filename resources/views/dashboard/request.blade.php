@php

$dao_unsigns = auth()
    ->user()
    ->daos()
    ->where('partner_accepted', '0')
    ->get();
$dao_unsigns_count = auth()
    ->user()
    ->daos()
    ->where('partner_accepted', '0')
    ->count();

@endphp
<x-layouts.dashboard>

    @if ($dao_unsigns_count == 0)
        <div class="p-8">
            <div class="rounded-md bg-green-100 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <!-- Heroicon name: solid/check-circle -->
                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-green-800">Every thing is allright</h3>
                        <div class="mt-2 text-sm text-green-700">
                            <p>You do not have an unapproved request</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif
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
