@include('layout.head')
@if (session('success'))
    <x-toast type="success" :message="session('success')" />
@endif

@if (session('error'))
    <x-toast type="danger" :message="session('error')" />
@endif

@if (session('warning'))
    <x-toast type="warning" :message="session('warning')" />
@endif

<body class="flex flex-col justify-center items-center w-full px-8">

    <div
        class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0 ">
        <main class="flex flex-col w-full my-8  ">
            {{-- sidebar --}}
            <div class="flex flex-row sm:ml-64 md:ml-70 justify-start items-center mb-4 space-x-2">
                <div class="flex flex-col justify-center items-center">
                    @include('layout.sidebar')
                </div>
                <div class=" flex flex-col justify-between items-start w-full space-y-4">
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

                    <button data-modal-target="add-category-modal" data-modal-toggle="add-category-modal"
                        class="flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 px-3 py-2 text-sm font-medium rounded-lg  text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        <i data-lucide="plus"></i>
                        Add Category
                    </button>






                    <!-- Main modal -->
                    <div id="add-category-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            @include('components.form-add-category')
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="text-xl font-bold mb-4">
                            Product Category
                        </div>
                        @include('components.category-table', ['categories' => $categories])
                    </div>
                </div>
            </div>
            {{-- end sidebar --}}

            {{-- food content --}}
            <div class="ml-20 md:ml-70 sm:ml-64">

            </div>

            {{-- end food content --}}
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
    @stack('scripts')
</body>

</html>