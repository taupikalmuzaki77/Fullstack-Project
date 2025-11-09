<x-layout>
    <x-slider></x-slider>
    <div class="text-center md:mt-6">
        <p class="font-bold uppercase text-teal-600 dark:text-teal-400">
            Update
        </p>
        <p class="text-3xl font-bold">Post Terbaru</p>
        <p class="text-lg text-slate-500 dark:text-slate-300">
            Baca Artikel terbaru yang masih fresh dan hangat.
        </p>
    </div>

    <div
        class="grid grid-cols-2 md:grid-cols-[repeat(3,230px)] lg:grid-cols-[repeat(4,230px)] 2xl:grid-cols-[repeat(6,230px)] justify-center gap-4">
        @foreach ($posts->take(12) as $post)
            <div
                class="grid bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-sm hover:ring-2 hover:ring-gray-700 dark:hover:ring-gray-200 active:scale-95 transition-all">
                <a href="{{ $post->slug }}" title="{{ Str::title($post->title) }}
">
                    <img class="rounded-t-lg w-full h-[230px] md:h-[300px]" src="{{ asset('uploads/' . $post->image) }}"
                        alt="{{ $post->title }}" />
                    <p class="px-5 py-1 text-sm md:text-[16px] text-center font-bold capitalize line-clamp-2 leading-6">
                        {{ $post->title }}
                    </p>
                </a>
            </div>
        @endforeach
    </div>

    <div class="flex justify-center mt-6">
        <a href="/latest" class="text-white bg-teal-600 hover:bg-teal-700 px-3 py-2 rounded-lg">
            Lihat Semua Post
        </a>
    </div>
</x-layout>
