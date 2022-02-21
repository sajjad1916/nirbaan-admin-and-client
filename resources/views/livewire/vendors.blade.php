@section('title', __('Vendors') )
<div>

    <x-baseview title="{{ __('Vendors') }}" :showNew="\Auth::user()->hasAnyRole('admin')">
        <livewire:tables.vendor-table />
    </x-baseview>

    {{-- new form --}}
    <div x-data="{ open: @entangle('showCreate') }">
        <x-modal-lg confirmText="{{ __('Save') }}" action="save" :clickAway="false">
            <p class="text-xl font-semibold">{{ __('Create Vendor') }}</p>
            <x-input title="{{ __('Name') }}" name="name" />

            {{-- vendor type --}}
            <x-select title="{{ __('Vendor Type') }}" :options='$vendorTypes ?? []' name="vendor_type_id" :defer="false" />
            <x-input title="{{ __('Description') }}" name="description" />


            <div class="grid grid-cols-2 space-x-4">
                <x-input title="{{ __('Phone') }}" name="phone" />
                <x-input title="{{ __('Email') }}" name="email" />
            </div>

            <x-input title="{{ __('Address') }}" name="address" />      

            <hr class="mt-5" />

            <div
                class="block"
                >
               
                <div class="grid grid-cols-2 space-x-4">
                    <x-input title="{{ __('Base Delivery Fee') }}" name="base_delivery_fee" />
                    <x-input title="{{ __('Delivery Fee') }}" name="delivery_fee" />
                </div>
               

                <hr class="mt-5" />
            </div>
            <hr class="mt-4"/>

        </x-modal-lg>
    </div>

    {{-- update form --}}
    <div x-data="{ open: @entangle('showEdit') }">
        <x-modal-lg confirmText="{{ __('Update') }}" action="update" :clickAway="false">

            <p class="text-xl font-semibold">{{ __('Update Vendor') }}</p>
            <x-input title="{{ __('Name') }}" name="name" />

            {{-- vendor type --}}
            <x-select title="{{ __('Vendor Type') }}" :options='$vendorTypes ?? []' name="vendor_type_id" :defer="false" />
            <x-input title="{{ __('Description') }}" name="description" />

            <div class="grid grid-cols-2 space-x-4">
                <x-input title="{{ __('Phone') }}" name="phone" />
                <x-input title="{{ __('Email') }}" name="email" />
            </div>
            
            <x-input title="{{ __('Address') }}" name="address" address="{{ $address ?? '' }}" />
            

           
           
            <hr class="mt-5" />
            <div
                class="block"
                >
               
                <div class="grid grid-cols-2 space-x-4">
                    <x-input title="{{ __('Base Delivery Fee') }}" name="base_delivery_fee" />
                    <x-input title="{{ __('Delivery Fee') }}" name="delivery_fee" />
                </div>
                <div class="grid grid-cols-2 space-x-4">
                    <x-input title="{{ __('Delivery Range(KM)') }}" name="delivery_range" />
                    <x-checkbox title="{{ __('Charge per KM') }}" name="charge_per_km" description="{{ __('Delivery fee will be per KM') }}"
                        :defer="false" />
                </div>

                <hr class="mt-5" />
            </div>
        </x-modal-lg>
    </div>


    {{-- details modal --}}
    <div x-data="{ open: @entangle('showDetails') }">
        <x-modal-lg>

            <p class="text-xl font-semibold">
                {{ $selectedModel != null ? $selectedModel->name."'s" : '' }}
                Details</p>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <x-details.item title="{{ __('Name') }}" text="{{ $selectedModel->name ?? '' }}" />
                <x-details.item title="{{ __('Description') }}"
                    text="{{ $selectedModel->description ?? '' }}" />

                <x-details.item title="{{ __('Phone') }}" text="{{ $selectedModel->phone ?? '' }}" />
                <x-details.item title="{{ __('Email') }}" text="{{ $selectedModel->email ?? '' }}" />

                <x-details.item title="{{ __('Address') }}"
                    text="{{ $selectedModel->address ?? '' }}" />
            </div>

            @if($selectedModel ? ($selectedModel->vendor_type ? $selectedModel->vendor_type->slug == "parcel": false) : true)
                <div class="grid grid-cols-1 gap-4 mt-4 border-t md:grid-cols-2 ">
                    <x-details.item title="{{ __('Delivery Fee') }}"
                        text="{{ $selectedModel->delivery_fee ?? '' }}" />
                    
                </div>
                <div class="grid grid-cols-1 gap-4 pt-4 mt-4 border-t md:grid-cols-2 lg:grid-cols-3">

                    <div>
                        <x-label title="{{ __('Status') }}" />
                        <x-table.active :model="$selectedModel" />
                    </div>

                    

                    <div>
                        <x-label title="{{ __('Open') }}" />
                        <x-table.bool isTrue="{{ $selectedModel->is_open ?? false }}" />
                    </div>

                </div>
            @endif

        </x-modal-lg>
    </div>
</div>
