<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $id1= [5];
        $posts1= Post::find($id1);
        $id2= [6];
        $posts2= Post::find($id2);
        $id3= [7];
        $posts3= Post::find($id3);
        return view('home', compact('posts1', 'posts2', 'posts3'));
    }
}
