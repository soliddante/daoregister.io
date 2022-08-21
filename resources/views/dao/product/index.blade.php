<x-layout.app>
    <main class="p-4 mx-auto mt-32 bg-white rounded max-w-7xl">
        @php
            $products = App\Models\Product::get();
        @endphp
        <header class="w-full flex justify-between items-center">
            <left class="flex items-center justify-start gap-4">
                <title class="block font-semibold">Products</title>

            </left>
            <right class="flex items-center gap-2">
                <label class="block -mb-1 ">Selected Dao </label>
                <div>
                    <x-form.select class="text-sm min-w-[130px]">
                        <option value="0">Leovo</option>
                        <option value="0">Apple</option>
                    </x-form.select>
                </div>

            </right>
        </header>
        <div class=" mt-4 grid grid-cols-4 gap-8">



            @foreach ($products as $product)
                <col-1>
                    <card class="block p-4 rounded shadow min-h-[580px]">
                        <header class="w-full ">
                            <flex class="items-center justify-between">
                                <code class="px-2 py-1 font-sans text-xs text-white rounded bg-theme-700">#{{ $product->token }}</code>
                                <price class="block py-1 text-sm ">${{ $product->price }}</price>
                            </flex>
                            <image>
                                <img src="{{ asset("img/product/$product->image") }}" alt="">
                            </image>
                            <name class="block text-xl font-bold text-center">Egg of {{ $product->name }}</name>
                            <memmo class="block w-full mx-auto text-sm text-center text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing Voluptate itaque ut, </memmo>
                        </header>
                        <bod>

                            <information class="grid w-full grid-cols-2 px-2 py-4 ">
                                @foreach (json_decode($product->extra_fields) as $extra)
                                    <col-1 role="key"> {{ $extra->key }} </col-1>
                                    <col-1 role="value"> {{ $extra->value }} </col-1>
                                @endforeach

                                <col-2>
                                    <button class="block w-2/3 py-2 mx-auto mt-6 text-sm text-center text-white rounded bg-theme-700">
                                        Watch product
                                    </button>
                                </col-2>
                            </information>
                        </bod>
                    </card>
                </col-1>
            @endforeach


        </div>

    </main>
</x-layout.app>
