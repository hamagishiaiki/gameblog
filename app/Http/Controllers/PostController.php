<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Cloudinary;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $sortedData = Post::select('title', DB::raw('SUM(evaluate) as total_value'))
                ->groupBy('title')
                ->orderByDesc('total_value')
                ->limit(3)
                ->get();
        return view('posts.index')->with(['posts' => $post->get(), 'sortedData' => $sortedData]);  
    }
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }
    public function edit(Post $post, Category $category)
    {
        return view('posts.edit')->with(['post' => $post, 'categories' => $category->get()]);
    }
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    public function store(Post $post,PostRequest $request)
    {
        $input = $request['post'];
        if($request->file('image')){
            $image_path = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input += ['image_path' => $image_path];
        }
        $post = new Post();
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    public function create(Category $category)
    {
        return view('posts.create')->with(['categories' => $category->get()]);
    }
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}