<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
      echo "media > index";
    }

    public function all()
    {
      return view('administrator.media.all');
    }

    public function new()
    {
      return view('administrator.media.new');
    }
}
