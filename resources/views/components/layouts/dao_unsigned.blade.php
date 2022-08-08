@php
$dao_unsigns_count = DB::table('dao_user')
    ->where('user_id', auth()->user()->id)
    ->where('partner_accepted', '0')
    ->count();
$dao_unsigns = DB::table('dao_user')
    ->where('user_id', auth()->user()->id)
    ->where('partner_accepted', '0')
    ->get();
@endphp
@if ($dao_unsigns_count != 0)
    <div
        class="jsc_request_alert fixed bottom-2 justify-between px-4 w-[90vw] right-0 left-0 mx-auto min-h-[40px] rounded bg-gray-800 text-white flex items-center">
        <div>
            You have <span>{{ $dao_unsigns_count }}</span> unsigned request please check it
            <a href="{{ route('dashboard_request') }}" class="inline-flex rounded bg-white text-gray-800 mx-2 px-2  cursor-pointer">Check now</a>
        </div>
        <ion-icon class="jsc_close_request cursor-pointer text-xl" name="close-outline"></ion-icon>
    </div>
@endif
<script>
    $('.jsc_close_request').on('click', function() {
        $('.jsc_request_alert').hide();
    })
</script>
