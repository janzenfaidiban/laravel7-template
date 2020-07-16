<?php

namespace App\Http\Controllers;
use App\Category;
use App\Posts;
use App\Tag;
use App\Http\Requests\PostsRequest;

class PostsController extends Controller
{
    public function index(Posts $posts)
    {
      $data = Posts::get();
      return view('/administrator/posts/all', compact('data'));
    }

    public function view($id) 
    {
        // $data['data'] = Posts::find($id);
        $data['data'] = Posts::find($id);
        return view('/administrator/posts/view', $data);
    }


    public function new()
    {
      $categories = Category::pluck('name','id');
      $tags = Tag::pluck('name','id');
      // $tags = Tag::get();
      return view('administrator.posts.new', compact('categories', 'tags'));
    }

    public function store(PostsRequest $request)
    {
      $data = $request->all();
      $data['category_id'] = request('category');
      $post = Posts::create($data);
      $post->tags()->attach(request('tags'));


      session()->flash('success', 'The post was created');
      return redirect('/administrator/posts/all');
    }

    public function destroy(Posts $post)
    {
      $post->tags()->detach();
      $post->delete();
      session()->flash('info', 'The post was deleted');
      return redirect()->back();
    }

    public function category(Category $category)
    {
      $data = $category->posts()->get();
      return view('/administrator/posts/all', compact('data'));
    }

}
