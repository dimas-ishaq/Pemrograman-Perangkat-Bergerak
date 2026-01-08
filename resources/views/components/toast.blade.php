@props(['type' => 'success', 'message' => ''])

@php
    $styles = [
        'success' => [
            'iconColor' => 'text-green-500',
            'bgIcon' => 'bg-green-100 dark:bg-green-800 dark:text-green-200',
            'iconPath' =>
                '<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>',
        ],
        'danger' => [
            'iconColor' => 'text-red-500',
            'bgIcon' => 'bg-red-100 dark:bg-red-800 dark:text-red-200',
            'iconPath' =>
                '<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>',
        ],
        'warning' => [
            'iconColor' => 'text-orange-500',
            'bgIcon' => 'bg-orange-100 dark:bg-orange-700 dark:text-orange-200',
            'iconPath' =>
                '<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z"/>',
        ],
    ];
@endphp

@if ($message)
    <div id="toast-{{ $type }}"
        class="toast fixed top-5 right-5 z-50 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm   transition-opacity duration-500 opacity-0"
        role="alert">
        <div
            class="inline-flex items-center justify-center shrink-0 w-8 h-8 {{ $styles[$type]['iconColor'] }} {{ $styles[$type]['bgIcon'] }} rounded-lg">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                {!! $styles[$type]['iconPath'] !!}
            </svg>
        </div>
        <div class="ms-3 text-sm font-normal">{{ $message }}</div>
        <button type="button"
            class="close-btn ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 ">
            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
@endif
