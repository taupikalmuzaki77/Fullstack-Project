@props([
    'title' => 'Petani Emulator',
    'description' => 'Website tempat download games melaui link Google Drive',
    'type' => 'website',
    'image' => 'favicon.ico',
    'url' => url()->current(),
])
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta property="og:site_name" content="Petani Emulator">
    <meta property="og:title" content="{{ ucwords($title) }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:type" content="{{ $type }}">
    <meta property="og:image" content="{{ asset($image) }}">
    <meta property="og:url" content="{{ $url }}">
</head>

<body class="bg-white text-slate-800 dark:bg-[#1c1c1c] dark:text-white">
    <div>
        <x-nav></x-nav>
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
