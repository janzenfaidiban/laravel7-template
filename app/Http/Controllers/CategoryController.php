<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function all(Category $category)
    {
        $data = $category->get();
        return view('administrator.category.all', compact('data'));
    }

    public function new()
    {
      return view('administrator.category.new');
    }

    public function store()
    {
        
    }
}
