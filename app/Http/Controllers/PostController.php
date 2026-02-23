<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Homepage Controller
    public function index() 
    {
        $posts = Post::latest()->get();
        return view('homepage', compact('posts'));
    }

    // Latest Post Controller
    public function latest()
    {
        $posts = Post::latest()->paginate(18);
        return view('post.latest', compact('posts'));
    }

    // Search Controller
    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Post::where('title', 'like', "%{$query}%" )->get();

        return view('post.search', compact('results', 'query'));
    }

    // Live Search Controller
    public function liveSearch(Request $request)
    {
        $query = $request->input('query');

        if (!$query) {
            return response()->json([]);
        }

        $results = Post::where('title', 'like', "%{$query}%")
            ->limit(5)
            ->limit(5)
            ->get();
        return response()->json($results);
    }

    // Gamelist page 1 (Mengambil isi tabel kategori yang memiliki relation dengan post)
    public function gamelist()
    {
        $categories = Category::all();
        return view('post.gamelist', compact('categories'));
    }

    // Gamelist page 2 (Tampilkan isi post berdasarkan kategori yang dipilih)
    public function gamelistIndex($slug)
    {
        $category = Category::where('slug', $slug)->firstorFail();
        $posts = $category->posts()->orderBy('title')->get();
        $grouped = $posts->groupBy(function ($item)
        {
            $firstChar = strtoupper(substr($item->title, 0, 1));
            if (preg_match('/^[A-Z]$/', $firstChar)) {
                return $firstChar;
            } else {
                return '#';
            }

            // return strtoupper(substr ($item->title, 0, 1));
        });
        $grouped = $grouped->sortKeys();
        if ($grouped->has('#')) {
            $hasGroup = $grouped->pull('#');
            $grouped = collect(['#' => $hasGroup])->merge($grouped);
        }
        return view('post.gamelistIndex', compact('grouped'));
    }

    // membuat post
    public function create()
    {
        $posts = Post::all();
        return view('post.create', compact('posts'));
    }

    // menyimpan post ke dalam database
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:300|string',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp|max:10240',
            'slug' => 'unique:posts|required|max:300|string',
            'link' => 'unique:posts|required|max:300|string',
            'category_id' => 'required|max:2|integer',
            'description' => 'required|string|max:2000'
        ]);

        if($request->has('image'))
        {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();

            $request->image->move(public_path('uploads/'), $imageName);
            $data['image'] = $imageName;
        }

        Post::create($data);
        return back()->with('success', 'Post has been created');
    }

    // Menampilkan post
    public function show(Post $post)
    {
        $post->load('category');
        $posts = Post::latest()->get();
        return view('post.show', compact('posts', 'post'));
    }

    // Edit post
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    // Menyimpan hasil edit post ke database
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required|max:300|string',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp|max:10240',
            'slug' => 'required|max:300|string',
            'link' => 'required|max:300|string',
            'category_id' => 'required|max:2|integer',
            'description' => 'required|string|max:2000'
        ]);

        if($request->has('image'))
        {
            // Check old image
            $destination = 'uploads/'.$post->image;

            // Remove old image
            if(\File::exists($destination))
            {
                \File::delete(($destination));
            }
            // add new image
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            // move the image to server
            $request->image->move(public_path('uploads/'),$imageName);
            // update image name on server
            $data['image'] = $imageName;
        }
        $post->update($data);
        return redirect()->route('post.create')->with('success', 'Post has been updated');
    }

    // Menghapus post
    public function destroy(Post $post)
    {
        if($post->image)
        {
            $destination = 'uploads/'.$post->image;
            if(\File::exists($destination))
            {
                \File::delete($destination);
            }
        }
        $post->delete();
            return back()->with('success', 'Post has been deleted');
    }
}
