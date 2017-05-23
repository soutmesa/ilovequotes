<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\User;
use App\Category;
use Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('categories', 'user')->orderBy('id')->get();

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

        $auth_id = Auth::user()->id;
        $auth = User::with('roles')->findOrFail($auth_id);
        $arr_roles = [];
        foreach ($auth->roles as $key => $value) {
            $arr_roles[] = $value['name'];
        }
        $post = Post::with('categories','user')->findOrFail($id);
        $posted_by = $post->user->id;
        if($auth_id==$posted_by || false !== (array_search('admin', $arr_roles)) || false !== (array_search('manager', $arr_roles)) || false !== (array_search('super user', $arr_roles))){
            $categories = Category::get();
            return view('posts.edit', ['post' => $post, 'categories' => $categories]);
        }else{
            return redirect('posts')->with('back','You are not allow to edit this post');
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        $auth_id = Auth::user()->id;
        $auth = User::with('roles')->findOrFail($auth_id);
        $arr_roles = [];
        foreach ($auth->roles as $key => $value) {
            $arr_roles[] = $value['name'];
        }
        $post = Post::with('user')->findOrFail($id);
        $posted_by = $post->user->id;
        if($auth_id==$posted_by || false !== (array_search('admin', $arr_roles)) || false !== (array_search('manager', $arr_roles)) || false !== (array_search('super user', $arr_roles))){
            $post->update($request->all());
            $post->categories()->sync($request->categories);
            return redirect('posts')->with('updated','Post is updated successfully');
        }else{
            return redirect('posts')->with('back','You are not allow to edit this post');
        }

    }

    public function destroy($id)
    {
        $auth_id = Auth::user()->id;
        $auth = User::with('roles')->findOrFail($auth_id);
        $arr_roles = [];
        foreach ($auth->roles as $key => $value) {
            $arr_roles[] = $value['name'];
        }
        $post = Post::with('user')->findOrFail($id);
        $posted_by = $post->user->id;
        if($auth_id==$posted_by || false !== (array_search('admin', $arr_roles)) || false !== (array_search('manager', $arr_roles)) || false !== (array_search('super user', $arr_roles))){
            $post->delete();
            return redirect('posts')->with('deleted','Post is deleted successfully');
        }else{
            return redirect('posts')->with('back','You are not allow to delete this post');
        }
    }
}
