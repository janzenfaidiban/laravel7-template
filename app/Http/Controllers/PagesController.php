<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
      echo "pages > index";
    }

    public function all()
    {
      return view('administrator.pages.all');
    }

    public function new()
    {
      return view('administrator.pages.new');
    }
}
