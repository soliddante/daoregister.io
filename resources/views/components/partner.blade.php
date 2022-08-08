@if (isset($owner))
    <div class="grid text-xs grid-cols-12 gap-2  mt-2 jsc_partners_item">
        <div class="col-span-4">
            <select name="partner_type[]"
                class="pointer-events-none bg-gray-100 jsc_partner_select shadow-sm text-xs focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                <option value="owner" selected>Owner</option>
            </select>
        </div>
        <div class="col-span-6">
            <input type="text" readonly value="{{ auth()->user()->email }}" name="partner_email[]"
                class="jsc_partner_new_input shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm text-xs border-gray-300 rounded-md">
        </div>
        <div class="col-span-2"> <input type="text" placeholder="0" name="partner_share[]"
                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm text-xs border-gray-300 rounded-md"></div>
    </div>
@else
    <div class="grid text-xs grid-cols-12 gap-2  mt-2 jsc_partners_item">
        <div class="col-span-4">
            <select name="partner_type[]"
                class="jsc_partner_select shadow-sm text-xs focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                <option value="partner" selected>Partner</option>
                <option value="accounter">Accounter</option>
                <option value="observer">Observer</option>
                <option value="delete" class="bg-gray-200">Delete</option>
            </select>
        </div>
        <div class="col-span-6">
            <input type="text" readonly name="partner_email[]"
                class="jsc_partner_new_input shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm text-xs border-gray-300 rounded-md">
        </div>
        <div class="col-span-2"> <input type="text"  placeholder="0"  name="partner_share[]"
                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm text-xs border-gray-300 rounded-md"></div>
    </div>
@endif
