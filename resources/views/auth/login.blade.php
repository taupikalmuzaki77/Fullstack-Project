<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen">
        <div class="border-2 border-black p-5 rounded-xl gap-3 flex flex-col w-[400px]">
            @if ($errors->any())
                <div class="relative bg-[#F8D7DA] border border-black rounded-md p-4" id="alert">
                    <button onclick="document.getElementById('alert').style.display='none'"
                        class="absolute top-2 right-2 cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <p><strong>Whoops!</strong> Something went wrong.</p>
                    <ul class="list-disc px-8">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="text-center">
                <h1 class="text-4xl font-bold">Login</h1>
                <p>Login to start your session</p>
            </div>
            <form action="{{ route('login') }}" method="POST" class="flex gap-5 flex-col">
                @csrf
                <div>
                    <p>Phone Number or Email</p>
                    <input type="text" name="login" placeholder="Phone Number or Email"
                        class="border border-black rounded-md p-1 w-full @error('login') border-red-500
                        @enderror"
                        value="{{ old('login') }}" autocomplete="off">
                </div>
                <div>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Password" autocomplete="off"
                        class="border border-black rounded-md p-1 w-full @error('password') border-red-500
                        @enderror">
                </div>
                <div class="flex justify-center gap-2">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white rounded-lg py-1 px-2 cursor-pointer">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
