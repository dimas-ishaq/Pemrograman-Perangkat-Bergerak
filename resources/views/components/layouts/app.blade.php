<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-layouts.head />
<body class="antialiased bg-neutral-light-surface dark:bg-neutral-dark-section text-fg-light-body dark:text-fg-dark-body">

    {{ $slot }}

   
   
     @stack('popup')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    @stack('scripts')
</body>
</html>
