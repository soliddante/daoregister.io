@php
$parent_daos = App\Models\Dao::where('parent_id', 0)->get();
@endphp
<x-layout.app>
    <div class="relativemt-2 md:pt-[40px] pb-20 px-4 sm:px-6  lg:pb-28 lg:px-8">
        <div class="relative max-w-7xl mx-auto">
            <a href="{{ route('create_dao') }}" class="flex justify-between  items-center pb-14   ">
                <div class="text-xs md:text-base  py-2  ">Join Decentral organization</div>
                <div class="text-xs md:text-base text-white rounded px-2 py-2 cursor-pointer  bg-theme-dark font-medium">Generate Dao <ion-icon
                        class="-mb-0.5" name="chevron-forward-outline"></ion-icon>
                </div>
            </a>
            <div class="text-center pt-8">
                <img src="{{ asset('img/hero.svg') }}" class="px-8 mx-auto w-[460px] mb-6" alt="">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl ">Discover Contracts</h2>
                <p class="mt-3 max-w-2xl md:text-xl mx-auto text-gray-500 sm:mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa
                    libero labore natus atque, ducimus sed.</p>
            </div>
            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                @foreach ($parent_daos as $parent_dao)
                    @php
                        $last_reform = App\Models\Dao::where('published', 1)
                            ->where('group', $parent_dao->group)
                            ->latest('reform_number')
                            ->first();
                        if ($last_reform == null) {
                            $last_reform = $dao;
                        }
                    @endphp
                    <x-dao.dao_card :dao="$last_reform" />
                @endforeach
            </div>
        </div>
    </div>

</x-layout.app>
