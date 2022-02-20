<ul class="mt-6">

    {{-- dashboard --}}
    <x-menu-item title="{{ __('Dashboard') }}" route="dashboard">
        <x-heroicon-o-template class="w-5 h-5" />
    </x-menu-item>

    @role('admin')
        {{-- Vendor Types --}}
        <x-menu-item title="{{ __('Vendor Types') }}" route="vendor.types">
            <x-heroicon-o-color-swatch class="w-5 h-5" />
        </x-menu-item>

    {{-- Vendors --}}
    <x-menu-item title="{{ __('Vendors') }}" route="vendors">
        <x-heroicon-o-shopping-cart class="w-5 h-5" />
    </x-menu-item>
    @endrole
    @role('manager')
        <x-menu-item title="{{ __('Delivery Boys') }}" route="drivers">
            <x-heroicon-o-user-group class="w-5 h-5" />
        </x-menu-item>
    @endhasanyrole

   

    <x-menu-item routePath="order/*" title="{{ __('Orders') }}" route="orders">
            <x-heroicon-o-shopping-bag class="w-5 h-5" />
        </x-menu-item>


    {{-- Package --}}
    @showPackage
        <x-group-menu-item routePath="package/*" title="{{ __('Package Delivery') }}"
            icon="heroicon-o-globe">

            @hasanyrole('city-admin|admin')
                <x-menu-item title="{{ __('Package Types') }}" route="package.types">
                    <x-heroicon-o-archive class="w-5 h-5" />
                </x-menu-item>
        @endhasanyrole

            {{-- manager package delivery options --}}
            @role('admin')
                <x-menu-item title="{{ __('Pricing') }}" route="package.pricing">
                    <x-heroicon-o-currency-dollar class="w-5 h-5" />
                </x-menu-item>

            @endhasanyrole

        </x-group-menu-item>

    @endshowPackage


    @hasanyrole('city-admin|admin')

        <x-group-menu-item routePath="coupons*" title="{{ __('Coupons') }}"
            icon="heroicon-o-receipt-tax">

            <x-menu-item title="{{ __('Coupons') }}" route="coupons">
                <x-heroicon-o-receipt-tax class="w-5 h-5" />
            </x-menu-item>
            <x-menu-item title="{{ __('Coupon Report') }}" route="coupons.report">
                <x-heroicon-o-chart-pie class="w-5 h-5" />
            </x-menu-item>
        </x-group-menu-item>

    @endhasanyrole

    {{-- Users --}}
    @hasanyrole('city-admin|admin')
        <x-menu-item title="{{ __('Users') }}" route="users">
            <x-heroicon-o-user-group class="w-5 h-5" />
        </x-menu-item>
    @endhasanyrole



    @hasanyrole('admin')
        {{-- notifications --}}
        <x-menu-item title="{{ __('Notifications') }}" route="notification.send">
            <x-heroicon-o-bell class="w-5 h-5" />
        </x-menu-item>
        <x-group-menu-item routePath="operations/*" title="{{ __('Operations') }}"
            icon="heroicon-o-server">
            
            {{-- cron job --}}
            <x-menu-item title="{{ __('CRON JOB') }}" route="configure.cron.job">
                <x-heroicon-o-calendar class="w-5 h-5" />
            </x-menu-item>
           

        </x-group-menu-item>


        {{-- Settings --}}
        <x-group-menu-item routePath="setting/*" title="{{ __('Settings') }}" icon="heroicon-o-cog">

            {{-- Currencies --}}
            <x-menu-item title="{{ __('Currencies') }}" route="currencies">
                <x-heroicon-o-currency-dollar class="w-5 h-5" />
            </x-menu-item>

            {{-- Payment methods --}}
            <x-menu-item title="{{ __('Payment Methods') }}" route="payment.methods">
                <x-heroicon-o-cash class="w-5 h-5" />
            </x-menu-item>

            {{-- Settings --}}
            <x-menu-item title="{{ __('SMS Gateways') }}" route="sms.settings">
                <x-heroicon-o-inbox class="w-5 h-5" />
            </x-menu-item>

            <hr/>
           

            {{-- Settings --}}
            <x-menu-item title="{{ __('General Settings') }}" route="settings">
                <x-heroicon-o-cog class="w-5 h-5" />
            </x-menu-item>

             {{-- App Settings --}}
             <x-menu-item title="{{ __('Mobile App Settings') }}" route="settings.app">
                <x-heroicon-o-device-mobile class="w-5 h-5" />
            </x-menu-item>

             {{-- Web Settings --}}
             <x-menu-item title="{{ __('Website Settings') }}" route="settings.website">
                <x-heroicon-o-globe-alt class="w-5 h-5" />
            </x-menu-item>
            
            {{-- Mail Settings --}}
            <x-menu-item title="{{ __('Server Settings') }}" route="settings.server">
                <x-heroicon-o-server class="w-5 h-5" />
            </x-menu-item>
        </x-group-menu-item>
    @endhasanyrole

</ul>
