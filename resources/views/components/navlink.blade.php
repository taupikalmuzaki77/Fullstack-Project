@props(['active' => false, 'icon' => null])

<a {{ $attributes }}
    class="{{ $active ? 'bg-slate-800 text-white' : 'text-white hover:bg-teal-700' }} hidden md:inline-flex px-3 py-2 gap-1 font-medium items-center rounded-lg">
    @if ($icon)
        <x-icon :name="$icon" class="size-6" />
    @endif

    <span>{{ $slot }}</span>
</a>
