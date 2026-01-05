<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Foodie App - Landing Page</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ec13",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102210",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="font-display bg-background-light dark:bg-background-dark">
    <div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <div class="px-4 md:px-10 lg:px-20 xl:px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-6xl flex-1">
                    <!-- TopNavBar -->
                    <header
                        class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#e7f3e7] dark:border-primary/20 px-4 sm:px-10 py-3 sticky top-0 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm z-50 rounded-xl">
                        <div class="flex items-center gap-4 text-[#0d1b0d] dark:text-background-light">
                            <div class="size-6 text-primary">
                                <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24 4C25.7818 14.2173 33.7827 22.2182 44 24C33.7827 25.7818 25.7818 33.7827 24 44C22.2182 33.7827 14.2173 25.7818 4 24C14.2173 22.2182 22.2182 14.2173 24 4Z">
                                    </path>
                                </svg>
                            </div>
                            <h2
                                class="text-[#0d1b0d] dark:text-background-light text-xl font-bold leading-tight tracking-[-0.015em]">
                                Foodie</h2>
                        </div>
                        <div class="hidden md:flex flex-1 justify-center gap-8">
                            <div class="flex items-center gap-9">
                                <a class="text-[#0d1b0d] dark:text-background-light text-sm font-medium leading-normal hover:text-primary dark:hover:text-primary transition-colors"
                                    href="#">Home</a>
                                <a class="text-[#0d1b0d] dark:text-background-light text-sm font-medium leading-normal hover:text-primary dark:hover:text-primary transition-colors"
                                    href="#">Menu</a>
                                <a class="text-[#0d1b0d] dark:text-background-light text-sm font-medium leading-normal hover:text-primary dark:hover:text-primary transition-colors"
                                    href="#">How It Works</a>
                                <a class="text-[#0d1b0d] dark:text-background-light text-sm font-medium leading-normal hover:text-primary dark:hover:text-primary transition-colors"
                                    href="#">Testimonials</a>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <a href={{ route('register') }}
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-primary text-[#0d1b0d] text-sm font-bold leading-normal tracking-[0.015em] hover:opacity-90 transition-opacity">
                                <span class="truncate">Sign Up</span>
                            </a>
                            <a href={{ route('login') }}
                                class="hidden sm:flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#e7f3e7] dark:bg-primary/20 text-[#0d1b0d] dark:text-background-light text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/20 dark:hover:bg-primary/30 transition-colors">
                                <span class="truncate">Login</span>
                            </a>
                        </div>
                    </header>
                    <main class="flex flex-col gap-10 md:gap-20 py-10 md:py-20">
                        <!-- HeroSection -->
                        <div class="@container">
                            <div class="@[480px]:p-4">
                                <div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-center justify-center p-4"
                                    data-alt="A delicious-looking spread of various foods including pizza and salad on a rustic wooden table."
                                    style='background-image: linear-gradient(rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAU-BgjGjGHd3Tn82XN3J0BI1HUqAFh-19zdum7qq3VBMV-i0qQ9s4MKwOtI7XEvhF90JiHH6EoFxOXCIcTASU8VdRxHj58uCVW7jOqgP-NUF9s6gtd05V_RtpHBZwgZpMAXMtimjns2PuHjIGmC2icvOaTm9nILVlr6zfOv-WIqn8KxU1SN8hhHwXx6wpnfb_S6FfOB6y_7lBO-_rCNaSGbmZVI1qx1MeQtHrDfVTjaDFnUlaPYQuudxmv5f5CAxJZ1tF4YXF9QZJ9");'>
                                    <div class="flex flex-col gap-4 text-center max-w-2xl">
                                        <h1
                                            class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">
                                            Your Favorite Food, Delivered Fresh.</h1>
                                        <h2
                                            class="text-white text-base font-normal leading-normal @[480px]:text-lg @[480px]:font-normal @[480px]:leading-normal">
                                            Craving something delicious? Get your favorite meals from local restaurants
                                            delivered to your door.</h2>
                                    </div>
                                    <button
                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-primary text-[#0d1b0d] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] hover:opacity-90 transition-opacity">
                                        <span class="truncate">Order Now</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- FeatureSection -->
                        <div>
                            <h2
                                class="text-[#0d1b0d] dark:text-background-light text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                                Why Choose Foodie?</h2>
                            <div class="flex flex-col gap-10 px-4 py-10 @container">
                                <div class="flex flex-col lg:flex-row gap-4 items-start lg:items-center">
                                    <div class="flex flex-col gap-4 flex-1">
                                        <h1
                                            class="text-[#0d1b0d] dark:text-background-light tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]">
                                            Fresh &amp; Fast</h1>
                                        <p
                                            class="text-[#0d1b0d] dark:text-white/70 text-base font-normal leading-normal max-w-[720px]">
                                            We partner with the best local restaurants to bring you a wide variety of
                                            cuisines, delivered right to your doorstep with speed and care.</p>
                                    </div>
                                </div>
                                <div class="grid grid-cols-[repeat(auto-fit,minmax(200px,1fr))] gap-4 p-0">
                                    <div
                                        class="flex flex-1 gap-4 rounded-lg border border-[#cfe7cf] dark:border-primary/20 bg-background-light dark:bg-background-dark p-4 flex-col">
                                        <span class="material-symbols-outlined text-[#0d1b0d] dark:text-primary"
                                            style="font-size: 32px;">local_shipping</span>
                                        <div class="flex flex-col gap-1">
                                            <h2
                                                class="text-[#0d1b0d] dark:text-background-light text-base font-bold leading-tight">
                                                Fast Delivery</h2>
                                            <p
                                                class="text-[#4c9a4c] dark:text-white/70 text-sm font-normal leading-normal">
                                                Get your food delivered in minutes, hot and ready to eat.</p>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-1 gap-4 rounded-lg border border-[#cfe7cf] dark:border-primary/20 bg-background-light dark:bg-background-dark p-4 flex-col">
                                        <span class="material-symbols-outlined text-[#0d1b0d] dark:text-primary"
                                            style="font-size: 32px;">restaurant_menu</span>
                                        <div class="flex flex-col gap-1">
                                            <h2
                                                class="text-[#0d1b0d] dark:text-background-light text-base font-bold leading-tight">
                                                Wide Variety</h2>
                                            <p
                                                class="text-[#4c9a4c] dark:text-white/70 text-sm font-normal leading-normal">
                                                Explore thousands of dishes from your favorite local spots.</p>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-1 gap-4 rounded-lg border border-[#cfe7cf] dark:border-primary/20 bg-background-light dark:bg-background-dark p-4 flex-col">
                                        <span class="material-symbols-outlined text-[#0d1b0d] dark:text-primary"
                                            style="font-size: 32px;">touch_app</span>
                                        <div class="flex flex-col gap-1">
                                            <h2
                                                class="text-[#0d1b0d] dark:text-background-light text-base font-bold leading-tight">
                                                Easy Ordering</h2>
                                            <p
                                                class="text-[#4c9a4c] dark:text-white/70 text-sm font-normal leading-normal">
                                                Order with just a few clicks and track your delivery in real-time.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Popular Categories Section -->
                        <div>
                            <h2
                                class="text-[#0d1b0d] dark:text-background-light text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                                Popular Categories</h2>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-4">
                                <div
                                    class="group relative flex cursor-pointer flex-col items-center justify-center gap-2 overflow-hidden rounded-xl">
                                    <img class="h-40 w-full object-cover transition-transform duration-300 group-hover:scale-110"
                                        data-alt="A delicious looking pepperoni pizza on a wooden board."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUGdD__MPjDn9BmjoacaSBO1J1J4CefR24Bqxy2dLkFKtSzwyBQYvdsbLGXZWGuZMahGhZ_RVKylCRi4EucG0xJ5YbBXKuwOaBPNUPpOiupR_ihyNjOU9bByxRG87-ooG5jOjlfuVx-HtUi5NSLmmwkQttpYy6lMAoLXf0Wfj0oVoQMLfpCzOBTW4S2XThZk2uICkArNbshLmcQtAEoFc4FVhPSeKdjODuZ-PSEpH6IriZ4j0S7SM0gc65BlFgDZxiWDvwWBhptJGp" />
                                    <div class="absolute inset-0 bg-black/40"></div>
                                    <h3 class="absolute text-lg font-bold text-white">Pizza</h3>
                                </div>
                                <div
                                    class="group relative flex cursor-pointer flex-col items-center justify-center gap-2 overflow-hidden rounded-xl">
                                    <img class="h-40 w-full object-cover transition-transform duration-300 group-hover:scale-110"
                                        data-alt="A healthy and colorful salad in a white bowl."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7itSK8a-70lt5aTej-0M1QFHhP_R0loHyRUmgx5zIXiB-ZuNz-kCiexMRJlXbJTQk5bfK8vdjSIy-W64hcJFm2h-RV7Q2iL11pdVjbSibDlXeL_qEjDOiVYFGOsJfZAR_4uEXAui2BSjnyYo_PuOR-1B3Lu8-9fnihzVJIA50CHTBtkSfazpOwmfgiCS25NfwBMhdDM9h3qaxR2z0wJmgShu7YGDRA5PKr4_hikXwYIaGPIevRQSW9ru3pkSfuF4T8XieBos1vbfY" />
                                    <div class="absolute inset-0 bg-black/40"></div>
                                    <h3 class="absolute text-lg font-bold text-white">Salad</h3>
                                </div>
                                <div
                                    class="group relative flex cursor-pointer flex-col items-center justify-center gap-2 overflow-hidden rounded-xl">
                                    <img class="h-40 w-full object-cover transition-transform duration-300 group-hover:scale-110"
                                        data-alt="A juicy cheeseburger with lettuce and tomato."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQm_P6fsUhsp0fUyUUCq7-GQ3l3hWSkBRazJF8fLKhW-BHyaRK2yQ0K3bqf5YMSjoFis7gWs66MC1p0oFtvx7LyjeeivHWDZjlcZcgkE3AdEhe75qpaofjyEUcoQSI--2HP8v3GawHhWvh_BdPLNqZZ5L07KdIjOaqf_Iyl2Gfk88JG29alJmgw2fKuB5bqu6MHGlHrQQcRx0tsY4OqTkD4BnLoyfPr-iaBwz01Td_Wo_9-wMnhNiWxjCm4JPA1EAxxuHCU62GD6De" />
                                    <div class="absolute inset-0 bg-black/40"></div>
                                    <h3 class="absolute text-lg font-bold text-white">Burgers</h3>
                                </div>
                                <div
                                    class="group relative flex cursor-pointer flex-col items-center justify-center gap-2 overflow-hidden rounded-xl">
                                    <img class="h-40 w-full object-cover transition-transform duration-300 group-hover:scale-110"
                                        data-alt="A delicious slice of chocolate cake with strawberries on top."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC24dOtI5hEmOMAX8il6Nf2xTo_-Z1smRLAdNeahcc8rFs2a0c9L39O8IZouXbzwMDTXIQpzOMPE2TMukUeLQaXemy--BKO0RtvUqAgpmfl9pwYFLsvFWLkkD-n0KJB19llYPtbfTRE3KCHu1EK5vAUm5TgwPq8X7EWbNIqFYrhj-7ylS5LVeQyHDf-ZmAtDP1MlwIY7rXfZHLoUmyX_Iel3pk0HfMjIlKFWV2pIu2A9qEgNQ1g7niRl7Jr1Vgy_yGPX37MZ-rJKAXQ" />
                                    <div class="absolute inset-0 bg-black/40"></div>
                                    <h3 class="absolute text-lg font-bold text-white">Desserts</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonials Section -->
                        <div>
                            <h2
                                class="text-[#0d1b0d] dark:text-background-light text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                                What Our Customers Say</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
                                <div
                                    class="flex flex-col gap-4 rounded-xl border border-[#cfe7cf] dark:border-primary/20 bg-background-light dark:bg-background-dark p-6">
                                    <div class="flex items-center gap-1 text-primary">
                                        <span class="material-symbols-outlined"
                                            style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="material-symbols-outlined"
                                            style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="material-symbols-outlined"
                                            style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="material-symbols-outlined"
                                            style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="material-symbols-outlined"
                                            style="font-variation-settings: 'FILL' 1;">star</span>
                                    </div>
                                    <p class="text-[#0d1b0d] dark:text-white/70 text-base italic">"Foodie is a
                                        game-changer! The delivery is always super fast, and the food arrives hot and
                                        fresh. I love the variety of restaurants available."</p>
                                    <p class="text-[#0d1b0d] dark:text-background-light font-bold">- Sarah J.</p>
                                </div>
                                <div
                                    class="flex flex-col gap-4 rounded-xl border border-[#cfe7cf] dark:border-primary/20 bg-background-light dark:bg-background-dark p-6">
                                    <div class="flex items-center gap-1 text-primary">
                                        <span class="material-symbols-outlined"
                                            style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="material-symbols-outlined"
                                            style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="material-symbols-outlined"
                                            style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="material-symbols-outlined"
                                            style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="material-symbols-outlined"
                                            style="font-variation-settings: 'FILL' 1;">star_half</span>
                                    </div>
                                    <p class="text-[#0d1b0d] dark:text-white/70 text-base italic">"The app is so easy
                                        to
                                        use, and I can track my order in real-time. It's my go-to for lazy nights when I
                                        don't want to cook."</p>
                                    <p class="text-[#0d1b0d] dark:text-background-light font-bold">- Michael B.</p>
                                </div>
                                <div
                                    class="flex flex-col gap-4 rounded-xl border border-[#cfe7cf] dark:border-primary/20 bg-background-light dark:bg-background-dark p-6">
                                    <div class="flex items-center gap-1 text-primary">
                                        <span class="material-symbols-outlined"
                                            style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="material-symbols-outlined"
                                            style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="material-symbols-outlined"
                                            style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="material-symbols-outlined"
                                            style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="material-symbols-outlined"
                                            style="font-variation-settings: 'FILL' 1;">star</span>
                                    </div>
                                    <p class="text-[#0d1b0d] dark:text-white/70 text-base italic">"Excellent customer
                                        service and a fantastic selection of local gems I wouldn't have discovered
                                        otherwise. Highly recommend!"</p>
                                    <p class="text-[#0d1b0d] dark:text-background-light font-bold">- Emily R.</p>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!-- Footer -->
                    <footer class="mt-10 border-t border-[#e7f3e7] dark:border-primary/20 py-8 px-4">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="size-6 text-primary">
                                        <svg fill="currentColor" viewbox="0 0 48 48"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24 4C25.7818 14.2173 33.7827 22.2182 44 24C33.7827 25.7818 25.7818 33.7827 24 44C22.2182 33.7827 14.2173 25.7818 4 24C14.2173 22.2182 22.2182 14.2173 24 4Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h2 class="text-[#0d1b0d] dark:text-background-light text-xl font-bold">Foodie</h2>
                                </div>
                                <p class="text-sm text-[#4c9a4c] dark:text-white/70">Your favorite food, delivered
                                    fresh.</p>
                            </div>
                            <div class="flex flex-col gap-3">
                                <h3 class="font-bold text-[#0d1b0d] dark:text-background-light">Company</h3>
                                <a class="text-sm text-[#4c9a4c] dark:text-white/70 hover:text-primary dark:hover:text-primary transition-colors"
                                    href="#">About Us</a>
                                <a class="text-sm text-[#4c9a4c] dark:text-white/70 hover:text-primary dark:hover:text-primary transition-colors"
                                    href="#">Careers</a>
                                <a class="text-sm text-[#4c9a4c] dark:text-white/70 hover:text-primary dark:hover:text-primary transition-colors"
                                    href="#">Contact</a>
                            </div>
                            <div class="flex flex-col gap-3">
                                <h3 class="font-bold text-[#0d1b0d] dark:text-background-light">Support</h3>
                                <a class="text-sm text-[#4c9a4c] dark:text-white/70 hover:text-primary dark:hover:text-primary transition-colors"
                                    href="#">FAQ</a>
                                <a class="text-sm text-[#4c9a4c] dark:text-white/70 hover:text-primary dark:hover:text-primary transition-colors"
                                    href="#">Terms of Service</a>
                                <a class="text-sm text-[#4c9a4c] dark:text-white/70 hover:text-primary dark:hover:text-primary transition-colors"
                                    href="#">Privacy Policy</a>
                            </div>
                            <div class="flex flex-col gap-3">
                                <h3 class="font-bold text-[#0d1b0d] dark:text-background-light">Follow Us</h3>
                                <div class="flex gap-4">
                                    <a class="text-[#4c9a4c] dark:text-white/70 hover:text-primary dark:hover:text-primary transition-colors"
                                        href="#">
                                        <svg aria-hidden="true" class="h-6 w-6" fill="currentColor"
                                            viewbox="0 0 24 24">
                                            <path clip-rule="evenodd"
                                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                                fill-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                    <a class="text-[#4c9a4c] dark:text-white/70 hover:text-primary dark:hover:text-primary transition-colors"
                                        href="#">
                                        <svg aria-hidden="true" class="h-6 w-6" fill="currentColor"
                                            viewbox="0 0 24 24">
                                            <path
                                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="text-[#4c9a4c] dark:text-white/70 hover:text-primary dark:hover:text-primary transition-colors"
                                        href="#">
                                        <svg aria-hidden="true" class="h-6 w-6" fill="currentColor"
                                            viewbox="0 0 24 24">
                                            <path clip-rule="evenodd"
                                                d="M12 2C6.477 2 2 6.477 2 12c0 4.237 2.636 7.855 6.356 9.312-.062-.327-.019-.722.084-1.048.101-.322.643-2.72 1.35-5.323a.354.354 0 01.408-.316c.153.023.238.163.238.337 0 .142-.095.588-.144.935-.049.347.172.628.508.628.599 0 1.144-1.233 1.144-2.657 0-1.27-.923-2.213-2.074-2.213-.865 0-1.51.656-1.51 1.488 0 .408.156.916.368 1.428.03.075.035.15.02.24-.015.09-.09.18-.12.26a.187.187 0 01-.273.06c-1.02-.486-1.66-1.96-1.66-3.414 0-1.791 1.272-3.456 3.82-3.456 2.023 0 3.55 1.51 3.55 3.292 0 2.008-1.127 3.553-2.81 3.553-.55 0-1.07-.288-1.244-.616 0 0-.272 1.06-.337 1.284-.085.278-.19.513-.306.697A6.472 6.472 0 0012 18.25c3.58 0 6.47-3.05 6.47-6.75 0-3.56-2.66-6.5-6.17-6.5z"
                                                fill-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="mt-8 pt-8 border-t border-[#e7f3e7] dark:border-primary/20 text-center text-sm text-[#4c9a4c] dark:text-white/70">
                            <p>© 2024 Foodie. All rights reserved.</p>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
