<?php

namespace App\Http\Controllers;
use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
      echo "posts > index";
    }

    public function all()
    {

      $data['data'] = posts::orderBy('id', 'DESC')
      ->get();
      return view('administrator.posts.all', $data);
    }

    public function new()
    {
      return view('administrator.posts.new');
    }


    // public function store(Request $request)
    // {
    //   $post = new Posts;
    //   $post->title = $request->title;
    //   $post->body = $request->body;
    //   $post->save();
    //
    //   return redirect()->to('/administrator/posts/all');
    //
    // }


    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);
        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('library/posts'), $fileName);

        $data = array(
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'image' => $fileName
          );

        posts::create($data);
        // alert()->success('Data Berhasil Ditambahkan', 'Success!!')->autoclose(1100);
        return redirect()->to('/administrator/posts/all');
    }



}
