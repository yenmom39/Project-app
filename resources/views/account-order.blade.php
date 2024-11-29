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
    <div class="container lg:px-20 px-2 mx-auto py-24">
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
                    <div class="font-normal lg:text-xl text-base Ca mt-6">Payment methods</div>
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
            <div class="border py-10  lg:w-full w-[420px]">
                <div class="lg:px-10 px-5">
                    <div class="grid lg:grid-cols-12 grid-cols-6 gap-4 text-center bg py-5">
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">Order No:</h6>
                            <p class=" Ca text-base mt-3 font-medium">673290789</p>
                        </div>
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">SHIPPED DATE:</h6>
                            <p class=" Ca text-base mt-3 font-medium">01 Oct, 2019</p>
                        </div>
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">STATUS:</h6>
                            <p class=" Ca text-base mt-3 font-medium">Awating Delivery</p>
                        </div>
                        <div class="col-span-3">
                            <h6 class="Cos text-sm">ORDER AMOUNT:</h6>
                            <p class=" Ca text-base mt-3 font-medium">$259.00</p>
                        </div>
                    </div>

                    <h6 class="text-2xl font-medium mt-10">Order Items (3)</h6>
                    <hr class="mt-5">
                    <div class="flex justify-start gap-8 mt-8">
                            <div class="">
                                <!-- Image -->
                                <a href="product.html">
                                    <img class="w-[100px] h-[120px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-6.jpg" alt="..." class="img-fluid">
                                </a>
                            </div>
                            <div class="col">
                                <!-- Title -->
                                <p class="text-base">
                                    <a class="Ca" href="product.html">Cotton floral print Dress x 1</a> <br>
                                    <span class="font-medium Cos">$40.00</span>
                                </p>
                                <!-- Text -->
                                <div class="mt-5 Cos text-base font-medium">
                                    Size: M <br>
                                    Color: Red
                                </div>
                            </div>
                    </div>
                    <hr class="mt-10">
                    <div class="flex justify-start gap-8 mt-8">
                        <div class="">
                            <!-- Image -->
                            <a href="product.html">
                                <img class="w-[100px] h-[120px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-10.jpg" alt="..." class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <!-- Title -->
                            <p class="text-base">
                                <a class="Ca" href="product.html">Suede cross body Bag x 1</a> <br>
                                <span class="font-medium Cos">$49.00</span>
                            </p>
                            <!-- Text -->
                            <div class="mt-5 Cos text-base font-medium">
                                Color: Brown
                            </div>
                        </div>
                    </div>
                    <hr class="mt-10">
                    <div class="flex justify-start gap-8 mt-8">
                        <div class="">
                            <!-- Image -->
                            <a href="product.html">
                                <img class="w-[100px] h-[120px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-48.jpg" alt="..." class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <!-- Title -->
                            <p class="text-base">
                                <a class="Ca" href="product.html">Suede cross body Bag x 1</a> <br>
                                <span class="font-medium Cos">$49.00</span>
                            </p>
                            <!-- Text -->
                            <div class="mt-5 Cos text-base font-medium">
                                Color: Brown
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>

            <div class="border py-10 lg:w-full w-[420px] mt-10">
                <div class="lg:px-10 px-5 ">
                    <div class="">
                        <h6 class="text-2xl font-medium">Order Total</h6>
                        
                    </div>
                    <div class="flex justify-between mt-10 text-lg Ca">
                        <div>
                            Subtotal
                        </div>
                        <div>
                            $128.00
                        </div>
                    </div>
                    <hr class="mt-7">

                    <div class="flex justify-between mt-10 text-lg Ca">
                        <div>
                            Tax
                        </div>
                        <div>
                            $0.00
                        </div>
                    </div>
                    <hr class="mt-7">
                    <div class="flex justify-between mt-10 text-lg Ca">
                        <div>
                            Shipping
                        </div>
                        <div>
                            $8.00
                        </div>
                    </div>
                    <hr class="mt-7">
                    <div class="flex justify-between mt-10 text-xl Ca font-semibold">
                        <div>
                            Total
                        </div>
                        <div>
                            $136.00
                        </div>
                    </div>
                
                    
                </div>
                
            </div>

            <div class="border py-10 lg:w-full w-[420] mt-10">
                <div class="lg:px-10 px-5">
                    <div>
                        <h6 class="text-1xl Ca font-medium">Billing &amp; Shipping Details</h6>
                    </div>
                    <div class=" grid lg:grid-cols-12 grid-cols-4 gap-4 mt-5">
                        <div class="col-span-4">
                            <!-- Heading -->
                            <p class="Ca font-semibold">
                            Billing Address:
                            </p>
                            <p class="Cs text-base mt-5">
                            Daniel Robinson, <br>
                            3997 Raccoon Run, <br>
                            Kingston, 45644, <br>
                            United States, <br>
                            6146389574
                            </p>
                        </div>

                        <div class="col-span-4">
                            <!-- Heading -->
                                <p class="Ca font-semibold">
                                Shipping Address:
                                </p>
                                <p class="Cs text-base mt-5">
                                Daniel Robinson, <br>
                                3997 Raccoon Run, <br>
                                Kingston, 45644, <br>
                                United States, <br>
                                6146389574
                                </p>
                        </div>

                        <div class="col-span-4">
                            <!-- Heading -->
                                <p class="Ca font-semibold ">
                                Shipping Method:
                                </p>
                                <p class="Cs text-base mt-5">
                                Standart Shipping <br>
                                (5 - 7 days)
                                </p>
                                <!-- Heading -->
                                <p class="mt-5 Ca font-medium text-base">
                                Payment Method:
                                </p>
                                <p class="mt-5 Ca text-base">
                                Debit Mastercard
                                </p>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    </div>

    </div>

    
</x-layout>