<x-layout>
    <div class="flex flex-col mb-5">
        <p class="font-bold uppercase text-teal-600 dark:text-teal-400">
            Kategori
        </p>
        <p class="text-3xl font-bold capitalize">{{ $category->name }} List</p>
        <p class="text-lg text-slate-500 dark:text-slate-300">
            Daftar artikel di halaman {{ $posts->currentpage() }}
        </p>
    </div>

    <div
        class="grid grid-cols-2 md:grid-cols-[repeat(3,230px)] lg:grid-cols-[repeat(4,230px)] 2xl:grid-cols-[repeat(6,230px)] justify-center gap-4 mb-5">
        @forelse ($posts as $post)
            <div
                class="grid bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-sm hover:ring-2 hover:ring-gray-700 dark:hover:ring-gray-200 active:scale-95 transition-all">
                <a href="/{{ $post->slug }}" title="{{ Str::title($post->title) }}">
                    <img class="rounded-t-lg w-full h-[230px] md:h-[300px]" src="{{ asset('uploads/' . $post->image) }}"
                        alt="{{ $post->title }}" />
                    <p class="px-5 py-1 text-sm md:text-[16px] text-center font-bold capitalize line-clamp-1 leading-6">
                        {{ $post->title }}
                    </p>
                </a>
            </div>
        @empty
            <p class="inline">Saat ini Artikel belum tersedia</p>
        @endforelse
    </div>

    {{ $posts->links() }}
</x-layout>
