<x-layouts.app>
    <div class="flex overflow-hidden bg-white pt-16">
        {{-- Sidebar Admin --}}
        {{-- @include('components.layouts.sidebar') --}}

        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 sm:ml-64">
            <main class="p-4">
                {{ $slot }}
            </main>
        </div>
    </div>
</x-layouts.app>
    