<div id="add-product-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full ">
        <div class="relative rounded-lg shadow-sm bg-neutral-light-section text-fg-light-body ">
            <!-- Modal header -->
            <div class="mb-4 flex items-center justify-between p-4 md:p-5 border-b rounded-t  border-gray-200">
                <h3 class="text-xl font-semibold text-fg-light-heading ">
                    Add Product
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-fg-light-body rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  dark:hover:text-white"
                    data-modal-hide="add-product-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->

            <form class="max-w-xl mx-auto" method="post" action="{{ route('products.store') }}"
                enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="flex items-center justify-center w-full mb-5">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50   hover:bg-gray-100  dark:hover:border-gray-500 ">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click
                                    to
                                    upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)
                            </p>
                            <!-- tempat muncul nama file -->
                            <p id="file-name" class="mt-2 text-sm font-medium text-gray-700 dark:text-gray-300"></p>
                        </div>
                        <input id="dropzone-file" name="image" type="file"
                            accept="image/jpeg, image/png, image/jpg" class="hidden" value="{{ old('image') }}" />
                    </label>
                </div>

                <div class="mb-5 flex items-center space-x-4">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-fg-light ">Product
                            Name</label>
                        <input type="text" id="name" name="name"
                            class="bg-gray-50 border border-gray-300 text-fg-light text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Produk" value="{{ old('name') }}" />
                        @error('name')
                            <p class="mt-2.5 text-sm text-danger-primary">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="stock" class="block mb-2 text-sm font-medium text-fg-light ">Stock</label>
                        <input type="number" id="stock" name="stock"
                            class="bg-gray-50 border border-gray-300 text-fg-light text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('stock') }}" min="1" />
                        @error('stock')
                            <p class="mt-2.5 text-sm text-danger-primary">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-fg-light ">Price
                        </label>
                        <input type="number" id="price" name="price"
                            class="bg-gray-50 border border-gray-300 text-fg-light text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="{{ old('price') }}" />
                        @error('price')
                            <p class="mt-2.5 text-sm text-danger-primary">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mb-5 flex items-center space-x-4">
                    <div class="w-4/12">
                        <label for="category_id" class="block mb-2 text-sm font-medium text-fg-light ">
                            Category</label>
                        <select id="category_id" name="category_id"
                            class="bg-gray-50 border border-gray-300 text-fg-light text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('category_id') }}">
                            <option selected disabled>Choose a category</option>
                            @foreach ($categories as $category)
                                <option value={{ $category->id }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <p class="mt-2.5 text-sm text-danger-primary">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-4/12">
                        <label for="status" class="block mb-2 text-sm font-medium text-fg-light ">Status</label>
                        <select id="status" name="status"
                            class="bg-gray-50 border border-gray-300 text-fg-light text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('status') }}">
                            <option selected disabled>Choose a status</option>
                            <option value="0">Draft</option>
                            <option value="1">Published</option>
                        </select>
                        @error('category')
                            <p class="mt-2.5 text-sm text-danger-primary">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <div>
                    <label for="description" class="block mb-2 text-sm font-medium text-fg-light ">Description</label>
                    <textarea id="description" rows="4" name="description"
                        class="bg-neutral-secondary-medium border  text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full p-3.5 shadow-xs placeholder:"
                        placeholder="Write your thoughts here...">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-2.5 text-sm text-danger-primary">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Modal footer -->
                <div class="flex items-center py-4 md:py-5 border-t border-gray-200 rounded-b  ">
                    <button type="submit" type="button"
                        class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                    <button data-modal-hide="add-product-modal" type="button"
                        class="cursor-pointer py-2.5 px-5 ms-3 text-sm font-medium text-fg-light focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400  dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                </div>
            </form>
        </div>
    </div>

</div>


@push('scripts')
    <script>
        const inputFile = document.getElementById("dropzone-file");
        const fileNameText = document.getElementById("file-name");
        const dropzoneLabel = inputFile.closest('label'); // Mencari area dropzone (biasanya label)

        // 1. Fungsi untuk update teks nama file
        const updateFileName = (file) => {
            if (file) {
                fileNameText.textContent = `📁 ${file.name}`;
            } else {
                fileNameText.textContent = "";
            }
        };

        // 2. Menangani pemilihan via KLIK
        inputFile.addEventListener("change", (event) => {
            updateFileName(event.target.files[0]);
        });

        // 3. Menangani DRAG & DROP
        // Mencegah browser membuka file secara otomatis saat file ditarik ke dalam
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropzoneLabel.addEventListener(eventName, (e) => {
                e.preventDefault();
                e.stopPropagation();
            }, false);
        });

        // Efek visual saat file berada di atas dropzone (opsional)
        ['dragenter', 'dragover'].forEach(eventName => {
            dropzoneLabel.addEventListener(eventName, () => {
                dropzoneLabel.classList.add('border-brand-primary', 'bg-neutral-light-surface');
            });
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropzoneLabel.addEventListener(eventName, () => {
                dropzoneLabel.classList.remove('border-brand-primary', 'bg-neutral-light-surface');
            });
        });

        // Menangani saat file DILEPAS (Drop)
        dropzoneLabel.addEventListener('drop', (e) => {
            const dt = e.dataTransfer;
            const files = dt.files;

            if (files.length > 0) {
                inputFile.files = files; // Masukkan file drop ke dalam input element
                updateFileName(files[0]);
            }
        });
    </script>
@endpush
