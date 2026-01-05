@props(['id', 'name','modal'])
<x-modals.popup modal="{{ $modal }}">

    <x-slot:btn>
        <div class="flex items-center w-full">
            <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
            </svg>
            <div>Delete</div>
        </div>
    </x-slot:btn>


    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-neutral-light-section text-fg-light-body border border-default rounded-base shadow-sm p-4 md:p-6">
            <button type="button"
                class="absolute top-3 end-2.5 text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center"
                data-modal-hide="popup-modal-{{ $modal }}">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18 17.94 6M18 18 6.06 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-fg-disabled w-12 h-12" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-6 text-body">Apakah anda yakin ingin menghapus kategori ini {{ $name }}? Kategori
                    yang sudah dihapus tidak dapat dikembalikan</h3>
                <div class="flex items-center space-x-4 justify-center">
                    <form action={{ route('category.destroy',$id) }}method="post">
                        @method('DELETE')
                        @csrf
                        <button data-modal-hide="popup-modal-{{ $modal }}" type="button"
                            class="cursor-pointer bg-danger-primary text-fg-dark-body box-border border border-transparent hover:bg-danger-strong focus:ring-4 focus:ring-danger-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                            Ya, Hapus
                        </button>
                    </form>
                    <button data-modal-hide="popup-modal-{{ $modal }}" type="button"
                        class="cursor-pointer box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                        Tidak</button>
                </div>
            </div>
        </div>
    </div>
</x-modals.popup>
