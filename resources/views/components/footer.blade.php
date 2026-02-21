<footer class="bg-slate-800 text-white shadow-sm w-full">
    <div class="flex flex-col gap-2 items-center justify-center max-w-7xl p-4 md:py-8 mx-auto">
        <a href="" class="font-medium text-[18px] hover:text-teal-500">Petani Emulator</a>
        <span class="flex flex-row gap-2">
            <a href="{{ route('about') }}" class="hover:text-teal-500 font-medium">About</a>
            <a href="{{ route('contact') }}" class="hover:text-teal-500 font-medium">Contact</a>
            <a href="{{ route('privacy-policy') }}" class="hover:text-teal-500 font-medium">Privacy Policy</a>
        </span>
        <hr class="border border-white w-full  max-w-md">
        <span class="flex flex-row gap-1">
            <p>©</p>
            <p id="year"></p>
            <p>-</p>
            <p>Made With ❤️ Using</p>
            <a href="https://laravel.com" target="_blank" class="hover:text-teal-500">Laravel</a>
        </span>
    </div>
    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</footer>
