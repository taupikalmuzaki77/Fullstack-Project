<a {{ $attributes }}
    class="hidden md:inline-flex px-3 py-2 gap-1 font-medium items-center hover:bg-teal-700 rounded-lg">
    @if ($icon)
        <x-icon :name="$icon" class="size-6" />
    @endif

    <span>{{ $slot }}</span>
</a>
