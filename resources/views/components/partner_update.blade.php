<div class="grid text-xs grid-cols-12 gap-2  mt-2 jsc_partners_item">
    <div class="col-span-4">
        @if ($type != 'owner')
            <select name="partner_type[]"
                class="jsc_partner_select shadow-sm text-xs focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                <option value="partner" {{ $type == 'partner' ? 'selected' : '' }}>Partner</option>
                <option value="accounter" {{ $type == 'accounter' ? 'selected' : '' }}>Accounter</option>
                <option value="observer" {{ $type == 'observer' ? 'selected' : '' }}>Observer</option>
                <option value="delete" class="bg-gray-200">Delete</option>
            </select>
        @else
            <input type="text" value="owner" name="partner_type[]"
                class="bg-gray-100 shadow-sm text-xs focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
        @endif

    </div>
    <div class="col-span-6">
        <input type="text" value="{{ $email }}" readonly name="partner_email[]"
            class=" {{ $type == 'owner' ? 'jsc_disable bg-gray-100 ' : 'jsc_partner_new_input' }}  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm text-xs border-gray-300 rounded-md">
    </div>
    <div class="col-span-2"> <input value="{{ $share }}" type="text" placeholder="0" name="partner_share[]"
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm text-xs border-gray-300 rounded-md"></div>
</div>

