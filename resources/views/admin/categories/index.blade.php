<x-layouts.admin>

  <div class="flex flex-col justify-center items-center w-full ">
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 starting:opacity-0 ">
            <div class="flex flex-row justify-start items-center space-x-2 w-full" >
                <div class=" flex flex-col justify-between items-start w-full ">
                    {{-- Form add categories --}}
                    <x-forms.add-category />

                    <div class="w-full">
                        <div class="text-xl font-bold">
                            Product Category
                        </div>
                        {{-- Table categories --}}
                       <x-tables.category-table :categories="$categories" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
