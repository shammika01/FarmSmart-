<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900s dark:text-whites mb-4">Welcome
                    To FarmSmart</h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-900s dark:text-whites">Blue
                    bottle crucifix
                    vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps
                    microdosing banh mi pug.</p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-green-500 inline-flex"></div>
                </div>
            </div>

            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="p-4 md:w-1/3 flex">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-4 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M3 4h3M6 4l2.65 11m12.35-7H7M9 20a2 2 0 100-4 2 2 0 000 4z"></path>
                        </svg>

                    </div>
                    <div class="flex-grow pl-6">
                        <h2 class=" text-gray-500s dark:text-whites text-lg title-font font-medium mb-2 "
                            href="#">
                            Farming Planner
                        </h2>
                        <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar
                            toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                            try-hard ugh iceland kickstarter tumblr live-edge tilde.</p>
                        <a class="mt-3 text-green-500 inline-flex items-center" href="#">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-4 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
                            <path d="M12 3v6M9 18h6M20.39 5.61l-3.77 3.77M3.22 20.39l3.77-3.77"></path>
                        </svg>


                    </div>


                    <div class="flex-grow pl-6">
                        <h2 class=" text-gray-500s dark:text-whites text-lg title-font font-medium mb-2">MarketPlace
                        </h2>
                        <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar
                            toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                            try-hard ugh iceland kickstarter tumblr live-edge tilde.</p>
                        <a class="mt-3 text-green-500 inline-flex items-center" href="{{ route('market') }}">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-4 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path
                                d="M4.75 2.75h14.5a2 2 0 012 2v14.5a2 2 0 01-2 2h-14.5a2 2 0 01-2-2v-14.5a2 2 0 012-2z" />
                            <path d="M16 13.5H8" />
                            <path d="M16 9.5H8" />
                            <path d="M10 9.5H8" />
                            <path d="M10 13.5H8" />
                        </svg>


                    </div>
                    <div class="flex-grow pl-6">
                        <h2 class=" text-gray-500s dark:text-whites text-lg title-font font-medium mb-2">Forum</h2>
                        <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar
                            toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                            try-hard ugh iceland kickstarter tumblr live-edge tilde.</p>
                        <a class="mt-3 text-green-500 inline-flex items-center" href="{{ route('forum') }}">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="text-gray-600 body-font overflow-hidden">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-12">
                    <div class="p-12 md:w-1/2 flex flex-col items-start">
                        <span
                            class="inline-block py-1 px-2 rounded bg-green-50 text-green-500s text-xs font-medium tracking-widest">CATEGORY</span>
                        <h2
                            class="sm:text-3xl text-2xl title-font font-medium text-gray-900s dark:text-whites mt-4 mb-4">
                            Roof party
                            normcore before they sold out, cornhole vape</h2>
                        <p class="leading-relaxed mb-8">Live-edge letterpress cliche, salvia fanny pack humblebrag
                            narwhal portland. VHS man braid palo santo hoodie brunch trust fund. Bitters hashtag
                            waistcoat fashion axe chia unicorn. Plaid fixie chambray 90's, slow-carb etsy tumeric.
                            Cray pug you probably haven't heard of them hexagon kickstarter craft beer pork chic.
                        </p>
                        <div class="flex items-center flex-wrap pb-4 mb-4 border-b-2 border-gray-100 mt-auto w-full">
                            <a class="text-green-500 inline-flex items-center">Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span
                                class="text-gray-400 mr-3 inline-flex items-center ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>6
                            </span>
                        </div>
                        <a class="inline-flex items-center">
                            <img alt="blog" src="https://dummyimage.com/104x104"
                                class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-medium text-gray-900s dark:text-whites">Holden
                                    Caulfield</span>
                                <span class="text-gray-400 text-xs tracking-widest mt-0.5">UI DEVELOPER</span>
                            </span>
                        </a>
                    </div>
                    <div class="p-12 md:w-1/2 flex flex-col items-start">
                        <span
                            class="inline-block py-1 px-2 rounded bg-green-50 text-green-500 text-xs font-medium tracking-widest">CATEGORY</span>
                        <h2
                            class="sm:text-3xl text-2xl title-font font-medium text-gray-900s dark:text-whites mt-4 mb-4">
                            Pinterest
                            DIY dreamcatcher gentrify single-origin coffee</h2>
                        <p class="leading-relaxed mb-8">Live-edge letterpress cliche, salvia fanny pack humblebrag
                            narwhal portland. VHS man braid palo santo hoodie brunch trust fund. Bitters hashtag
                            waistcoat fashion axe chia unicorn. Plaid fixie chambray 90's, slow-carb etsy tumeric.
                        </p>
                        <div class="flex items-center flex-wrap pb-4 mb-4 border-b-2 border-gray-100 mt-auto w-full">
                            <a class="text-green-500 inline-flex items-center">Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span
                                class="text-gray-400 mr-3 inline-flex items-center ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>6
                            </span>
                        </div>
                        <a class="inline-flex items-center">
                            <img alt="blog" src="https://dummyimage.com/103x103"
                                class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-medium text-gray-900s dark:text-whites">Alper
                                    Kamu</span>
                                <span class="text-gray-400 text-xs tracking-widest mt-0.5">DESIGNER</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
