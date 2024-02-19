<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $persons = ['Mizanur Rahman', 'Ahad Rahman'];
        return Inertia::render('Home', compact('posts', 'persons') );
    }

    public function about()
    {
        return Inertia::render('About', [
        ]);
    }
}
