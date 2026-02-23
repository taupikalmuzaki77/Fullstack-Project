<x-layout>
    {{-- Header --}}
    <div class="flex flex-col mb-5">
        <p class="font-bold uppercase text-teal-600 dark:text-teal-400">
            Kategori
        </p>
        <p class="text-3xl font-bold capitalize">{{ $category->name }} List</p>
        <p class="text-lg text-slate-500 dark:text-slate-300">
            Daftar artikel di halaman {{ $posts->currentpage() }}
        </p>
    </div>

    {{-- Content --}}
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

    {{-- Pagination Logic --}}
    @php
        $current = $posts->currentPage();
        $last = $posts->lastPage();

        $start = max($current - 4, 1);
        $end = $current;

        if ($current < 5) {
            $start = 1;
            $end = min(5, $last);
        }
    @endphp

    {{-- Pagination Element --}}
    @if ($last > 1)
        <div class="flex justify-center items-center mt-6">
            {{-- skipt to first page --}}
            <a href="{{ $posts->url(1) }}"
                class="dark:bg-slate-800 px-1 md:px-3 py-1 border rounded-l-md leading-none {{ $current == 1 ? 'cursor-not-allowed' : 'cursor-pointer hover:bg-gray-300 dark:hover:bg-gray-600' }}">
                <x-button icon="firstPage"></x-button>
            </a>
            {{-- previous page --}}
            <a href="{{ $posts->previousPageUrl() ?? '#' }}"
                class="dark:bg-slate-800 px-1 md:px-3 py-1 border leading-none {{ $posts->onFirstPage() ? 'cursor-not-allowed' : 'cursor-pointer hover:bg-gray-300 dark:hover:bg-gray-600' }}">
                <x-button icon="prevPage"></x-button>
            </a>
            {{-- number page --}}
            @for ($i = $start; $i <= $end; $i++)
                <a href="{{ $posts->url($i) }}"
                    class="dark:bg-slate-800 px-3 py-1 border {{ $i == $current ? 'bg-teal-500 dark:bg-teal-500 font-bold' : 'cursor-pointer hover:bg-gray-300 dark:hover:bg-gray-600' }}">
                    {{ $i }}
                </a>
            @endfor
            {{-- next page --}}
            <a href="{{ $posts->nextPageUrl() ?? '#' }}"
                class="dark:bg-slate-800 px-1 md:px-3 py-1 border leading-none {{ $posts->hasMorePages() ? 'cursor-pointer hover:bg-gray-300 dark:hover:bg-gray-600' : 'cursor-not-allowed' }}">
                <x-button icon="nextPage"></x-button>
            </a>
            {{-- skipt to last page --}}
            <a href="{{ $posts->url($last) }}"
                class="dark:bg-slate-800 px-1 md:px-3 py-1 border rounded-r-md leading-none {{ $current == $last ? 'cursor-not-allowed' : 'cursor-pointer hover:bg-gray-300 dark:hover:bg-gray-600' }}">
                <x-button icon="lastPage"></x-button>
            </a>
        </div>
    @endif
</x-layout>
