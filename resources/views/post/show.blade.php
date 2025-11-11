<x-layout>
    <div class="flex flex-col lg:flex-row gap-5 justify-center">
        {{-- Left Layout Start --}}
        <div class="flex flex-col gap-5 flex-1 lg:max-w-3xl">

            <div class="bg-white dark:bg-slate-800 shadow-md p-5 rounded-lg">
                <div class="flex flex-row text-sm gap-2 items-center">
                    <img src="{{ asset('icon/profil.jpeg') }}" alt="Author Image" class="w-[30px] h-[30px] rounded-full">
                    <a href="/about" class="hover:text-teal-500">Taupik Al Muzaki</a>
                    <p>-</p>
                    <p>{{ $post->created_at->translatedformat('l, j M o') }}</p>
                </div>
                <h1 class="text-center text-[20px] md:text-4xl font-bold capitalize mt-2">
                    {{ $post->title }}
                </h1>
                <hr class="max-w-3xl my-4 mx-auto dark:border-gray-200" />
                <div>
                    <p>{{ $post->description }}</p>
                    <div class="py-5">
                        <a href="{{ $post->link }}"
                            class="text-white bg-blue-500 hover:bg-blue-600 px-3 py-2 rounded-lg">Download Now</a>
                    </div>
                </div>
            </div>

            <div id="disqus_thread"
                class="text-black dark:text-white border-2 border-white dark:border-slate-800 rounded-lg p-5 shadow-md">
            </div>
            <div id="disqus_thread"></div>

            <script>
                var disqus_config = function() {
                    this.page.url = "{{ url()->current() }}";
                    this.page.identifier = "{{ md5(url()->current()) }}";
                };

                // memuat Disqus untuk pertama kali
                function loadDisqus() {
                    var d = document,
                        s = d.createElement('script');
                    s.src = 'https://fullstack-3.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                }

                // reload Disqus ketika dark mode berubah atau sebaliknya
                function reloadDisqus() {
                    // Hapus isi container Disqus
                    document.getElementById('disqus_thread').innerHTML = '';

                    // Reset dan load ulang
                    (function() {
                        var d = document,
                            s = d.createElement('script');
                        s.src = 'https://fullstack-3.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                }

                // Jalankan saat halaman pertama kali dimuat
                document.addEventListener('DOMContentLoaded', function() {
                    loadDisqus();
                });

                // Reload disquss dengan toggle
                document.getElementById('darkModeToggle').addEventListener('click', function() {
                    document.body.classList.toggle('dark-mode');
                    reloadDisqus();
                });
            </script>

            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered
                    by Disqus.</a></noscript>
        </div>
        {{-- Left Layout End --}}
        {{-- Right Layout Start --}}
        <div class="lg:w-1/4 h-fit bg-white dark:bg-slate-800 shadow-md p-5 rounded-lg">
            <h1 class="border-b border-gray-300 dark:border-slate-700 text-2xl font-bold pb-2 text-center">Rekomendasi
                Game 🔥
            </h1>
            {{-- Judul 1 --}}
            <a href="/resident-evil-4">
                <div class="flex flex-row items-center hover:bg-slate-200 dark:hover:bg-slate-700 py-2">
                    <img src="{{ asset('cover/re4.jpg') }}" alt="Resident Evil 4" title="Resident Evil 4"
                        class="w-25 h-25 object-contain">
                    <div class="flex flex-col">
                        <p class="font-bold line-clamp-1">Resident Evil 4</p>
                        <p>Playstation 2</p>
                    </div>
                </div>
            </a>
            {{-- Judul 2 --}}
            <a href="/mortal-kombat-shaolin-monks">
                <div class="flex flex-row items-center hover:bg-slate-200 dark:hover:bg-slate-700 py-2">
                    <img src="{{ asset('cover/mksm.jpg') }}" alt="Mortal Kombat Shaolin Monks"
                        title="Mortal Kombat Shaolin Monks" class="w-25 h-25 object-contain">
                    <div class="flex flex-col">
                        <p class="font-bold line-clamp-1">Mortal Kombat Shaolin Monks</p>
                        <p>Playstation 2</p>
                    </div>
                </div>
            </a>
            {{-- Judul 3 --}}
            <a href="/god-of-war-2">
                <div class="flex flex-row items-center hover:bg-slate-200 dark:hover:bg-slate-700 py-2">
                    <img src="{{ asset('cover/gow2.jpg') }}" alt="God Of War 2" title="God Of War 2"
                        class="w-25 h-25 object-contain">
                    <div class="flex flex-col">
                        <p class="font-bold line-clamp-1">God Of War 2</p>
                        <p>Playstation 2</p>
                    </div>
                </div>
            </a>
            {{-- Judul 4 --}}
            <a href="naruto-shippuden-ultimate-ninja-5">
                <div class="flex flex-row items-center hover:bg-slate-200 dark:hover:bg-slate-700 py-2">
                    <img src="{{ asset('cover/naruto.jpg') }}" alt="Naruto Shippuden Ultimate Ninja 5"
                        title="Naruto Shippuden Ultimate Ninja 5" class="w-25 h-25 object-contain">
                    <div class="flex flex-col">
                        <p class="font-bold line-clamp-1">Naruto Shippuden Ultimate Ninja 5</p>
                        <p>Playstation 2</p>
                    </div>
                </div>
            </a>
            {{-- Judul 5 --}}
            <a href="/need-for-speed-most-wanted">
                <div class="flex flex-row items-center hover:bg-slate-200 dark:hover:bg-slate-700 py-2">
                    <img src="{{ asset('cover/nfs.jpg') }}" alt="Need For Speed Most Wanted"
                        title="Need For Speed Most Wanted" class="w-25 h-25 object-contain">
                    <div class="flex flex-col">
                        <p class="font-bold line-clamp-1">Need For Speed Most Wanted</p>
                        <p>Playstation 2</p>
                    </div>
                </div>
            </a>
        </div>
        {{-- Right Layout End --}}
    </div>
</x-layout>
