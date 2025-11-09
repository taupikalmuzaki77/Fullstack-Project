<div id="overlay" class="fixed inset-0 bg-black/40 backdrop-blur-sm z-30 hidden transition-opacity duration-300"></div>

<div id="sidebar"
    class="fixed top-0 left-0 h-full px-4 text-white transform -translate-x-full transition-transform duration-300 z-50 flex justify-center items-center">
    <div class="bg-gray-800 p-5 rounded-lg">
        <div class="flex flex-col items-center">
            <img src="{{ asset('icon/profil.jpeg') }}" alt="foto penulis" class="w-[100px] h-[100px] rounded-full" />
            <h1 class="font-bold">Taupik Al Muzaki</h1>
            <p class="text-sm font-medium">Web Developer</p>
        </div>
        <hr class="bg-white my-3" />
        <div class="flex flex-col gap-1">
            <x-navlink href="/" icon="home"
                class="px-3 py-2 gap-1 font-medium items-center rounded-lg text-white hover:bg-teal-700">
                Home
            </x-navlink>
            <x-navlink href="/list-game" icon="listgame"
                class="px-3 py-2 gap-1 font-medium items-center rounded-lg text-white hover:bg-teal-700">
                Game List
            </x-navlink>
            <x-navlink href="/category" icon="kategori"
                class="px-3 py-2 gap-1 font-medium items-center rounded-lg text-white hover:bg-teal-700">
                Category
            </x-navlink>
            {{-- <x-navlink href="/genre" icon="genre"
                class="px-3 py-2 gap-1 font-medium items-center rounded-lg text-white hover:bg-teal-700">
                Genre
            </x-navlink> --}}
        </div>
    </div>
</div>
