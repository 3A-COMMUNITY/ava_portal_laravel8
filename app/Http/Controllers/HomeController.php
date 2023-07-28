<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Associate;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Posts::get()->count();
        $associates = Associate::get()->where('status',1)->count();
        $pending = Associate::get()->where('status',0)->count();
        

        return view('admin.dashboard', compact('posts','associates','pending'));
    }
}
