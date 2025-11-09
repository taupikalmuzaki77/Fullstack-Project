<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>{{ config('app.name') }}</title>
</head>

<body class="bg-white text-slate-800 dark:bg-[#1c1c1c] dark:text-white">
    <div>
        <x-navbar></x-navbar>
        <x-sidebar></x-sidebar>
        <x-search></x-search>
        <x-accountinfo></x-accountinfo>
        <main class="mx-auto px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>
        <x-footer></x-footer>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.mySwiper', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },
        });
    </script>
</body>

</html>
