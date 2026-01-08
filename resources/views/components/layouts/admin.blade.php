<x-layouts.app>
    <div class="flex overflow-hidden ">
        <div id="main-content" class="relative flex flex-col w-full min-h-screen overflow-y-auto sm:ml-64">
            <div
                class="fixed top-0 left-0 right-0 z-10 w-full h-16 bg-neutral-light-surface dark:bg-neutral-dark-surface flex items-center justify-between px-4 shadow-sm">
                <x-layouts.sidebar />

                <div class="flex space-x-2 items-center">
                    <x-dark-mode />
                    <x-avatar />
                </div>
            </div>
            <div class="flex flex-col">
                <main class="flex flex-col p-4 w-full text-fg-light-body dark:text-fg-dark-body mt-16 ">
                    {{ $slot }}
                </main>
                <x-layouts.footer />
            </div>

        </div>

    </div>

</x-layouts.app>
