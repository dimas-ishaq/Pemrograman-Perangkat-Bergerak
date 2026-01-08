<x-layouts.admin>
    <div
        class="flex flex-col gap-4 min-h-screen items-center text-sm justify-start w-full transition-opacity opacity-100 duration-750 starting:opacity-0 ">
        <div class="flex flex-col items-center gap-4 w-full ">
            <nav class="flex w-full" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="{{ route('admin.dashboard') }}"
                            class="inline-flex items-center text-sm font-medium  hover:text-fg-brand">
                            <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center space-x-1.5">
                            <svg class="w-3.5 h-3.5 rtl:rotate-180 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m9 5 7 7-7 7" />
                            </svg>
                            <a href="{{ route('products.index') }}"
                                class="inline-flex items-center text-sm font-medium  hover:text-fg-brand">Product</a>
                        </div>
                    </li>

                </ol>
            </nav>
            <div class="flex justify-between items-center w-full gap-4 ">
                <form class="w-full">
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-fg-light-body bg-neutral-light-section border rounded-lg"
                            placeholder="Search Mockups, Logos..." required />
                        <button type="submit"
                            class=" absolute end-2.5 bottom-2 bg-neutral-dark-section text-fg-dark-body hover:bg-brand-strong  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                    </div>
                </form>
                <div>
                    <button data-modal-target="add-product-modal" data-modal-toggle="add-product-modal"
                        class="cursor-pointer flex items-center text-fg-light-body bg-brand-primary rounded-sm shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none flex-nowrap whitespace-nowrap"
                        type="button">
                        <svg class="w-6 h-6 text-fg-light-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7 7V5" />
                        </svg>
                        <span>Add Product</span>
                    </button>
                </div>
            </div>

            <x-tables.product-table :products="$products" />


        </div>
    </div>
   
    @push('modals')
        <x-forms.add-product :categories="$categories" />
    @endpush
</x-layouts.admin>
