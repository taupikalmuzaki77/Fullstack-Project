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
                <a href="/admin"
                    class="text-[20px] font-medium px-3 py-2 text-white hover:bg-teal-700 rounded-lg">Admin Panel</a>
            </div>
            {{-- Kanan --}}
            <div class="flex flex-row items-center gap-2 py-3">
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
                <button class="button">
                    <a href="/" title="Home">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>

                    </a>
                </button>
            </div>
        </div>
    </nav>
    {{-- Navbar End --}}
    {{-- List Post Start --}}
    <form action="" method="GET">
        <div class="flex justify-center my-10 gap-2">
            <input type="search" id="search" name="search"
                class="w-xl px-2 py-2 bg-gray-700 border-2 border-gray-200 rounded-lg text-white"
                placeholder="Cari judul game..." autocomplete="off">
            <button
                class="flex cursor-pointer text-white bg-blue-700 dark:bg-blue-600 hover:bg-blue-800 dark:hover:bg-blue-700 py-3 px-3 rounded-lg"
                type="submit">Cari</button>
        </div>
    </form>
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
    {{ $posts->links() }}
</body>

</html>
