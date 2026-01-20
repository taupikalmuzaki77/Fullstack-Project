<x-layout>
    <div class="text-center">
        <p class="text-3xl font-bold text-teal-600 dark:text-teal-400">Category</p>
        <p class="text-lg text-slate-500 dark:text-slate-300 mb-5">
            Lihat Post Berdasarkan Kategori
        </p>
    </div>
    <div class="flex justify-center gap-2">
        @foreach ($categories as $category)
            <a class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-md hover:ring-2 hover:ring-gray-700 dark:hover:ring-gray-200 active:scale-95 transition-all my-2 p-1 text-center w-[250px] capitalize"
                href="/category/{{ $category->slug }}">
                {{ $category->name }}
            </a>
        @endforeach
    </div>
</x-layout>
