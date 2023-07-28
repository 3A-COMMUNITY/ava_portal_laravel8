<?php

namespace App\Http\Controllers;

use App\Models\Posts;

class SiteController extends Controller
{
    public function home()
    {
        $posts = Posts::where('category_id','=','2')->latest()->paginate(4);
    
        return view('site.index', compact("posts"));
    }
}
