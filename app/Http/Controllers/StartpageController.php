<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class StartpageController extends Controller
{
    public function index() {

        $posts = Post::with('user')->latest()->active()->limit(5)->get();
        return view('index', compact('posts'));
    }
}
