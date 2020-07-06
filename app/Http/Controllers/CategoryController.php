<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
      echo "category > index";
    }

    public function all()
    {
      return view('administrator.category.all');
    }

    public function new()
    {
      return view('administrator.category.new');
    }
}
