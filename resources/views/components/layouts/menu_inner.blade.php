<nav class="h-16 shadow flex w-full px-4 justify-between items-center">


    <div>
        <div class="flex gap-2 items-center ">
            <ion-icon class="text-3xl" name="person-circle"></ion-icon>
            <span class="font-medium">My Wallet</span>
        </div>
    </div>


    @if (auth()->user()->type != 1)
        <div>
            <div class="flex gap-2 text-sm rounded px-2 py-1 text-theme-dark bg-theme-light bg-opacity-5 items-center ">
                <ion-icon name="book-outline"></ion-icon>
                <span class="font-medium">Observer</span>
            </div>
        </div>
    @else
    <div>
        <div class="flex gap-2 text-sm rounded px-2 py-1 text-green-700 bg-green-100  items-center ">
            <ion-icon name="diamond-outline"></ion-icon>
            <span class="font-medium">Premuim</span>
        </div>
    </div>
    
    @endif



</nav>
<section class="mt-6">
    <x-wallet />
</section>
<section class=" mx-auto left-0  w-[340px] mt-4">
    <div class="jsc_account_type_error hidden  mx-auto left-0 right-0 px-2 top-14   ">
        <div class="rounded-md bg-red-100 p-4">
            <div class="flex">
                <div class="ml-3">
                    <div class="my-2 text-sm text-red-700">
                        <ul role="list" class="list-disc pl-5 space-y-1">
                            Before generate Dao you should upgrade your account to writer
                            <a href="{{ route('dashboard_upgrade') }}" class="jsc_account_upgrade block underline underline-offset-4">Click here for upgrade</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- //FIXME CSS --}}
<footer class="!hidden border-t {{ $nofooter ?? '' ? 'hidden' : '' }} shadow flex items-center justify-between px-[20px]  h-[60px] absolute w-[360px] bottom-[64px] right-0">
    <span>
        Become DaoGenerator :
    </span>
    <button type="button"
        class="jsc_account_upgrade block items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Upgrade me
    </button>
</footer>
