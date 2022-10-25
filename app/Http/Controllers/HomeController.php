<?php

namespace App\Http\Controllers;

/* use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; */


use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        /*        $allCategories = DB::table('categories')->get(); */


        $categories = Category::all();
        $posts = Post::when(request('category_id'), function ($query) {
            $query->where('category_id', request(key: 'category_id'));
        })
            ->latest()
            ->get();
        return view('index', compact('categories', 'posts'));
    }
}