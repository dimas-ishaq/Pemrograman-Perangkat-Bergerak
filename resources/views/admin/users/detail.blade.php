<div x-show="isOpenDetail" x-cloak tabindex="-1" aria-hidden="true" {{-- Tambahkan flex agar modal berada di tengah --}}
    class="fixed inset-0 z-50 flex justify-center items-center w-full p-4 overflow-x-hidden overflow-y-auto">

    <div class="relative w-full max-w-2xl max-h-full" @click.away="isOpen = false">
        <div
            class="relative bg-neutral-light-section text-fg-light-body border border-default rounded-base shadow-sm p-4 md:p-6">

            <div class="flex items-center justify-between border-b border-default pb-4 md:pb-5">
                <h3 class="text-lg font-medium text-heading">
                    Detail User: <span x-text="activeItem.name"></span>
                </h3>
                {{-- Tutup Modal --}}
                <button @click="isOpenDetail = false" type="button"
                    class=" bg-transparent  hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <div class="space-y-4 md:space-y-6 py-4 md:py-6 ">
                <div>
                    <label class="font-bold">Email:</label>
                    <p x-text="activeItem.email"></p>
                </div>
                <div>
                    <label class="font-bold">Role:</label>
                    <p x-text="activeItem.role"></p>
                </div>
            </div>

            <div class="flex items-center border-t border-default space-x-4 pt-4 md:pt-5">
                <button @click="isOpenDetail = false" type="button"
                    class="text-fg-dark-body bg-neutral-dark-section font-medium rounded-base text-sm px-4 py-2.5">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>
