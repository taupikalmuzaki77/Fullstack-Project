<nav class="sticky top-0 bg-teal-600 z-50">
    <div class="container mx-auto flex justify-between px-5">
        {{-- Kiri --}}
        <div class="flex gap-1 items-center w-[188px]">
            <a href="/" id="logo"
                class="text-[20px] font-medium px-3 py-2 text-white hover:bg-teal-700 rounded-lg"></a>
        </div>
        {{-- Tengah --}}
        <div class="flex gap-1 py-4">
            <x-navlink href="/game-list" icon="listgame" :active="request()->is('list-game')">
                Game List
            </x-navlink>
            <x-navlink href="/category" icon="kategori" :active="request()->is('kategori')">
                Category
            </x-navlink>
            {{-- <x-navlink href="/genre" icon="genre" :active="request()->is('genre')">
                Genre
            </x-navlink> --}}
        </div>
        {{-- Kanan --}}
        <div class="flex flex-row-reverse items-center gap-2 py-3">
            {{-- Menu --}}
            <button class="button md:hidden" id="sidebarToggle">
                <span id="menuIcon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                        stroke="none" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 18V20H6V18H18ZM21 11V13H3V11H21ZM18 4V6H6V4H18Z" />
                    </svg>
                </span>
                <span id="closeIcon" class="hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                        stroke="none" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z" />
                    </svg>
                </span>
            </button>
            @auth
                {{-- Auth Mode --}}
                <button class="button" id="accountToggle">
                    <span id="userAccountIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                            stroke="none" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM12.1597 16C10.1243 16 8.29182 16.8687 7.01276 18.2556C8.38039 19.3474 10.114 20 12 20C13.9695 20 15.7727 19.2883 17.1666 18.1081C15.8956 16.8074 14.1219 16 12.1597 16ZM12 4C7.58172 4 4 7.58172 4 12C4 13.8106 4.6015 15.4807 5.61557 16.8214C7.25639 15.0841 9.58144 14 12.1597 14C14.6441 14 16.8933 15.0066 18.5218 16.6342C19.4526 15.3267 20 13.7273 20 12C20 7.58172 16.4183 4 12 4ZM12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5ZM12 7C10.8954 7 10 7.89543 10 9C10 10.1046 10.8954 11 12 11C13.1046 11 14 10.1046 14 9C14 7.89543 13.1046 7 12 7Z" />
                        </svg>
                    </span>
                    <span id="userAccountCloseIcon" class="hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                            stroke="none" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z" />
                        </svg>
                    </span>
                </button>
            @endauth
            {{-- Search --}}
            <button class="button" id="searchToggle">
                <span id="searchIcon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                        stroke="none" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.8675 18 18 14.8675 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18ZM19.4853 18.0711L22.3137 20.8995L20.8995 22.3137L18.0711 19.4853L19.4853 18.0711Z" />
                    </svg>
                </span>
                <span id="searchCloseIcon" class="hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                        stroke="none" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z" />
                    </svg>
                </span>
            </button>
            {{-- Dark Mode --}}
            <button class="button" id="darkModeToggle">
                <span id="sunIcon" class="hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                        stroke="none" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12C18 15.3137 15.3137 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16ZM11 1H13V4H11V1ZM11 20H13V23H11V20ZM3.51472 4.92893L4.92893 3.51472L7.05025 5.63604L5.63604 7.05025L3.51472 4.92893ZM16.9497 18.364L18.364 16.9497L20.4853 19.0711L19.0711 20.4853L16.9497 18.364ZM19.0711 3.51472L20.4853 4.92893L18.364 7.05025L16.9497 5.63604L19.0711 3.51472ZM5.63604 16.9497L7.05025 18.364L4.92893 20.4853L3.51472 19.0711L5.63604 16.9497ZM23 11V13H20V11H23ZM4 11V13H1V11H4Z" />
                    </svg>
                </span>
                <span id="moonIcon" class="hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                        stroke="none" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10 7C10 10.866 13.134 14 17 14C18.9584 14 20.729 13.1957 21.9995 11.8995C22 11.933 22 11.9665 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C12.0335 2 12.067 2 12.1005 2.00049C10.8043 3.27098 10 5.04157 10 7ZM4 12C4 16.4183 7.58172 20 12 20C15.0583 20 17.7158 18.2839 19.062 15.7621C18.3945 15.9187 17.7035 16 17 16C12.0294 16 8 11.9706 8 7C8 6.29648 8.08133 5.60547 8.2379 4.938C5.71611 6.28423 4 8.9417 4 12Z" />
                    </svg>
                </span>
            </button>
        </div>
    </div>
</nav>
