<x-layout>
    <hr>
    <div class=" container mx-auto lg:px-20 px-5 mt-8">
        <div class="flex justify-start Cos gap-4">
            <div>Home</div>
            <div class=" flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>                  
            </div>
            <div>
                My Account
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center mt-16">
        <h3 class="text-4xl font-medium Ca">My Account</h3>
    </div>
    <div class="container lg:px-20 px-2 mx-auto mt-20">
    <div class="grid lg:grid-cols-12 grid-cols-6 gap-8">
        <div class="col-span-4">
            <div class="lg:w-[300px] w-[419px]">
                <hr class="lg:w-[300px] ">
                <a href="/account-orders.html" class="flex justify-between items-center">
                    <div class="font-medium lg:text-xl text-base Ca mt-6">Order</div>
                    <div type="button" class="" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 Ca mt-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </a>
                <hr class="mt-6 lg:w-[300px]">
                
            </div> 
            {{--card 2 widhlish--}}
            <div class="lg:w-[300px] w-[419px]">
                <a href="/account-wishlist.html" class="flex justify-between items-center">
                    <div class=" font-semibold lg:text-xl text-base Ca mt-6">Widhlist</div>
                    <div type="button" class="" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 Ca mt-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </a>
                <hr class="mt-6 lg:w-[300px]">
                
            </div> 
            {{--card 3 Personal Info--}}
            <div class="lg:w-[300px] w-[419px]">
                <a href="/account-personal-info.html" class="flex justify-between items-center">
                    <div class=" font-normal lg:text-xl text-base Ca mt-6">Personal Info</div>
                    <div  type="button" class="" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 Ca mt-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </a>
                <hr class="mt-6 lg:w-[300px]">
                
            </div>
            {{--card4 addresses--}}
            <div class="lg:w-[300px] w-[419px]">
                <a href="/account-address.html" class="flex justify-between items-center">
                    <div class=" font-normal lg:text-xl text-base Ca mt-6">Addresses</div>
                    <div type="button" class="" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 Ca mt-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </a>
                <hr class="mt-6 lg:w-[300px]">
                
            </div>
            {{--card 5 payment--}}
            <div class="lg:w-[300px] w-[419px]">
                <a href="/account-payment.html" class="flex justify-between items-center">
                    <div class=" font-normal lg:text-xl text-base Ca mt-6">Payment methods</div>
                    <div type="button" class="" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 Ca mt-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </a>
                <hr class="mt-6 lg:w-[300px]">
                
            </div>
            {{--card 6 logout--}}
            <div class="lg:w-[300px] w-[419px]">
                <div class="flex justify-between items-center">
                    <div class=" font-normal lg:text-xl text-base Ca mt-6">Logout</div>
                    <a href="#" type="button" class="" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 Ca mt-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
                <hr class="mt-6 lg:w-[300px]">
                
            </div>
        </div>
        <div class="col-span-8 lg:mt-0 mt-7">
            <div class="grid lg:grid-cols-9 grid-cols-6 gap-8">
                <div class="col-span-3">
                    <div  class="koko">
                            <div class="relative">
                            <img class="image w-full lg:h-[370px] h-[220px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-6.jpg" alt="">
                            <div class="absolute top-0 right-5 w-12 h-12 rounded-full bg-white mt-5 hover:bg-orange-600 transition-all ease-out duration-300 flex justify-center items-center">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>                                      
                                </div>
                            </div>
                            </div>
                        <div class="overlay">
                            <div class=" text-white">
                                <div class="social w-full h-16 bg-black flex justify-center items-center">
                                    <div class="flex justify-start gap-2 text-base font-bold">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>                                              
                                        </div>
                                        <div>
                                            Quick View
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-left lg:ml-4 ml-3 mt-5">
                        <p class="text-sm mt-1 Cos">Shoes</p>
                        <h3 class="Ca lg:text-lg text-base font-medium">Leather mid-heel Sandals</h3>
                        <span class=" Cos font-medium">$129.00</span>
                    </div>
                </div>
                <div class=" col-span-3">
                    <div class="koko">
                        <div class="relative">
                            <img class="image w-full lg:h-[370px] h-[220px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-10.jpg" alt="">
                        <div class="absolute top-0 right-5 w-12 h-12 rounded-full bg-white mt-5 hover:bg-orange-600 transition-all ease-out duration-300 flex justify-center items-center">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>                                      
                            </div>
                        </div>
                        </div>
                        <div class="overlay">
                                <div class="text-white">
                                    <div class="social w-full h-16 bg-black flex justify-center items-center">
                                        <div class="flex justify-start gap-2 text-base font-bold">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>                                              
                                            </div>
                                            <div>
                                                Quick View
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="text-left lg:ml-4 ml-3 mt-5">
                        <p class="text-base mt-1 Cos">Dresses</p>
                        <h3 class="Ca lg:text-lg text-base font-medium">Cotton floral print Dress</h3>
                        <span class="Cos font-medium">$40.00</span>
                    </div>
                </div>
                <div class=" col-span-3 lg:mt-0 mt-8">
                    <div class="koko">
                        <div class="relative">
                            <img class="image w-full lg:h-[370px] h-[220px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-32.jpg" alt="">
                        <div class="absolute top-0 right-5 w-12 h-12 rounded-full bg-white mt-5 hover:bg-orange-600 transition-all ease-out duration-300 flex justify-center items-center">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>                                      
                            </div>
                        </div>
                        </div>
                        <div class="overlay">
                                <div class="text-white">
                                    <div class="social w-full h-16 bg-black flex justify-center items-center">
                                        <div class="flex justify-start gap-2 text-base font-bold">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>                                              
                                            </div>
                                            <div>
                                                Quick View
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="text-left lg:ml-4 ml-3 mt-5">
                        <p class="text-base mt-1 Cos">Dresses</p>
                        <h3 class="Ca lg:text-lg text-base font-medium">Cotton floral print Dress</h3>
                        <span class="Cos font-medium">$40.00</span>
                    </div>
                </div>

                <div class=" col-span-3 lg:mt-0 mt-8">
                    <div class="koko">
                        <div class=" relative">
                            <img class="image w-full lg:h-[370px] h-[220px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-7.jpg" alt="">
                            <div class="absolute top-0 right-5 w-12 h-12 rounded-full bg-white mt-5 hover:bg-orange-600 transition-all ease-out duration-300 flex justify-center items-center">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>                                      
                                </div>
                            </div>
                        </div>
                        <div class="overlay">
                            <h1 class="text-h1"></h1>
                                <div class=" text-white">
                                    <div class="social w-full h-16 bg-black flex justify-center items-center">
                                        <div class="flex justify-start gap-2 text-base font-bold">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>                                              
                                            </div>
                                            <div>
                                                Quick View
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="text-left lg:ml-4 ml-3 mt-5">
                        <p class="text-base mt-1 Cos">Dresses</p>
                        <h3 class="Ca lg:text-lg text-base font-medium">Cotton floral print Dress</h3>
                        <span class="Cos font-medium">$40.00</span>
                    </div>
                </div>
                <div class=" col-span-3 lg:mt-0 mt-8">
                    <div class="koko">
                        <div class="relative">
                        <img class="image w-full lg:h-[370px] h-[220px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-11.jpg" alt="">
                        <div class="absolute top-0 right-5 w-12 h-12 rounded-full bg-white mt-5 hover:bg-orange-600 transition-all ease-out duration-300 flex justify-center items-center">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>                                      
                            </div>
                        </div>
                        </div>
                    <div class="overlay">
                        <h1 class="text-h1"></h1>
                            <div class="text-white">
                                <div class="social w-full h-16 bg-black flex justify-center items-center">
                                    <div class="flex justify-start items-center gap-2 text-base font-bold">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>                                              
                                        </div>
                                        <div>
                                            Quick View
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </div>
                    <div class="text-left lg:ml-4 ml-3 mt-5 ">
                        <p class="text-base mt-1 Cos">Shoes</p>
                        <h3 class="Ca lg:text-lg text-base font-medium">Leather Sneakers</h3>
                        <p class=" Cos font-medium">$85.00 <span class="text-orange-600">$85.00</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="lg:px-0 px-4 py-20">
        <div class="flex lg:justify-end justify-center">
        <div>
            <nav class="isolate inline-flex " aria-label="Pagination">
            <a href="#" class="ll relative inline-flex items-center px-2 py-2 Ca focus:z-20 focus:outline-offset-0">
                {{-- <span class="sr-only">Previous</span> --}}
                <svg class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                </svg>
            </a>
            <!-- Current: "Ca=color     z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
            <a href="#" aria-current="page" class="ll relative z-10 inline-flex items-center px-4 py-2 text-lg font-semibold Ca focus:z-20 ">1</a>
            <a href="#" class="ll relative inline-flex items-center px-4 py-2 text-lg font-semibold Ca  focus:z-20 ">2</a>
            <a href="#" class="ll relative  items-center px-4 py-2 text-lg font-semibold Ca focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
            {{-- <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700  focus:outline-offset-0">...</span> --}}
            <a href="#" class="ll relative  items-center px-4 py-2 text-lg font-semibold Ca focus:z-20 focus:outline-offset-0 md:inline-flex">4</a>
            <a href="#" class="ll relative inline-flex items-center px-4 py-2 text-lg font-semibold Ca focus:z-20 focus:outline-offset-0">5</a>
            <a href="#" class="ll relative inline-flex items-center px-4 py-2 text-lg font-semibold Ca focus:z-20 focus:outline-offset-0">6</a>
            <a href="#" class="ll relative inline-flex items-center rounded-r-md text-lg px-2 py-2 focus:z-20 focus:outline-offset-0">
                {{-- <span class="sr-only">Next</span> --}}
                <svg class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
            </a>
            </nav>
        </div>
        </div>
    </div>
</x-layout>