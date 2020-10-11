<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::get();

        return view('admins.posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('admins.posts.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();

        Post::create([
            'title' => Arr::get($inputs, 'title'),
            'content' => Arr::get($inputs, 'content'),
        ]);

        return redirect(route('admins.posts.index'));
    }
}
