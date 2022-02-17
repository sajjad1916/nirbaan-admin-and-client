@section('title',  __('Coupon Report') )
<div>

    <x-baseview title="">
         {{-- Info cards --}}
         <div class="grid gap-6 mt-10 md:grid-cols-2 lg:grid-cols-4">

            {{-- coupons --}}
            <x-dashboard-chart>
                <livewire:livewire-pie-chart :pie-chart-model="$topCouponsChart" />
            </x-dashboard-chart>

            {{-- users --}}
            <x-dashboard-chart>
                <livewire:livewire-pie-chart :pie-chart-model="$topUsersChart" />
            </x-dashboard-chart>

         
            
        </div>
    </x-baseview>
    <div class="mt-12"></div>

    <x-baseview title="{{ __('Coupon Report') }}">
        <livewire:tables.coupon-report-table />
    </x-baseview>

</div>
