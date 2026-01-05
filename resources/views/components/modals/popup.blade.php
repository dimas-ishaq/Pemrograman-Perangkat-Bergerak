@props(['modal'])
<button data-modal-target="popup-modal-{{ $modal }}" data-modal-toggle="popup-modal-{{ $modal }}"
    class=" cursor-pointer w-full dark:text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none"
    type="button">
    {{ $btn ?? ''}}
</button>

@push('popup')
    <div id="popup-modal-{{ $modal }}" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        {{$slot}}
    </div>
@endpush
