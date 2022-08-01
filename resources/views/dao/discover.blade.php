<x-layouts.app>

    <div class="relativemt-2 pb-20 px-4 sm:px-6  lg:pb-28 lg:px-8">
        <div class="relative max-w-7xl mx-auto">
            <a href="{{ route('create_dao') }}" class="flex justify-between  pb-14 pt-6   ">
                <div class="text-xs md:text-base ">Join Decentral organization</div>
                <div class="text-xs md:text-base text-theme-dark font-medium">Generate Dao <ion-icon class="-mb-0.5" name="chevron-forward-outline"></ion-icon>
                </div>
            </a>

            <div class="text-center">
                <img src="{{ asset('img/hero.svg') }}" class="px-8 mx-auto w-[460px] mb-6" alt="">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl ">Discover Contracts</h2>
                <p class="mt-3 max-w-2xl md:text-xl mx-auto text-gray-500 sm:mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.</p>
            </div>
            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                
                @php
                    $daos = App\Models\Dao::all();
                @endphp
                @foreach ($daos as $dao)
                <x-dao_card :dao="$dao"/>
                @endforeach
               

            </div>
        </div>
    </div>
</x-layouts.app>
