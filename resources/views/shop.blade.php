<x-layout>
    <div class="bg-black p-4 mt-2 lg:mt-0">
        <div class=" container px-0 m-auto flex justify-center">
            <div class="text-center text-white">
                <span class="heading-xxs letter-spacing-xl text-md font-medium">
                    ⚡️ HAPPAY HOLIDAY DEALS ON EVERYTHING ⚡️
                </span>
            </div>
        </div>
    </div>
    <div class="container lg:px-20  mx-auto lg:mt-24 mt-20">
        <div class="grid lg:grid-cols-12 grid-cols-4 gap-5">
            <div class="lg:col-span-3 col-span-12 mt-4 Ca">
                <div  class="" x-data="{koko: false}">
                    <div class="px-2">
                        <div @click=" koko = ! koko " class="flex justify-between">
                            <div class="font-medium text-xl Ca">Category</div>
                            <div  type="button" class="" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                <svg class="h-4 w-4 Ca" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                        </div>
                        <hr class="mt-2 ">
                        <div  x-show="koko" @click.outside="koko = false"  class="z-10 mt-2 w-[200px]" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div  class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="#" class="text-gray-700 block py-2 text-base" role="menuitem" tabindex="-1" id="menu-item-0">All Products</a>
                                {{--Blouses and Shirts--}}
                                <div x-data="{koko: false}">
                                    <div class="">
                                        <button @click=" koko = ! koko " type="button" class="inline-flex  text-gray-700" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                            <p class="mt-2 text-base">Blouses and Shirts</p>
                                        </button>
                                        <div x-show="koko" @click.outside="koko = false" class=" z-10 w-[250px] focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                            <div  class="py-1" role="none">
                                                <div class="pt-3" id="filter-section-0">
                                                    <div class="space-y-4 px-3" >
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-0" name="color[]" value="white" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 Ca focus:ring-indigo-500">
                                                            <label for="filter-color-0" class="text-base Cos">Women Tops, Tees & Blouses</label>
                                                            
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-1" name="color[]" value="beige" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 Ca focus:ring-indigo-500">
                                                            <label for="filter-color-1" class="text-base Cos">Petite</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-2" name="color[]" value="blue" type="checkbox" checked  class="h-4 w-4 rounded border-gray-300 Ca focus:ring-indigo-500">
                                                            <label for="filter-color-2" class="text-base Cos">Petite-Size Blouses & Button-Down Shirts</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-3" name="color[]" value="brown" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 Ca focus:ring-indigo-500">
                                                            <label for="filter-color-3" class="text-base Cos">Women Plus Tops & Tees</label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                                {{--Coats and Jackets--}}
                                <div x-data="{koko: false}">
                                    <div class="">
                                        <button @click=" koko = ! koko " type="button" class="inline-flex text-base text-gray-700" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                            <p class="mt-2">Coats and Jackets</p>
                                        </button>
                                        <div x-show="koko" @click.outside="koko = false" class=" z-10 w-[250px] focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                            <div  class="py-1 " role="none">
                                                <div class="pt-3" id="filter-section-0">
                                                    <div class="space-y-4 px-3">
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-color-0" class=" text-base Cos">Coats, Jackets & Vests</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-color-1" class=" text-base Cos">Down Jackets & Parkas</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-color-2" class="text-base Cos">Wool & Pea Coats Plus-Size</label>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                                {{--Dresses--}}
                                <div x-data="{koko: false}">
                                    <div class="">
                                        <button @click=" koko = ! koko " type="button" class="inline-flex text-base text-gray-700" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                            <p class="mt-2">Dresses</p>
                                        </button>
                                        <div x-show="koko" @click.outside="koko = false" class=" z-10 w-[200px] focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                            <div  class="py-1 " role="none">
                                                <div class="pt-3" id="filter-section-0">
                                                    <div class="space-y-4 px-3" >
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-color-0" class="text-base Cos">A-line Dresses</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-1" name="color[]" value="beige" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-color-1" class="text-base Cos">
                                                                Shift Dresses</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-2" name="color[]" value="blue" type="checkbox"  class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-color-2" class="text-base Cos">Wrap Dresses</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-color-3" class="text-base Cos">Maxi Dresses
                                                            </label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                                
                                {{--Hoodies and Sweats--}}
                                <div x-data="{koko: false}">
                                    <div class="">
                                        <button @click=" koko = ! koko " type="button" class="inline-flex text-base text-gray-700" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                            <p class="mt-2">Hoodies and Sweats</p>
                                        </button>
                                        <div x-show="koko" @click.outside="koko = false" class=" z-10 w-[250px] focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                            <div  class="py-1 " role="none">
                                                <div class="pt-3" id="filter-section-0">
                                                    <div class="space-y-4 px-3" >
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 E5">
                                                            <label for="filter-color-0" class="text-base Cos">Activewear</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 E5">
                                                            <label for="filter-color-1" class="text-base Cos">Fashion Hoodies & Sweatshirts
                                                            </label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-2" name="color[]" value="blue" type="checkbox"  class="h-4 w-4 rounded border-gray-300 E5">
                                                            <label for="filter-color-2" class="text-base Cos">Big & Tall Sweatshirts
                                                            </label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 E5">
                                                            <label for="filter-color-3" class="text-base Cos">Big & Tall Fashion Hoodies</label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                                {{--Denim--}}
                                <div x-data="{koko: false}">
                                    <div class="">
                                        <button @click=" koko = ! koko " type="button" class="inline-flex text-base text-gray-700" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                            <p class="mt-2">Denim</p>
                                        </button>
                                        <div x-show="koko" @click.outside="koko = false" class=" z-10 w-[200px] focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                            <div  class="py-1 " role="none">
                                                <div class="pt-3" id="filter-section-0">
                                                    <div class="space-y-4 px-3" >
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                                            <label for="filter-color-0" class="text-base Cos">Women Shorts</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 ">
                                                            <label for="filter-color-1" class="text-base Cos">
                                                                Juniors' Shorts</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                                            <label for="filter-color-2" class="text-base Cos">
                                                                Petite</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 ">
                                                            <label for="filter-color-3" class="text-base Cos">Women Plus Shorts</label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                                {{--Jeans--}}
                                <div x-data="{koko: false}">
                                    <div class="">
                                        <button @click=" koko = ! koko " type="button" class="inline-flex text-base text-gray-700" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                            <p class="mt-2">Jeans</p>
                                        </button>
                                        <div x-show="koko" @click.outside="koko = false" class=" z-10 w-[250px] focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                            <div  class="py-1 " role="none">
                                                <div class="pt-3" id="filter-section-0">
                                                    <div class="space-y-4 px-3">
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                                            <label for="filter-color-0" class="text-base Cos">Men Jeans</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                                            <label for="filter-color-1" class="text-base Cos">Men Big & Tall Jeans</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-2" name="color[]" value="blue" type="checkbox"class="h-4 w-4 rounded border-gray-300">
                                                            <label for="filter-color-2" class="text-base Cos">
                                                                Surf, Skate & Street Clothing</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                                            <label for="filter-color-3" class="text-base Cos">Men Big & Tall Pants
                                                            </label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                                {{--Jumpers and Cardigans--}}
                                <div x-data="{koko: false}">
                                    <div class="">
                                        <button @click=" koko = ! koko " type="button" class="inline-flex text-base text-gray-700" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                            <p class="mt-2">Jumpers and Cardigans</p>
                                        </button>
                                        <div x-show="koko" @click.outside="koko = false" class="z-10 w-[200px] focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                            <div  class="py-1 " role="none">
                                                <div class="pt-3" id="filter-section-0">
                                                    <div class="space-y-4 px-3">
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                                            <label for="filter-color-0" class="text-base Cos">Sweaters Plus-Size</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                                            <label for="filter-color-1" class="text-base Cos">Plus Sweaters</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                                            <label for="filter-color-2" class="text-base Cos">Petite Cardigans</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                                            <label for="filter-color-3" class="text-base Cos">Tops, Tees & Blouses</label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                                {{--Leggings--}}
                                <div x-data="{koko: false}">
                                    <div class="">
                                        <button @click=" koko = ! koko " type="button" class="inline-flex text-base text-gray-700" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                            <p class="mt-2">leggings</p>
                                        </button>
                                        <div x-show="koko" @click.outside="koko = false" class=" z-10 w-[300px] focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                            <div  class="py-1 " role="none">
                                                <div class="pt-3" id="filter-section-0">
                                                    <div class="space-y-4 px-3">
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-color-0" class="text-base Cos">Novelty Leggings</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-color-1" class="text-base Cos">Novelty Pants & Capris</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-color-2" class="text-base Cos">Women Yoga Leggings</label>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <input id="filter-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-color-3" class="text-base Cos">Workout & Training Leggings</label>
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
                </div>

                <div x-data="{koko: false}" class="lg:mt-10 mt-7">
                    <div class="px-2">
                        <div @click=" koko = ! koko " class="flex justify-between">
                            <div class="font-medium text-xl Ca">Season</div>
                            <div  type="button" class="" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                <svg class="h-4 w-4 Ca " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                        </div>
                        <hr class="mt-2">
                        <div x-show="koko" @click.outside="koko = false" class="z-10 mt-2 w-[200px]" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div  class="py-1" role="none">
                                
                                <div class="space-y-4 px-3">
                                    <div class="flex items-center gap-3">
                                        <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-0" class=" text-sm text-gray-600">Summer</label>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-1" class="text-sm text-gray-600">Winter</label>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <input id="filter-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-2" class="text-sm text-gray-600">Spring & Autumn</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>       
                </div>

                <div x-data="{koko: false}" class="lg:mt-10 mt-7">
                    <div class="px-2">
                        <div @click=" koko = ! koko " class="flex justify-between">
                            <div class="font-medium text-xl Ca">Size</div>
                        <div  type="button" class="" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            <svg class="h-4 w-4 Ca" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                        </div>
                        <hr class="mt-2">
                        <div x-show="koko" @click.outside="koko = false" class="z-10 mt-2" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div  class="py-1" role="none">
                                <div class="grid lg:grid-cols-4 grid-cols-6 gap-4 mt-3 text-center lg:pr-0 pr-4">
                                    <div class="lg:py-3 py-2 border">
                                        <div class="">3XS</div>
                                    </div>
                                    <div class="lg:py-3 py-2 border">
                                        <div class=" text-decoration-line-through">2XS</div>
                                    </div>
                                    <div class="lg:py-3 py-2 border">
                                        <div class="">XS</div>
                                    </div>
                                    <div class="border lg:py-3 py-2">
                                        <div class="">S</div>
                                    </div>
                                    <div class="border border-black lg:py-3 py-2">
                                        <div class="">M</div>
                                    </div>
                                    <div class="border lg:py-3 py-2">
                                        <div class="">L</div>
                                    </div>
                                    <div class=" border lg:py-3 py-2">
                                        <div class=" text-decoration-line-through">XL</div>
                                    </div>
                                    <div class=" border lg:py-3 py-2">
                                        <div class=" text-decoration-line-through">2XL</div>
                                    </div>
                                    <div class=" border border-black lg:py-3 py-2">
                                        <div class="">3XL</div>
                                    </div>
                                    <div class=" border lg:py-3 py-2">
                                        <div class="">4Xl</div>
                                    </div>
                                    <div class="border lg:py-3 col-span-2 py-2">
                                        <div class="">One Size</div>
                                    </div>
                                    
                                </div>
                            
                            </div>
                        </div>
                    </div>       
                </div>

                <div x-data="{koko: false}" class="lg:mt-10 mt-7">
                    <div class="px-2">
                        <div @click=" koko = ! koko " class=" flex justify-between">
                            <div  class="font-medium text-xl">Colors</div>
                            <div  type="button" class="" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                <svg class="h-4 w-4 Ca" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                        </div>
                        <hr class="mt-2">
                        <div x-show="koko" @click.outside="koko = false" class=" z-10 mt-2 w-[200px] " role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div  class="py-1" role="none">
                                
                                <div class="space-y-4 lg:ml-1">
                                    <div class="flex items-center">
                                        {{-- <input id="filter-color-0" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"> --}}
                                        <div class="w-5 h-5 rounded-full bg-blue-600"></div>
                                        <label for="filter-color-0" class="ml-3 lg:text-lg text-base Ca">Blue</label>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 rounded-full bg-red-600"></div>
                                        <label for="filter-color-1" class="ml-3 lg:text-lg text-base Ca">Red</label>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 rounded-full bg-pink-600"></div>
                                        <label for="filter-color-2" class="ml-3 lg:text-lg text-base Ca">Pink</label>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 rounded-full bg-slate-200 "></div>
                                        <label for="filter-color-2" class="ml-3 lg:text-lg text-base Ca">white</label>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 rounded-full bg-orange-500"></div>
                                        <label for="filter-color-2" class="ml-3 lg:text-lg text-base Ca text-decoration-line-through">Orange</label>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 rounded-full bg-cyan-600"></div>
                                        <label for="filter-color-2" class="ml-3 lg:text-lg text-base Ca">Cyan</label>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 rounded-full bg-gray-600"></div>
                                        <label for="filter-color-2" class="ml-3 lg:text-lg text-base Ca">gray</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>       
                </div>

                <div x-data="{koko: false}" class="lg:mt-10 mt-7">
                    <div class="px-2">
                        <div @click=" koko = ! koko " class="flex justify-between">
                            <div class="font-medium text-xl Ca">Brand</div>
                            <div type="button" class="" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                <svg class="h-4 w-4 Ca" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                        </div>
                        
                        <hr class="mt-2">
                        <div x-show="koko" @click.outside="koko = false" class=" z-10 mt-2 w-[200px] " role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div  class="py-1" role="none">
                                <div class="relative sm:w-[285px] w-[380px] sm:mr-4 mr-2 mt-3">
                                    <input type="text" id="footer-field" placeholder="Search Brand" name="footer-field" class="border border-gary-500 text-black w-full inline-block text-base lg:px-3 px-8 lg:py-[6px] py-1 lg:ml-0  leading-8 transition duration-200 ease-in-out">
                                </div>
                                <div class="space-y-4 ml-3 mt-7">
                                    <div class="flex items-center">
                                        <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-0" class="ml-3 lg:text-lg text-base Cos">Dsquared2</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-1" class="ml-3 lg:text-lg text-base Cor text-decoration-line-through">Alexander McQueen</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-1" class="ml-3 lg:text-lg text-base Cos">Balenciaga</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-2" class="ml-3 lg:text-lg text-base Ca">Adidas</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-2" class="ml-3 lg:text-lg text-base Cos">Balmain</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-2" class="ml-3 lg:text-lg text-base Cos">Burberry</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-2" class="ml-3 lg:text-lg text-base Cos">Chloé</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-2" class="ml-3 lg:text-lg text-base Cos">Kenzo</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-2" class="ml-3 lg:text-lg text-base Cos">Givenchy</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>       
                </div>
                <div x-data="{koko: false}" class="lg:mt-10 mt-7">
                    <div class="px-2">
                        <div @click=" koko = ! koko " class=" flex justify-between">
                            <div class=" font-medium text-xl Ca">Price</div>
                            <div  type="button" class="" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                <svg class="h-4 w-4 Ca" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                        </div>
                        <hr class="mt-2">
                        <div x-show="koko" @click.outside="koko = false" class="z-10 mt-2 w-[200px]" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div  class="py-1" role="none">
                                <div class="space-y-4 lg:ml-3 mt-3">
                                    <div class="flex items-center">
                                        <input id="filter-color-0" name="color[]" value="white" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-0" class="ml-3 lg:text-xl text-base Cos">$10.00 - $49.00</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-color-1" name="color[]" value="beige" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-1" class="ml-3 lg:text-xl text-base Cos">$50.00 - $99.00</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-2" class="ml-3 lg:text-xl text-base Cos">$100.00 - $199.00</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-2" class="ml-3 lg:text-xl text-base Cos">$200.00 and Up</label>
                                    </div>
                                    
                                    <div class="flex justify-between gap-2">
                                        <div class="border border-gray-500 ">
                                            <input type="number" class="text-xl px-8 py-3" name="my-input" min="0" max="2024" step="" />
                                        </div>
                                        <p class="Cos text-3xl">-</p>
                                        <div class="border border-gray-500">
                                            <input type="number" class="text-xl px-8 py-3" name="my-input" min="0" max="2024" step="" />
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            
                            </div>
                        </div>
                    </div>       
                </div>
                
            </div>
            {{--col-span-9 --}}
            <div class=" lg:col-span-9 col-span-12 lg:mt-0 mt-[60px]">
                    <div class="relative">
                        <div id="slide" class="owl-carousel">
                            <div class="relative">
                                <img class=" w-full lg:px-0 px-2 lg:h-[550px] h-[430px] object-center object-cover " src="https://i0.wp.com/therighthairstyles.com/wp-content/uploads/2017/05/asian-women-hairstyles-featured.jpg?fit=1280%2C720&ssl=1" alt="">
                                <div class="absolute top-0">
                                    <div class="lg:block hidden left-0 px-14 text-white font-medium">
                                        <p class="text-4xl mt-44 ">2019 Summer </p>
                                        <p class="text-4xl ">Colection</p>
                                    </div>

                                    <p class=" lg:hidden block mt-44 text-2xl text-white px-10">2019 Summer Colection</p>
                                    <a href="/detal-us" class="lg:px-14 px-10 mt-8 inline-flex items-center text-white border-0 text-md">View Colection
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-3 " viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class=" relative">
                                <img class="w-full lg:px-0 px-2 lg:h-[550px] h-[430px] object-cover " src="https://yevgenysim-turkey.github.io/shopper/assets/img/covers/cover-29.jpg" alt="">
                                <div class="absolute inset-0 lg:px-16 px-10">
                                    <p class="lg:text-4xl text-3xl  lg:mt-28 mt-20 text-black font-medium">Get - 50% from </p>
                                    <p class="lg:text-4xl text-3xl text-black font-medium mt-2">Summer Collection</p>
                                    <p class="mt-5 text-lg">
                                        Appear, dry there darkness they're <br> seas. <br>
                                        <strong class="text-primary text-orange-500">Use code 4GF5SD</strong>
                                    </p>
                                    <a href="/detal-us" class=" mt-8 inline-flex items-center border border-gray-500 font-medium hover:bg-black transition-all ease-in duration-150 hover:text-white px-12 py-4 text-black text-base ">Shop Now
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1 " viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="relative">
                                <img class="w-full lg:px-0 px-2 lg:h-[550px] h-[430px] object-cover " src="https://yevgenysim-turkey.github.io/shopper/assets/img/covers/cover-30.jpg" alt="">
                                <div class="absolute inset-0 ">
                                    <p class="text-xl text-center lg:mt-40 mt-32 text-white ">ENJOY AN EXTRA </p>
                                    <p class=" lg:text-6xl text-4xl text-center text-white lg:mt-12 mt-6">50%  OFF</p>
                                    <div class="text-center lg:mt-16 mt-5">
                                        <div class=" text-white">
                                            <a href="" class="fafa w-[165px] text-base font-bold">shop colection</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-20">
                        <div class="lg:flex lg:justify-between lg:items-center lg:px-0 px-2">
                            <div class="">
                                <p class="text-3xl font-bold">Womens' Clothing</p>
                                <div class="flex justify-start gap-4 Ca">
                                    <div class="flex justify-center items-center">Home</div>
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </span>
                                    <div class="flex items-center">Women's Clothing</div>
                                </div>
                            </div>
                            <div class="lg:flex lg:justify-end lg:items-center ">
                                <div class="relative">
                                    <label for="currency" class="sr-only">Currency</label>
                                    <select id="currency" name="currency" placeholder="" class=" border Ca text-sm lg:px-4 px-40 py-3 lg:py-2 bg-transparent mt-3 lg:mt-0">
                                        <option class=" hidden lg:hidden"></option >
                                        <option selected>Most Popular</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--flex box--}}
                    <div class="grid lg:grid-cols-6 gap-4 grid-cols-3 lg:mt-16 mt-10 lg:px-0 px-2">
                        <div class="flex justify-center py-3 BB">
                            <div class="Ca">
                                <span class="">shift dresses</span>
                                <span><i class="fa fa-times" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="flex justify-center py-3 BB">
                            <div class=" Ca"> 
                                <span class="">dresses</span>
                                <span><i class="fa fa-times" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="flex justify-center py-3 BB">
                            <div class=" Ca"> summer
                                <span><i class="fa fa-times" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="flex justify-center py-3 BB">
                            <div class="Ca">M
                                <a><i class="fa fa-times" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="flex justify-center py-3 BB">
                            <div class=" Ca"> white
                                <span><i class="fa fa-times" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="flex justify-center py-3 BB">
                            <div class="Ca"> Addit
                                <span><i class="fa fa-times" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="flex justify-center py-3 BB">
                            <div class="Ca"> $10.00-$49.00
                                <span><i class="fa fa-times" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="flex justify-center py-3 BB">
                            <div class="Ca"> $50.00-$99.00
                                <span><i class="fa fa-times" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        
                    </div>
                    {{--pic grid --}}

            <div class="container mx-auto lg:px-0 px-2 grid lg:grid-cols-12 lg:gap-5 gap-2 grid-cols-6 lg:mt-12 mt-10">
                <div class="col-span-3">
                    <div  class="koko">
                            <div class="relative">
                            <img class="image w-full lg:h-[370px] h-[220px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-5.jpg" alt="">
                            <div class=" absolute inset-0 w-12 h-6 bg-white mt-5">
                                <p class=" text-black text-xs text-center mt-1">NEW</p>
                            </div>
                            </div>
                        <div class="overlay">
                            <div class="text-h2">
                                <ul class="social">
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black"><a href="/product.html" ><i class="fa fa-twitter mt-[10px] ml-1"></i></a></li>
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-linkedin mt-2 ml-[6px]"></i></a></li>
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-instagram mt-[10px] ml-1"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text-left lg:ml-4 ml-3 mt-5">
                        <p class="text-sm mt-1 Cos">Shoes</p>
                        <h3 class="Ca lg:text-lg text-base font-medium">Leather mid-heel Sandals</h3>
                        <span class=" Cos font-medium">$129.00</span>
                    </div>
                </div>
                <div class=" col-span-3 ">
                    <div class="koko">
                        <img class="image w-full lg:h-[370px] h-[220px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-6.jpg" alt="">
                        <div class="overlay">
                            <h1 class="text-h1"></h1>
                                <div class="text-h2">
                                    <ul class="social">
                                        <li class="w-8 h-8 rounded-full bg-white text-center  text-black"><a href="/product.html" ><i class="fa fa-twitter mt-[10px] ml-1"></i></a></li>
                                        <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-linkedin mt-2 ml-[6px]"></i></a></li>
                                        <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-instagram mt-[10px] ml-1"></i></a></li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                    <div class="text-left lg:ml-4 ml-3 mt-5">
                        <p class="text-base mt-1 Cos">Dresses</p>
                        <h3 class="Ca lg:text-lg text-base font-medium">Cotton floral print Dress</h3>
                        <span class="Cos font-medium">$40.00</span>
                    </div>
                </div>
                <div class=" col-span-3 lg:mt-0 mt-10">
                    <div class="koko">
                        <div class="relative">
                            <img class="image w-full lg:h-[370px] h-[220px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-7.jpg" alt="">
                        <div class=" absolute inset-0 w-12 h-6  bg-black mt-5">
                            <p class=" text-white text-xs text-center mt-1">SALE</p>
                        </div>
                        </div>
                    <div class="overlay">
                        <h1 class="text-h1"></h1>
                            <div class="text-h2">
                                <ul class="social">
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black"><a href="/product.html" ><i class="fa fa-twitter mt-[10px] ml-1"></i></a></li>
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-linkedin mt-2 ml-[6px]"></i></a></li>
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-instagram mt-[10px] ml-1"></i></a></li>
                                </ul>
                            </div>
                    </div>
                    </div>
                    <div class="text-left lg:ml-4 ml-3 mt-5 ">
                        <p class="text-base mt-1 Cos">Shoes</p>
                        <h3 class="Ca lg:text-lg text-base font-medium">Leather Sneakers</h3>
                        <p class=" Cos font-medium">$85.00 <span class="text-orange-600">$85.00</span></p>
                    </div>
                </div>
                <div class=" col-span-3 lg:mt-0 mt-10">
                    <div class="koko">
                        <img class="image w-full lg:h-[370px] h-[220px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-8.jpg" alt="">
                    <div class="overlay">
                        <h1 class="text-h1"></h1>
                            <div class="text-h2">
                                <ul class="social">
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black"><a href="/product.html" ><i class="fa fa-twitter mt-[10px] ml-1"></i></a></li>
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-linkedin mt-2 ml-[6px]"></i></a></li>
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-instagram mt-[10px] ml-1"></i></a></li>
                                </ul>
                            </div>
                    </div>
                    </div>
                    <div class="text-left lg:ml-4 ml-3 mt-5">
                        <p class="text-base mt-1 Cos">Tops</p>
                        <h3 class="Ca lg:text-lg text-base font-medium">Cropped cotton Top</h3>
                        <span class="Cos font-medium">$129.00</span>
                    </div>
                </div>

                <div class=" col-span-3 lg:mt-5 mt-10">
                    <div class="koko">
                        <img class="image w-full lg:h-[370px] h-[220px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-9.jpg" alt="">
                    <div class="overlay">
                        <h1 class="text-h1"></h1>
                            <div class="text-h2">
                                <ul class="social">
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black"><a href="/product.html" ><i class="fa fa-twitter mt-[10px] ml-1"></i></a></li>
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-linkedin mt-2 ml-[6px]"></i></a></li>
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-instagram mt-[10px] ml-1"></i></a></li>
                                </ul>
                            </div>
                    </div>
                    </div>
                    <div class="text-left lg:ml-4 ml-3 mt-5">
                        <p class="text-base mt-1 Cos">Dresses</p>
                        <h3 class="Ca lg:text-lg text-base font-medium">Floral print midi Dress</h3>
                        <span class=" Cos font-medium">$129.00</span>
                    </div>
                </div>
                <div class=" col-span-3 lg:mt-5 mt-10">
                    <div class="koko">
                        <div class=" relative">
                            <img class="image w-full lg:h-[370px] h-[220px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-10.jpg" alt="">
                            <div class=" absolute inset-0 w-12 h-6  bg-black mt-5">
                                <p class=" text-white text-xs text-center mt-1">NEW</p>
                            </div>
                        </div>
                    <div class="overlay">
                        <h1 class="text-h1"></h1>
                            <div class="text-h2">
                                <ul class="social">
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black"><a href="/product.html" ><i class="fa fa-twitter mt-[10px] ml-1"></i></a></li>
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-linkedin mt-2 ml-[6px]"></i></a></li>
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-instagram mt-[10px] ml-1"></i></a></li>
                                </ul>
                            </div>
                    </div>
                    </div>
                    <div class="text-left lg:ml-4 ml-3 mt-5 ">
                        <p class="text-base mt-1 Cos">Bags</p>
                        <h3 class="Ca lg:text-lg text-base font-medium">Suede cross body Bag</h3>
                        <span class=" Cos font-medium">$79.00</span>
                    </div>
                </div>
                <div class=" col-span-3 lg:mt-5 mt-10">
                    <div class="koko">
                        <img class="image w-full lg:h-[370px] h-[220px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-11.jpg" alt="">
                    <div class="overlay">
                        <h1 class="text-h1"></h1>
                            <div class="text-h2">
                                <ul class="social">
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black"><a href="/product.html" ><i class="fa fa-twitter mt-[10px] ml-1"></i></a></li>
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-linkedin mt-2 ml-[6px]"></i></a></li>
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-instagram mt-[10px] ml-1"></i></a></li>
                                </ul>
                            </div>
                    </div>
                    </div>
                    <div class="text-left lg:ml-4 ml-3 mt-5">
                        <p class="text-base mt-1 Cos">Skirts</p>
                        <h3 class="Ca lg:text-lg text-base font-medium">Printed A-line Skirt</h3>
                        <span class="Cos font-medium">$79.00</span>
                    </div>
                </div>
                <div class=" col-span-3 lg:mt-5 mt-10">
                    <div class="koko">
                        <div class="relative">
                            <img class="image w-full lg:h-[370px] h-[220px] object-cover" src="https://yevgenysim-turkey.github.io/shopper/assets/img/products/product-12.jpg" alt="">
                            <div class=" absolute inset-0 w-12 h-6  bg-white mt-5">
                                <p class=" text-black text-xs text-center mt-1 ">NEW</p>
                            </div>
                        </div>
                    <div class="overlay">
                        <h1 class="text-h1"></h1>
                            <div class="text-h2">
                                <ul class="social">
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black"><a href="/product.html" ><i class="fa fa-twitter mt-[10px] ml-1"></i></a></li>
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-linkedin mt-2 ml-[6px]"></i></a></li>
                                    <li class="w-8 h-8 rounded-full bg-white text-center  text-black ml-1"><a href="/product.html"><i class="fa fa-instagram mt-[10px] ml-1"></i></a></li>
                                </ul>
                            </div>
                    </div>
                    </div>
                    <div class="text-left lg:ml-4 ml-3 mt-5">
                        <p class="text-base mt-1 Cos">Shoes</p>
                        <h3 class="Ca lg:text-lg text-base font-medium">Heel strappy Sandals</h3>
                        <span class=" Cos font-medium">$90.00</span>
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
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}
    <script>
        
        $(document).ready(function(){
        $('#slide').owlCarousel({
            loop: true,
            margin: 10,
            dots: true,
            nav: false,
            responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
            },
            // autoplay: true,
            // autoplayTimeout: 1000,
            // autoplayHoverPause: true,
            center: true,
            // navText: ['<', '>'],
        });

        });   
    </script>

{{--form control number --}}
<script>

    const input = document.getElementsByName('my-input')[0];
    const min = input.getAttribute('min');
    const max = input.getAttribute('max');
    input.onkeypress = e =>{
    //  13: enter, +: 43 , -: 45
    if (13 == e.keyCode ) input.blur();
    if ([43, 45].includes(e.keyCode)) return false;
    };
    input.onkeyup = e => {
    if (parseFloat(input.value) < min){
        input.value = min;
    }
    else if (parseFloat(input.value) > max){
        input.value = max;
    }
    else {
        input.value = parseFloat(input.value);
    }
    
    };


</script>
</x-layout>