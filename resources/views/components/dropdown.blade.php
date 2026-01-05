@props(['id', 'label'])
<button id="{{ $id }}" data-dropdown-toggle="dropdown-{{ $id }}" data-dropdown-placement="right"
    class="inline-flex items-center justify-center text-gray-950 dark:text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none "
    type="button">

    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
        height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01" />
    </svg>

</button>

<!-- Dropdown menu -->
<div id="dropdown-{{ $id }}" class="z-10 bg-white dark:bg-gray-900 hidden rounded-md shadow-lg w-fit border">
    {{ $slot }}
</div>
