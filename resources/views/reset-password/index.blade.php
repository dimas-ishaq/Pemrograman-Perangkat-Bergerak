@extends("components.layouts.app")

@section('content')
    <div
        class="bg-background-light dark:bg-background-dark font-body text-gray-800 dark:text-gray-100 min-h-screen flex flex-col items-center justify-center p-4 relative">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
            <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-orange-200/40 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-yellow-200/40 rounded-full blur-[100px]">
            </div>
        </div>
        <div
            class="relative w-full max-w-[440px] bg-white dark:bg-[#252525] rounded-2xl shadow-xl shadow-orange-900/5 border border-orange-100 dark:border-[#333] overflow-hidden transform transition-all">
            <div class="w-full h-40 relative overflow-hidden group">
                <div
                    class="absolute inset-0 bg-food-pattern bg-cover bg-center transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                <div class="absolute -bottom-8 left-1/2 transform -translate-x-1/2">
                    <div
                        class="relative w-16 h-16 bg-white dark:bg-[#333] rounded-full flex items-center justify-center shadow-lg border-4 border-white dark:border-[#252525]">
                        <span>
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z" />
                            </svg>

                        </span>
                    </div>
                </div>
            </div>
            <div class="px-8 pt-12 pb-10 flex flex-col">
                <div class="flex flex-col items-center text-center mb-8">
                    <h1 class="font-display text-gray-900 dark:text-white text-3xl font-semibold mb-3 tracking-wide">
                        Fresh Start?
                    </h1>
                    <p class="text-gray-500 dark:text-gray-400 text-[15px] font-medium leading-relaxed max-w-[320px]">
                        Don't worry, we cooked up a solution. Enter your email to reset your password.
                    </p>
                </div>
                <form action="#" class="flex flex-col gap-6 w-full">
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-700 dark:text-gray-200 text-sm font-bold font-display tracking-wide ml-1"
                            for="email">
                            Email Address
                        </label>
                        <div class="relative group">
                            <div
                                class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none transition-colors group-focus-within:text-primary text-gray-400">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M11 16v-5.5A3.5 3.5 0 0 0 7.5 7m3.5 9H4v-5.5A3.5 3.5 0 0 1 7.5 7m3.5 9v4M7.5 7H14m0 0V4h2.5M14 7v3m-3.5 6H20v-6a3 3 0 0 0-3-3m-2 9v4m-8-6.5h1" />
                                </svg>

                            </div>
                            <input
                                class="form-input flex w-full min-w-0 resize-none rounded-xl text-gray-800 dark:text-white bg-gray-50 dark:bg-[#1f1f1f] border border-gray-200 dark:border-[#444] focus:outline-0 focus:ring-4 focus:ring-primary/20 focus:border-primary dark:focus:border-primary h-12 pl-11 pr-4 placeholder:text-gray-400 text-base font-medium leading-normal transition-all duration-200 ease-in-out"
                                id="email" name="email" placeholder="chef@example.com" type="email" value="" />
                        </div>
                    </div>
                    <button
                        class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl h-12 px-5 bg-gradient-to-r from-primary to-orange-500 hover:from-primary-hover hover:to-orange-600 dark:from-primary dark:to-orange-600 text-white text-base font-display font-semibold tracking-wide shadow-md shadow-orange-500/20 transition-all transform hover:-translate-y-0.5 active:scale-[0.98]"
                        type="submit">
                        <span>Send Reset Link</span>
                    </button>
                </form>
                <div class="mt-8 flex justify-center">
                    <a class="inline-flex items-center gap-2 text-sm font-bold font-display text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-primary transition-colors group"
                        href="{{ route("login") }}">
                        <span>
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h14M5 12l4-4m-4 4 4 4" />
                            </svg>

                        </span>
                        Back to the login
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection