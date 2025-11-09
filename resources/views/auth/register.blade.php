<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Register</title>
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
                <h1 class="text-4xl font-bold">Register</h1>
                <p>Register your account to get started</p>
            </div>
            <form action="{{ route('register') }}" method="POST" class="flex gap-5 flex-col">
                @csrf
                <div>
                    <p>Name</p>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Fullname"
                        class="border border-black rounded-md p-1 w-full @error('name') border-red-500
                        @enderror">
                </div>
                <div>
                    <p>Email</p>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                        class="border border-black rounded-md p-1 w-full @error('email') border-red-500
                        @enderror">
                </div>
                <div>
                    <p>Phone Number</p>
                    <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Phone Number"
                        class="border border-black rounded-md p-1 w-full @error('phone') border-red-500
                        @enderror">
                </div>
                <div>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Password" autocomplete="off"
                        class="border border-black rounded-md p-1 w-full @error('password') border-red-500
                        @enderror">
                </div>
                <div>
                    <p>Confirm Password</p>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password"
                        autocomplete="off"
                        class="border border-black rounded-md p-1 w-full @error('password') border-red-500
                        @enderror">
                </div>
                <div class="flex justify-between gap-2">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white rounded-lg py-1 px-2 cursor-pointer">Register</button>
                    <p>Already Registered? <a href="{{ route('login.page') }}"
                            class="text-blue-500 hover:text-blue-700">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
