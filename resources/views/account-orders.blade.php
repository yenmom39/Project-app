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
    <div class="container lg:px-20 px-3 mx-auto mt-20">
    <div class="grid lg:grid-cols-12 grid-cols-6 gap-8">
        <div class="col-span-4">
            <div class="lg:w-[300px] w-[419px]">
                <hr class="lg:w-[300px] ">
                <a href="/account-orders.html" class="flex justify-between items-center">
                    <div class="font-medium lg:text-xl text-base Ca mt-6">Order</div>
                    <div  type="button" class="" id="menu-button" aria-expanded="true" aria-haspopup="true">
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
                    <div  type="button" class="" id="menu-button" aria-expanded="true" aria-haspopup="true">
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
                    <div type="button" class="" id="menu-button" aria-expanded="true" aria-haspopup="true">
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
                    <div class="font-normal lg:text-xl text-base Ca mt-6">Addresses</div>
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
        <div class="col-span-8 lg:mt-0 mt-7 ">
            <div class="border py-10 lg:w-full w-[420px]">
                <div class="px-5 lg:px-8">
                    <div class="grid lg:grid-cols-12 grid-cols-6 gap-4 text-center bg py-5">
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">Order No:</h6>
                            <p class="Ca text-base mt-3">673290789</p>
                        </div>
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">SHIPPED DATE:</h6>
                            <p class="Ca text-base mt-3">01 Oct, 2019</p>
                        </div>
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">STATUS:</h6>
                            <p class="Ca text-base mt-3">Awating Delivery</p>
                        </div>
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">ORDER AMOUNT:</h6>
                            <p class=" Ca text-base mt-3">$259.00</p>
                        </div>
                    </div>
                    
                </div>
                <div class="lg:block hidden ">
                    <div class="mt-10 flex justify-start gap-3 px-8">
                        <div class="border">
                            <img  class="w-[90px] h-[90px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-5.jpg" alt="">
                        </div>
                        <div class="border">
                            <img  class="w-[90px] h-[90px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-112.jpg" alt="">
                        </div>
                        <div class="border">
                            <img  class="w-[90px] h-[90px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-7.jpg" alt="">
                        </div>
                        <div class="border bg hover:border-black text-center w-[90px] h-[90px] flex justify-center items-center">
                            <a href="" class="">
                            +2
                            <br>
                            more
                            </a>
                        </div>  
                        <div class="flex justify-center items-center">
                            <a href="/account-order.html" class="border border-black text-base px-14 py-5 Ca hover:bg-black transition ease-in duration-75 hover:text-white">
                                Order Details
                            </a>
                        </div>
                        <div class="flex justify-center items-center">
                            <a href="#" class="border border-black text-base px-14 py-5 Ca hover:bg-black transition ease-in duration-75 hover:text-white">
                            Track order
                            </a>
                        </div>
            
                    </div>
                </div>
                <div class="lg:hidden block mt-10 px-5">
                    <div class="flex justify-start gap-5">
                        <div class="border">
                            <img  class="w-[80px] h-[80px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-5.jpg" alt="">
                        </div>
                        <div class="border">
                            <img  class="w-[80px] h-[80px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-112.jpg" alt="">
                        </div>
                        <div class="border">
                            <img  class="w-[80px] h-[80px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-7.jpg" alt="">
                        </div>
                        <div class="border bg hover:border-black text-center w-[80px] h-[80px] flex justify-center items-center">
                            <a href="" class="">
                            +2
                            <br>
                            more
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-between mt-10">
                        <div class="flex justify-center items-center">
                            <a href="/account-order.html" class="border border-black text-base px-12 py-5 Ca hover:bg-black transition ease-in duration-75 hover:text-white">
                                Order Details
                            </a>
                        </div>
                        <div class="flex justify-center items-center">
                            <a href="#" class="border border-black text-base px-12 py-5 Ca hover:bg-black transition ease-in duration-75 hover:text-white">
                            Track order
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="border py-10 mt-10 lg:w-full w-[420px]">
                <div class="lg:px-10 px-5">
                    <div class="grid lg:grid-cols-12 grid-cols-6 gap-4 text-center bg py-5">
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">Order No:</h6>
                            <p class=" Ca text-base mt-3">871090437</p>
                        </div>
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">SHIPPED DATE:</h6>
                            <p class=" Ca text-base mt-3">25 Sep, 2019</p>
                        </div>
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">STATUS:</h6>
                            <p class=" Ca text-base mt-3">In Processing</p>
                        </div>
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">ORDER AMOUNT:</h6>
                            <p class=" Ca text-base mt-3">$75.00</p>
                        </div>
                    </div>
                    
                </div>
                <div class="lg:block hidden">
                    <div class="mt-10 flex justify-between gap-7 text-center px-10">
                        <div class="border">
                            <img  class="w-[80px] h-[80px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-5.jpg" alt="">
                        </div>
                        
                        <div class="flex justify-start gap-5">
                            <div class="flex justify-center items-center">
                                <a href="/account-order.html" class="border border-black text-base px-12 py-5 Ca hover:bg-black transition ease-in duration-75 hover:text-white">
                                    Order Details
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="#" class="border border-black text-base px-12 py-5 Ca hover:bg-black transition ease-in duration-75 hover:text-white">
                                Track order
                                </a>
                            </div>
                        </div>
            
                    </div>
                </div>
                <div class="lg:hidden block px-5">
                    <div class="mt-5">
                        <img  class="w-[80px] h-[80px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-5.jpg" alt="">
                    </div>
                    
                    <div class="flex justify-start gap-2 mt-5">
                        <div class="flex justify-center items-center">
                            <a href="/account-order.html" class="border border-black text-base px-12 py-3 Ca hover:bg-black transition ease-in duration-75 hover:text-white">
                                Order Details
                            </a>
                        </div>
                        <div class="flex justify-center items-center">
                            <a href="#" class="border border-black text-base px-12 py-3 Ca hover:bg-black transition ease-in duration-75 hover:text-white">
                            Track order
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{---card 3--}}
            <div class="border py-10 mt-10 lg:w-full w-[420px]">
                <div class="lg:px-10 px-5">
                    <div class="grid lg:grid-cols-12 grid-cols-6 gap-4 text-center bg py-5">
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">Order No:</h6>
                            <p class=" Ca text-base mt-3">891230563</p>
                        </div>
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">SHIPPED DATE:</h6>
                            <p class=" Ca text-base mt-3">07 Sep, 2019</p>
                        </div>
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">STATUS:</h6>
                            <p class=" Ca text-base mt-3">Delivered</p>
                        </div>
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">ORDER AMOUNT:</h6>
                            <p class=" Ca text-base mt-3">$69.00</p>
                        </div>
                    </div>
                    
                </div>
                <div class="lg:block hidden">
                    <div class="mt-10 flex justify-between gap-7 text-center px-10">
                        <div class="flex justify-start gap-5">
                            <div class="border">
                                <img  class="w-[80px] h-[80px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-5.jpg" alt="">
                            </div>
                            <div class="border">
                                <img  class="w-[80px] h-[80px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-15.jpg" alt="">
                            </div>
                        </div>
                        
                        <div class="flex justify-start gap-5">
                            <div class="flex justify-center items-center">
                                <a href="/account-order.html" class="border border-black text-base px-12 py-5 Ca hover:bg-black transition ease-in duration-75 hover:text-white">
                                    Order Details
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="#" class="border border-black text-base px-12 py-5 Ca hover:bg-black transition ease-in duration-75 hover:text-white">
                                Track order
                                </a>
                            </div>
                        </div>
            
                    </div>
                </div>
                <div class="lg:hidden block px-5">
                    <div class="flex justify-start gap-5 mt-5">
                        <div class="">
                            <img  class="w-[80px] h-[80px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-5.jpg" alt="">
                        </div>
                        <div class="border">
                            <img  class="w-[80px] h-[80px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-15.jpg" alt="">
                        </div>
                    </div>
                    
                    <div class="flex justify-start gap-2 mt-5">
                        <div class="flex justify-center items-center">
                            <a href="/account-order.html" class="border border-black text-base px-12 py-3 Ca hover:bg-black transition ease-in duration-75 hover:text-white">
                                Order Details
                            </a>
                        </div>
                        <div class="flex justify-center items-center">
                            <a href="#" class="border border-black text-base px-12 py-3 Ca hover:bg-black transition ease-in duration-75 hover:text-white">
                            Track order
                            </a>
                        </div>
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