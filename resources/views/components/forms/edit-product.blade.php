@props(['id','modal','name','description'])
<x-modals.popup modal="{{ $modal }}">

    <x-slot:btn>
        <div class="flex items-center w-full ">
            <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
            </svg>
            <div>Edit</div>
        </div>
    </x-slot:btn>

    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div
            class="relative bg-white dark:text-white dark:bg-gray-700 rounded-base shadow-sm p-4 md:p-6">
            <!-- Modal header -->
            <div class="flex items-center justify-between border-b border-default pb-4 md:pb-5">
                <h3 class="text-lg font-medium text-heading">
                    Edit Category
                </h3>
                <button type="button"
                    class="text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="popup-modal-{{ $modal }}">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18 17.94 6M18 18 6.06 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="space-y-4 md:space-y-6 py-4 md:py-6">
                <form class="max-w-md mx-auto">
                    <div class="mb-5">
                        <label for="email-alternative" class="block mb-2.5 text-sm font-medium text-heading">
                            Category Name</label>
                        <input type="email" id="email-alternative"
                            class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow placeholder:text-body"
                            required value="{{ $name }}"/>
                    </div>
                    <div class="mb-5">

                        <label for="message" class="block mb-2.5 text-sm font-medium text-heading">Description</label>
                        <textarea id="message" rows="4"
                            class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full p-3.5 shadow-xs placeholder:text-body">{{ $description }}</textarea>

                    </div>

                    <div class="flex items-center border-t border-default space-x-4 pt-4 md:pt-5">
                        <button data-modal-hide="popup-modal-{{ $modal }}" type="button"
                            class="text-white bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Simpan</button>
                        <button data-modal-hide="popup-modal-{{ $modal }}" type="button"
                            class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Batal</button>
                    </div>
                </form>




            </div>
            <!-- Modal footer -->
        </div>
    </div>



</x-modals.popup>
