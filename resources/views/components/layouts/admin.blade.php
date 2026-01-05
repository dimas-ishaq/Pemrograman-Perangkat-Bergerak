<x-layouts.app>
    <div class="flex overflow-hidden">
        <div id="main-content" class=" relative w-full h-full overflow-y-auto sm:ml-64">
            <div class="w-full h-16 dark:bg-neutral-dark-surface flex items-center justify-between px-4 shadow-md">
                <x-layouts.sidebar />
               
                <div class="flex space-x-2 items-center">
                    <x-dark-mode/>
                    <x-avatar/>
                </div>
            </div>
            <main class="p-4 text-fg-light-body dark:text-fg-dark-body">
                {{ $slot }}
                 <x-layouts.footer/>
            </main>
            
        </div>
    </div>
</x-layouts.app>