
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @PwaHead <title>Foodie App</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toasts = document.querySelectorAll('.toast');

            toasts.forEach(toast => {
                // Fade in
                setTimeout(() => toast.style.opacity = '1', 100);

                // Auto hide setelah 3 detik
                setTimeout(() => {
                    toast.style.opacity = '0';
                    setTimeout(() => toast.remove(), 500);
                }, 3000);

                // Tombol close manual
                const closeBtn = toast.querySelector('.close-btn');
                closeBtn.addEventListener('click', () => {
                    toast.style.opacity = '0';
                    setTimeout(() => toast.remove(), 300);
                });
            });
        });
    </script>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>


</head>
@if (session('success'))
    <x-toast type="success" :message="session('success')" />
@endif

@if (session('error'))
    <x-toast type="danger" :message="session('error')" />
@endif

@if (session('warning'))
    <x-toast type="warning" :message="session('warning')" />
@endif

@if ($errors->any())
    <x-toast type="danger" :message="$errors->first()" />
@endif

