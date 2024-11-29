<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title> Shopper</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
        <div class="">
            <div class="lg:block hidden py-4 bg">
                <div class="grid grid-cols-12 container mx-auto lg:px-20">
                    <div class="col-span-2">
                        <div class="flex justify-start gap-3">
                            <div class="Cos">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                            </div>
                            <div class="flex justify-center items-center">
                                <p class="text-xs font-semibold  Ca">FREE SHIPPING WORLDWIDE</p>
                            </div>
                        </div>
                    </div>
                    {{--screen big--}}
                    <div class="col-span-10">
                        <div class="grid grid-cols-12">
                            <div class="col-span-7">
                                <div class="flex justify-start gap-5">
                                    <div class="">
                                        <div class="dropdown-menu" id="dropdown-menu">
                                            <div class="flex" onclick="handleDropdownClicked(event)">
                                            <div class="material-symbols-outlined ">
                                                {{-- settings_applications --}}
                                                <div class="w-5 h-5 rounded-full bg-pink-200">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/United-states_flag_icon_round.svg/1024px-United-states_flag_icon_round.svg.png" alt="">
                                                </div>
                                            </div>
                                            <div class="ml-2 text-base  font-medium Ca">
                                                United States
                                            </div>
                                            <span id="dropdown-icon" class="material-symbols-outlined">
                                                <div class=""> expand_more</div>
                                            </span>
                                            </div>
                                            <section class="dropdown__menu-labels mt-3">
                                                    <button class="">
                                                        <span class="material-symbols-outlined"> 
                                                            <div class="w-4 h-4 rounded-full">
                                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/United-states_flag_icon_round.svg/1024px-United-states_flag_icon_round.svg.png" alt="">
                                                            </div>
                                                        </span>
                                                        United States
                                                    </button>
                                                    <button>
                                                        <span class="material-symbols-outlined">  
                                                            <div class="w-5 h-5 rounded-full">
                                                                <img src="https://media.istockphoto.com/id/967988240/vector/canada-round-flag-vector-flat-icon.jpg?s=612x612&w=0&k=20&c=mBc-VNuxIAuYVETPodKTXtkBWE2eMa_wviYcql6RlHs=" alt="">
                                                            </div>
                                                        </span>
                                                        Canada
                                                    </button>
                                                    <button>
                                                        <span class="material-symbols-outlined">
                                                            <div class="w-4 h-4 rounded-full">
                                                                <img src="https://flagdownload.com/wp-content/uploads/Flag_of_Germany_Flat_Round-2048x2048.png" alt="">
                                                            </div>
                                                        </span>
                                                        Germany
                                                    </button>
                                            </section>
                                    </div>
                                    </div>
                                    <div class="border-r border-gray-300"> </div>
                                    <div class="">
                                        <select id="" name="" class="Ca text-base font-medium bg-transparent">
                                            <option  selected>USA</option>
                                            <option >EUR</option>
                                        </select>
                                    </div>
                                
                                    <div class="border-r border-gray-300"></div>
                                    <div class="">
                                        <select id="" name="" class=" text-base font-medium bg-transparent">
                                            <option selected>English</option>
                                            <option >French</option>
                                            <option >German</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-3 font-medium">
                                <div class="grid grid-cols-5 text-center text-base Ca">
                                    <div class="col-span-2">
                                        <a href="/">Shopping</a>
                                    </div>
                                    <div class="col-span-1 ">
                                        <a href="/">FQA</a>
                                    </div>
                                    <div class="col-span-1 ">
                                        <a href="/">Contact</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <ul class="flex justify-end items-center gap-6 Cor text-ss">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook " aria-hidden="true"></i></a>
                                    </li>
                                    
                                    <li>
                                        <a href="#"><i class="fa fa-twitter " aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-instagram " aria-hidden="true"></i></a>
                                    </li>
                                        <li  class="">
                                            <a href="#">
                                            <svg class="svg-inline--fa fa-medium w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="medium" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M180.5 74.26C80.81 74.26 0 155.6 0 256S80.82 437.7 180.5 437.7 361 356.4 361 256 280.2 74.26 180.5 74.26zm288.3 10.65c-49.85 0-90.25 76.62-90.25 171.1s40.41 171.1 90.25 171.1 90.25-76.62 90.25-171.1H559C559 161.5 518.6 84.91 468.8 84.91zm139.5 17.82c-17.53 0-31.74 68.63-31.74 153.3s14.2 153.3 31.74 153.3S640 340.6 640 256C640 171.4 625.8 102.7 608.3 102.7z"></path></svg>
                                            </a>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:hidden block py-1 bg" x-data="{navbar: false}">
                <div class="grid grid-cols-12 container mx-auto px-5">
                    {{--screen small--}}
                <div class="col-span-12 ">
                    <div class="flex justify-between items-center">
                        <div class="flex justify-start gap-3">
                            <div class="Cos">
                                <i class="fa fa-ambulance" aria-hidden="true"></i>
                            </div>
                            <div class="flex justify-center items-center">
                                <p class="text-xs Ca font-medium ">FREE SHIPPING WORLDWIDE</p>
                            </div>
                        </div>
                        <div>
                            <button @click=" navbar = ! navbar " class="Ca">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                {{--screen responsive--}}
                <div x-show="navbar" @click.outside="navbar = false" class="col-span-12 mt-5">
                    {{-- <div class="">
                        <select id="" name="" class=" text-black text-base bg-transparent">
                            <option >United States</option>
                            <option >Canada</option>
                            <option >Germany</option>
                        </select>
                        
                    </div> --}}
                    <div x-data="{koko : false}" class="">
                        <div  class="" id="">
                            <div class="flex justify-between">
                                <div class=" flex justify-start">
                                    <div class="w-4 h-4 rounded-full bg-pink-200">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/United-states_flag_icon_round.svg/1024px-United-states_flag_icon_round.svg.png" alt="">
                                    </div>
                                    <div class="ml-2 text-base Ca font-medium">
                                        United States
                                    </div>
                                </div>
                                
                                <div @click=" koko = ! koko ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                    </svg>                                  
                                </div>
                            </div>
                            <div x-show="koko" @click.outside="koko = false" class="mt-3 px-4">
                                    <div class="flex justify-start items-center text-sms gap-2 ">
                                        <span class=""> 
                                            <div class="w-4 h-4 rounded-full">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/United-states_flag_icon_round.svg/1024px-United-states_flag_icon_round.svg.png" alt="">
                                            </div>
                                        </span>
                                        United States
                                    </div>
                                    <div class="flex justify-start items-center text-sms gap-2">
                                        <span class="">  
                                            <div class="w-4 h-4 rounded-full">
                                                <img src="https://media.istockphoto.com/id/967988240/vector/canada-round-flag-vector-flat-icon.jpg?s=612x612&w=0&k=20&c=mBc-VNuxIAuYVETPodKTXtkBWE2eMa_wviYcql6RlHs=" alt="">
                                            </div>
                                        </span>
                                        Canada
                                    </div>
                                    <div class="flex justify-start items-center text-sms gap-2">
                                        <span class="">
                                            <div class="w-4 h-4 rounded-full">
                                                <img src="https://flagdownload.com/wp-content/uploads/Flag_of_Germany_Flat_Round-2048x2048.png" alt="">
                                            </div>
                                        </span>
                                        Germany
                                    </div>
                            </div>
                        </div>
                    <div x-data="{ko : false}"  class="mt-2 text-base Ca">
                        <div class="flex justify-between">
                            <div class="font-medium">
                                USA
                            </div>
                            <div @click=" ko = ! ko ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>                                  
                            </div>
                        </div>
                        <div x-show="ko" @click.outside="ko = false" class="text-sms px-4">
                            <h3>USD</h3>
                            <h3>EUR</h3>
                        </div>

                    </div>
                    <div x-data="{ko : false}"  class="mt-2 text-base Ca">
                        <div class="flex justify-between">
                            <div class="font-medium">
                                English
                            </div>
                            <div @click=" ko = ! ko ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>                                  
                            </div>
                        </div>
                        <div x-show="ko" @click.outside="ko = false" class=" text-sms px-4">
                            <h3>English</h3>
                            <h3>French</h3>
                            <h3>German</h3>
                        </div>

                    </div>
                    <div class="grid grid-rows-6 text-base font-medium">
                        <div class="row-span-2 mt-2">
                            <a>Shopping</a>
                        </div>
                        <div class="row-span-2 mt-2">
                            <a>FQA</a>
                        </div>
                        <div class="row-span-2 mt-2">
                            <a>Contact</a>
                        </div>

                    </div>
                    <div class="col-span-2 text-base mt-3">
                        <ul class="flex justify-start gap-2">
                                <li class="Cos">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li class="Cos">
                                    <a href=""><i class="fa fa-instagram ml-2" aria-hidden="true"></i></a>
                                </li>
                                <li class="Cos">
                                    <a href=""><i class="fa fa-twitter ml-3" aria-hidden="true"></i></a>
                                </li>
                            <li class="Cos">
                                <a href="#">
                                    <svg class="svg-inline--fa fa-medium w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="medium" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M180.5 74.26C80.81 74.26 0 155.6 0 256S80.82 437.7 180.5 437.7 361 356.4 361 256 280.2 74.26 180.5 74.26zm288.3 10.65c-49.85 0-90.25 76.62-90.25 171.1s40.41 171.1 90.25 171.1 90.25-76.62 90.25-171.1H559C559 161.5 518.6 84.91 468.8 84.91zm139.5 17.82c-17.53 0-31.74 68.63-31.74 153.3s14.2 153.3 31.74 153.3S640 340.6 640 256C640 171.4 625.8 102.7 608.3 102.7z"></path></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <div class="container m-auto" x-data="{navbar: false}">
            <nav class="container m-auto lg:px-20 px-2 flex justify-between items-center lg:py-5">
                <div class="lg:text-3xl text-2xl lg:py-4 py-7 font-bold lg:px-0 sm:px-0 md:px-0 px-3">
                    <a href="/" class="Ca">Shopper.</a>
                </div>
                
                <button @click=" navbar = ! navbar " class="lg:mr-5 mr-3 lg:mb-2 lg:hidden block Ca">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <div class="lg:block hidden">
                    <ul class="flex items-center Ca space-x-10 font-medium">
                        <li x-data="{koko: false}">
                            <div class="relative inline-block text-left">
                                <a @click=" koko = ! koko " type="button" class="inline-flex hover:text-orange-600 Ca w-full justify-center text-base font-semibold" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    Home
                                </a>
                                <div x-show="koko" @click.outside="koko = false" class=" absolute -ml-20 z-10 mt-2 w-[200px] origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                    <div  class="py-1 text-sms" role="none">
                                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                        <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Default</a>
                                        <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Classic</a>
                                        <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-2">Fashion</a>
                                        <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Boxed</a>
                                        <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Simple</a>
                                        <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-2">Asymmetric</a>
                                        <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Sidenav</a>
                                        <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Landing</a>
                                    
                                    </div>
                                </div>
                            </div>       
                        </li>
                        <li x-data="{koko: false}">
                            <div class="relative">
                                <a @click=" koko = ! koko " type="button" class="hover:text-orange-600 Ca inline-flex w-full justify-center text-base font-semibold" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    Catalog
                                </a>
                                <div x-show="koko" @click.outside="koko = false" class="absolute z-10 mt-10 w-[1530px] lg:-ml-[630px]" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                    <hr class="w-[1470px] container mx-auto px-0" aria-hidden="true"></hr>
                                        <div class=" bg-white">
                                            <header class="relative">
                                            <nav aria-label="Top" class="mx-auto px-4 sm:px-6 lg:px-8">
                                                <div class="border-b border-gray-200">
                                                <div class="flex h-16 items-center ">
                                                    <!-- Flyout menus -->
                                                    <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                                                    <div class="flex h-full space-x-8 px-5">
                                                        <div class="flex">
                                                        {{--button women--}}
                                                        <div class="relative flex">
                                                            <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                                            <button type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false">Women</button>
                                                        </div>
                                                        
                                                        </div>
                                                        <div class="flex">
                                                        {{--button men--}}
                                                        <div class="relative flex">
                                                            <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                                            <button type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false">Men</button>
                                                        </div>
                                                        <div class="absolute inset-x-0 top-full text-sm text-gray-500 ">
                                                            <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                            <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
                                                            
                                                            <div class="relative bg-white">
                                                                {{--class May--}}
                                                            <div class="mx-auto w-full px-20">
                                                                <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                                                                <div class="flex justify-between">
                                                                    <div class="text-sms">
                                                                        <p id="Brands-heading" class="font-bold Ca">Collection</p>
                                                                        <ul role="list" aria-labelledby="Brands-heading" class=" mt-6 space-y-6 sm:mt-4 sm:space-y-4 Cs">
                                                                            <li class="flex">
                                                                            <a href="#" class="">All Collection</a>
                                                                            </li>
                                                                            <li class="flex">
                                                                            <a href="#" class="">Occasinwear</a>
                                                                            </li>
                                                                            <li class="flex">
                                                                            <a href="#" class="">Going Out</a>
                                                                            </li>
                                                                            <li class="flex">
                                                                            <a href="#" class="">Workwear</a>
                                                                            </li>
                                                                            <li class="flex">
                                                                                <a href="#" class="">Holiday Shop</a>
                                                                            </li>
                                                                            <li class="flex">
                                                                                <a href="#" class="">Jean Fit Guide</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class=" relative">
                                                                        <img  class="h-[350px] w-full object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-6.jpg" alt="">
                                                                        <div class=" absolute inset-0 flex justify-center items-center">
                                                                            <button class="inline-flex items-center bg-gray-100 Ca border-0 py-4 px-6 text-lg font-medium">Shop Sweaters
                                                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                                                                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row-start-1 grid grid-cols-3 text-base">
                                                                    {{--class Clothing--}}
                                                                    <div class="text-sms">
                                                                    <p id="Clothing-heading" class="font-bold Ca">Clothing</p>
                                                                    <ul role="list" aria-labelledby="Clothing-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4 Cs">
                                                                        <li class="flex">
                                                                        <a href="#" class="">All Clothing</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                        <a href="#" class="">Blouses & Shirts</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                        <a href="#" class="">Coats & Jackets</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                        <a href="#" class="">Dresses</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                        <a href="#" class="">Hoodies & Sweats</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                        <a href="#" class="">Denim</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                        <a href="#" class="">Jeans</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                            <a href="#" class="">Jumpers & Cardigans</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                            <a href="#" class="">Leggings</a>
                                                                        </li>
                                                                    </ul>
                                                                    </div>
                                                                {{--class Accessories--}}
                                                                <div class="text-sms">
                                                                    <p id="Accessories-heading" class="font-bold Ca">Shoes & Boots</p>
                                                                    <ul role="list" aria-labelledby="Accessories-heading" class="Cs mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                        <a href="#" class="">All Shoes & Boots</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                        <a href="#" class="">Branded Shoes</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                        <a href="#" class="">Boots</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                        <a href="#" class="">Heels</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                        <a href="#" class="">Trainers</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                        <a href="#" class="">Sandals</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                            <a href="#" class="">Shoes</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                            <a href="#" class="">Wide Fit Shoes</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                {{--class Brand--}}
                                                                <div class="text-sms">
                                                                    <p id="Brands-heading" class="font-bold Ca">Bags & Accessories</p>
                                                                    <ul role="list" aria-labelledby="Brands-heading" class=" Cs mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                        <a href="#" class="">All Bags & Accessories</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                        <a href="#" class="">Accessories</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                        <a href="#" class="">Bags& Purses</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                        <a href="#" class="">Luggade</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                            <a href="#" class="">Belts</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                            <a href="#" class="">Hats</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                            <a href="#" class="">Hair Accessories</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                            <a href="#" class="">Jewellery</a>
                                                                        </li>
                                                                        <li class="flex">
                                                                            <a href="#" class="">Tranvel Accessories</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                </div>

                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    {{--class company--}}
                                                    <a href="#" class="flex items-center text-sms font-medium Ca">Company</a>
                                                    {{--class stores--}}
                                                    <a href="#" class="flex items-center text-sms font-medium Ca">Stores</a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </nav>
                                        </header>
                                    </div>     
                                    
                                    
                                </div>
                            </div>    
                            
                
                        </li>
                        <li x-data="{koko: false}">
                            <div class="relative inline-block text-left">
                                <a @click=" koko = ! koko " type="button" class="hover:text-orange-600 Ca inline-flex w-full justify-center text-base font-semibold" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    Shop
                                </a>
                                <div x-show="koko" @click.outside="koko = false" class="absolute  z-10 mt-2 w-[600px] -ml-[200px]  rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                    <div class="flex justify-between">
                                        <div  class="py-1 text-sms" role="none">
                                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                            <a href="#" class="Ca block px-4 py-2  font-bold" role="menuitem" tabindex="-1" id="menu-item-0">Shop</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Default</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-2">Topbiar</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Collapse</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Simple</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-2">Masonry</a>
                                            <a href="#" class="Cs block px-4 py-2 font-bold mt-3" role="menuitem" tabindex="-1" id="menu-item-0">Product</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Default</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-2">Image Left</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Image Grid</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Image Slider</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-2">Image Stacked</a>
                                        </div>
                                        <div  class="py-1 text-sms" role="none">
                                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                            <a href="#" class="Ca block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Support</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Shopping Cart</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-2">Checkout</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Order Completed</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Shipping & Returns</a>
                                            <a href="#" class="Ca block px-4 py-2  font-bold mt-3" role="menuitem" tabindex="-1" id="menu-item-0">Account</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Order</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-2">Orders</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Wishlist</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Personal Info</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Addresses</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Addresses: New</a>
                                        </div>
                                        <div  class="py-1 text-sms" role="none">
                                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Payment</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Payment: New</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-2">Payment: Choose</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Aith</a>
                                            <a href="#" class="Ca block px-4 py-2  font-bold mt-3" role="menuitem" tabindex="-1" id="menu-item-0">Modals</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Newsletter: Horizontal</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-2">Newsletter: Vertical</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Product</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Search</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Shopping Cart</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Size Chart</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Wait list</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>       
                        </li>
                        <li x-data="{koko: false}">
                            <div class="relative inline-block text-left">
                                <a @click=" koko = ! koko " type="button" class="hover:text-orange-600 Ca inline-flex w-full justify-center text-base font-semibold" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    Page
                                </a>
                                <div x-show="koko" @click.outside="koko = false" class=" absolute -ml-20 z-10 mt-2 w-[200px]  rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                    <div  class="py-1 text-center text-sms Cs" role="none">
                                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                        <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">About</a>
                                        <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Contact Us</a>
                                        <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-2">Store Locator</a>
                                        <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">FAQ</a>
                                        <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Coming Soon</a>
                                        <a href="#" class=" block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-2">404</a>
                                        
                                    
                                    </div>
                                </div>
                            </div>       
                        </li>
                        <li x-data="{koko: false}">
                            <div class="relative inline-block text-left">
                                <a @click=" koko = ! koko " type="button" class="hover:text-orange-600 Ca inline-flex w-full justify-center text-base font-semibold" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    Blog
                                </a>
                                <div x-show="koko" @click.outside="koko = false" class=" absolute -ml-20 z-10 mt-2 w-[200px] origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                    <div  class="py-1 Cs text-sms" role="none">
                                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                        <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Blog</a>
                                        <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Blog Post</a>
                                        
                                    
                                    </div>
                                </div>
                            </div>       
                        </li>
                        <li ><a href="#" class="text-base font-semibold hover:text-orange-600 Ca">Does</a></li>
                </ul>   
            </div>
            <div class="lg:block hidden text-base">
                <ul class="flex items-center space-x-4 font-medium Ca">
                    <li>
                        <div href="/" x-data="{koko : false}">
                        <button @click=" koko = ! koko " type="button" class="inline-flex w-full justify-center " id="menu-button" aria-expanded="true" aria-haspopup="true">
                            {{-- <i class="fa fa-search text-black hover:text-orange-600 transition ease-in duration-150" aria-hidden="true"></i> --}}
                            <svg class="w-5 h-5 Ca mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>  
                        </button>
                        <div x-show="koko" @click.outside="koko = false" class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
                            <div class="fixed inset-0 overflow-hidden">
                            <div class="absolute inset-0 overflow-hidden">
                                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                                <div class="pointer-events-auto relative w-screen max-w-md lg:max-w-[37rem]">
                                    {{-- <div class="absolute left-0 top-0 -ml-8 flex pr-2 pt-4 sm:-ml-10 sm:pr-4">
                                
                                    </div> --}}
                                    <div class="flex h-full flex-col overflow-y-scroll bg-white py-6 ">
                                        
                                    <div class="px-4 sm:px-6">
                                        <div class="Cos flex justify-between items-center">
                                            <h2 class="text-xl text-center font-semibold text-gray-900" id="slide-over-title">Search Products</h2>
                                            <div>
                                                <button @click=" koko = ! koko ">
                                                    <svg  class="h-7 w-7 " fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="border-t border-gray-500 mt-4 "></div>
                                    </div>
                                        <div class="relative mt-6 flex-1 px-4 sm:px-6">
                                            <!-- Your content -->
                                            <div class="">
                                                <div class="relative px-5 mt-2 shadow-sm border border-gray-500">
                                                <div class="pointer-events-none absolute inset-y-0 flex items-center">
                                                    <span class="text-sm">ALL Categories</span>
                                                </div>
                                                <input type="button" name="price" id="price" class="w-full py-5 " placeholder="">
                                                <div class="absolute inset-y-0 right-5 flex items-center">
                                                    <select id="location" name="location" class="mt-2 w-full rounded-md border-0 py-1.5 text-gray-900">
                                                        <option value="hidden"></option>
                                                        <option>All Categories</option>
                                                        <option>Women</option>
                                                        <option>Men</option>
                                                        <option>Kids</option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="border border-gray-500 mt-3 grid grid-cols-12">
                                                    <div class="col-span-10">
                                                        {{-- <input type="text" name="" id="" placeholder="search " class="  py-5"> --}}
                                                        <div class=" lg:w-[430px] w-[230px] lg:mr-4 mr-2">
                                                            <input type="text" id="footer-field" placeholder=" search" name="footer-field" class=" inline-block  w-full text-base lg:py-5 lg:px-3 px-8 py-4 ">
                                                        </div>
                                                    </div>
                                                    <div class="col-span-2 flex justify-center items-center ">
                                                        <i class="fa fa-search text-black " aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="border-t border-gray-500 mt-4 "></div>
                                                <p class=" text-gray-500 text-xs mt-5">Search Results:</p>
                                                <div class=" grid grid-cols-12 mt-10">
                                                    <div class=" col-span-4">
                                                        <div class="">
                                                            <img class="w-[100px] h-[130px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-5.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class=" col-span-8 mt-10">
                                                        <p class="">Cotton floral print Dress</p>
                                                        <p class="text-gray-500 ">$89.00</p>
                                                        
                                                    </div>
                                                </div>
                                                <div class=" grid grid-cols-12 mt-10">
                                                    <div class=" col-span-4">
                                                        <div class="">
                                                            <img class="w-[100px] h-[130px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-6.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class=" col-span-8 mt-10">
                                                        <p class="">Cotton floral print Dress</p>
                                                        <p class="text-gray-500 ">$89.00</p>
                                                        
                                                    </div>
                                                </div>
                                                <div class=" grid grid-cols-12 mt-10">
                                                    <div class=" col-span-4">
                                                        <div class="">
                                                            <img class="w-[100px] h-[130px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-7.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class=" col-span-8 mt-10">
                                                        <p class="">Cotton floral print Dress</p>
                                                        <p class="text-gray-500 ">$89.00</p>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class=" grid grid-cols-12 mt-10">
                                                    <div class=" col-span-4">
                                                        <div class="">
                                                            <img class="w-[100px] h-[130px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-8.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class=" col-span-8 mt-10">
                                                        <p class="">Cotton floral print Dress</p>
                                                        <p class="text-gray-500 ">$89.00</p>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class=" grid grid-cols-12 mt-10">
                                                    <div class=" col-span-4">
                                                        <div class="">
                                                            <img class="w-[100px] h-[130px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-9.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class=" col-span-8 mt-10">
                                                        <p class="">Cotton floral print Dress</p>
                                                        <p class="text-gray-500 ">$89.00</p>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="mt-10">
                                                    <a href="/detal-us" class="mt-2  inline-flex items-center text-black border-0 hover:text-gray-500 text-base ">View All
                                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-3" viewBox="0 0 24 24">
                                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    
                    </li>
                    <li>
                        <a href="/account-orders.html" class=" text-black hover:text-orange-600 transition ease-in duration-150"><i class="fa fa-user-o " aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="/account-wishlist.html" class=" text-black hover:text-orange-600 transition ease-in duration-150"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <div x-data="{koko : false}">
                            <button @click=" koko = ! koko " type="button" class=" relative inline-flex w-full justify-center " id="menu-button" aria-expanded="true" aria-haspopup="true">
                                
                                <div class="Rom absolute ">
                                    <h5 id="count">2</h5>
                                </div>
                                {{-- <i class="fa fa-shopping-cart Ca hover:text-orange-600 transition ease-in duration-150" aria-hidden="true"></i> --}}
                                <svg class="w-5 h-5 Ca mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                            </button>
                            <div x-show="koko" @click.outside="koko = false" class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
                                <div class="fixed inset-0 overflow-hidden">
                                <div class="absolute inset-0 overflow-hidden">
                                    <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                                    
                                    <div class="pointer-events-auto relative w-screen lg:max-w-[37rem] max-w-md ">
                                    
                                        <div class="absolute left-0 top-0 -ml-8 flex pr-2 pt-4 sm:-ml-10 sm:pr-4">
                                        
                                        </div>
                            
                                        <div class="flex h-full flex-col overflow-y-scroll bg-white py-6 shadow-xl">
                                        <div class="px-4 sm:px-6 flex justify-between">
                                            <h2 class="text-xl text-center font-semibold text-gray-900" id="slide-over-title">Your Chart (2)</h2>
                                            <div class="Ca ">
                                                <button @click=" koko = ! koko ">
                                                    <svg  class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="border-t border-gray-500 mt-10"></div>
                                            <div class=" mt-6 flex-1 px-4 sm:px-6">
                                                <div class=" grid grid-cols-12">
                                                    <div class=" col-span-4">
                                                        <div class="">
                                                            <img class="w-[200px] h-[150px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-6.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-span-8 ml-8">
                                                        <p class="">Cotton floral print Dress</p>
                                                        <p class="Cos">$40.00</p>
                                                        <div class=" flex justify-between mt-3">
                                                            <select name="" id="" class=" bg-slate-100 px-3 py-1 border border-black">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                            </select>
                                                            <div class="flex justify-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                                </svg> 
                                                                <p class="text-xs Cos">Remove</p>                                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="mt-3">
                                                <div class=" grid grid-cols-12 mt-4">
                                                    <div class=" col-span-4">
                                                        <div class="">
                                                            <img class="w-[200px] h-[150px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-10.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class=" col-span-8 ml-8">
                                                        <p class="">Suede cross body Bag</p>
                                                        <p class="text-gray-500 ">$49.00</p>
                                                        <div class=" flex justify-between mt-3">
                                                            <select name="" id="" class=" bg-slate-100 px-3 py-1 border border-black ">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                            </select>
                                                            <div class="flex justify-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                                </svg> 
                                                                <p class="text-xs Cos">Remove</p>                                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" bg-gray-300 max-w-full h-10 mt-5">
                                                    <div class="flex justify-between Cos ">
                                                        <div class="mt-2">Subtotal</div>
                                                        <div class="mt-2">$89.00</div>
                                                    </div>
                                                </div>
                                                <div class=" bg-black flex justify-center py-3  mt-5">
                                                    <a href="/detal2-us" class="text-center text-white ">Continue to Checkout</a>
                                                </div>
                                                <div  class=" border border-black flex justify-center bg-slate-100 py-3  mt-3">
                                                    <a href="/detal2-us" class="text-center ">View Chart</a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </li>
                </ul>
            </div>
            </nav>
            {{--screen small--}}
            <div x-show="navbar" @click.outside="navbar = false" class="lg:hidden block ">
                <ul class="space-y-4 px-3  font-medium mr-5 py-2 ">
                    <li x-data="{ko: false}">
                        <div class="relative ">
                            <button @click=" ko = ! ko " type="button" class="inline-flex w-full ml-1 hover:text-orange-600" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                Home
                            </button>
                            <div x-show="ko" @click.outside="ko = false" class=" left-0 z-10 mt-2 w-56 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div  class="py-1 -ml-3 Cs text-sms" role="none">
                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                    <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Default</a>
                                    <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Classic</a>
                                    <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-2">Fashion</a>
                                    <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Boxed</a>
                                    <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Simple</a>
                                    <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-2">Asymmetric</a>
                                    <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Sidenav</a>
                                    <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Landing</a>
                                    
                                </div>
                            </div>
                        </div>       
                    </li>

                    <li x-data="{ko: false}">
                        <div class="relative  inline-block ">
                            <button @click=" ko = ! ko " type="button" class="inline-flex  justify-center ml-1 hover:text-orange-600" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                <a href="#">Catalog</a>
                            </button>
                            <div x-show="ko" @click.outside="ko = false" class="left-0 z-10 mt-2 w-[480px] h-[400px] focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class=" bg-white">
                                    <header class="relative">
                                    <nav aria-label="Top" class="mx-auto ">
                                        <div class="border-b border-gray-200">
                                        <div class="flex items-center py-5">
                                            <!-- Flyout menus -->
                                            <div class="">
                                            <div class="flex h-full space-x-4">
                                                <div class="flex">
                                                {{--button women--}}
                                                <div class="relative flex">
                                                    <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                                    <button type="button" class="text-sm" aria-expanded="false">Women</button>
                                                </div>
                                                
                                                </div>
                                                <div class="flex">
                                                {{--button men--}}
                                                <div class="relative flex">
                                                    <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                                    <button type="button" class="text-sm" aria-expanded="false">Men</button>
                                                </div>
                                                <div class="absolute inset-x-0 top-full text-sm text-gray-500 ">
                                                    <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                    <div class="absolute inset-0" aria-hidden="true"></div>
                                                    
                                                    <div class="relative bg-white">
                                                        {{--class May--}}
                                                    <div class="mx-auto w-full">
                                                        <div class="">
                                        
                                                        <div class="grid grid-cols-12 mt-5">
                                                            {{--class Clothing--}}
                                                            <div class="text-sm col-span-3">
                                                                <p id="Clothing-heading" class="font-bold Ca">Clothing</p>
                                                                <ul role="list" aria-labelledby="Clothing-heading" class="space-y-1 Cs mt-3 text-sms">
                                                                    <li class="flex">
                                                                    <a href="#" class="">All Clothing</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Blouses & Shirts</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Coats & Jackets</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Dresses</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Hoodies & Sweats</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Denim</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Jeans</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                        <a href="#" class="">Jumpers & Cardigans</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                        <a href="#" class="">Leggings</a>
                                                                    </li>
                                                                </ul>
                                                                </div>
                                                            {{--class Accessories--}}
                                                            <div class="text-sm col-span-3">
                                                                <p id="Accessories-heading" class="font-bold Ca">Shoes & Boots</p>
                                                                <ul role="list" aria-labelledby="Accessories-heading" class="Cs space-y-1 mt-3 text-sms">
                                                                    <li class="flex">
                                                                    <a href="#" class="">All Shoes & Boots</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Branded Shoes</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Boots</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Heels</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Trainers</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Sandals</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                        <a href="#" class="">Shoes</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                        <a href="#" class="">Wide Fit Shoes</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            {{--class Brand--}}
                                                            <div class="col-span-3 text-sm">
                                                                <p id="Brands-heading" class="font-bold Ca">Bags & Accessories</p>
                                                                <ul role="list" aria-labelledby="Brands-heading" class="Cs space-y-1 mt-3 text-sms">
                                                                    <li class="flex">
                                                                    <a href="#" class="">All Bags & Accessories</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Accessories</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Bags& Purses</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Luggade</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                        <a href="#" class="">Belts</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                        <a href="#" class="">Hats</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                        <a href="#" class="">Hair Accessories</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                        <a href="#" class="">Jewellery</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                        <a href="#" class="">Tranvel Accessories</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="text-sm col-span-3">
                                                                <p id="Brands-heading" class="font-bold Ca text-sm">Collection</p>
                                                                <ul role="list" aria-labelledby="Brands-heading" class=" space-y-1 Cs mt-3 text-sms">
                                                                    <li class="flex">
                                                                    <a href="#" class="">All Collection</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Occasinwear</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Going Out</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                    <a href="#" class="">Workwear</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                        <a href="#" class="">Holiday Shop</a>
                                                                    </li>
                                                                    <li class="flex">
                                                                        <a href="#" class="">Jean Fit Guide</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        
                                                        </div>

                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            {{--class company--}}
                                            <a href="#" class="flex items-center text-sm ">Company</a>
                                            {{--class stores--}}
                                            <a href="#" class="flex items-center text-sm ">Stores</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </nav>
                                </header>
                            </div> 
                                
                            </div>
                        </div>    
                        
            
                    </li>

                    <li x-data="{ko: false}">
                            <div class="relative inline-block text-left">
                                <button @click=" ko = ! ko " type="button" class="inline-flex justify-center ml-1 hover:text-orange-600" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    Shop
                                </button>
                                <div x-show="ko" @click.outside="ko = false" class=" z-10 mt-2 w-[450px] rounded-md bg-white ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                    <div class="flex justify-center">
                                        <div  class="py-1 text-sms" role="none">
                                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                            <a href="#" class="Ca block px-4 py-2  font-bold" role="menuitem" tabindex="-1" id="menu-item-0">Shop</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Default</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-2">Topbiar</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Collapse</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Simple</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-2">Masonry</a>
                                            <a href="#" class="Ca block px-4 py-2  font-bold mt-3" role="menuitem" tabindex="-1" id="menu-item-0">Product</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Default</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-2">Image Left</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Image Grid</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Image Slider</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-2">Image Stacked</a>
                                        </div>
                                        <div  class="py-1 text-sms" role="none">
                                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                            <a href="#" class="Ca block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Support</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Shopping Cart</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-2">Checkout</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Order Completed</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Shipping & Returns</a>
                                            <a href="#" class="Ca block px-4 py-2  font-bold mt-3" role="menuitem" tabindex="-1" id="menu-item-0">Account</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Order</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-2">Orders</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Wishlist</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Personal Info</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">Addresses</a>
                                            <a href="#" class="Cs block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Addresses: New</a>
                    
                                        
                                        </div>
                                        <div  class="py-1 text-sms" role="none">
                                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Payment</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Payment: New</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-2">Payment: Choose</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Aith</a>
                                            <a href="#" class="Ca block px-4 py-2 font-bold mt-3" role="menuitem" tabindex="-1" id="menu-item-0">Modals</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Newsletter: Horizontal</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-2">Newsletter: Vertical</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Product</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Search</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Shopping Cart</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Size Chart</a>
                                            <a href="#" class="Cs block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Wait list</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>       
                    </li>

                    <li x-data="{ko: false}">
                        <div class="relative inline-block text-left">
                            <button @click=" ko = ! ko " type="button" class="inline-flex ml-1 hover:text-orange-600" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                Page
                            </button>
                            <div x-show="ko" @click.outside="ko = false" class=" z-10 mt-2 w-[200px] rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div  class="py-1 Cs text-sms" role="none">
                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                    <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">About</a>
                                    <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Contact Us</a>
                                    <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-2">Store Locator</a>
                                    <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-0">FAQ</a>
                                    <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-1">Coming Soon</a>
                                    <a href="#" class=" block px-4 py-2 " role="menuitem" tabindex="-1" id="menu-item-2">404</a>
                                    
                                
                                </div>
                            </div>
                        </div>       
                    </li>
                    <li x-data="{ko: false}">
                        <div class="relative inline-block text-left">
                            <button @click=" ko = ! ko " type="button" class="inline-flex justify-center ml-1 hover:text-orange-600" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                blog
                            </button>
                            <div x-show="ko" @click.outside="ko = false" class=" z-10 mt-2 w-[200px] " role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div  class="py-1 Cs text-sms" role="none">
                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                    <a href="#" class=" block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Blog</a>
                                    <a href="#" class=" block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Blog Post</a>
                                    
                                
                                </div>
                            </div>
                        </div>       
                    </li>
                    <li><a href="#" class="ml-1 hover:text-orange-600">Does</a></li>
                    <ul class="flex items-center space-x-3 text-sm">
                    
                        <li>
                            <div href="/" x-data="{koko : false}">
                            <button @click=" koko = ! koko " type="button" class="inline-flex w-full justify-center " id="menu-button" aria-expanded="true" aria-haspopup="true">
                                {{-- <i class="fa fa-search text-black hover:text-orange-600 transition ease-in duration-150" aria-hidden="true"></i> --}}
                                <svg class="w-4 h-4 Ca mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>  
                            </button>
                            <div x-show="koko" @click.outside="koko = false" class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
                                <div class="fixed inset-0 overflow-hidden">
                                <div class="absolute inset-0 overflow-hidden">
                                    <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full">
                                    <div class="pointer-events-auto relative w-screen max-w-screen">
                                        {{-- <div class="absolute left-0 top-0 -ml-8 flex pr-2 pt-4 sm:-ml-10 sm:pr-4">
                                    
                                        </div> --}}
                                        <div class="flex h-full flex-col overflow-y-scroll bg-white py-6 ">
                                            
                                        <div class="px-4 sm:px-6">
                                            <div class="Cos flex justify-between items-center">
                                                <h2 class="text-xl text-center font-semibold text-gray-900" id="slide-over-title">Search Products</h2>
                                                <div>
                                                    <button @click=" koko = ! koko ">
                                                        <svg  class="h-7 w-7 " fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
    
                                            <div class="border-t border-gray-500 mt-4 "></div>
                                        </div>
                                            <div class="relative mt-6 flex-1 px-4 sm:px-6">
                                                <!-- Your content -->
                                                <div class="">
                                                    <div class="relative px-5 mt-2 shadow-sm border border-gray-500">
                                                    <div class="pointer-events-none absolute inset-y-0 flex items-center">
                                                        <span class="text-sm">ALL Categories</span>
                                                    </div>
                                                    <input type="button" name="price" id="price" class="w-full py-5 " placeholder="">
                                                    <div class="absolute inset-y-0 right-5 flex items-center">
                                                        <select id="location" name="location" class="mt-2 w-full rounded-md border-0 py-1.5 text-gray-900">
                                                            <option value="hidden"></option>
                                                            <option>All Categories</option>
                                                            <option>Women</option>
                                                            <option>Men</option>
                                                            <option>Kids</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                    <div class="border border-gray-500 mt-3 grid grid-cols-12">
                                                        <div class="col-span-10">
                                                            {{-- <input type="text" name="" id="" placeholder="search " class="  py-5"> --}}
                                                            <div class=" lg:w-[430px] w-[230px] lg:mr-4 mr-2">
                                                                <input type="text" id="footer-field" placeholder=" search" name="footer-field" class=" inline-block  w-full text-base lg:py-5 lg:px-3 px-8 py-4 ">
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 flex justify-center items-center ">
                                                            <i class="fa fa-search text-black " aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div class="border-t border-gray-500 mt-4 "></div>
                                                    <p class=" text-gray-500 text-xs mt-5">Search Results:</p>
                                                    <div class=" grid grid-cols-12 mt-10">
                                                        <div class=" col-span-4">
                                                            <div class="">
                                                                <img class="w-[100px] h-[130px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-5.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class=" col-span-8 mt-10">
                                                            <p class="">Cotton floral print Dress</p>
                                                            <p class="text-gray-500 ">$89.00</p>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class=" grid grid-cols-12 mt-10">
                                                        <div class=" col-span-4">
                                                            <div class="">
                                                                <img class="w-[100px] h-[130px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-6.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class=" col-span-8 mt-10">
                                                            <p class="">Cotton floral print Dress</p>
                                                            <p class="text-gray-500 ">$89.00</p>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class=" grid grid-cols-12 mt-10">
                                                        <div class=" col-span-4">
                                                            <div class="">
                                                                <img class="w-[100px] h-[130px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-7.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class=" col-span-8 mt-10">
                                                            <p class="">Cotton floral print Dress</p>
                                                            <p class="text-gray-500 ">$89.00</p>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                    <div class=" grid grid-cols-12 mt-10">
                                                        <div class=" col-span-4">
                                                            <div class="">
                                                                <img class="w-[100px] h-[130px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-8.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class=" col-span-8 mt-10">
                                                            <p class="">Cotton floral print Dress</p>
                                                            <p class="text-gray-500 ">$89.00</p>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                    <div class=" grid grid-cols-12 mt-10">
                                                        <div class=" col-span-4">
                                                            <div class="">
                                                                <img class="w-[100px] h-[130px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-9.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class=" col-span-8 mt-10">
                                                            <p class="">Cotton floral print Dress</p>
                                                            <p class="text-gray-500 ">$89.00</p>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="mt-10">
                                                        <a href="/detal-us" class="mt-2  inline-flex items-center text-black border-0 hover:text-gray-500 text-base ">View All
                                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-3" viewBox="0 0 24 24">
                                                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        
                        </li>
                        <li>
                            <a href="/account-orders.html" class=""><i class="fa fa-user-o " aria-hidden="true"></i></a>
                        </li>
                        <li>
                        <a href="/account-wishlist.html" class=""><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </li>                        
                        <li class="hidden">
                            <div href="#" x-data="{ko : false}">
                                <button @click=" ko = ! ko " type="button" class="inline-flex  justify-center ml-1" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    <div class="Rom absolute ">
                                        <h5 id="count">2</h5>
                                    </div>
                                    {{-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> --}}
                                    <svg class="w-4 h-4 Ca mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                    </svg>
                                </button>
                                <div x-show="ko" @click.outside="ko = false" class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 overflow-hidden ">
                                    <div class="absolute inset-0 overflow-hidden ">
                                        <div class="pointer-events-none fixed inset-y-0 flex">
                                        
                                        <div class="pointer-events-auto relative w-screen">
                                        
                                            <div class="absolute left-0 top-0 -ml-8 flex pr-2 pt-4 sm:-ml-10 sm:pr-4">
                                            
                                            </div> 
                                
                                            <div class="flex h-full flex-col overflow-y-scroll bg-slate-100 py-6 shadow-xl">
                                                <div  class="ml-96 text-slate-500">
                                                    <button @click=" ko = ! ko ">
                                                        <svg   class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                
                                            <div class="px-4">
                                                <h2 class="text-xl text-center font-semibold  text-gray-900" id="slide-over-title">Search Products</h2>
                                                <div class="border-t border-gray-500 mt-4 "></div>
                                            </div>
                                                <div class="relative mt-6 flex-1 px-4 sm:px-6">
                                                    <!-- Your content -->
                                                    <div class=" grid grid-cols-12">
                                                        <div class=" col-span-4">
                                                            <div class="">
                                                                <img class="w-[200px] h-[150px] object-cover" src="https://i.dailymail.co.uk/1s/2022/04/30/04/57227921-10769639-image-a-8_1651290035022.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class=" col-span-8 ml-8">
                                                            <p class="">Cotton floral print Dress</p>
                                                            <p class="text-gray-500 ">$40.00</p>
                                                            <div class=" flex justify-between mt-3">
                                                                <select name="" id="" class=" bg-slate-100 px-3 py-1 border border-black ">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                                <div class="flex justify-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                                    </svg> 
                                                                    <p class="text-xs text-gray-500">Remove</p>                                                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-3">
                                                    <div class=" grid grid-cols-12 mt-4">
                                                        <div class=" col-span-4">
                                                            <div class="">
                                                                <img class="w-[200px] h-[150px] object-cover" src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmFnfGVufDB8fDB8fHww" alt="">
                                                            </div>
                                                        </div>
                                                        <div class=" col-span-8 ml-8">
                                                            <p class="">Suede cross body Bag</p>
                                                            <p class="text-gray-500 ">$49.00</p>
                                                            <div class=" flex justify-between mt-3">
                                                                <select name="" id="" class=" bg-slate-100 px-3 py-1 border border-black ">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                                <div class="flex justify-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                                    </svg> 
                                                                    <p class="text-xs text-gray-500">Remove</p>                                                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=" bg-gray-300 max-w-full h-10 mt-5">
                                                        <div class="flex justify-between text-gray-500 ">
                                                            <div>Subtotal</div>
                                                            <div>$89.00</div>
                                                        </div>
                                                    </div>
                                                    <div class=" bg-black px-14 py-3  mt-5">
                                                        <p class="text-center text-white">Continue to Checkout</p>
                                                    </div>
                                                    <div class=" border border-black bg-slate-100 px-14 py-3  mt-3">
                                                        <p class="text-center">View Chart</p>
                                                    </div>

                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                        </li>
                        <li>
                            <div x-data="{koko : false}">
                                <button @click=" koko = ! koko " type="button" class=" relative inline-flex w-full justify-center " id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    
                                    <div class="Rom absolute ">
                                        <h5 id="count">2</h5>
                                    </div>
                                    {{-- <i class="fa fa-shopping-cart Ca hover:text-orange-600 transition ease-in duration-150" aria-hidden="true"></i> --}}
                                    <svg class="w-4 h-4 Ca mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                    </svg>
                                </button>
                                <div x-show="koko" @click.outside="koko = false" class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 overflow-hidden">
                                    <div class="absolute inset-0 overflow-hidden">
                                        <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full">
                                        
                                        <div class="pointer-events-auto relative w-screen lg:max-w-[37rem] max-w-md ">
                                        
                                            <div class="absolute left-0 top-0 -ml-8 flex pr-2 pt-4 sm:-ml-10 sm:pr-4">
                                            
                                            </div>
                                
                                            <div class="flex h-full flex-col overflow-y-scroll bg-white py-6 shadow-xl">
                                            <div class="px-4 sm:px-6 flex justify-between">
                                                <h2 class="text-xl text-center font-semibold text-gray-900" id="slide-over-title">Your Chart (2)</h2>
                                                <div class="Ca ">
                                                    <button @click=" koko = ! koko ">
                                                        <svg  class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="border-t border-gray-500 mt-10"></div>
                                                <div class=" mt-6 flex-1 px-4 sm:px-6">
                                                    <div class=" grid grid-cols-12">
                                                        <div class=" col-span-4">
                                                            <div class="">
                                                                <img class="w-[200px] h-[150px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-6.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-span-8 ml-8">
                                                            <p class="">Cotton floral print Dress</p>
                                                            <p class="Cos">$40.00</p>
                                                            <div class=" flex justify-between mt-3">
                                                                <select name="" id="" class=" bg-slate-100 px-3 py-1 border border-black">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                                <div class="flex justify-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                                    </svg> 
                                                                    <p class="text-xs Cos">Remove</p>                                                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-3">
                                                    <div class=" grid grid-cols-12 mt-4">
                                                        <div class=" col-span-4">
                                                            <div class="">
                                                                <img class="w-[200px] h-[150px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-10.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class=" col-span-8 ml-8">
                                                            <p class="">Suede cross body Bag</p>
                                                            <p class="text-gray-500 ">$49.00</p>
                                                            <div class=" flex justify-between mt-3">
                                                                <select name="" id="" class=" bg-slate-100 px-3 py-1 border border-black ">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                                <div class="flex justify-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                                    </svg> 
                                                                    <p class="text-xs Cos">Remove</p>                                                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=" bg-gray-300 max-w-full h-10 mt-5">
                                                        <div class="flex justify-between Cos ">
                                                            <div class="mt-2">Subtotal</div>
                                                            <div class="mt-2">$89.00</div>
                                                        </div>
                                                    </div>
                                                    <div class=" bg-black flex justify-center py-3  mt-5">
                                                        <a href="/detal2-us" class="text-center text-white ">Continue to Checkout</a>
                                                    </div>
                                                    <div  class=" border border-black flex justify-center bg-slate-100 py-3  mt-3">
                                                        <a href="/detal2-us" class="text-center ">View Chart</a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>

{{ $slot }}
    <section>
        <div class=" bg-zinc-800 py-10">
            <div class="container px-0 m-auto ">
                    <div class="container mx-auto lg:w-[50%] w-[100%] py-2 lg:mt-10 mt-16">
                        <div class="text-center ">
                            <p class="lg:text-3xl text-2xl font-medium text-white">Want style Ideas and Treats?</p>
                        </div>
                        <div class="flex justify-center lg:mt-10 mt-7 lg:gap-0 ">
                            <div class="lg:w-[430px] w-[230px] lg:mr-4 mr-2">
                                <input type="text" id="footer-field" placeholder="Enter Email*" name="footer-field" class="Bc text-white w-full inline-block focus:ring-2 text-base lg:py-5 lg:px-3 px-8 py-4 leading-8 transition duration-200 ease-in-out">
                            </div>
                            <button class="Bcs inline-flex text-lg text-white border-0 lg:py-5 lg:px-12 px-8 py-5 focus:outline-none font-normal ease-in duration-300 transition">Subscribe</button>
                        </div>
                    </div>
                
        <div class="container lg:py-24 py-16 mx-auto lg:px-0 px-5">
            <div class="flex flex-wrap lg:text-left">
                    <div class="lg:w-[27%] w-full lg:text-center">
                        <h2 class=" text-white tracking-widest lg:text-4xl text-xl font-bold">Shopper.</h2>
                        
                        <span class="flex lg:justify-center mt-5 gap-4 text-xl">
                            <a class="Co">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="Co">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                </svg>
                            </a>
                            <a class="Co">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                </svg>
                            </a>
                            <a class="Co">
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                                </svg>
                            </a>
                            <a class="Co ">
                                {{-- <i class="fa fa-circle" aria-hidden="true"></i> --}}
                                <svg class="svg-inline--fa fa-medium w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="medium" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M180.5 74.26C80.81 74.26 0 155.6 0 256S80.82 437.7 180.5 437.7 361 356.4 361 256 280.2 74.26 180.5 74.26zm288.3 10.65c-49.85 0-90.25 76.62-90.25 171.1s40.41 171.1 90.25 171.1 90.25-76.62 90.25-171.1H559C559 161.5 518.6 84.91 468.8 84.91zm139.5 17.82c-17.53 0-31.74 68.63-31.74 153.3s14.2 153.3 31.74 153.3S640 340.6 640 256C640 171.4 625.8 102.7 608.3 102.7z"></path></svg>
                            </a>
                        </span>
                    </div>
                    <div class="lg:w-1/6 w-[50%] lg:mt-0 mt-5">
                        <h2 class="title-font font-medium text-white tracking-widest lg:text-lg text-sm mb-3 ">SUPPORT</h2>
                        <nav class="list-none mb-10  text-base">
                        <li>
                            <a class="Co">Contact Us</a>
                        </li>
                        <li>
                            <a class="Co">FAQs</a>
                        </li>
                        <li>
                            <a class="Co">Size Guide</a>
                        </li>
                        <li>
                            <a class="Co">Shipping & Returns</a>
                        </li>
                        </nav>
                    </div>    
                    <div class="lg:w-1/6 w-[50%] lg:mt-0 mt-5">
                        <h2 class="title-font font-medium text-white tracking-widest lg:text-lg text-sm mb-3">SHOP</h2>
                        <nav class="list-none mb-10 text-base">
                        <li>
                            <a class="Co">Men's Shopping</a>
                        </li>
                        <li>
                            <a class="Co">Women's Shopping</a>
                        </li>
                        <li>
                            <a class="Co">Kids' Shopping</a>
                        </li>
                        <li>
                            <a class="Co">Discounts</a>
                        </li>
                        </nav>
                    </div>  
                
                    <div class="lg:w-1/5 w-[50%]">
                        <h2 class="title-font font-medium text-white tracking-widest mb-3 lg:text-lg text-sm">COMPANY</h2>
                        <nav class="list-none mb-10 text-base">
                        <li>
                            <a class="Co">Our Story</a>
                        </li>
                        <li>
                            <a class="Co">Careers</a>
                        </li>
                        <li>
                            <a class="Co">Terms & Conditions</a>
                        </li>
                        <li>
                            <a class="Co">Privacy & Cookie policy</a>
                        </li>
                        </nav>
                    </div>
                    <div class="lg:w-1/6 w-[50%] text-center">
                        <h2 class="title-font font-medium text-white tracking-widest lg:text-lg text-sm mb-3">CONTACT</h2>
                        <nav class="list-none mb-10 text-base">
                            <li>
                                <a class="Co">1-202-555-0105</a>
                            </li>
                            <li>
                                <a class="Co ">1-202-555-0106</a>
                            </li>
                            <li>
                                <a class="Co">help@shopper.com</a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div>
            </div>
            <div class=" border-t border-gray-600">
            <div class="container mx-auto px-0 mt-8">
                <div class="grid lg:grid-cols-12 grid-cols-6 lg:px-0 px-4">
                    <div class="lg:col-span-8 col-span-1 lg:px-12 ">
                        <p class="Cos lg:text-base text-xs leading-relaxed ">© 2019 All rights reserved. Designed by Unvab.</p>
                    </div>
                    <div class="col-span-4 lg:flex lg:justify-center">
                        <div class="flex justify-start lg:gap-2 lg:text-xl">
                            <img src="https://yevgenysim-turkey.github.io/shopper/assets/img/payment/mastercard.svg" alt="">
                            <img src="https://yevgenysim-turkey.github.io/shopper/assets/img/payment/visa.svg" alt="">
                            <img src="https://yevgenysim-turkey.github.io/shopper/assets/img/payment/amex.svg" alt="">
                            <img src="https://yevgenysim-turkey.github.io/shopper/assets/img/payment/paypal.svg" alt="">
                            <img src="https://yevgenysim-turkey.github.io/shopper/assets/img/payment/maestro.svg" alt="">
                            <img src="https://yevgenysim-turkey.github.io/shopper/assets/img/payment/klarna.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

        {{-- <script>
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
        </script> --}}

        {{--United-state--}}
        <script>
            const handleDropdownClicked = (event) => {
            event.stopPropagation();
            const dropdownMenu = document.getElementById("dropdown-menu");
            toggleDropdownMenu(!dropdownMenu.classList.contains("open"));
            };
    
            const toggleDropdownMenu = (isOpen) => {
            const dropdownMenu = document.getElementById("dropdown-menu");
            const dropdownIcon = document.getElementById("dropdown-icon");
    
            if (isOpen) {
                dropdownMenu.classList.add("open");
            } else {
                dropdownMenu.classList.remove("open");
            }
    
            dropdownIcon.innerText = dropdownMenu.classList.contains("open")
                ? "expand_more"
                : "expand_more";
            };
            document.body.addEventListener("click", () => toggleDropdownMenu());
        </script>   
        
</body>
</html>