<x-layout title="Contact Petani Emulator">
    <div class="bg-white dark:bg-slate-800 shadow-md p-5 rounded-lg w-fit max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold text-center">Contact</h1>
        <br />
        <p>
            Apabila ada saran, masukan, pertanyaan, ataupun kerjasama,
            anda bisa hubungi saya melalui formulir dibawah:
        </p>
        <br>
        <form action="https://api.web3forms.com/submit" method="post">
            <div class="flex flex-col gap-5">
                <input type="hidden" name="access_key" value="{{ config('services.web3form.key') }}" />
                <div class="text-center">
                    <input type="text" name="name" placeholder="Masukan nama anda" autocomplete="off" required
                        class="p-2 border border-gray-900 dark:border-gray-500 rounded-md bg-white dark:bg-[#1c1c1c] w-full" />
                </div>
                <div class="text-center">
                    <input type="email" name="email" placeholder="Masukan email anda" autocomplete="off" required
                        class="p-2 border border-gray-900 dark:border-gray-500 rounded-md bg-white dark:bg-[#1c1c1c] w-full" />
                </div>
                <div class="text-center">
                    <textarea name="message" placeholder="Masukan pesan anda" required
                        class="p-2 border gray-900 dark:border-gray-500 rounded-md bg-white dark:bg-[#1c1c1c] w-full h-60 "></textarea>
                </div>
                <div class="items-center justify-center flex">
                    <button type="submit"
                        class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-md">
                        Submit Form
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-layout>
