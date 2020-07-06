<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index()
    {
      echo "tags > index";
    }

    public function all()
    {
      return view('administrator.tags.all');
    }

    public function new()
    {
      return view('administrator.tags.new');
    }
}
