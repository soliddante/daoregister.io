@if ($errors->any())
    <div class="gls_alert fixed w-2/3 mx-auto left-0 right-0 px-2 top-14   ">
        <div class="rounded-md bg-red-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/x-circle -->
                    <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <div class="mt-2 text-sm text-red-700">
                        <ul role="list" class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif


@if (Session::has('msg'))
    <div class="gls_alert fixed w-2/3 mx-auto left-0 right-0 px-2 top-14   ">
        <div class="rounded-md bg-green-50 p-4">
            <div class="flex">
                <div class="ml-3">
                    <div class="mt-2 text-sm text-green-700">
                        <ul role="list" class="list-disc pl-5 space-y-1">
                            {{ Session::get('msg') }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<script>
    $('.gls_alert').delay('3000').fadeOut();
</script>
