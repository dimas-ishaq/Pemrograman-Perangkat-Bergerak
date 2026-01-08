<x-layouts.app>
    <div class="relative flex h-auto min-h-screen w-full flex-col  group/design-root overflow-x-hidden">
        <div class="fixed top-5 right-2 z-10 p-4 flex justify-end">
            <x-dark-mode />
        </div>
        <div class="layout-container flex h-full grow flex-col">
            <main class="flex h-full min-h-screen w-full flex-1">
                <div class="flex flex-1">
                    <!-- Left Column: Image -->
                    <div class="hidden lg:flex lg:w-1/2">
                        <div class="w-full bg-center bg-no-repeat bg-cover aspect-auto"
                            data-alt="A delicious and colorful plate of gourmet food, beautifully arranged on a rustic wooden table."
                            style='background-image: url("{{ asset('images/img_login.png') }}");'>
                        </div>
                    </div>
                    <!-- Right Column: Form -->
                    <div
                        class="flex w-full items-center justify-center p-8 lg:w-1/2 bg-soft-beige dark:bg-background-dark">
                        <div class="flex w-full max-w-md flex-col gap-8">
                            <!-- Header -->
                            <div class="flex flex-col items-start gap-2">
                                <h1 class="text-2xl font-bold text-dark-slate-gray dark:text-background-light">Foodie
                                </h1>
                                <div class="flex flex-col gap-3">
                                    <p
                                        class="text-dark-slate-gray  text-4xl font-black leading-tight tracking-[-0.033em]">
                                        Selamat Datang Kembali!</p>
                                    <p class="  text-base font-normal leading-normal">
                                        Temukan makanan favoritmu berikutnya.</p>
                                </div>
                            </div>
                            <!-- Login Form -->
                            <form class="w-full mx-auto" action={{ route('login.auth') }} method="POST">
                                @csrf
                                @method('POST')
                                <div class="mb-5">
                                    <label for="input-group-1"
                                        class="block mb-2.5 text-sm font-medium text-heading">Your
                                        Email</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-fg-light-body" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                    d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                                            </svg>
                                        </div>
                                        <input type="email" id="input-group-1" name="email"
                                            class="block w-full ps-9 pe-3 py-2.5 text-fg-light-body border  text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3  shadow-xs placeholder:"
                                            placeholder="name@mail.com" required>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Your
                                        password</label>
                                    <input type="password" id="password" name="password"
                                        class="text-fg-light-body border  text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:"
                                        placeholder="••••••••" required />
                                </div>
                                <label for="remember" class="flex items-start mb-5">
                                    <input id="remember" type="checkbox" value=""
                                        class="w-4 h-4 border  rounded-xs text-fg-light-body focus:ring-2 focus:ring-brand-soft"
                                        required checked />
                                    <p class="ms-2 text-sm font-medium text-heading select-none">Ingatkan saya saat
                                        berkunjung kembali ke halaman ini</p>
                                </label>
                                <button type="submit"
                                    class="cursor-pointer text-fg-light-body  bg-brand-primary box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Submit</button>
                            </form>

                            <p class="text-center text-sm ">Lupa password? <a href="{{ route('reset-password') }}"
                                    class="font-bold text-warm-orange hover:underline">Reset password</a></p>
                            <!-- Separator -->
                            <div class="relative flex items-center">
                                <div class="flex-grow border-t border-light-gray "></div>
                                <span class="mx-4 flex-shrink text-sm  ">ATAU</span>
                                <div class="flex-grow border-t border-light-gray "></div>
                            </div>
                            <p class="text-center text-sm  ">
                                Belum punya akun? <a class="font-bold text-warm-orange hover:underline"
                                    href="{{ route('register') }}">Daftar
                                    di sini</a>
                            </p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-layouts.app>
