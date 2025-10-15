<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Media</title>
    <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="flex flex-col max-w-[90%] mx-auto bg-stone-500">
        {{-- header --}}
        @include('layout.header')
        <main>
            @yield('content')
        </main>
    </div>

 <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>