<x-layouts.app>


    <div class="bg-neutral-light-surface dark:bg-neutral-dark-surface font-display ">
        <div class="fixed top-5 right-2 z-10 p-4 flex justify-end">
            <x-dark-mode />
        </div>
        <div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
            <div class="layout-container flex h-full grow flex-col">
                <main class="flex-grow">
                    <div class="grid grid-cols-1 lg:grid-cols-2 min-h-screen">
                        <!-- Kolom Kiri - Visual -->
                        <div class="hidden lg:flex w-full bg-center bg-no-repeat bg-cover"
                            data-alt="A vibrant and colorful flat lay of fresh ingredients and a delicious pasta dish, symbolizing the joy of cooking."
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBD9Emws0jWdzAI8VvxEb0WcXYE_c1pvl61LBiHfqSS4HyNv9JIeIrPVfnzX6kjWwK2D_vVtZSi6Aqsgzc-764hOs6_zEb79rTWmMgC4TUTbCUVDkb0kgAbLzusEUSr5kg61iwH2pk4p5sufZewggNR5f7mb8JNcLJMooRz8rsUFFETdA-wIc8J8kFZ3j9za4wNdgd5zxhVcoVJyxRDVbhY2ID6gWl8Hxlb4T-r_1IY7AbUcIkZirtdrQGo2NHZxaJJ4l8s8mksLr8");'>
                        </div>
                        <!-- Kolom Kanan - Form -->
                        <div
                            class="w-full bg-neutral-light-surface dark:bg-neutral-dark-surface flex items-center justify-center p-6 sm:p-8 lg:p-12">
                            <div class="flex flex-col max-w-md w-full gap-8">
                                <div class="flex flex-col gap-2 text-left">
                                    <h1
                                        class="text-fg-light-heading dark:text-fg-dark-heading text-4xl font-black leading-tight tracking-[-0.033em]">
                                        Buat Akun Baru Anda</h1>
                                    <h2
                                        class="text-fg-light-heading dark:text-fg-dark-heading text-base font-normal leading-normal">
                                        Temukan resep baru, bagikan kreasi masakanmu, dan terhubung dengan pecinta
                                        kuliner
                                        lainnya.</h2>
                                </div>
                                <form class="flex flex-col gap-6 w-full" method="POST"
                                    action={{ route('register.auth') }}>
                                    @csrf
                                    @method('POST')
                                    <!-- Form Fields -->
                                    <div class="flex flex-col gap-4">
                                        <label class="flex flex-col min-w-40 flex-1">
                                            <p class="text-base font-medium leading-normal pb-2">
                                                Nama Lengkap</p>
                                            <input
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg  focus:outline-0 focus:ring-0 border border-[#e6e0db] bg-white focus:border-primary h-14 placeholder:text-[#897461] p-[15px] text-base font-normal leading-normal dark:bg-background-dark dark:border-gray-600 dark:focus:border-primary "
                                                placeholder="Masukkan nama lengkap Anda" value=""
                                                name="name" />
                                        </label>
                                        <label class="flex flex-col min-w-40 flex-1">
                                            <p class="text-base font-medium leading-normal pb-2">
                                                Alamat Email</p>
                                            <input
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg  focus:outline-0 focus:ring-0 border border-[#e6e0db] bg-white focus:border-primary h-14 placeholder:text-[#897461] p-[15px] text-base font-normal leading-normal dark:bg-background-dark dark:border-gray-600 dark:focus:border-primary "
                                                placeholder="contoh@email.com" value="" type="email"
                                                name="email" />
                                        </label>
                                        <label class="flex flex-col min-w-40 flex-1">
                                            <p class="text-base font-medium leading-normal pb-2">
                                                Kata Sandi</p>
                                            <div class="flex w-full flex-1 items-stretch rounded-lg">
                                                <input
                                                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg  focus:outline-0 focus:ring-0 border border-[#e6e0db] bg-white focus:border-primary h-14 placeholder:text-[#897461] p-[15px]  pr-2 text-base font-normal leading-normal dark:bg-background-dark dark:border-gray-600 dark:focus:border-primary "
                                                    placeholder="Masukkan kata sandi Anda" type="password"
                                                    value="" name="password" />

                                            </div>
                                        </label>
                                    </div>
                                    <!-- Checkbox -->
                                    {{-- <label class="flex gap-x-3 items-center">
                                        <input
                                            class="checkbox-tick h-5 w-5 rounded border-[#e6e0db] border-2 bg-transparent text-primary checked:bg-primary checked:border-primary checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#e6e0db] dark:border-gray-600 dark:focus:border-primary"
                                            type="checkbox" />
                                        <p class="text-sm font-normal leading-normal">Saya
                                            setuju dengan <a class="font-bold text-primary hover:underline" href="#">Syarat
                                                &amp; Ketentuan</a> dan <a class="font-bold text-primary hover:underline"
                                                href="#">Kebijakan Privasi</a>.</p>
                                    </label> --}}
                                    <!-- Button -->
                                    <button type="submit"
                                        class="flex min-w-[84px] w-full cursor-pointer text-fg-light-body bg-brand-primary items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary text-base font-bold leading-normal tracking-[0.015em] hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:ring-offset-2 dark:focus:ring-offset-background-dark">
                                        <span class="truncate">Daftar Sekarang</span>
                                    </button>
                                </form>
                                <!-- Tautan Alternatif -->
                                <div class="text-center">
                                    <p class="text-sm text-[#897461] dark:text-gray-400">
                                        Sudah punya akun? <a class="font-bold text-primary hover:underline"
                                            href="{{ route('login') }}">Masuk
                                            di sini</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-layouts.app>
