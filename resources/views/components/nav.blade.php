<nav class="sticky top-0 bg-teal-600 z-50">
    <div class="flex justify-between items-center text-white font-medium p-5">
        {{-- left nav component --}}
        <span class="w-[143px]">
            <a href="" id="logo" class="px-3 py-2 hover:bg-teal-700 rounded-lg">P</a>
        </span>
        {{-- center nav component --}}
        <span>
            <x-navlink href="" icon="gamelist">
                Game List
            </x-navlink>
            <x-navlink href="" icon="category">
                Category
            </x-navlink>
        </span>
        {{-- right nav component --}}
        <span class="flex flex-row-reverse gap-1">
            <button id="sidebarToggle" class="rightnavstyle md:hidden">
                <x-navbutton icon="menu" id="menuIcon"></x-navbutton>
                <x-navbutton icon="close" id="closeIcon" class="hidden"></x-navbutton>
            </button>
            @auth
                <button id="accountToggle" class="rightnavstyle">
                    <x-navbutton icon="user" id="userAccountIcon"></x-navbutton>
                    <x-navbutton icon="close" id="userAccountCloseIcon" class="hidden"></x-navbutton>
                </button>
            @endauth
            <button id="searchToggle" class="rightnavstyle">
                <x-navbutton icon="search" id="searchIcon"></x-navbutton>
                <x-navbutton icon="close" id="searchCloseIcon" class="hidden"></x-navbutton>
            </button>
            <button id="darkModeToggle" class="rightnavstyle">
                <x-navbutton icon="moon" id="moonIcon" class="hidden"></x-navbutton>
                <x-navbutton icon="sun" id="sunIcon" class="hidden"></x-navbutton>
            </button>
        </span>
    </div>
</nav>
