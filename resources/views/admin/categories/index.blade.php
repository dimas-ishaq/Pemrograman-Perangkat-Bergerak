<x-layouts.admin>
    <div class="flex flex-col justify-center items-center w-full ">
        <div
            class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 starting:opacity-0 ">
            <div class="flex flex-col w-full space-y-6">
                {{-- Form add categories --}}
                <div class="w-full mx-auto">
                    <div
                        class="bg-neutral-light-surface dark:bg-neutral-dark-section p-6 rounded-base border border-border-light dark:border-border-dark shadow-sm">
                        <h3 class="text-lg font-bold mb-4 text-fg-light-heading dark:text-fg-dark-heading">
                            Tambah Kategori Baru
                        </h3>
                        <x-forms.add-category />
                    </div>
                </div>

                <div class="w-full ">
                    <h3 class="text-xl font-bold mb-4">
                        Product Category
                    </h3>
                    {{-- Table categories --}}
                    <x-tables.category-table :categories="$categories" />
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
