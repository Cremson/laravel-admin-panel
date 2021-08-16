<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pots_count = Post::all()->count();
        $categories_count = Category::all()->count();
      return view('admin.home.index', [
          'pots_count' => $pots_count,
          'categories_count' => $categories_count,
      ]);
    }
}
