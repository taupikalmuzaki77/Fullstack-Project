<x-layout>
    {{-- Navigasi --}}
    <div class="flex flex-row flex-wrap justify-center gap-2 mb-5">
        @foreach ($grouped as $letter => $posts)
            <a href="#{{ $letter }}"
                class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-md hover:ring-2 hover:ring-gray-700 dark:hover:ring-gray-200 active:scale-95 transition-all px-3 py-2 font-bold">{{ $letter }}</a>
        @endforeach
    </div>
    {{-- List Game --}}
    @foreach ($grouped as $letter => $posts)
        <h1 class="font-bold scroll-mt-32" id="{{ $letter }}">{{ $letter }}</h1>
        <hr class="my-2 mx-auto dark:border-gray-200" />
        <ul class="mb-4">
            @foreach ($posts as $post)
                <li>
                    <a href="/{{ $post->slug }}" class="hover:text-teal-500 capitalize">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endforeach

    {{-- Tombol Back to Top --}}
    <button id="backToTopBtn" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="hidden fixed bottom-6 right-6 border-2 border-black bg-teal-600 rounded-full cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1" stroke="none"
            class="size-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M11.9999 10.8284L7.0502 15.7782L5.63599 14.364L11.9999 8L18.3639 14.364L16.9497 15.7782L11.9999 10.8284Z" />
        </svg>
    </button>
    <script>
        const backToTopBtn = document.getElementById('backToTopBtn');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 150) {
                backToTopBtn.classList.remove('hidden');
            } else {
                backToTopBtn.classList.add('hidden');
            }
        });
    </script>
</x-layout>
