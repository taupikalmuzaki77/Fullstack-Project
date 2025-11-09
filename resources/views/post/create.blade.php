<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Create Post</title>
</head>

<body>
    <div class="flex justify-center mt-10 mx-2">
        <div class="border border-black p-5 rounded-xl gap-3 flex flex-col w-[600px] bg-white shadow-xl">
            @if (session()->has('success'))
                <div class="relative bg-[#D1E7DD] border border-black rounded-md p-4" id="alert">
                    <button class="absolute top-2 right-2 cursor-pointer"
                        onclick="document.getElementById('alert').style.display='none'"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd" />
                        </svg></button>
                    <p>{{ session()->get('success') }}</p>
                </div>
            @endif
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
            <h1 class="text-2xl font-bold text-center">Add Post</h1>
            <p class="text-center">Input the field bellow to create a post</p>
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data"
                class="mt-5 flex gap-5 flex-col">
                @csrf
                {{-- Title --}}
                <div class="flex flex-row gap-2 items-center">
                    <p class="w-[120px]">Title:</p>
                    <input type="text" name="title" placeholder="Title post"
                        class="border border-black rounded-md p-1 w-full @error('title') border-red-500
                        @enderror"
                        autocomplete="off" value="{{ old('title') }}">
                </div>
                {{-- Image --}}
                <div class="flex flex-row gap-2 items-center">
                    <p class="w-[120px]">Image:</p>
                    <input type="file" name="image"
                        class="border border-black rounded-md p-1 w-full cursor-pointer" value="{{ old('image') }}">
                </div>
                {{-- Slug --}}
                <div class="flex flex-row gap-2 items-center">
                    <p class="w-[120px]">Slug:</p>
                    <input type="text" name="slug" placeholder="Slug post"
                        class="border border-black rounded-md p-1 w-full @error('slug') border-red-500
                @enderror"
                        autocomplete="off" value="{{ old('slug') }}">
                </div>
                {{-- Link --}}
                <div class="flex flex-row gap-2 items-center">
                    <p class="w-[120px]">Link:</p>
                    <input type="text" name="link" placeholder="Link post"
                        class="border border-black rounded-md p-1 w-full @error('link') border-red-500
                @enderror"
                        autocomplete="off" value="{{ old('link') }}">
                </div>
                {{-- Category_id --}}
                <div class="flex flex-row gap-2 items-center">
                    <p class="w-[120px]">Category_id:</p>
                    <input type="text" name="category_id" placeholder="Category_id post"
                        class="border border-black rounded-md p-1 w-full @error('category_id') border-red-500
                @enderror"
                        autocomplete="off" value="{{ old('category_id') }}">
                </div>
                {{-- Description --}}
                <div class="flex flex-row gap-2 items-center">
                    <p class="w-[120px]">Description:</p>
                    <textarea name="description"
                        class="border border-black rounded-md p-1 w-full h-[200px] @error('description') border-red-500
                        @enderror"
                        value="{{ old('description') }}">{{ old('description') }}</textarea>
                </div>



                <div class="flex justify-center gap-2">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white rounded-lg py-1 px-2 cursor-pointer">Submit
                    </button>
                    <a href="{{ route('admin') }}"
                        class="bg-white border border-blue-500 hover:bg-blue-200 text-black rounded-lg py-1 px-2 cursor-pointer">Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
