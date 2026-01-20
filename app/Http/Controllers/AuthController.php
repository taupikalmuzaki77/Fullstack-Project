<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }
    public function loginForm()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:240',
            'email' => 'required|string|unique:users,email|max:240',
            'phone' => 'required|unique:users,phone',
            'password' => 'required|string|min:6|confirmed'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => \Hash::make($request->password)
        ]);
        return redirect()->route('login')->withSucess('Registration successfully, Please login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check if request has email or phone number
        $login_type = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        // Login attempt
        if(\Auth::attempt([
            $login_type => $request->login,
            'password' => $request->password
            ]))
            {
                $request->session()->regenerate();
                return redirect()->intended(route('admin'));
            }
            return back()->withInput()->withErrors([
                'login' => 'Invalid credentials'
            ]);
    }

    public function admin()
    {
        $posts = Post::latest()->paginate(18);
        return view('admin', compact('posts'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Post::where('title', 'like', "%{$query}%" )->get();

        return view('post.search', compact('results', 'query'));
    }

    public function logout(Request $requet)
    {
        \Auth::logout();
        $requet->session()->invalidate();
        $requet->session()->regenerateToken();
        return redirect('/');
    }
}
