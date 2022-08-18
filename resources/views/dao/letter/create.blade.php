<x-layout.app>
    <main class="max-w-5xl mx-auto rounded shadow bg-white p-4 my-32 block">
        <form action="{{ route('dao/letter.store') }}">
            <div class="jsc_form_data grid grid-cols-6 gap-4">
                <div class="col-span-6">
                    <div class="font-semibold text-lg">New letter</div>
                </div>
                <div class="col-span-6">
                    <x-form.input class="border-t-0 border-l-0 border-r-0 border-b rounded-none !border-gray-300 bg-gray-100"
                        value="From : {{ auth()->user()->email }}" readonly></x-form.input>
                </div>

                <div class="col-span-6">
                    <x-form.input name="subject" class="border-t-0 border-l-0 border-r-0 border-b rounded-none !border-gray-300" placeholder="Subject">
                    </x-form.input>
                </div>
                <div class="col-span-3">
                    <x-form.select name="dao" class="border-t-0 border-l-0 border-r-0 border-b rounded-none !border-gray-300"
                        placeholder="Dao">
                        <option value="0">-</option>
                    </x-form.select>
                </div>
                <div class="col-span-3">
                    <x-form.select name="reciver" class="border-t-0 border-l-0 border-r-0 border-b rounded-none !border-gray-300"
                        placeholder="Reciver">
                        <option value="0">-</option>
                    </x-form.select>
                </div>
                <div class="col-span-6">
                    <x-form.textarea name="content" class="rounded-none h-48" placeholder="Message"></x-form.textarea>
                </div>

                <div class="col-span-6">
                    <div class="text-sm font-semibold">
                        Extra Fields
                    </div>
                </div>


                <div class="col-span-6 jsc_extra_field_box">

                    <div class="jsc_extra_field grid grid-cols-11 gap-4">
                        <div class="col-span-5">
                            <x-form.input name="extra_key[]" placeholder="key"
                                class=" border-t-0 border-l-0 border-r-0 border-b rounded-none !border-gray-300"></x-form.input>
                        </div>
                        <div class="col-span-5">
                            <x-form.input name="extra_value[]" placeholder="value"
                                class=" border-t-0 border-l-0 border-r-0 border-b rounded-none !border-gray-300"></x-form.input>
                        </div>
                        <div class="col-span-1">
                            <div
                                class="jsc_remove_row border-t-0 border-l-0 border-r-0 border-b text-center flex justify-center items-end pb-1 cursor-pointer text-lg  h-[41px] rounded-none !border-gray-300">
                                &times; </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-1 mt-4 col-start-6  flex justify-end items-center">
                    <div class=" jsc_clone border-b-theme-dark border-b text-theme-dark  px-6 py-1 bg-theme-light bg-opacity-10">+ Field
                    </div>
                </div>
            </div>
            <div class="col-span-6">
                <button type="submit" class="rounded text-white bg-theme-dark px-4 py-1"> Send </button>
            </div>
        </form>
    </main>
    <script>
        $('.jsc_clone').on('click', () => {
            $('.jsc_extra_field:first').clone().appendTo('.jsc_extra_field_box').find("input[type='text']").val("")
        })
        $('body').on('click', '.jsc_remove_row', function(e) {
            if ($('.jsc_extra_field').length > 1) {

                $(this).closest('.jsc_extra_field').remove()
            }
        })
    </script>
</x-layout.app>
