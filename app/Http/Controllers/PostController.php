<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('categories')->orderBy('id')->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = DB::table('categories')->get();
        return view("posts.create", compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        $data = $request->all();
        $post = Post::create($data);
        $post->categories()->sync($request->categories);
        return redirect('posts')->with('created','Post is created successfully');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::with('categories')->findOrFail($id);
        $categories = DB::table('categories')->get();
        return view('posts.edit', ['post' => $post, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());
        $post->categories()->sync($request->categories);
        return redirect('posts')->with('updated','Post is updated successfully');

    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('posts')->with('deleted','Post is deleted successfully');
    }
}
