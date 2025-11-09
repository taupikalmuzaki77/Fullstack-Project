<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Admin Panel</title>
</head>

<body class="font-poppins bg-[#1c1c1c] text-white">
    {{-- Navbar Start --}}
    <nav class="sticky top-0 bg-teal-600 z-50">
        <div class="container mx-auto flex justify-between px-5">
            {{-- Kiri --}}
            <div class="flex gap-1 items-center w-[188px]">
                <a href="/"
                    class="text-[20px] font-medium px-3 py-2 text-white hover:bg-teal-700 rounded-lg">Admin Panel</a>
            </div>
            {{-- Kanan --}}
            <div class="flex flex-row-reverse items-center gap-2 py-3">
                @auth
                    {{-- Auth Mode --}}
                    <button class="button" id="accountToggle">
                        <span id="userAccountIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                                stroke="none" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM12.1597 16C10.1243 16 8.29182 16.8687 7.01276 18.2556C8.38039 19.3474 10.114 20 12 20C13.9695 20 15.7727 19.2883 17.1666 18.1081C15.8956 16.8074 14.1219 16 12.1597 16ZM12 4C7.58172 4 4 7.58172 4 12C4 13.8106 4.6015 15.4807 5.61557 16.8214C7.25639 15.0841 9.58144 14 12.1597 14C14.6441 14 16.8933 15.0066 18.5218 16.6342C19.4526 15.3267 20 13.7273 20 12C20 7.58172 16.4183 4 12 4ZM12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5ZM12 7C10.8954 7 10 7.89543 10 9C10 10.1046 10.8954 11 12 11C13.1046 11 14 10.1046 14 9C14 7.89543 13.1046 7 12 7Z" />
                            </svg>
                        </span>
                        <span id="userAccountCloseIcon" class="hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                                stroke="none" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z" />
                            </svg>
                        </span>
                    </button>
                @endauth
                {{-- Search --}}
                <button class="button" id="searchToggle">
                    <span id="searchIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                            stroke="none" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.8675 18 18 14.8675 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18ZM19.4853 18.0711L22.3137 20.8995L20.8995 22.3137L18.0711 19.4853L19.4853 18.0711Z" />
                        </svg>
                    </span>
                    <span id="searchCloseIcon" class="hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                            stroke="none" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z" />
                        </svg>
                    </span>
                </button>
                {{-- Add Post --}}
                <button class="button">
                    <a href="/post/create" title="Create Post">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                            stroke="none" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11 11V7H13V11H17V13H13V17H11V13H7V11H11ZM12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z" />
                        </svg>
                    </a>
                </button>
            </div>
        </div>
    </nav>
    {{-- Navbar End --}}
    {{-- List Post Start --}}
    <h1 class="text-center text-4xl text-white font-bold mt-10">List Posts</h1>
    <div
        class="grid grid-cols-2 md:grid-cols-[repeat(3,230px)] lg:grid-cols-[repeat(4,230px)] 2xl:grid-cols-[repeat(6,230px)] justify-center gap-4 mx-3 my-5">
        @foreach ($posts as $post)
            <div
                class="grid bg-white border border-gray-200 rounded-lg shadow-sm hover:ring-2 hover:ring-gray-700 active:scale-95 transition-all text-black">
                <div class="relative">
                    {{-- Edit --}}
                    <a href="{{ route('post.edit', $post->id) }}"
                        class="absolute top-2 right-10 cursor-pointer border-2 border-black bg-white hover:bg-amber-500"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path
                                d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                            <path
                                d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                        </svg>

                    </a>
                    {{-- Delete --}}
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="absolute top-2 right-2 cursor-pointer border-2 border-black bg-white hover:bg-rose-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path fill-rule="evenodd"
                                    d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                    <img src="{{ asset('uploads/' . $post->image) }}" class="rounded-t-lg w-full h-[230px] md:h-[300px]"
                        alt="{{ $post->title }}">
                    <h1 class="line-clamp-2 font-bold px-3 text-sm md:text-[16px] text-center">
                        {{ $post->title }}</h1>
                </div>
            </div>
        @endforeach
    </div>
    </div>
    {{-- List Post End --}}
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
