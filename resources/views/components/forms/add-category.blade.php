{{-- Button modal --}}
<button data-modal-target="add-category-modal" data-modal-toggle="add-category-modal"
    class="cursor-pointer self-end flex items-center text-fg-light-body dark:text-brand-primary-soft bg-brand-primary-strong focus:ring-4 focus:outline-none  px-3 py-2 text-sm font-medium rounded-lg  text-center "
    type="button">
    <i data-lucide="plus"></i>
    Add Category
</button>


<!-- Main modal -->
<div id="add-category-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full text-fg-light-body bg-neutral-light-section">
        <!-- Modal content -->

        <div class="relative rounded-lg ">
            <!-- Modal header -->
            <div class="mb-4 flex items-center justify-between p-4 md:p-5 border-b rounded-t  ">
                <h3 class="text-xl font-semibold  ">
                    Add Category
                </h3>
                <button type="button"
                    class=" bg-transparent  hover: rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                    data-modal-hide="add-category-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->

            <form class="max-w-lg mx-auto " method="post" action="{{ route('categories.store') }}">
                @csrf
                <div class="mb-5 flex flex-col items-start space-y-4 ">
                    <div class="w-full">
                        <label for="name" class="block mb-2 text-sm font-medium  ">Category
                            Name *</label>
                        <input type="text" id="name" name="name"
                            class=" border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Kategori" value="{{ old('name') }}" />
                        @error('name')
                            <p class="mt-2.5 text-sm text-danger-primary"><span
                                    class="font-medium">{{ $message }}</span></p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="description" class="block mb-2 text-sm font-medium  ">Description
                            *</label>
                        <textarea id="description" rows="4" name="description"
                            class="block p-2.5 w-full text-sm  bg-gray-50 rounded-lg border border-gray-300 " placeholder="Deskripsi Kategori">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="mt-2.5 text-sm text-danger-primary"><span
                                    class="font-medium">{{ $message }}</span></p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center py-4 md:py-5 border-t  rounded-b  ">
                    <button type="submit"
                        class="cursor-pointer bg-brand-primary text-fg-light-body focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Simpan</button>
                    <button data-modal-hide="add-category-modal" type="button"
                        class="cursor-pointer py-2.5 px-5 ms-3 text-sm font-medium  focus:outline-none rounded-lg border  "">Batal</button>
                </div>
            </form>

        </div>

    </div>

</div>
