<x-layout>
    <h1 class="font-bold text-teal-600 dark:text-teal-400 mb-5">
        Hasil pencarian untuk:
        <span class="text-black dark:text-white">"{{ $query }}"</span>
    </h1>

    @if ($results->count())
        <div
            class="grid grid-cols-2 md:grid-cols-[repeat(3,230px)] lg:grid-cols-[repeat(4,230px)] 2xl:grid-cols-[repeat(6,230px)] justify-center gap-4">
            @foreach ($results as $post)
                <div
                    class="grid bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-sm hover:ring-2 hover:ring-gray-700 dark:hover:ring-gray-200 active:scale-95 transition-all">
                    <a href="{{ $post->slug }}" title="{{ $post->title }}">
                        <img class="rounded-t-lg w-full" src="{{ asset('uploads/' . $post->image) }}"
                            alt="{{ $post->title }}" />
                        <p
                            class="px-5 py-1 text-sm md:text-[16px] text-center font-bold capitalize line-clamp-2 leading-6">
                            {{ $post->title }}
                        </p>
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <p>Artikel tidak ditemukan</p>
    @endif
</x-layout>
