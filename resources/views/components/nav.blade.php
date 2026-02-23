<nav class="sticky top-0 bg-teal-600 z-50">
    <div class="flex justify-between items-center text-white font-medium p-5">
        {{-- left nav component --}}
        <span class="w-[143px]">
            <a href="{{ route('homepage') }}" id="logo" class="px-3 py-2 hover:bg-teal-700 rounded-lg">P</a>
        </span>
        {{-- center nav component --}}
        <span>
            <x-navlink href="{{ route('gamelist') }}" icon="gamelist">
                Game List
            </x-navlink>
            <x-navlink href="{{ route('categories') }}" icon="category">
                Category
            </x-navlink>
        </span>
        {{-- right nav component --}}
        <span class="flex flex-row-reverse gap-1">
            <button id="sidebarToggle" class="rightnavstyle md:hidden">
                <x-button icon="menu" id="menuIcon"></x-button>
                <x-button icon="close" id="closeIcon" class="hidden"></x-button>
            </button>
            @auth
                <button id="accountToggle" class="rightnavstyle">
                    <x-button icon="user" id="userAccountIcon"></x-button>
                    <x-button icon="close" id="userAccountCloseIcon" class="hidden"></x-button>
                </button>
            @endauth
            <button id="searchToggle" class="rightnavstyle">
                <x-button icon="search" id="searchIcon"></x-button>
                <x-button icon="close" id="searchCloseIcon" class="hidden"></x-button>
            </button>
            <button id="darkModeToggle" class="rightnavstyle">
                <x-button icon="moon" id="moonIcon" class="hidden"></x-button>
                <x-button icon="sun" id="sunIcon" class="hidden"></x-button>
            </button>
        </span>
    </div>
</nav>
