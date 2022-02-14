@section('title',  __('Website Settings') )

<div>

    <x-baseview title="Web App Settings">

    
            
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                <div class="w-3/4 mx-auto">
                <x-select title="{{ __('Services') }}" :options="$packageTypes ?? []"
            name="packageTypeId" />
            
                    <div>
                        <x-input title="Customer Name" name="websiteColor"  class="h-10" />
                    </div>


                    <div>
                        <x-input title="Customer Phone" name="countryCode" class="h-10" />

                    </div>

                   
                    <div>
                        <x-input title="Customer Address" name="timeZone" class="h-10"/>
                        
                    </div>
                    <br class='h-6'>

                    <div>
                        <x-input title="Delivery Area" name="websiteColor"  class="h-10" />
                    </div>


                    <div>
                        <x-input title="Merchant Name" name="countryCode" class="h-10"/>
                      
                    </div>

                   
                    <div>
                        <x-input title="Merchant Phone" name="timeZone" class="h-10"/>
                        
                    </div>
                    
                </div>
                <div class="w-3/4 mx-auto">
                    {{-- logo --}}
                    <div class="">
                   
                        <x-input title="Product Weight" name="websiteColor"  class="h-10" />
                    
                    </div>

                    {{-- favicon --}}
                    <div class="">
                    
                   
                   <x-input title="Product Price" name="websiteColor"  class="h-10" />
               
               
                    </div>

                    {{-- loginImage --}}
                    <div class="">
                    <x-input title="Delivery Inside Dhaka" name="websiteColor"  class="h-10" />
                    </div>

                    {{-- registerImage --}}
                    <div class="">
                    <x-input title="Parcel Type" name="websiteColor"  class="h-10" />
                    </div>

                    <div class="">
                    <x-input title="Payment Methods" name="websiteColor"  class="h-10" />
                    </div>

                    
                </div>
                <x-buttons.primary title="Save Changes" />
                <div>
                

    </x-baseview>

</div>
