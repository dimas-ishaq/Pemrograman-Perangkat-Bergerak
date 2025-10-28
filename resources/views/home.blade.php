@include('layout.head')

<body class="flex flex-col justify-center items-center w-full">
    <div
        class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0 ">
        <main class="flex flex-col w-full my-8  ">
            {{-- sidebar --}}
            <div class="flex flex-row sm:ml-64 md:ml-70 justify-start items-center mb-4 space-x-2">
                <div class="flex flex-col justify-center items-center">
                    @include('layout.sidebar')
                </div>
                <div class="flex flex-col justify-between items-center w-full">
                    <form class="w-full">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-4 ps-10 text-sm text-gray-900  border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search Mockups, Logos..." required />
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                </div>
                <div class="rounded-md border border-gray-300 bg-gray-50 p-2">
                    <img src="{{ asset('images/cart.png') }}" alt="" class="w-8 h-8">
                </div>


            </div>
            {{-- end sidebar --}}

            {{-- food content --}}
            <div class="ml-20 md:ml-70 sm:ml-64">
                <div
                    class="  grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2 ">
                    <div class="w-full">
                        <a href="#"
                            class="block max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <div class="flex justify-center items-center w-full mb-2">
                                <img src="{{ asset("images/products/olatte.png") }}" alt=""
                                    class="w-[180px] h-[180px] object-cover shadow-md rounded-full">
                            </div>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Odading
                                Mang
                                Oleh</h5>
                            <p class="text-sm text-gray-700 dark:text-gray-400 line-clamp-3 mb-2">Lorem ipsum dolor sit
                                amet consectetur, adipisicing elit. Illum, mollitia.</p>
                            <p class="text-2xl font-bold text-right">$75</p>
                        </a>

                    </div>
                    <div class="w-full">
                        <a href="#"
                            class="block max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <div class="flex justify-center items-center w-full mb-2">
                                <img src="{{ asset("images/products/olatte.png") }}" alt=""
                                    class="w-[180px] h-[180px] object-cover shadow-md rounded-full">
                            </div>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Odading
                                Mang
                                Oleh</h5>
                            <p class="text-sm text-gray-700 dark:text-gray-400 line-clamp-3 mb-2">Lorem ipsum dolor sit
                                amet consectetur, adipisicing elit. Illum, mollitia.</p>
                            <p class="text-2xl font-bold text-right">$75</p>
                        </a>

                    </div>
                    <div class="w-full">
                        <a href="#"
                            class="block max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <div class="flex justify-center items-center w-full mb-2">
                                <img src="{{ asset("images/products/olatte.png") }}" alt=""
                                    class="w-[180px] h-[180px] object-cover shadow-md rounded-full">
                            </div>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Odading
                                Mang
                                Oleh</h5>
                            <p class="text-sm text-gray-700 dark:text-gray-400 line-clamp-3 mb-2">Lorem ipsum dolor sit
                                amet consectetur, adipisicing elit. Illum, mollitia.</p>
                            <p class="text-2xl font-bold text-right">$75</p>
                        </a>

                    </div>
                    <div class="w-full">
                        <a href="#"
                            class="block max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <div class="flex justify-center items-center w-full mb-2">
                                <img src="{{ asset("images/products/olatte.png") }}" alt=""
                                    class="w-[180px] h-[180px] object-cover shadow-md rounded-full">
                            </div>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Odading
                                Mang
                                Oleh</h5>
                            <p class="text-sm text-gray-700 dark:text-gray-400 line-clamp-3 mb-2">Lorem ipsum dolor sit
                                amet consectetur, adipisicing elit. Illum, mollitia.</p>
                            <p class="text-2xl font-bold text-right ">$75</p>
                        </a>

                    </div>

                </div>
            </div>

            {{-- end food content --}}
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>