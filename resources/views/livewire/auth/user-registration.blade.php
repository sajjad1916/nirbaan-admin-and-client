@section('title', 'Become A Partner')
<div>
<div class=" bg-white "> 
            <nav class="2xl:container 2xl:mx-auto px-4">
                <!-- For large and Medium-sized Screen -->
                <div class="flex justify-between "> 
                    
                    <div class=" flex space-x-3 items-center">
                        <img class="h-16" src="https://api.nirbaanexpress.com/storage/auth/login/a1imEURf9zRw0L7a8AKQwcI2f1gYOGizDYP1aqKj.jpg" alt="circle" />      
                        <a href="{{route('home')}}" class=" font-normal text-2xl leading-6 text-gray-800" >Nirbaan Express</a>
                    </div>
                    <div class="flex flex-row items-center space-x-4">
                        
                        <a href="{{route('userlogin')}}" class="rounded-md flex space-x-2 w-24 h-10 font-normal text-sm leading-3 text-indigo-700 bg-white border border-indigo-700 focus:outline-none focus:bg-gray-200 hover:bg-gray-200 duration-150 justify-center items-center" >Login</a>
                        <a href="{{route('userRegistration')}}" class="rounded-md flex space-x-2 w-24 h-10 font-normal text-sm leading-3 text-white bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 hover:bg-indigo-600 duration-150 justify-center items-center" >Registration</a>
                    
                    </div>
                </div>
            </nav>    
         </div>

<div>
    <div class=" items-center min-h-screen bg-gray-50 md:flex ">
        <div class="container mx-auto flex flex-col overflow-y-auto md:flex-row">
            
            <div class="hidden h-screen md:block md:w-1/2">
             <div class="w-full h-full">
                <img aria-hidden="true" class="object-cover w-full h-full"
                    src="{{ url('/images/nirbaanlogo.png') }}"
                    alt="Office" />
            </div> 
            </div>
            {{-- form --}}
            <div
                class="w-11/12 h-full max-w-xl mx-auto my-6 overflow-hidden bg-white rounded-lg shadow-xl md:my-auto md:max-w-2xl ">
                <div class="flex flex-col overflow-y-auto md:flex-row">
                    <div class="flex items-center justify-center w-full p-6 sm:p-12 ">
                        <div class="w-full">
                            <h1 class="mb-4 text-3xl font-bold text-gray-700 uppercase">
                                {{ __('Become a partner') }} </h1>
                                    {{--  vendor account registration  --}}
                                    
                                        <form wire:submit.prevent="userSignup">
                                            @csrf
                                            <h1 class="mb-4 font-semibold text-gray-700 text-md">
                                                {{ __('Business Information') }} </h1>
                                            <x-input title="{{ __('Business Name') }}" name="name" placeholder="" />
                                            {{-- vendor type --}}
           
                                            <div class="grid grid-cols-2 space-x-4">
                                            <x-input title="{{ __('Email') }}" name="email" placeholder="info@mail.com" />
                                            <x-input title="{{ __('Phone') }}" name="phone" placeholder="019********" />
                                            </div>
                                            
                                            {{--  divider  --}}
                                            <hr class="my-4" />
                                            <h1 class="mb-4 font-semibold text-gray-700 text-md">
                                                {{ __('Address') }} </h1>
                                            <x-input title="{{ __('Details Address') }}" name="address" placeholder="" />
                                            
                                            <div class="grid grid-cols-2 space-x-4">
                                            <x-select title="{{ __('Payment Account type') }}" name="actype" :options="$actypes" :defer="false"/>
                                            <x-input title="{{ __('Payment Account Number') }}" name="phone" placeholder="019********" />
                                            </div>

                                             <!-- <x-select title="{{ __('Vendor Type') }}" :options='$deliveryZone ?? []' name="deliveryArea" :defer="false" /> -->
                                            
                                            <x-input title="{{ __('Login Password') }}" name="password" type="password"
                                            placeholder="**********************" />
                                            <div class="flex items-center my-3">
                                                <x-checkbox name="agreedVendor" :defer="false" :noMargin="true"> <span>I agree with <a href="{{ route('terms') }}" target="_blank" class="font-bold text-primary-500 hover:underline">terms and conditions</a></span>
                                            </x-checkbox>
                                            </div>
                                                <x-buttons.primary title="{{__('Sign Up')}}" />
                                        </form>
                                    
<p class="my-4 text-center">
    {{ __('Already have an account?') }} <a href="{{ route('userlogin') }}" class="ml-2 font-bold text-primary-500 text-md">{{ __('Login') }}</a>
</p>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>