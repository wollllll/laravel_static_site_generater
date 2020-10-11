<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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

        $post = Post::create([
            'title' => Arr::get($inputs, 'title'),
            'content' => Arr::get($inputs, 'content'),
        ]);

        $html = view('admins.posts.show', compact('post'))->render();
        Storage::put('html/' . $post->title . '.html', $html);

        return redirect(route('admins.posts.index'));
    }

    public function show(Post $post)
    {
        return Storage::get('html/' . $post->title . '.html');
    }
}
