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
    <div class="container lg:px-20 px-2 mx-auto py-28">
    <div class="grid lg:grid-cols-12 grid-cols-6 gap-8">
        <div class="col-span-4">
            <div class="lg:w-[300px] w-[419px]">
                <hr class="lg:w-[300px] ">
                <a  href="/account-orders.html" class="flex justify-between items-center">
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
                <a  href="/account-wishlist.html" class="flex justify-between items-center">
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
                <a href="/account-personal-info.html"  class="flex justify-between items-center">
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
            <h6 class="font-medium text-2xl">
                Add Debit / Credit Card
            </h6>
            <div class="grid lg:grid-cols-12 grid-cols-6 gap-10 mt-10">
                <div class="col-span-6 ">
                    <label class="form-label text-lg Ca" for="accountFirstName">
                        Card Number *
                    </label>
                    <div class="border border-gray-200 mt-5 text-base">
                        <input class=" w-full py-5" id="accountFirstName" type="text" placeholder=" Card Number *" value="   Card Number " required="">
                    </div>
                        
                </div>

                <div class="col-span-6 ">
                    <label class="form-label text-lg" for="accountFirstName">
                        Name on Card *
                    </label>
                    <div class="border mt-5 border-gray-200 text-base">
                        <input class=" w-full py-5" id="accountFirstName" type="text" placeholder=" Name on Card *" value="   Name on Card " required="">
                    </div>
                </div>
            </div>

            <div class="mt-7">
                <label class="text-lg">
                    Expiry Date *
                </label>

                <div class=" grid lg:grid-cols-12 grid-cols-4 lg:gap-20 mt-5">
                    <div class="col-span-4 lg:mt-0 mt-7">
                        <select class="form-select border border-gray-500 lg:px-28 px-[10.5rem] py-5" id="paymentMonth" required="">
                            <option selected="" disabled="" value="">Month *</option>
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                        </select>
                    </div>
                    <div class="col-span-4 lg:mt-0 mt-7">
                        <select class="form-select border border-gray-500 lg:px-28 px-44 py-5" id="paymentCardYear" required="">
                            <option selected="" disabled="" value="">Year *</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                        </select>
                    </div>
                    <div class="col-span-4 flex justify-start lg:mt-0 mt-7">
                        <input class="form-control lg:px-12 px-[8.2rem] lg:py-0 py-5 border border-gray-500 relative" id="paymentCardCVV" type="text" placeholder="CVV *" required="">
                        <span class="flex items-center absolute lg:right-28 mt-6 right-10">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                            </svg>     
                        </span>                         
                    </div>
                
                </div>

            </div>

            <div class="mt-8 ">
                <input type="checkbox" class=" w-10 h-4 bg" id="defaultPaymentMethod">
                <label class="Cos text-lg" for="defaultPaymentMethod">Default payment method</label>
            </div>

            <button class="lg:mt-10 mt-5 border border-gray-600 bg-black text-white transition ease-in duration-150 lg:px-10 px-8 lg:py-5 py-4">
                <a href="/account-payment-edit.html" class="flex justify-center items-center gap-2 text-base font-medium">
                    Add Card               
                </a>
            </button>
        </div>
    </div>

    </div>

    
</x-layout>