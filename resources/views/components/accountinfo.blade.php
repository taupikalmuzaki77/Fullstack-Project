@auth
    <div id="accountOverlay" class="fixed inset-0 bg-black/40 backdrop-blur-sm z-30 hidden transition-opacity duration-300">
    </div>

    <div id="accountInfo"
        class="hidden fixed z-50 mt-5 mx-5 right-0 bg-white dark:bg-slate-800 shadow-md border-2 border-black dark:border-gray-400 rounded-md w-[320px] p-2 flex-col">
        <div class="flex flex-col gap-2 items-center">
            <div class="flex flex-row items-center gap-3 text-sm">
                <img src="{{ asset('icon/profil.jpeg') }}" alt="" class="w-16 h-16 rounded-full">
                <div class="flex flex-col">
                    <p class="font-bold">{{ auth()->user()->name }}</p>
                    <p>{{ auth()->user()->email }}</p>
                    <p>{{ auth()->user()->phone }}</p>
                </div>
            </div>
        </div>
        <div class="flex justify-between mt-5">
            <a href="/admin" target="_blank" class="text-white bg-orange-500 hover:bg-orange-600 px-3 py-2 rounded-lg">
                Admin Panel
            </a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="text-white bg-red-500 hover:bg-orange-800 px-3 py-2 rounded-lg cursor-pointer">
                    Logout
                </button>
            </form>
        </div>
    </div>
@endauth
