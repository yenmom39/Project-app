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
    <div class="container lg:px-20 px-3 mx-auto py-20">
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
        <div class="col-span-8 lg:mt-0 mt-7 ">
        
            <div class="grid lg:grid-cols-12 grid-cols-6 gap-10">
                <div class="col-span-6 ">
                    <label class="form-label text-lg Ca" for="accountFirstName">
                        First Name *
                    </label>
                    <div class="border border-gray-300 mt-5 text-base">
                        <input class=" w-full py-4" id="accountFirstName" type="text" placeholder=" First Name *" value="   Daniel" required="">
                    </div>
                        
                </div>

                <div class="col-span-6 ">
                    <label class="form-label text-lg" for="accountFirstName">
                        list Name *
                    </label>
                    <div class="border mt-5 border-gray-300 text-base">
                        <input class=" w-full py-4" id="accountFirstName" type="text" placeholder=" list Name *" value="   Robinson" required="">
                    </div>
                </div>
            </div>

            <div class=" mt-5">
                    <!-- Email -->
                    <div class="form-group">
                    <label class="form-label text-lg Ca" for="accountEmail">
                        Email Address *
                    </label>
                    <div class="border border-gray-300 mt-5 text-base">
                        <input class="w-full py-4" id="accountEmail" type="email" placeholder=" Email Address *" value="user@email.com" required="">
                    </div>
                    </div>
            </div>

            <div class="grid lg:grid-cols-12 grid-cols-6 gap-10 mt-8">
                <div class="col-span-6 ">
                    <label class="form-label text-lg Ca" for="accountFirstName">
                        Current Password *
                    </label>
                    <div class="border border-gray-300 mt-5 text-base">
                        <input class="w-full py-4" id="accountFirstName" type="text" placeholder=" Current Password *" value="   Current Password *" required="">
                    </div>
                        
                </div>

                <div class="col-span-6 ">
                    <label class="form-label text-lg Ca" for="accountFirstName">
                        New Password * 
                    </label>
                    <div class="border mt-5 border-gray-300 text-base">
                        <input class=" w-full py-4" id="accountFirstName" type="text" placeholder=" New Password *" value="   New Password *" required="">
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-12 grid-cols-6 gap-10 mt-10 ">
                <div class=" col-span-6">
                    <label class="form-label text-lg">Date of Birth</label>
                    <div class=" grid grid-cols-12 gap-4">
                        <div class="mt-5 flex justify-start gap-5">
                            <select class="border border-gray-500 px-6 py-4" id="accountDate">
                                <option>10</option>
                                <option>11</option>
                                <option selected="">12</option>
                            </select>
                            <select class="border border-gray-500 px-6 py-4" id="accountMonth">
                                <option>January</option>
                                <option selected="">February</option>
                                <option>March</option>
                            </select>
                            <select class="border border-gray-500 px-6 py-4" id="accountYear">
                                <option>1990</option>
                                <option selected="">1991</option>
                                <option>1992</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-span-6 ">
                    <label class="form-label text-lg ">Gender</label>
                    <div class=" flex justify-start gap-2 mt-5">
                        <label class="border border-gray-300 hover:border-black transition ease-in duration-75 px-10 py-4" for="male">Male</label>
                        <label class="border border-gray-300 hover:border-black transition ease-in duration-75 px-10 py-4" for="Female">Female</label>
                    </div>
                </div>
            </div>

            <button class="mt-10 border px-10 py-5 bg-black text-white text-lg font-medium" type="submit">Save Changes</button>
        
        </div>
    </div>

    </div>


</x-layout>