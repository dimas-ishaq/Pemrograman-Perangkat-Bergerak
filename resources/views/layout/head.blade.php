<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    @PwaHead <title>Foodie</title>
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

</head>