<x-layouts.dashboard>
    <form id="form" action="{{ route('user_update') }}">

     <div class="border rounded px-8 py-12 bg-white mt-4 mb-4 md:mt-16 shadow block md:w-4/5 w-[92vw] mx-auto ">
        <article>
            <div class="col-span-2">
                <h3 class="text-lg leading-6 font-semibold  text-theme-dark">Social meida accounts</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
            </div>
            <div class="mt-2 grid grid-cols-2  gap-x-4 ">
                <div class="mt-3 flex rounded-md shadow-sm col-span-2 sm:col-span-1">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 md:w-[90px] w-[100px] text-gray-500 sm:text-sm"> Instagram </span>
                    <input type="text" name="instagram" placeholder="{{ auth()->user()->instagram }}" class="flex-1 min-w-0 text-sm block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300">
                </div>
                <div class="mt-3 flex rounded-md shadow-sm col-span-2 sm:col-span-1">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 md:w-[90px] w-[100px] text-gray-500 sm:text-sm"> Twitter </span>
                    <input type="text" name="Twitter" placeholder="{{ auth()->user()->Twitter }}" class="flex-1 min-w-0 text-sm block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300">
                </div>
                <div class="mt-3 flex rounded-md shadow-sm col-span-2 sm:col-span-1">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 md:w-[90px] w-[100px] text-gray-500 sm:text-sm"> Facebook </span>
                    <input type="text" name="Facebook" placeholder="{{ auth()->user()->Facebook }}" class="flex-1 min-w-0 text-sm block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300">
                </div>
                <div class="mt-3 flex rounded-md shadow-sm col-span-2 sm:col-span-1">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 md:w-[90px] w-[100px] text-gray-500 sm:text-sm"> Whatsapp </span>
                    <input type="text" name="Whatsapp" placeholder="{{ auth()->user()->Whatsapp }}" class="flex-1 min-w-0 text-sm block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300">
                </div>
                <div class="mt-3 flex rounded-md shadow-sm col-span-2 sm:col-span-1">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 md:w-[90px] w-[100px] text-gray-500 sm:text-sm"> Telegram </span>
                    <input type="text" name="Telegram" placeholder="{{ auth()->user()->Telegram }}" class="flex-1 min-w-0 text-sm block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300">
                </div>
                <div class="mt-3 flex rounded-md shadow-sm col-span-2 sm:col-span-1">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 md:w-[90px] w-[100px] text-gray-500 sm:text-sm"> linkedin </span>
                    <input type="text" name="linkedin" placeholder="{{ auth()->user()->linkedin }}" class="flex-1 min-w-0 text-sm block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300">
                </div>
            </div>
        </article>
        {{-- /*********
                 SUBMIT
                ***********/ --}}
        <div class="mt-4 flex justify-end ">
            <x-ui.button size="md" type="submit">Update</x-ui.button>
        </div>
    </div>
</form>

</x-layouts.dashboard>
