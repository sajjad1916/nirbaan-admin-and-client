@section('content')

<div>
     <div class=" bg-white "> 
            <nav class="2xl:container 2xl:mx-auto sm:py-6 sm:px-7 py-5 px-4">
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


        
        <div class="container mx-auto md:px-6 px-4 md:py-12 py-8">
            <div class="lg:flex items-center justify-between">
                <div class="lg:w-1/3">
                    <h1 class="text-4xl font-semibold leading-9 text-gray-800 dark:text-white">Nirbaan Express Courier</h1>
                    <p class="text-base leading-6 mt-4 text-gray-600 dark:text-gray-100">Nirbaan Express aims to aid the expanding e-commerce sector of Bangladesh by providing tech-first logistics support with exclusive features and a talented workforce, Nirbaan Express set to give the Delivery Service industry of Bangladesh a brand-new pace..</p>
                    <button role="button" aria-label="view catalogue" class="focus:ring-2 focus:ring-offset-2 focus:ring-gray-700 focus:outline-none mt-6 md:mt-8 text-base font-semibold leading-none text-gray-800 dark:text-white flex items-center hover:underline">
                        Join With us
                        <img class="ml-2 mt-1 dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/feature-VI-svg1.svg" alt="arrow">
                        <img class="ml-2 mt-1 hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/feature-VI-svg1dark.svg" alt="arrow">
                    </button>
                </div>
                <div class="lg:w-7/12 lg:mt-0 mt-8">
                    <div class="w-full h-full bg-red-200">
                        <img src="https://img.freepik.com/free-vector/delivery-service-with-masks-concept_23-2148497067.jpg?w=1380" alt="apartment design" class="w-full sm:block hidden" />
                        <img src="https://img.freepik.com/free-vector/delivery-service-with-masks-concept_23-2148497067.jpg?w=1380" alt="apartment design" class="sm:hidden block w-full" />
                    </div>
                  
                </div>
            </div>
        </div>
        
        <!-- Services -->
        <div class="2xl:mx-auto 2xl:container  xl:px-20 md:px-6 px-4 py-12 my-20 ">
        <div class="lg:flex items-stretch justify-between">
        <div class="lg:w-2/5 w-full lg:mt-0 mt-6">
                <img src="https://scontent-lga3-1.xx.fbcdn.net/v/t39.30808-6/271879125_145608047898275_2563491983585717060_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeHE5M-CaH6wDgVkBTV_lqx8Fg9eVnM7XykWD15WcztfKfTZV34PQalEJR7mijnHkLv7dMGodVII79ED-8DC5cGD&_nc_ohc=Gc67ETT33Q8AX_1EnC3&_nc_ht=scontent-lga3-1.xx&oh=00_AT_gp7_WqQ6soQkCdHsp30jVevW7srI23CoNX-GwSJ98hA&oe=620F26B4" alt="ongoing meeting" class="w-full obejct-fit object-center object-fill h-full" />
            </div>

            <div class="xl:w-1/2 lg:w-7/12">
                <p class="lg:text-5xl text-3xl font-bold leading-10 text-gray-800">Why choose us</p>
                <p class="text-base leading-6 text-gray-600 mt-4 lg:w-7/12 w-full">Mobile application and website of Nirbaan Express is too much merchant friendly</p>
                <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-6 mt-14">
                    <div class="flex items-center">
                        <div class="w-16 h-16 relative">
                            <div class="absolute bottom-0 right-0 bg-indigo-50 rounded-md w-16 h-16 -mb-4 -mr-2"></div>
                            <div class="relative z-20 text-white bottom-0 left-0 bg-indigo-700 rounded-md w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5994 2.90375C6.73079 2.77373 6.83382 2.61789 6.90199 2.44607C6.97016 2.27425 7.00198 2.09016 6.99547 1.90543C6.98895 1.72069 6.94423 1.53931 6.86412 1.37272C6.78401 1.20613 6.67026 1.05794 6.53003 0.9375C5.82434 0.335233 4.92778 0.00300971 4.00003 0L3.79565 0.00562477H3.76565C1.65003 0.134375 2.82116e-05 1.97187 0.00440321 4.1875C0.00440321 5.375 0.504403 6.00375 0.899403 6.50688C1.01024 6.64753 1.1492 6.76354 1.30739 6.84748C1.46558 6.93141 1.63954 6.98145 1.81815 6.99438C1.8344 6.99438 1.8619 6.9975 1.94315 6.9975C2.10382 6.99726 2.26278 6.96453 2.41046 6.90127C2.55815 6.838 2.69151 6.74552 2.80253 6.62938L6.5994 2.90375ZM22.2369 0.00687504L22.0325 0.000625134H22C21.0714 0.00304289 20.1739 0.335303 19.4675 0.938125C19.3275 1.05856 19.2139 1.20667 19.1339 1.37315C19.0539 1.53963 19.0093 1.72086 19.0028 1.90544C18.9962 2.09002 19.028 2.27395 19.0961 2.44566C19.1641 2.61736 19.267 2.77312 19.3982 2.90312L23.1963 6.63125C23.3075 6.74781 23.4413 6.84059 23.5894 6.90397C23.7376 6.96735 23.897 7.00002 24.0582 7C24.1382 7 24.1657 7 24.1832 6.99687C24.3617 6.98386 24.5355 6.93379 24.6936 6.84985C24.8517 6.76592 24.9905 6.64996 25.1013 6.50937C25.4988 6.00625 25.9938 5.37937 25.9963 4.19C26 1.97187 24.35 0.134375 22.2369 0.00687504Z" fill="white" />
                                    <path d="M13.0046 2C6.94215 2 2.00465 6.93437 2.00465 13C2.0025 15.5717 2.90545 18.0622 4.55527 20.035L2.29777 22.2931C2.20271 22.3855 2.12695 22.4958 2.07491 22.6178C2.02288 22.7397 1.99559 22.8707 1.99465 23.0033C1.99371 23.1358 2.01914 23.2672 2.06944 23.3898C2.11975 23.5125 2.19393 23.6239 2.28768 23.7176C2.38143 23.8113 2.49287 23.8854 2.61553 23.9357C2.73819 23.9859 2.86961 24.0113 3.00216 24.0103C3.13471 24.0093 3.26573 23.982 3.38762 23.9299C3.50951 23.8778 3.61982 23.802 3.71215 23.7069L5.96965 21.4494C7.94351 23.0973 10.4333 24.0001 13.0046 24.0001C15.576 24.0001 18.0658 23.0973 20.0396 21.4494L22.2978 23.7069C22.3901 23.802 22.5004 23.8778 22.6223 23.9299C22.7442 23.982 22.8752 24.0093 23.0078 24.0103C23.1403 24.0113 23.2717 23.9859 23.3944 23.9357C23.5171 23.8854 23.6285 23.8113 23.7222 23.7176C23.816 23.6239 23.8902 23.5125 23.9405 23.3898C23.9908 23.2672 24.0162 23.1358 24.0153 23.0033C24.0143 22.8707 23.987 22.7397 23.935 22.6178C23.883 22.4958 23.8072 22.3855 23.7122 22.2931L21.454 20.035C23.1041 18.0624 24.0071 15.5718 24.0047 13C24.0047 6.9375 19.0703 2 13.0046 2ZM14.0047 13C14.0047 13.2652 13.8993 13.5196 13.7118 13.7071C13.5242 13.8946 13.2699 14 13.0046 14H8.00465C7.73943 14 7.48508 13.8946 7.29754 13.7071C7.11001 13.5196 7.00465 13.2652 7.00465 13C7.00465 12.7348 7.11001 12.4804 7.29754 12.2929C7.48508 12.1054 7.73943 12 8.00465 12H12.0046V6C12.0046 5.73478 12.11 5.48043 12.2975 5.29289C12.4851 5.10536 12.7394 5 13.0046 5C13.2699 5 13.5242 5.10536 13.7118 5.29289C13.8993 5.48043 14.0047 5.73478 14.0047 6V13Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-start flex-col ml-6 pt-8">
                            <h2 class="text-base font-semibold leading-4 text-gray-800">On Time Delivery</h2>
                            <p class=" text-base leading-6 mt-2 text-gray-600">Whether article spirits new her covered.</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-16 h-16 relative">
                            <div class="absolute bottom-0 right-0 bg-indigo-50 rounded-md w-16 h-16 -mb-4 -mr-2"></div>
                            <div class="relative z-20 text-white bottom-0 left-0 bg-indigo-700 rounded-md w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                <svg width="26" height="28" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.7901 2.03625C16.5739 0.723125 14.8751 0 13.0001 0C11.1151 0 9.41074 0.71875 8.20011 2.02375C6.97636 3.34312 6.38011 5.13625 6.52011 7.0725C6.79761 10.8925 9.70449 14 13.0001 14C16.2957 14 19.1976 10.8931 19.4795 7.07375C19.6214 5.155 19.0214 3.36563 17.7901 2.03625ZM24.0001 28H2.00011C1.71215 28.0037 1.42698 27.9433 1.16534 27.8229C0.903702 27.7026 0.672178 27.5254 0.487613 27.3044C0.0813633 26.8188 -0.0823867 26.1556 0.0388633 25.485C0.566363 22.5588 2.21261 20.1006 4.80011 18.375C7.09886 16.8431 10.0107 16 13.0001 16C15.9895 16 18.9014 16.8438 21.2001 18.375C23.7876 20.1 25.4339 22.5581 25.9614 25.4844C26.0826 26.155 25.9189 26.8181 25.5126 27.3037C25.3281 27.5249 25.0966 27.7022 24.835 27.8226C24.5733 27.9431 24.2881 28.0037 24.0001 28Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-start flex-col ml-6 pt-8">
                            <h2 class="text-base font-semibold leading-4 text-gray-800">User Friendly</h2>
                            <p class=" text-base leading-6 mt-2 text-gray-600">Whether article spirits new her covered.</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-16 h-16 relative">
                            <div class="absolute bottom-0 right-0 bg-indigo-50 rounded-md w-16 h-16 -mb-4 -mr-2"></div>
                            <div class="relative z-20 text-white bottom-0 left-0 bg-indigo-700 rounded-md w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                <svg width="20" height="30" viewBox="0 0 20 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 28H8.00003C7.73481 28 7.48046 28.1054 7.29292 28.2929C7.10539 28.4804 7.00003 28.7348 7.00003 29C7.00003 29.2652 7.10539 29.5196 7.29292 29.7071C7.48046 29.8946 7.73481 30 8.00003 30H12C12.2652 30 12.5196 29.8946 12.7071 29.7071C12.8947 29.5196 13 29.2652 13 29C13 28.7348 12.8947 28.4804 12.7071 28.2929C12.5196 28.1054 12.2652 28 12 28ZM13 25H7.00003C6.73481 25 6.48046 25.1054 6.29292 25.2929C6.10539 25.4804 6.00003 25.7348 6.00003 26C6.00003 26.2652 6.10539 26.5196 6.29292 26.7071C6.48046 26.8946 6.73481 27 7.00003 27H13C13.2652 27 13.5196 26.8946 13.7071 26.7071C13.8947 26.5196 14 26.2652 14 26C14 25.7348 13.8947 25.4804 13.7071 25.2929C13.5196 25.1054 13.2652 25 13 25ZM17.0888 2.91812C15.2094 1.03625 12.6919 -2.17722e-06 10 -2.17722e-06C8.68593 -0.00313433 7.38416 0.253385 6.16949 0.754823C4.95482 1.25626 3.85119 1.99274 2.92198 2.92195C1.99277 3.85116 1.25629 4.95479 0.754854 6.16946C0.253416 7.38413 -0.00310381 8.6859 2.83404e-05 10C2.83404e-05 12.9137 1.1169 15.6394 3.06253 17.4775L3.33503 17.7331C4.46065 18.7856 6.00003 20.2275 6.00003 21.5V23C6.00003 23.2652 6.10539 23.5196 6.29292 23.7071C6.48046 23.8946 6.73481 24 7.00003 24H8.50003C8.63264 24 8.75982 23.9473 8.85358 23.8535C8.94735 23.7598 9.00003 23.6326 9.00003 23.5V16.1762C9.00006 16.0751 8.96944 15.9764 8.9122 15.893C8.85495 15.8097 8.77379 15.7456 8.6794 15.7094C8.10196 15.4738 7.55339 15.1729 7.0444 14.8125C6.93002 14.7395 6.83171 14.6439 6.75544 14.5316C6.67918 14.4194 6.62656 14.2928 6.6008 14.1595C6.57503 14.0263 6.57666 13.8892 6.60558 13.7566C6.63449 13.624 6.6901 13.4987 6.769 13.3883C6.84791 13.2779 6.94846 13.1847 7.06454 13.1143C7.18062 13.044 7.3098 12.9981 7.44421 12.9793C7.57861 12.9605 7.71543 12.9693 7.84634 13.0051C7.97725 13.0409 8.0995 13.1029 8.20565 13.1875C8.66815 13.515 9.55878 14 10 14C10.4413 14 11.3319 13.5137 11.7957 13.1875C12.0116 13.0517 12.2712 13.0036 12.5215 13.053C12.7717 13.1024 12.9936 13.2455 13.1418 13.4531C13.29 13.6607 13.3532 13.9171 13.3186 14.1698C13.284 14.4225 13.1542 14.6524 12.9557 14.8125C12.4466 15.1722 11.898 15.4725 11.3207 15.7075C11.2263 15.7438 11.1451 15.8078 11.0879 15.8912C11.0306 15.9745 11 16.0733 11 16.1744V23.5C11 23.6326 11.0527 23.7598 11.1465 23.8535C11.2402 23.9473 11.3674 24 11.5 24H13C13.2652 24 13.5196 23.8946 13.7071 23.7071C13.8947 23.5196 14 23.2652 14 23V21.5C14 20.2575 15.5225 18.8169 16.6344 17.7644L16.9413 17.4731C18.9425 15.5625 20 12.9756 20 10C20.0067 8.68578 19.7528 7.38327 19.2531 6.16773C18.7534 4.95219 18.0178 3.84772 17.0888 2.91812Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-start flex-col ml-6 pt-8">
                            <h2 class="text-base font-semibold leading-4 text-gray-800">Instant Payment</h2>
                            <p class=" text-base leading-6 mt-2 text-gray-600">Whether article spirits new her covered.</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-16 h-16 relative">
                            <div class="absolute bottom-0 right-0 bg-indigo-50 rounded-md w-16 h-16 -mb-4 -mr-2"></div>
                            <div class="relative z-20 text-white bottom-0 left-0 bg-indigo-700 rounded-md w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M29 5H25.2437C25.1774 5 25.1139 4.97366 25.067 4.92678C25.0201 4.87989 24.9937 4.8163 24.9937 4.75V3.995C24.9924 3.46543 24.7811 2.95801 24.4062 2.58402C24.0313 2.21003 23.5233 2 22.9937 2L9.00688 2.01625C8.47785 2.01724 7.97077 2.22779 7.59663 2.60181C7.22249 2.97583 7.01178 3.48285 7.01062 4.01188V4.75C7.01062 4.8163 6.98429 4.87989 6.9374 4.92678C6.89052 4.97366 6.82693 5 6.76062 5H3C2.73478 5 2.48043 5.10536 2.29289 5.29289C2.10536 5.48043 2 5.73478 2 6V7C2 10.4081 3.875 14.0281 6.7825 14.8344C6.86847 14.8583 6.94625 14.9053 7.0074 14.9703C7.06855 15.0353 7.11073 15.1158 7.12937 15.2031C7.49 16.8837 8.59937 18.4844 10.3425 19.8037C11.6494 20.7931 13.2081 21.5225 14.6094 21.8337C14.7202 21.8586 14.8192 21.9204 14.8902 22.009C14.9612 22.0976 14.9999 22.2077 15 22.3213V27.75C15 27.8163 14.9737 27.8799 14.9268 27.9268C14.8799 27.9737 14.8163 28 14.75 28H11.0281C10.49 28 10.0281 28.4138 10.0013 28.9519C9.99474 29.0871 10.0157 29.2222 10.063 29.3491C10.1102 29.4759 10.1828 29.5919 10.2761 29.6898C10.3695 29.7878 10.4818 29.8659 10.6063 29.9192C10.7307 29.9725 10.8646 30 11 30H20.9719C21.51 30 21.9719 29.5862 21.9988 29.0481C22.0053 28.9129 21.9843 28.7778 21.937 28.6509C21.8898 28.5241 21.8172 28.4081 21.7239 28.3102C21.6305 28.2122 21.5182 28.1341 21.3937 28.0808C21.2693 28.0275 21.1354 28 21 28H17.25C17.1837 28 17.1201 27.9737 17.0732 27.9268C17.0263 27.8799 17 27.8163 17 27.75V22.3213C17.0001 22.2077 17.0388 22.0976 17.1098 22.009C17.1808 21.9204 17.2798 21.8586 17.3906 21.8337C18.7919 21.5212 20.3506 20.7931 21.6575 19.8037C23.4006 18.4844 24.51 16.8837 24.8706 15.2031C24.8893 15.1158 24.9314 15.0353 24.9926 14.9703C25.0537 14.9053 25.1315 14.8583 25.2175 14.8344C28.125 14.0281 30 10.4081 30 7V6C30 5.73478 29.8946 5.48043 29.7071 5.29289C29.5196 5.10536 29.2652 5 29 5ZM7 12.3888C6.99985 12.4326 6.98818 12.4756 6.96618 12.5134C6.94417 12.5513 6.9126 12.5828 6.87462 12.6046C6.83664 12.6264 6.79359 12.6379 6.74978 12.6379C6.70597 12.6378 6.66294 12.6263 6.625 12.6044C5.98375 12.2225 5.51562 11.6438 5.24125 11.2362C4.49688 10.1306 4.05375 8.69438 4.00437 7.25938C4.00311 7.22576 4.00865 7.19224 4.02065 7.16082C4.03264 7.1294 4.05086 7.10072 4.0742 7.07651C4.09754 7.05229 4.12553 7.03303 4.15649 7.01989C4.18745 7.00674 4.22074 6.99998 4.25437 7H6.75437C6.82068 7 6.88427 7.02634 6.93115 7.07322C6.97804 7.12011 7.00437 7.1837 7.00437 7.25C7.00313 8.96562 7 10.9294 7 12.3888ZM26.7581 11.2362C26.4837 11.6438 26.0163 12.2225 25.375 12.6044C25.337 12.6263 25.2939 12.6379 25.2501 12.6379C25.2062 12.6379 25.1631 12.6264 25.1251 12.6044C25.0871 12.5825 25.0556 12.551 25.0336 12.513C25.0116 12.4751 25 12.432 25 12.3881C25 10.7313 25 8.84875 24.9969 7.25C24.9969 7.1837 25.0232 7.12011 25.0701 7.07322C25.117 7.02634 25.1806 7 25.2469 7H27.7469C27.7805 6.99998 27.8138 7.00674 27.8448 7.01989C27.8757 7.03303 27.9037 7.05229 27.9271 7.07651C27.9504 7.10072 27.9686 7.1294 27.9806 7.16082C27.9926 7.19224 27.9981 7.22576 27.9969 7.25938C27.9475 8.69438 27.5031 10.1306 26.7588 11.2362H26.7581Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-start flex-col ml-6 pt-8">
                            <h2 class="text-base font-semibold leading-4 text-gray-800">
                                Secure Payment
                            </h2>
                            <p class=" text-base leading-6 mt-2 text-gray-600">Whether article spirits new her covered.</p>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
        

    <div class="container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
            <p class="font-bold text-5xl leading-3 cursor-pointer pb-2 text-left">About</p>
            <div class="relative mt-24">
                <div class="grid sm:grid-cols-3 grid-cols-2 sm:gap-8 gap-4">
                    <div class="z-20 w-12 h-12 bg-gray-800 rounded-full flex justify-center items-center">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/about-us-3-svg1.svg" alt="flag" />
                    </div>

                  <img class="z-20" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/about-us-3-svg2.svg" alt="note" />

                   <img class="z-20 sm:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/about-us-3-svg3.svg" alt="users" />
                </div>
                <hr class="z-10 absolute top-2/4 w-full bg-gray-200" />
            </div>
            <div class="grid sm:grid-cols-3 grid-cols-2 sm:gap-8 gap-4">
                <div>
                    <p class="font-semibold lg:text-2xl text-xl lg:leading-6 leading-5 text-gray-800 mt-6 text-left">Founded</p>
                    <p class="font-normal text-base leading-6 text-gray-600 mt-6 text-left">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
                <div>
                    <p class="font-semibold lg:text-2xl text-xl lg:leading-6 leading-5 text-gray-800 mt-6 text-left">50M montly enrichments</p>
                    <p class="font-normal text-base leading-6 text-gray-600 mt-6 text-left">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
                <div class="sm:block hidden">
                    <p class="font-semibold lg:text-2xl text-xl lg:leading-6 leading-5 text-gray-800 mt-6 text-left">400k User</p>
                    <p class="font-normal text-base leading-6 text-gray-600 mt-6 text-left">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            <div class="sm:hidden block relative mt-8">
                <div class="grid sm:grid-cols-3 grid-cols-2 sm:gap-8 gap-4">
                   <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/about-us-3-svg3.svg" alt="user" />
                </div>
                <hr class="z-10 absolute top-2/4 w-full bg-gray-200" />
            </div>
            <div class="sm:hidden grid sm:grid-cols-3 grid-cols-2 sm:gap-8 gap-4">
                <div>
                    <p class="font-semibold lg:text-2xl text-xl lg:leading-6 leading-5 text-gray-800 mt-6 text-left">400k User</p>
                    <p class="font-normal text-base leading-6 text-gray-600 mt-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>

            <div class="flex lg:flex-row flex-col md:gap-14 gap-16 justify-between lg:mt-20 mt-16">
                <div class="w-full lg:w-6/12">
                    <h2 class="font-bold lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800 text-left">Our Mission</h2>
                    <p class="font-normal text-base leading-6 text-gray-600 mt-6 w-full lg:w-10/12 xl:w-9/12 text-left">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.In the first place we have granted to God, and by this our present charter confirmed for us and our heirs forever that the English Church shall be free, and shall have her rights entire, and her liberties inviolate; and we will that it be thus observed; which is apparent from</p>
                    <p class="font-normal text-base leading-6 text-gray-600 w-full lg:w-10/12 xl:w-9/12 mt-10 text-left">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.In the first place we have granted to God, and by this our present charter confirmed for us and our heirs forever that the English Church shall be free, and shall have her rights entire, and her liberties inviolate; and we will that it be thus observed; which is apparent from</p>
                </div>
                <div class="w-full lg:w-6/12">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 lg:gap-12 gap-10">
                        <!-- Team Card -->
                        <div class="flex p-4 shadow-md">
                            <div class="mr-6">
                               <img class="mr-6"  src="https://tuk-cdn.s3.amazonaws.com/can-uploader/about-us-3-svg4.svg" alt="team card" />
                            </div>
                            <div class="">
                                <p class="font-semibold lg:text-2xl text-xl lg:leading-6 leading-5 text-gray-800 text-left">Team</p>
                                <p class="mt-2 font-normal text-base leading-6 text-gray-600 text-left">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                        </div>

                        <!-- Board Card -->
                        <div class="flex p-4 shadow-md">
                            <div class="mr-6">
                               <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/about-us-3-svg5.svg" alt="board card" />
                            </div>
                            <div class="">
                                <p class="font-semibold lg:text-2xl text-xl lg:leading-6 leading-5 text-gray-800 text-left">Board</p>
                                <p class="mt-2 font-normal text-base leading-6 text-gray-600 text-left">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                        </div>

                        <!-- Press Card -->
                        <div class="flex p-4 shadow-md">
                            <div class="mr-6">
                               <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/about-us-3-svg6.svg" alt="press card" />
                            </div>
                            <div class="">
                                <p class="font-semibold lg:text-2xl text-xl lg:leading-6 leading-5 text-gray-800 text-left">Press</p>
                                <p class="mt-2 font-normal text-base leading-6 text-gray-600 text-left">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="py-4 lg:py-8 relative">
        <img src="https://cdn.tuk.dev/assets/templates/radian/Back_Image.png" class="h-2/5 lg:h-full w-full lg:w-1/2 absolute inset-0 object-cover object-center xl:block hidden" alt="map" />
        <div class="xl:mx-auto xl:container relative">
            <div class="flex flex-wrap xl:mx-auto xl:container">
                <div class="w-full relative lg:w-1/2 xl:mt-10 mb-10 2xl:pr-24 2xl:pl-0 xl:pl-12 pl-0">
                    <img src="https://cdn.tuk.dev/assets/templates/radian/Back_Image.png" class="h-full w-full xl:w-1/2 absolute inset-0 bg-cover bg-center xl:hidden" alt="map" />
                    <div class="w-full flex flex-col items-start xl:justify-start relative z-20 xl:px-0 px-4 xl:py-0 py-4">
                        <div class="w-full 2xl:pl-48 xl:pt-1">
                            <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold tracking-wider text-gray-800">We’re Here</h1>
                            <div class="w-full md:w-10/12 mt-3">
                                <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider">We believe digital innovation is at the heart of every business success</h2>
                                <div class="mt-4 md:mt-8">
                                    <h2 class="text-sm md:text-base text-indigo-700 font-semibold">Address</h2>
                                    <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider mt-2">House-12, Road-12, Shekertek Muhammadpur Dhaka</h2>
                                </div>
                                <div class="mt-4 md:mt-8">
                                    <h2 class="text-sm md:text-base text-indigo-700 font-semibold">Contact</h2>
                                    <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider mt-2">01841816444 (Phone)</h2>
                                    <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider mt-2">09636262078 (Cell)</h2>
                                </div>
                                <div class="mt-4 md:mt-8">
                                    <h2 class="text-sm md:text-base text-indigo-700 font-semibold">Email</h2>
                                    <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider mt-2">nirbaanexpress@gmail.com</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 xl:pt-10 lg:pl-24">
                    <div class="flex flex-col items-start xl:justify-start 2xl:justify-end xl:px-0 px-4">
                        <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold tracking-wider text-indigo-700">Let’s Talk</h1>
                        <div class="w-full 2xl:w-8/12 mt-3">
                            <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider">For enquiries, please email us using the form below</h2>
                            <div class="mt-4 md:mt-8">
                                <p class="text-gray-800 text-base font-medium">Name</p>
                                <input class="mt-3 text-base border-2 w-11/12 lg:w-full xl:w-10/12 hover:border-indigo-600 focus:border-indigo-600 focus:outline-none border-black py-5 pl-4 text-gray-800" type="text" placeholder="Justin Timberlake" />
                            </div>
                            <div class="mt-4 md:mt-8">
                                <p class="text-gray-800 text-base font-medium">Email Address</p>
                                <input class="mt-3 text-base border-2 w-11/12 lg:w-full xl:w-10/12 hover:border-indigo-600 focus:border-indigo-600 focus:outline-none border-black py-5 pl-4 text-gray-800" type="email" placeholder="example@mail.com" />
                            </div>
                            <div class="mt-4 md:mt-8">
                                <p class="text-gray-800 text-base font-medium">Message</p>
                                <textarea class="mt-3 text-base border-2 w-11/12 lg:w-full xl:w-10/12 resize-none hover:border-indigo-600 focus:border-indigo-600 focus:outline-none border-black xl:h-40 py-5 pl-4 text-gray-800" type="text" placeholder="Write us something..."></textarea>
                            </div>
                            <div class="py-5">
                                <button class="py-3 md:py-5 px-5 md:px-10 bg-gray-900 text-white hover:opacity-90 ease-in duration-150 text-sm md:text-lg tracking-wider font-semibold">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-linear-pink-invert pb-12">
        <div class="mx-auto container pt-10 lg:pt-12 flex flex-col items-center justify-center">
            <div class="text-black flex flex-col md:items-center f-f-l">
                <div class="md:flex items-center mt-5 md:mt-10 text-base text-color f-f-l">
                    <h2 class="md:mr-6 pb-4 md:py-0 cursor-pointer">Download Now</h2>
                    <h2 class="cursor-pointer">License</h2>
                </div>
                <div class="my-6 text-base text-color f-f-l">
                    <ul class="md:flex items-center">
                        <li class="md:mr-6 cursor-pointer pt-4 lg:py-0">About</li>
                        <li class="md:mr-6 cursor-pointer pt-4 lg:py-0">Features</li>
                        <li class="md:mr-6 cursor-pointer pt-4 lg:py-0">Pricing</li>
                        <li class="md:mr-6 cursor-pointer pt-4 lg:py-0">Careers</li>
                        <li class="md:mr-6 cursor-pointer pt-4 lg:py-0">Help</li>
                        <li class="cursor-pointer pt-4 lg:py-0">Privacy Policy</li>
                    </ul>
                </div>
                <div class="text-sm text-color mb-10 f-f-l">
                    <p>© 2020 Prodify. All rights reserved</p>
                </div>
            </div>
            <div class="w-9/12 h-0.5 bg-gray-100 rounded-full"></div>
            <div class="flex justify-between items-center pt-12">
                <div class="mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="135" height="40" viewBox="0 0 135 40" fill="none">
                        <g clip-path="url(#clip0)">
                            <path
                                d="M124.249 -0.000114141H10.7566C10.3429 -0.000114141 9.9342 -0.000114141 9.5216 0.00188586C9.17621 0.00388586 8.83358 0.00969586 8.48488 0.0145859C7.72733 0.0224877 6.97157 0.0815621 6.22416 0.191296C5.4778 0.303418 4.75482 0.514802 4.07967 0.818296C3.40534 1.12436 2.7892 1.52205 2.25357 1.99696C1.71514 2.47052 1.26632 3.0179 0.924356 3.61805C0.581453 4.21699 0.343683 4.85882 0.219258 5.52137C0.0936495 6.18307 0.0260586 6.85241 0.0170916 7.52337C0.00662229 7.82997 0.00551669 8.13759 0 8.44423V31.5585C0.00551669 31.869 0.00662229 32.1698 0.0170916 32.4804C0.0260614 33.1513 0.0936522 33.8206 0.219258 34.4823C0.343339 35.1452 0.581124 35.7874 0.924356 36.3866C1.26616 36.9848 1.71505 37.53 2.25357 38.0009C2.78717 38.4779 3.40371 38.8759 4.07967 39.1796C4.75481 39.4839 5.47772 39.6965 6.22416 39.8104C6.9717 39.9192 7.72738 39.9783 8.48488 39.9872C8.83358 39.994 9.17621 39.9979 9.5216 39.9979C9.93419 39.9999 10.343 39.9999 10.7566 39.9999H124.249C124.655 39.9999 125.067 39.9999 125.472 39.9979C125.816 39.9979 126.169 39.994 126.512 39.9872C127.268 39.9788 128.023 39.9197 128.769 39.8104C129.518 39.6957 130.243 39.4831 130.921 39.1796C131.597 38.8757 132.213 38.4777 132.746 38.0009C133.283 37.5281 133.733 36.9833 134.079 36.3866C134.42 35.787 134.655 35.1448 134.777 34.4823C134.903 33.8205 134.973 33.1514 134.987 32.4804C134.991 32.1698 134.991 31.869 134.991 31.5585C135 31.1952 135 30.8339 135 30.4647V9.53602C135 9.16981 135 8.80653 134.991 8.44423C134.991 8.13759 134.991 7.82997 134.987 7.52333C134.973 6.85231 134.903 6.18312 134.777 5.52133C134.655 4.85917 134.419 4.21739 134.079 3.61801C133.383 2.41508 132.278 1.43591 130.921 0.818206C130.243 0.515453 129.518 0.304126 128.769 0.191206C128.023 0.0809886 127.269 0.0218936 126.512 0.0144459C126.169 0.00956586 125.816 0.00370586 125.472 0.00175586C125.067 -0.000244141 124.655 -0.000244141 124.249 -0.000244141V-0.000114141Z"
                                fill="#A6A6A6"
                            ></path>
                            <path
                                d="M9.43001 39.1279C9.08569 39.1279 8.74969 39.124 8.40807 39.1172C7.70037 39.109 6.99433 39.0545 6.29574 38.954C5.64433 38.8547 5.0133 38.67 4.42345 38.406C3.839 38.1442 3.30594 37.8009 2.84469 37.3892C2.37676 36.9824 1.98718 36.5106 1.6914 35.9924C1.39236 35.4709 1.18541 34.9119 1.07775 34.3349C0.961494 33.7149 0.898592 33.0879 0.889592 32.4595C0.882427 32.2485 0.873047 31.5462 0.873047 31.5462V8.4408C0.873047 8.4408 0.883037 7.74924 0.889648 7.54607C0.898266 6.91862 0.960802 6.29266 1.07671 5.67361C1.18457 5.09501 1.39168 4.53439 1.69088 4.01116C1.98557 3.49337 2.37299 3.02118 2.8381 2.61292C3.30269 2.20077 3.83745 1.85568 4.42289 1.59023C5.01139 1.32706 5.64123 1.14366 6.29132 1.04618C6.99221 0.944725 7.7007 0.889873 8.41085 0.882086L9.43056 0.869873H125.57L126.602 0.882576C127.306 0.889976 128.008 0.944339 128.702 1.0452C129.359 1.14391 129.995 1.32858 130.59 1.59316C131.763 2.12812 132.718 2.97448 133.32 4.0136C133.614 4.53322 133.818 5.08926 133.924 5.66287C134.042 6.287 134.107 6.91788 134.121 7.55047C134.124 7.83373 134.124 8.13799 134.124 8.4408C134.133 8.81587 134.133 9.17288 134.133 9.53281V30.4659C134.133 30.8292 134.133 31.1838 134.124 31.5413C134.124 31.8666 134.124 32.1645 134.12 32.4712C134.107 33.0925 134.042 33.7121 133.927 34.3251C133.821 34.9063 133.615 35.4696 133.316 35.9954C133.018 36.5079 132.631 36.9757 132.169 37.3814C131.707 37.7953 131.173 38.1406 130.587 38.4041C129.994 38.6702 129.358 38.8556 128.702 38.954C128.004 39.055 127.297 39.1096 126.59 39.1172C126.259 39.124 125.912 39.1279 125.576 39.1279L124.35 39.1299L9.43001 39.1279Z"
                                fill="black"
                            ></path>
                            <path
                                d="M32.7973 20.3006C32.8081 19.4659 33.0298 18.6475 33.4418 17.9216C33.8538 17.1956 34.4428 16.5857 35.1539 16.1485C34.7021 15.5034 34.1062 14.9724 33.4134 14.5979C32.7205 14.2233 31.9499 14.0155 31.1627 13.9908C29.4835 13.8146 27.8555 14.9957 26.9998 14.9957C26.1275 14.9957 24.81 14.0083 23.3913 14.0375C22.4736 14.0672 21.5793 14.334 20.7954 14.8121C20.0115 15.2901 19.3649 15.9631 18.9184 16.7654C16.9844 20.1138 18.427 25.0349 20.2796 27.7415C21.2065 29.0668 22.2898 30.5473 23.7072 30.4948C25.0943 30.4372 25.6123 29.6103 27.2866 29.6103C28.9454 29.6103 29.4314 30.4948 30.8776 30.4614C32.366 30.4372 33.3038 29.1302 34.1981 27.7923C34.8641 26.8479 35.3766 25.8042 35.7166 24.6997C34.8518 24.334 34.1139 23.7218 33.5948 22.9395C33.0757 22.1572 32.7983 21.2394 32.7973 20.3006Z"
                                fill="white"
                            ></path>
                            <path d="M30.0656 12.2108C30.8772 11.2366 31.277 9.98445 31.1802 8.72021C29.9403 8.85044 28.7951 9.44299 27.9726 10.3798C27.5704 10.8375 27.2624 11.3699 27.0662 11.9467C26.87 12.5235 26.7893 13.1333 26.8289 13.7412C27.449 13.7476 28.0625 13.6132 28.6232 13.3481C29.1838 13.083 29.6771 12.6942 30.0656 12.2108Z" fill="white"></path>
                            <path d="M50.3308 27.1397H45.5974L44.4607 30.4961H42.4558L46.9392 18.0781H49.0222L53.5056 30.4961H51.4665L50.3308 27.1397ZM46.0876 25.5908H49.8396L47.99 20.1436H47.9383L46.0876 25.5908Z" fill="white"></path>
                            <path
                                d="M63.1883 25.9697C63.1883 28.7832 61.6824 30.5908 59.4099 30.5908C58.8343 30.6209 58.2618 30.4883 57.758 30.2082C57.2542 29.928 56.8395 29.5117 56.5613 29.0068H56.5183V33.4912H54.6599V21.4423H56.4588V22.9482H56.493C56.7839 22.4457 57.2056 22.0316 57.7133 21.7497C58.2209 21.4679 58.7954 21.3289 59.3758 21.3476C61.6736 21.3476 63.1883 23.164 63.1883 25.9697ZM61.2781 25.9697C61.2781 24.1367 60.3308 22.9316 58.8855 22.9316C57.4656 22.9316 56.5105 24.1621 56.5105 25.9697C56.5105 27.7939 57.4656 29.0156 58.8855 29.0156C60.3308 29.0156 61.2781 27.8193 61.2781 25.9697Z"
                                fill="white"
                            ></path>
                            <path
                                d="M73.1531 25.9697C73.1531 28.7832 71.6472 30.5908 69.3748 30.5908C68.7991 30.6209 68.2266 30.4883 67.7228 30.2081C67.219 29.928 66.8043 29.5117 66.5262 29.0068H66.4832V33.4912H64.6248V21.4423H66.4236V22.9482H66.4578C66.7487 22.4457 67.1704 22.0315 67.6781 21.7497C68.1857 21.4679 68.7603 21.3289 69.3406 21.3476C71.6385 21.3476 73.1531 23.164 73.1531 25.9697ZM71.2429 25.9697C71.2429 24.1367 70.2957 22.9316 68.8504 22.9316C67.4304 22.9316 66.4754 24.1621 66.4754 25.9697C66.4754 27.7939 67.4304 29.0156 68.8504 29.0156C70.2957 29.0156 71.243 27.8193 71.243 25.9697H71.2429Z"
                                fill="white"
                            ></path>
                            <path
                                d="M79.739 27.0362C79.8767 28.2676 81.073 29.0762 82.7078 29.0762C84.2742 29.0762 85.4012 28.2676 85.4012 27.1572C85.4012 26.1934 84.7215 25.6162 83.1121 25.2207L81.5027 24.833C79.2225 24.2822 78.1638 23.2158 78.1638 21.4854C78.1638 19.3428 80.031 17.8711 82.6824 17.8711C85.3064 17.8711 87.1053 19.3428 87.1658 21.4854H85.2898C85.1775 20.2461 84.1531 19.4981 82.656 19.4981C81.1589 19.4981 80.1345 20.2549 80.1345 21.3565C80.1345 22.2344 80.7888 22.751 82.3894 23.1465L83.7576 23.4824C86.3054 24.0849 87.364 25.1084 87.364 26.9248C87.364 29.248 85.5134 30.7031 82.5701 30.7031C79.8162 30.7031 77.9568 29.2822 77.8367 27.0361L79.739 27.0362Z"
                                fill="white"
                            ></path>
                            <path d="M91.3747 19.2998V21.4424H93.0964V22.9141H91.3747V27.9053C91.3747 28.6807 91.7195 29.042 92.4763 29.042C92.6807 29.0384 92.8848 29.0241 93.0876 28.999V30.4619C92.7474 30.5255 92.4015 30.5543 92.0554 30.5478C90.2224 30.5478 89.5076 29.8593 89.5076 28.1035V22.9141H88.1912V21.4424H89.5075V19.2998H91.3747Z" fill="white"></path>
                            <path d="M94.0935 25.9697C94.0935 23.1211 95.7712 21.3311 98.3875 21.3311C101.012 21.3311 102.682 23.1211 102.682 25.9697C102.682 28.8262 101.021 30.6084 98.3875 30.6084C95.7546 30.6084 94.0935 28.8262 94.0935 25.9697ZM100.789 25.9697C100.789 24.0156 99.8933 22.8623 98.3874 22.8623C96.8816 22.8623 95.9871 24.0244 95.9871 25.9697C95.9871 27.9316 96.8816 29.0762 98.3874 29.0762C99.8933 29.0762 100.789 27.9316 100.789 25.9697H100.789Z" fill="white"></path>
                            <path d="M104.215 21.4425H105.987V22.9835H106.03C106.15 22.5022 106.432 22.0769 106.829 21.779C107.225 21.4811 107.712 21.3288 108.208 21.3478C108.422 21.347 108.636 21.3703 108.845 21.4171V23.1554C108.574 23.0728 108.292 23.0348 108.01 23.0431C107.74 23.0321 107.47 23.0797 107.221 23.1826C106.971 23.2855 106.746 23.4412 106.562 23.6391C106.378 23.837 106.239 24.0724 106.155 24.3291C106.07 24.5857 106.042 24.8576 106.073 25.1261V30.4962H104.215L104.215 21.4425Z" fill="white"></path>
                            <path
                                d="M117.413 27.8369C117.163 29.4805 115.562 30.6084 113.514 30.6084C110.881 30.6084 109.246 28.8437 109.246 26.0127C109.246 23.1729 110.889 21.3311 113.436 21.3311C115.941 21.3311 117.516 23.0518 117.516 25.7969V26.4336H111.122V26.5459C111.092 26.8791 111.134 27.2148 111.244 27.5306C111.354 27.8464 111.531 28.1352 111.761 28.3778C111.991 28.6203 112.271 28.8111 112.58 28.9374C112.89 29.0637 113.223 29.1226 113.557 29.1103C113.997 29.1515 114.437 29.0498 114.814 28.8203C115.191 28.5909 115.483 28.246 115.648 27.8369L117.413 27.8369ZM111.131 25.1348H115.657C115.674 24.8352 115.628 24.5354 115.524 24.2541C115.419 23.9729 115.257 23.7164 115.049 23.5006C114.84 23.2849 114.589 23.1145 114.312 23.0003C114.034 22.8861 113.736 22.8305 113.436 22.8369C113.134 22.8351 112.834 22.8933 112.554 23.008C112.274 23.1227 112.019 23.2918 111.805 23.5054C111.59 23.7191 111.42 23.973 111.305 24.2527C111.189 24.5323 111.13 24.8321 111.131 25.1348V25.1348Z"
                                fill="white"
                            ></path>
                            <path
                                d="M45.8547 8.29388C46.2443 8.26592 46.6353 8.32478 46.9994 8.46621C47.3635 8.60765 47.6917 8.82813 47.9603 9.11175C48.2289 9.39538 48.4312 9.73508 48.5526 10.1063C48.674 10.4776 48.7115 10.8712 48.6623 11.2587C48.6623 13.165 47.6321 14.2607 45.8547 14.2607H43.6995V8.29388H45.8547ZM44.6262 13.4169H45.7512C46.0296 13.4335 46.3082 13.3879 46.5668 13.2833C46.8253 13.1786 47.0573 13.0177 47.2458 12.8121C47.4343 12.6066 47.5745 12.3616 47.6564 12.0949C47.7383 11.8283 47.7596 11.5468 47.719 11.2709C47.7567 10.996 47.7331 10.7163 47.65 10.4516C47.5669 10.1869 47.4263 9.94394 47.2382 9.74001C47.0501 9.53608 46.8193 9.37628 46.5622 9.27204C46.3051 9.1678 46.0282 9.12172 45.7512 9.13709H44.6262V13.4169Z"
                                fill="white"
                            ></path>
                            <path
                                d="M49.7093 12.0073C49.681 11.7114 49.7148 11.4128 49.8086 11.1307C49.9025 10.8487 50.0542 10.5893 50.2542 10.3693C50.4541 10.1493 50.6978 9.97358 50.9697 9.8533C51.2415 9.73303 51.5355 9.6709 51.8328 9.6709C52.1301 9.6709 52.4241 9.73303 52.6959 9.8533C52.9678 9.97358 53.2115 10.1493 53.4114 10.3693C53.6114 10.5893 53.7631 10.8487 53.857 11.1307C53.9508 11.4128 53.9846 11.7114 53.9563 12.0073C53.9852 12.3035 53.9517 12.6025 53.8581 12.885C53.7645 13.1675 53.6129 13.4273 53.4129 13.6478C53.2129 13.8682 52.969 14.0443 52.6969 14.1648C52.4248 14.2854 52.1304 14.3476 51.8328 14.3476C51.5352 14.3476 51.2408 14.2854 50.9687 14.1648C50.6966 14.0443 50.4527 13.8682 50.2527 13.6478C50.0527 13.4273 49.9011 13.1675 49.8075 12.885C49.7139 12.6025 49.6804 12.3035 49.7093 12.0073ZM53.0423 12.0073C53.0423 11.0312 52.6038 10.4604 51.8343 10.4604C51.0618 10.4604 50.6273 11.0312 50.6273 12.0073C50.6273 12.9912 51.0618 13.5576 51.8343 13.5576C52.6038 13.5576 53.0423 12.9873 53.0423 12.0073H53.0423Z"
                                fill="white"
                            ></path>
                            <path d="M59.6018 14.2607H58.6799L57.7493 10.9443H57.679L56.7522 14.2607H55.8391L54.5979 9.75781H55.4993L56.3059 13.1938H56.3723L57.2981 9.75781H58.1506L59.0764 13.1938H59.1467L59.9495 9.75781H60.8381L59.6018 14.2607Z" fill="white"></path>
                            <path
                                d="M61.8821 9.75786H62.7375V10.4732H62.804C62.9166 10.2163 63.1066 10.0009 63.3475 9.85709C63.5884 9.71328 63.8681 9.64821 64.1477 9.67094C64.3668 9.65446 64.5868 9.6875 64.7914 9.7676C64.996 9.84769 65.18 9.9728 65.3296 10.1336C65.4793 10.2945 65.5909 10.4869 65.6561 10.6968C65.7213 10.9066 65.7385 11.1284 65.7063 11.3457V14.2607H64.8176V11.5689C64.8176 10.8453 64.5032 10.4854 63.846 10.4854C63.6972 10.4785 63.5487 10.5038 63.4106 10.5596C63.2726 10.6154 63.1482 10.7005 63.0461 10.8089C62.944 10.9172 62.8665 11.0464 62.819 11.1876C62.7714 11.3287 62.755 11.4784 62.7707 11.6265V14.2608H61.8821L61.8821 9.75786Z"
                                fill="white"
                            ></path>
                            <path d="M67.1223 8H68.011V14.2607H67.1223V8Z" fill="white"></path>
                            <path
                                d="M69.2463 12.0074C69.2181 11.7114 69.2519 11.4128 69.3458 11.1308C69.4397 10.8487 69.5914 10.5893 69.7914 10.3693C69.9914 10.1494 70.2351 9.97358 70.507 9.85331C70.7788 9.73303 71.0728 9.6709 71.3701 9.6709C71.6674 9.6709 71.9614 9.73303 72.2333 9.85331C72.5052 9.97358 72.7489 10.1494 72.9489 10.3693C73.1488 10.5893 73.3006 10.8487 73.3945 11.1308C73.4883 11.4128 73.5222 11.7114 73.4939 12.0074C73.5227 12.3036 73.4892 12.6026 73.3956 12.8851C73.302 13.1676 73.1503 13.4274 72.9503 13.6478C72.7503 13.8683 72.5064 14.0444 72.2342 14.1649C71.9621 14.2854 71.6678 14.3477 71.3701 14.3477C71.0725 14.3477 70.7782 14.2854 70.506 14.1649C70.2339 14.0444 69.99 13.8683 69.79 13.6478C69.59 13.4274 69.4383 13.1676 69.3446 12.8851C69.251 12.6026 69.2175 12.3036 69.2463 12.0074ZM72.5793 12.0074C72.5793 11.0313 72.1409 10.4605 71.3713 10.4605C70.5989 10.4605 70.1644 11.0313 70.1644 12.0074C70.1644 12.9913 70.5989 13.5577 71.3713 13.5577C72.1409 13.5577 72.5794 12.9873 72.5794 12.0074H72.5793Z"
                                fill="white"
                            ></path>
                            <path
                                d="M74.4294 12.9873C74.4294 12.1767 75.033 11.7095 76.1042 11.6431L77.324 11.5727V11.1841C77.324 10.7085 77.0095 10.4399 76.4021 10.4399C75.906 10.4399 75.5623 10.6221 75.4636 10.9404H74.6033C74.6941 10.167 75.4216 9.6709 76.4431 9.6709C77.572 9.6709 78.2087 10.2329 78.2087 11.1841V14.2607H77.3533V13.6279H77.283C77.1402 13.8549 76.9398 14.04 76.7022 14.1642C76.4646 14.2884 76.1983 14.3473 75.9304 14.3349C75.7414 14.3546 75.5503 14.3344 75.3696 14.2757C75.1888 14.217 75.0224 14.1211 74.8809 13.9941C74.7395 13.8672 74.6263 13.712 74.5485 13.5386C74.4708 13.3651 74.4302 13.1774 74.4294 12.9873ZM77.324 12.6025V12.2261L76.2244 12.2964C75.6042 12.3379 75.323 12.5488 75.323 12.9458C75.323 13.3511 75.6745 13.5869 76.158 13.5869C76.2996 13.6012 76.4427 13.5869 76.5787 13.5448C76.7147 13.5028 76.8409 13.4337 76.9497 13.3419C77.0584 13.2501 77.1476 13.1373 77.212 13.0102C77.2763 12.8832 77.3144 12.7446 77.324 12.6025Z"
                                fill="white"
                            ></path>
                            <path
                                d="M79.3767 12.0073C79.3767 10.5845 80.1082 9.68312 81.2458 9.68312C81.5273 9.67015 81.8066 9.73756 82.0511 9.87745C82.2956 10.0173 82.4953 10.224 82.6267 10.4731H82.6931V8H83.5818V14.2607H82.7302V13.5493H82.6599C82.5183 13.7968 82.3117 14.0008 82.0624 14.1393C81.8132 14.2778 81.5308 14.3455 81.2459 14.3349C80.1003 14.335 79.3767 13.4336 79.3767 12.0073ZM80.2947 12.0073C80.2947 12.9624 80.7449 13.5371 81.4978 13.5371C82.2468 13.5371 82.7097 12.9541 82.7097 12.0112C82.7097 11.0728 82.242 10.4815 81.4978 10.4815C80.7498 10.4815 80.2947 11.0601 80.2947 12.0073H80.2947Z"
                                fill="white"
                            ></path>
                            <path
                                d="M87.2586 12.0073C87.2303 11.7114 87.2641 11.4128 87.358 11.1307C87.4518 10.8487 87.6036 10.5893 87.8035 10.3693C88.0034 10.1493 88.2472 9.97358 88.519 9.8533C88.7909 9.73303 89.0848 9.6709 89.3821 9.6709C89.6794 9.6709 89.9734 9.73303 90.2452 9.8533C90.5171 9.97358 90.7608 10.1493 90.9607 10.3693C91.1607 10.5893 91.3124 10.8487 91.4063 11.1307C91.5001 11.4128 91.534 11.7114 91.5057 12.0073C91.5345 12.3035 91.501 12.6025 91.4075 12.885C91.3139 13.1675 91.1622 13.4273 90.9622 13.6478C90.7622 13.8682 90.5183 14.0443 90.2462 14.1648C89.9741 14.2854 89.6797 14.3476 89.3821 14.3476C89.0845 14.3476 88.7902 14.2854 88.518 14.1648C88.2459 14.0443 88.002 13.8682 87.802 13.6478C87.602 13.4273 87.4504 13.1675 87.3568 12.885C87.2632 12.6025 87.2297 12.3035 87.2586 12.0073ZM90.5916 12.0073C90.5916 11.0312 90.1531 10.4604 89.3836 10.4604C88.6111 10.4604 88.1766 11.0312 88.1766 12.0073C88.1766 12.9912 88.6112 13.5576 89.3836 13.5576C90.1531 13.5576 90.5916 12.9873 90.5916 12.0073Z"
                                fill="white"
                            ></path>
                            <path
                                d="M92.698 9.75786H93.5535V10.4732H93.6199C93.7325 10.2163 93.9225 10.0009 94.1634 9.85709C94.4043 9.71328 94.684 9.64821 94.9636 9.67094C95.1827 9.65446 95.4027 9.6875 95.6073 9.7676C95.8119 9.84769 95.9959 9.9728 96.1456 10.1336C96.2952 10.2945 96.4068 10.4869 96.472 10.6968C96.5372 10.9066 96.5544 11.1284 96.5222 11.3457V14.2607H95.6336V11.5689C95.6336 10.8453 95.3191 10.4854 94.6619 10.4854C94.5131 10.4785 94.3646 10.5038 94.2266 10.5596C94.0885 10.6154 93.9641 10.7005 93.862 10.8089C93.7599 10.9172 93.6824 11.0464 93.6349 11.1876C93.5874 11.3287 93.5709 11.4784 93.5867 11.6265V14.2608H92.698V9.75786Z"
                                fill="white"
                            ></path>
                            <path d="M101.544 8.63672V9.77832H102.519V10.5269H101.544V12.8423C101.544 13.314 101.738 13.5205 102.18 13.5205C102.294 13.5201 102.407 13.5133 102.519 13.5V14.2402C102.36 14.2688 102.198 14.284 102.036 14.2856C101.048 14.2856 100.654 13.938 100.654 13.0698V10.5268H99.9392V9.77828H100.654V8.63672H101.544Z" fill="white"></path>
                            <path
                                d="M103.733 8H104.614V10.4815H104.684C104.802 10.2221 104.998 10.0055 105.243 9.86119C105.489 9.71684 105.773 9.65176 106.057 9.67481C106.275 9.66295 106.493 9.69934 106.695 9.78138C106.898 9.86342 107.079 9.9891 107.228 10.1494C107.376 10.3098 107.487 10.5008 107.552 10.709C107.618 10.9171 107.637 11.1372 107.608 11.3535V14.2607H106.719V11.5728C106.719 10.8535 106.384 10.4893 105.756 10.4893C105.603 10.4767 105.449 10.4977 105.306 10.5508C105.162 10.6038 105.031 10.6877 104.923 10.7964C104.815 10.9051 104.732 11.0362 104.68 11.1803C104.628 11.3244 104.608 11.4782 104.622 11.6308V14.2607H103.733L103.733 8Z"
                                fill="white"
                            ></path>
                            <path
                                d="M112.79 13.045C112.669 13.4565 112.407 13.8125 112.051 14.0507C111.694 14.2888 111.265 14.394 110.839 14.3477C110.542 14.3556 110.247 14.2987 109.975 14.1812C109.702 14.0637 109.458 13.8883 109.26 13.6671C109.063 13.446 108.915 13.1844 108.828 12.9006C108.742 12.6168 108.718 12.3175 108.758 12.0235C108.719 11.7286 108.743 11.4287 108.83 11.144C108.916 10.8594 109.063 10.5966 109.26 10.3735C109.457 10.1504 109.699 9.97227 109.971 9.85106C110.243 9.72985 110.537 9.66844 110.835 9.67097C112.088 9.67097 112.843 10.527 112.843 11.941V12.2511H109.664V12.3009C109.65 12.4661 109.671 12.6324 109.725 12.7892C109.779 12.9459 109.865 13.0896 109.978 13.2111C110.091 13.3326 110.228 13.4291 110.38 13.4945C110.533 13.5599 110.697 13.5927 110.863 13.5909C111.076 13.6164 111.291 13.5781 111.482 13.4809C111.672 13.3837 111.83 13.2319 111.934 13.045L112.79 13.045ZM109.664 11.5938H111.938C111.949 11.4427 111.929 11.2909 111.878 11.1482C111.827 11.0055 111.747 10.875 111.642 10.7651C111.538 10.6553 111.412 10.5685 111.272 10.5103C111.132 10.4521 110.981 10.4239 110.83 10.4273C110.676 10.4254 110.523 10.4543 110.381 10.5122C110.239 10.5701 110.109 10.656 110.001 10.7647C109.892 10.8734 109.806 11.0028 109.748 11.1452C109.691 11.2876 109.662 11.4401 109.664 11.5938H109.664Z"
                                fill="white"
                            ></path>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="135" height="40" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="135" height="40" viewBox="0 0 135 40" fill="none">
                        <path d="M130 0H5C2.23858 0 0 2.23858 0 5V35C0 37.7614 2.23858 40 5 40H130C132.761 40 135 37.7614 135 35V5C135 2.23858 132.761 0 130 0Z" fill="black"></path>
                        <path
                            d="M130 0.800044C131.114 0.801331 132.181 1.24427 132.968 2.03169C133.756 2.81911 134.199 3.8867 134.2 5.00024V35.0002C134.199 36.1138 133.756 37.1814 132.968 37.9688C132.181 38.7562 131.114 39.1991 130 39.2004H5C3.88645 39.1992 2.81888 38.7562 2.0315 37.9688C1.24412 37.1814 0.801231 36.1138 0.8 35.0002V5.00024C0.801212 3.88669 1.24409 2.81909 2.03148 2.03166C2.81886 1.24424 3.88644 0.801309 5 0.800044H130ZM130 0.000244141H5C3.67511 0.00412224 2.40559 0.532152 1.46875 1.46899C0.531908 2.40584 0.0038781 3.67535 0 5.00024L0 35.0002C0.0038781 36.3251 0.531908 37.5947 1.46875 38.5315C2.40559 39.4683 3.67511 39.9964 5 40.0002H130C131.325 39.9964 132.594 39.4683 133.531 38.5315C134.468 37.5947 134.996 36.3251 135 35.0002V5.00024C134.996 3.67535 134.468 2.40584 133.531 1.46899C132.594 0.532152 131.325 0.00412224 130 0.000244141Z"
                            fill="#A6A6A6"
                        ></path>
                        <path
                            d="M47.4183 10.2433C47.4365 10.6103 47.3798 10.9771 47.2516 11.3214C47.1235 11.6658 46.9267 11.9804 46.6731 12.2462C46.3889 12.541 46.0456 12.7724 45.6658 12.9254C45.286 13.0784 44.8782 13.1494 44.469 13.1339C44.0572 13.1376 43.6488 13.059 43.2679 12.9026C42.8869 12.7462 42.5411 12.5152 42.2507 12.2233C41.9603 11.9313 41.7312 11.5842 41.5768 11.2024C41.4225 10.8207 41.346 10.4119 41.3519 10.0001C41.346 9.58837 41.4225 9.17959 41.5769 8.79781C41.7313 8.41603 41.9604 8.06895 42.2508 7.77695C42.5412 7.48496 42.887 7.25395 43.2679 7.09748C43.6488 6.94102 44.0572 6.86226 44.469 6.86584C44.8924 6.86456 45.3115 6.95016 45.7005 7.11734C46.0617 7.26378 46.3833 7.49348 46.639 7.78774L46.1116 8.31554C45.9106 8.07899 45.658 7.89178 45.3732 7.76834C45.0884 7.64491 44.779 7.58856 44.469 7.60364C44.1569 7.60202 43.8477 7.66341 43.5599 7.78412C43.2721 7.90483 43.0116 8.08239 42.7941 8.30615C42.5765 8.52991 42.4064 8.79527 42.2938 9.08635C42.1812 9.37743 42.1286 9.68823 42.139 10.0001C42.1315 10.4673 42.263 10.9262 42.5167 11.3186C42.7704 11.711 43.1349 12.0192 43.564 12.2041C43.9931 12.3891 44.4674 12.4425 44.9269 12.3575C45.3864 12.2725 45.8102 12.0529 46.1448 11.7267C46.4527 11.395 46.6311 10.9637 46.6477 10.5113H44.469V9.79064H47.3763C47.4038 9.93998 47.4178 10.0915 47.4183 10.2433Z"
                            fill="white"
                            stroke="white"
                            stroke-width="0.2"
                            stroke-miterlimit="10"
                        ></path>
                        <path d="M52.0278 7.7373H49.2954V9.6396H51.7593V10.3604H49.2954V12.2627H52.0278V13H48.5249V7H52.0278V7.7373Z" fill="white" stroke="white" stroke-width="0.2" stroke-miterlimit="10"></path>
                        <path d="M55.2786 13H54.5071V7.7373H52.8313V7H56.9544V7.7373H55.2786V13Z" fill="white" stroke="white" stroke-width="0.2" stroke-miterlimit="10"></path>
                        <path d="M59.938 13V7H60.7085V13H59.938Z" fill="white" stroke="white" stroke-width="0.2" stroke-miterlimit="10"></path>
                        <path d="M64.1284 13H63.3569V7.7373H61.6812V7H65.8042V7.7373H64.1284V13Z" fill="white" stroke="white" stroke-width="0.2" stroke-miterlimit="10"></path>
                        <path
                            d="M73.6092 12.2246C73.0252 12.8069 72.2341 13.1338 71.4095 13.1338C70.5848 13.1338 69.7938 12.8069 69.2098 12.2246C68.9209 11.932 68.6937 11.5843 68.5419 11.2021C68.3901 10.8199 68.3167 10.4111 68.326 10C68.3167 9.58891 68.3901 9.18011 68.5419 8.79795C68.6937 8.41578 68.9209 8.06805 69.2098 7.77542C69.4984 7.48669 69.8412 7.25772 70.2185 7.10162C70.5957 6.94552 71.0001 6.86536 71.4083 6.86572C71.8166 6.86609 72.2208 6.94697 72.5978 7.10373C72.9748 7.2605 73.3171 7.49008 73.6053 7.77932C73.8944 8.07118 74.122 8.41814 74.2744 8.79961C74.4269 9.18107 74.5013 9.58929 74.493 10C74.5021 10.4111 74.4285 10.8198 74.2767 11.202C74.1249 11.5841 73.8979 11.9318 73.6092 12.2246ZM69.7791 11.7222C70.2116 12.154 70.7978 12.3965 71.409 12.3965C72.0202 12.3965 72.6064 12.154 73.0389 11.7222C73.2607 11.4951 73.4341 11.2255 73.5488 10.9294C73.6634 10.6334 73.7169 10.3173 73.7059 10C73.7169 9.68278 73.6634 9.36661 73.5488 9.0706C73.4341 8.7746 73.2607 8.5049 73.0389 8.27782C72.6064 7.84603 72.0202 7.60351 71.409 7.60351C70.7978 7.60351 70.2116 7.84603 69.7791 8.27782C69.5576 8.50508 69.3844 8.77483 69.2699 9.07081C69.1555 9.36679 69.1021 9.68287 69.1131 10C69.1021 10.3172 69.1555 10.6333 69.2699 10.9292C69.3844 11.2252 69.5576 11.495 69.7791 11.7222Z"
                            fill="white"
                            stroke="white"
                            stroke-width="0.2"
                            stroke-miterlimit="10"
                        ></path>
                        <path d="M75.5752 13V7H76.5137L79.4297 11.6675H79.4629L79.4297 10.5112V7H80.2012V13H79.3965L76.3457 8.1064H76.3125L76.3457 9.2627V13H75.5752Z" fill="white" stroke="white" stroke-width="0.2" stroke-miterlimit="10"></path>
                        <path
                            d="M68.1359 21.7517C67.2954 21.7549 66.4746 22.007 65.7773 22.4763C65.08 22.9456 64.5374 23.611 64.2179 24.3884C63.8985 25.1659 63.8166 26.0205 63.9825 26.8445C64.1484 27.6685 64.5548 28.4248 65.1503 29.018C65.7457 29.6112 66.5036 30.0147 67.3282 30.1775C68.1528 30.3403 69.0071 30.2551 69.7834 29.9327C70.5596 29.6103 71.2229 29.0652 71.6895 28.3661C72.1561 27.667 72.4052 26.8453 72.4052 26.0048C72.4134 25.4426 72.3085 24.8845 72.0967 24.3637C71.8849 23.8429 71.5704 23.37 71.1721 22.9732C70.7738 22.5764 70.2997 22.2638 69.7781 22.0539C69.2565 21.8441 68.698 21.7413 68.1359 21.7517ZM68.1359 28.5825C67.6182 28.6194 67.1015 28.4996 66.6529 28.2387C66.2043 27.9778 65.8447 27.5879 65.6208 27.1198C65.3969 26.6516 65.3191 26.1269 65.3976 25.6139C65.4761 25.101 65.7072 24.6235 66.0609 24.2438C66.4145 23.864 66.8744 23.5995 67.3804 23.4847C67.8865 23.3699 68.4154 23.4101 68.8983 23.6001C69.3812 23.7902 69.7957 24.1212 70.0879 24.5501C70.38 24.979 70.5363 25.4859 70.5363 26.0048C70.552 26.3326 70.5019 26.6603 70.3891 26.9685C70.2763 27.2767 70.1029 27.5593 69.8792 27.7994C69.6555 28.0396 69.3861 28.2327 69.0867 28.3671C68.7873 28.5016 68.464 28.5749 68.1359 28.5825ZM58.8225 21.7517C57.982 21.7549 57.1612 22.007 56.4639 22.4763C55.7666 22.9455 55.2239 23.6109 54.9045 24.3884C54.585 25.1658 54.5031 26.0205 54.669 26.8444C54.8349 27.6684 55.2413 28.4248 55.8367 29.018C56.4322 29.6112 57.1901 30.0147 58.0147 30.1775C58.8393 30.3403 59.6936 30.2551 60.4698 29.9327C61.2461 29.6103 61.9094 29.0652 62.376 28.3661C62.8426 27.667 63.0917 26.8453 63.0917 26.0048C63.0999 25.4426 62.995 24.8845 62.7832 24.3637C62.5714 23.8429 62.257 23.3701 61.8586 22.9733C61.4603 22.5765 60.9863 22.2638 60.4647 22.054C59.9431 21.8441 59.3846 21.7413 58.8225 21.7517ZM58.8225 28.5825C58.3048 28.6194 57.7881 28.4996 57.3395 28.2387C56.8909 27.9778 56.5313 27.5879 56.3074 27.1198C56.0835 26.6516 56.0057 26.1269 56.0842 25.6139C56.1627 25.101 56.3938 24.6235 56.7475 24.2438C57.1011 23.864 57.5609 23.5995 58.067 23.4847C58.5731 23.3699 59.102 23.4101 59.5849 23.6001C60.0678 23.7902 60.4823 24.1212 60.7745 24.5501C61.0666 24.979 61.2229 25.4859 61.2229 26.0048C61.2386 26.3326 61.1886 26.6603 61.0757 26.9685C60.9629 27.2767 60.7895 27.5593 60.5658 27.7995C60.3422 28.0397 60.0727 28.2327 59.7733 28.3672C59.4739 28.5016 59.1506 28.5749 58.8225 28.5825ZM47.7437 23.0567V24.861H52.0614C51.9991 25.7073 51.6528 26.5078 51.0786 27.1326C50.6459 27.5736 50.1256 27.9191 49.5511 28.1466C48.9767 28.3741 48.361 28.4787 47.7437 28.4536C46.4816 28.4365 45.2771 27.9232 44.3907 27.0247C43.5043 26.1262 43.0073 24.9148 43.0073 23.6527C43.0073 22.3906 43.5043 21.1792 44.3907 20.2807C45.2771 19.3822 46.4816 18.8689 47.7437 18.8518C48.9559 18.836 50.1254 19.2991 50.9981 20.1406L52.2708 18.8679C51.6753 18.2784 50.9682 17.8137 50.1908 17.5011C49.4134 17.1885 48.5814 17.0343 47.7437 17.0474C46.8682 17.0347 45.9988 17.1961 45.1863 17.5223C44.3737 17.8485 43.6341 18.3331 43.0105 18.9477C42.3868 19.5623 41.8916 20.2948 41.5536 21.1025C41.2156 21.9102 41.0415 22.7771 41.0415 23.6527C41.0415 24.5283 41.2156 25.3952 41.5536 26.2029C41.8916 27.0106 42.3868 27.7431 43.0105 28.3577C43.6341 28.9724 44.3737 29.4569 45.1863 29.7831C45.9988 30.1093 46.8682 30.2708 47.7437 30.258C48.5991 30.2935 49.4524 30.1466 50.2467 29.8272C51.0411 29.5078 51.7585 29.0231 52.3513 28.4053C53.4037 27.2566 53.9646 25.7415 53.9141 24.1844C53.9182 23.8063 53.8858 23.4286 53.8173 23.0567H47.7437ZM93.052 24.4582C92.7964 23.6878 92.3098 23.0148 91.6584 22.5306C91.007 22.0464 90.2223 21.7744 89.411 21.7517C88.8645 21.7551 88.3244 21.8693 87.8233 22.0873C87.3222 22.3053 86.8705 22.6227 86.4956 23.0203C86.1206 23.4178 85.8302 23.8873 85.6418 24.4002C85.4534 24.9132 85.371 25.4591 85.3996 26.0048C85.3873 26.564 85.4878 27.1199 85.6951 27.6394C85.9025 28.1588 86.2124 28.6312 86.6064 29.0282C87.0004 29.4252 87.4703 29.7387 87.9882 29.95C88.5061 30.1613 89.0612 30.2661 89.6205 30.258C90.3211 30.2619 91.0118 30.0917 91.6304 29.7627C92.249 29.4337 92.7762 28.9562 93.1647 28.3731L91.7148 27.4065C91.4976 27.7672 91.1903 28.0653 90.8231 28.2715C90.456 28.4776 90.0415 28.5848 89.6205 28.5825C89.1872 28.5991 88.7589 28.4851 88.3912 28.2553C88.0234 28.0254 87.7333 27.6904 87.5583 27.2937L93.2454 24.9416L93.052 24.4582ZM87.2523 25.876C87.2322 25.5664 87.2741 25.256 87.3755 24.9628C87.4769 24.6697 87.6358 24.3997 87.8428 24.1687C88.0498 23.9376 88.3008 23.7502 88.5812 23.6174C88.8615 23.4845 89.1655 23.4089 89.4754 23.395C89.7981 23.3738 90.1198 23.448 90.4006 23.6084C90.6814 23.7689 90.9087 24.0084 91.0543 24.2972L87.2523 25.876ZM82.6285 30.0002H84.4973V17.4986H82.6285V30.0002ZM79.5675 22.7022H79.5031C79.2189 22.3935 78.8722 22.149 78.486 21.9851C78.0998 21.8212 77.6831 21.7416 77.2637 21.7517C76.167 21.7984 75.1307 22.2669 74.3712 23.0594C73.6117 23.8519 73.1877 24.9072 73.1877 26.0049C73.1877 27.1025 73.6117 28.1578 74.3712 28.9503C75.1307 29.7428 76.167 30.2113 77.2637 30.258C77.6847 30.2692 78.1032 30.1885 78.4899 30.0216C78.8767 29.8547 79.2224 29.6055 79.5031 29.2914H79.5675V29.9036C79.5675 31.5308 78.6976 32.4007 77.2959 32.4007C76.8287 32.3895 76.3755 32.2395 75.9939 31.9698C75.6123 31.7001 75.3197 31.3229 75.1533 30.8863L73.5261 31.563C73.8328 32.3097 74.3554 32.9478 75.027 33.3955C75.6987 33.8433 76.4887 34.0803 77.2959 34.0762C79.487 34.0762 81.3397 32.7874 81.3397 29.6458V22.0094H79.5675V22.7022ZM77.4249 28.5825C76.7789 28.5277 76.1771 28.2324 75.7385 27.7551C75.2999 27.2777 75.0565 26.6531 75.0565 26.0049C75.0565 25.3566 75.2999 24.732 75.7385 24.2546C76.1771 23.7773 76.7789 23.482 77.4249 23.4272C77.7462 23.4429 78.0611 23.5231 78.3508 23.6631C78.6405 23.8031 78.899 24 79.111 24.242C79.323 24.4841 79.4841 24.7663 79.5846 25.0719C79.6852 25.3776 79.7232 25.7003 79.6964 26.0209C79.7215 26.3395 79.6821 26.66 79.5805 26.963C79.479 27.2661 79.3173 27.5455 79.1053 27.7847C78.8932 28.0238 78.6351 28.2177 78.3464 28.3548C78.0576 28.4919 77.7442 28.5693 77.4249 28.5825ZM101.806 17.4988H97.3347V30.0002H99.2004V25.2638H101.806C102.334 25.2927 102.862 25.2138 103.358 25.0317C103.854 24.8497 104.308 24.5684 104.692 24.205C105.076 23.8417 105.381 23.4038 105.59 22.9184C105.799 22.4329 105.907 21.9099 105.907 21.3813C105.907 20.8528 105.799 20.3298 105.59 19.8443C105.381 19.3588 105.076 18.921 104.692 18.5576C104.308 18.1942 103.854 17.9129 103.358 17.7309C102.862 17.5488 102.334 17.4699 101.806 17.4988ZM101.854 23.524H99.2004V19.2387H101.854C102.139 19.2328 102.423 19.2839 102.688 19.3889C102.953 19.4939 103.194 19.6508 103.398 19.8503C103.602 20.0499 103.764 20.2881 103.874 20.551C103.985 20.8139 104.042 21.0962 104.042 21.3814C104.042 21.6665 103.985 21.9488 103.874 22.2117C103.764 22.4746 103.602 22.7128 103.398 22.9124C103.194 23.1119 102.953 23.2688 102.688 23.3738C102.423 23.4789 102.139 23.5299 101.854 23.524ZM113.386 21.7287C112.705 21.6889 112.027 21.8489 111.436 22.1889C110.844 22.5288 110.365 23.0341 110.056 23.6426L111.713 24.3342C111.877 24.0322 112.126 23.7846 112.429 23.6218C112.732 23.4589 113.075 23.3879 113.418 23.4174C113.891 23.3712 114.364 23.5145 114.731 23.816C115.099 24.1175 115.332 24.5525 115.38 25.0257V25.1544C114.781 24.8361 114.112 24.6704 113.434 24.6719C111.649 24.6719 109.831 25.653 109.831 27.4865C109.849 27.8729 109.944 28.2519 110.11 28.601C110.277 28.9501 110.512 29.2621 110.801 29.5186C111.091 29.7751 111.429 29.9709 111.795 30.0942C112.162 30.2176 112.55 30.266 112.935 30.2367C113.405 30.2644 113.874 30.1656 114.292 29.9506C114.711 29.7356 115.064 29.4123 115.316 29.0144H115.38V29.9794H117.181V25.1866C117.181 22.9671 115.525 21.7287 113.386 21.7287ZM113.161 28.5801C112.549 28.5801 111.697 28.2746 111.697 27.5186C111.697 26.5537 112.758 26.1837 113.675 26.1837C114.271 26.1678 114.86 26.3123 115.38 26.6019C115.312 27.1441 115.049 27.6432 114.641 28.0069C114.233 28.3705 113.707 28.5742 113.161 28.5801ZM123.743 22.0021L121.604 27.4221H121.54L119.32 22.0021H117.31L120.639 29.5773L118.741 33.7911H120.687L125.818 22.0021H123.743ZM106.936 30.0002H108.802V17.4988H106.936V30.0002Z"
                            fill="white"
                        ></path>
                        <path d="M10.4352 7.53818C10.1073 7.93025 9.9417 8.43287 9.97238 8.94308V31.0592C9.94161 31.5694 10.1072 32.072 10.4352 32.4641L10.5092 32.5362L22.8982 20.1473V19.855L10.5092 7.46558L10.4352 7.53818Z" fill="url(#paint0_linear)"></path>
                        <path d="M10.4352 7.53818C10.1073 7.93025 9.9417 8.43287 9.97238 8.94308V31.0592C9.94161 31.5694 10.1072 32.072 10.4352 32.4641L10.5092 32.5362L22.8982 20.1473V19.855L10.5092 7.46558L10.4352 7.53818Z" fill="url(#paint1_linear)"></path>
                        <path d="M27.0276 24.2787L22.8982 20.1473V19.855L27.0286 15.7246L27.1217 15.7777L32.0145 18.5578C33.4121 19.3518 33.4121 20.651 32.0145 21.4455L27.1217 24.2256L27.0276 24.2787Z" fill="url(#paint2_linear)"></path>
                        <path d="M27.0276 24.2787L22.8982 20.1473V19.855L27.0286 15.7246L27.1217 15.7777L32.0145 18.5578C33.4121 19.3518 33.4121 20.651 32.0145 21.4455L27.1217 24.2256L27.0276 24.2787Z" fill="url(#paint3_linear)"></path>
                        <path d="M27.1218 24.2251L22.8983 20.0012L10.4353 32.4641C10.7201 32.7153 11.0837 32.8589 11.4633 32.8701C11.8428 32.8813 12.2143 32.7594 12.5134 32.5255L27.1218 24.2251Z" fill="url(#paint4_linear)"></path>
                        <path d="M27.1218 24.2251L22.8983 20.0012L10.4353 32.4641C10.7201 32.7153 11.0837 32.8589 11.4633 32.8701C11.8428 32.8813 12.2143 32.7594 12.5134 32.5255L27.1218 24.2251Z" fill="url(#paint5_linear)"></path>
                        <path d="M27.1218 15.7771L12.5134 7.47666C12.2143 7.24275 11.8428 7.12084 11.4633 7.13206C11.0837 7.14327 10.7201 7.2869 10.4353 7.53806L22.8983 20.0011L27.1218 15.7771Z" fill="url(#paint6_linear)"></path>
                        <path d="M27.1218 15.7771L12.5134 7.47666C12.2143 7.24275 11.8428 7.12084 11.4633 7.13206C11.0837 7.14327 10.7201 7.2869 10.4353 7.53806L22.8983 20.0011L27.1218 15.7771Z" fill="url(#paint7_linear)"></path>
                        <path opacity="0.2" d="M27.0287 24.1321L12.5134 32.3794C12.2258 32.5983 11.8748 32.7178 11.5134 32.7197C11.152 32.7216 10.7997 32.6059 10.5098 32.3901L10.4353 32.4646L10.5093 32.5367L10.5098 32.5362C10.7997 32.7521 11.1519 32.8679 11.5134 32.866C11.8749 32.864 12.2259 32.7445 12.5134 32.5255L27.1218 24.2251L27.0287 24.1321Z" fill="black"></path>
                        <path opacity="0.12" d="M10.4354 32.3185C10.1075 31.9264 9.94195 31.4238 9.97261 30.9136V31.0597C9.94194 31.5699 10.1075 32.0725 10.4354 32.4646L10.5099 32.3901L10.4354 32.3185Z" fill="black"></path>
                        <path opacity="0.12" d="M32.0147 21.2988L27.0288 24.132L27.1219 24.225L32.0147 21.4449C32.3025 21.32 32.5516 21.1202 32.736 20.8663C32.9203 20.6125 33.0333 20.3138 33.063 20.0015C33.0011 20.2843 32.8742 20.5488 32.6922 20.774C32.5102 20.9992 32.2783 21.1789 32.0147 21.2988Z" fill="black"></path>
                        <path opacity="0.25" d="M12.5133 7.62334L32.0145 18.7033C32.2782 18.8232 32.5102 19.0029 32.6922 19.2282C32.8742 19.4535 33.0011 19.7182 33.0628 20.0011C33.0333 19.6887 32.9204 19.3899 32.736 19.1359C32.5516 18.8819 32.3025 18.6821 32.0145 18.5572L12.5133 7.47724C11.1157 6.68314 9.97241 7.34274 9.97241 8.94354V9.08964C9.97241 7.48894 11.1157 6.82934 12.5133 7.62334Z" fill="white"></path>
                        <defs>
                            <linearGradient id="paint0_linear" x1="21.7995" y1="8.70989" x2="5.01711" y2="25.4923" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#00A0FF"></stop>
                                <stop offset="0.00657" stop-color="#00A1FF"></stop>
                                <stop offset="0.2601" stop-color="#00BEFF"></stop>
                                <stop offset="0.5122" stop-color="#00D2FF"></stop>
                                <stop offset="0.7604" stop-color="#00DFFF"></stop>
                                <stop offset="1" stop-color="#00E3FF"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear" x1="21.7995" y1="8.70989" x2="5.01711" y2="25.4923" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#00A0FF"></stop>
                                <stop offset="0.00657" stop-color="#00A1FF"></stop>
                                <stop offset="0.2601" stop-color="#00BEFF"></stop>
                                <stop offset="0.5122" stop-color="#00D2FF"></stop>
                                <stop offset="0.7604" stop-color="#00DFFF"></stop>
                                <stop offset="1" stop-color="#00E3FF"></stop>
                            </linearGradient>
                            <linearGradient id="paint2_linear" x1="33.8342" y1="20.0017" x2="9.63727" y2="20.0017" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFE000"></stop>
                                <stop offset="0.4087" stop-color="#FFBD00"></stop>
                                <stop offset="0.7754" stop-color="#FFA500"></stop>
                                <stop offset="1" stop-color="#FF9C00"></stop>
                            </linearGradient>
                            <linearGradient id="paint3_linear" x1="33.8342" y1="20.0017" x2="9.63727" y2="20.0017" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFE000"></stop>
                                <stop offset="0.4087" stop-color="#FFBD00"></stop>
                                <stop offset="0.7754" stop-color="#FFA500"></stop>
                                <stop offset="1" stop-color="#FF9C00"></stop>
                            </linearGradient>
                            <linearGradient id="paint4_linear" x1="24.8269" y1="22.2963" x2="2.06857" y2="45.0546" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FF3A44"></stop>
                                <stop offset="1" stop-color="#C31162"></stop>
                            </linearGradient>
                            <linearGradient id="paint5_linear" x1="24.8269" y1="22.2963" x2="2.06857" y2="45.0546" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FF3A44"></stop>
                                <stop offset="1" stop-color="#C31162"></stop>
                            </linearGradient>
                            <linearGradient id="paint6_linear" x1="7.29723" y1="0.176237" x2="17.4598" y2="10.3388" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#32A071"></stop>
                                <stop offset="0.0685" stop-color="#2DA771"></stop>
                                <stop offset="0.4762" stop-color="#15CF74"></stop>
                                <stop offset="0.8009" stop-color="#06E775"></stop>
                                <stop offset="1" stop-color="#00F076"></stop>
                            </linearGradient>
                            <linearGradient id="paint7_linear" x1="7.29723" y1="0.176237" x2="17.4598" y2="10.3388" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#32A071"></stop>
                                <stop offset="0.0685" stop-color="#2DA771"></stop>
                                <stop offset="0.4762" stop-color="#15CF74"></stop>
                                <stop offset="0.8009" stop-color="#06E775"></stop>
                                <stop offset="1" stop-color="#00F076"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
