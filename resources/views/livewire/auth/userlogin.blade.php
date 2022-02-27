@section('title', 'User Login')
<div>
<div class=" bg-white "> 
            <nav class="2xl:container 2xl:mx-auto sm:py-6 sm:px-7 py-5 px-4">
               
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


        <div class="flex items-center min-h-screen p-6 bg-gray-50 ">
            <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl ">
                <div class="flex flex-col overflow-y-auto md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img aria-hidden="true" class="object-cover w-full h-full"
                            src="{{ url('/images/nirbaanlogo.png') }}" alt="Office" />
                    </div>
                    {{-- form --}}
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <form wire:submit.prevent="userlogin">
                                @csrf
                                <h1 class="mb-4 text-xl font-semibold text-gray-700">{{__('Login to your Account')}}</h1>
                                <x-input title="{{__('Phone')}}" type="number" placeholder="019*********" name="phone" />
                                
                                <x-input title="{{__('Password')}}" type="password" placeholder="***************" name="password" />
                                <div class="hidden">
                                    <x-input title="" type="" placeholder="" name="fcmToken"/>
                                </div> 
                                <x-checkbox description="{{__('Remember me')}}" name="remember" />
                                <p class="flex items-center justify-end mt-2">
                                    <a class="text-sm font-medium text-primary-600 hover:underline"
                                        href="{{ route('password.forgot') }}">
                                        {{__('Forgot your password?')}}
                                    </a>
                                </p>
                                <x-buttons.primary title="{{__('Login')}}" />
                            </form>

                            {{--  registration  --}}
                            <div class="my-12 text-center">
                                <p class="flex items-center justify-center mx-auto space-x-2">
                                    <x-heroicon-o-truck class="w-8 h-8 text-primary-500" />
                                    <x-heroicon-o-briefcase class="w-8 h-8 text-primary-500" />
                                </p>
                                <p><span class="my-2 text-2xl font-semibold">{{ __(('Want to Partner with us?')) }}</span> <br/><a href="{{ route('userRegistration') }}" class="ml-2 font-bold text-primary-500 text-md">{{ __(('Click here')) }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>