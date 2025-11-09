<x-layout>
    @foreach ($grouped as $letter => $posts)
        <h1>{{ $letter }}</h1>
        <hr class="my-2 mx-auto dark:border-gray-200" />
        <ul class="mb-4">
            @foreach ($posts as $post)
                <li>
                    <a href="{{ $post->slug }}" class="hover:text-teal-500 capitalize">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endforeach
</x-layout>
