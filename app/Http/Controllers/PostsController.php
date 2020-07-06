<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
      echo "posts > index";
    }

    public function all()
    {
      return view('administrator.posts.all');
    }

    public function new()
    {
      return view('administrator.posts.new');
    }
}
