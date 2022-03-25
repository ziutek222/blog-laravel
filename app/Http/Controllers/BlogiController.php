<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogiController extends Controller
{
    public function blog1()
    {
        $id4= [1];
        $Blogs1= Blog::find($id4);

        return view('blogs.blog1', compact('Blogs1'));
    }
    public function blog2()
    {
        $id5= [2];
        $Blogs2= Blog::find($id5);

        return view('blogs.blog2', compact('Blogs2'));
    }
    public function blog3()
    {
        $id6= [3];
        $Blogs3= Blog::find($id6);

        return view('blogs.blog3', compact('Blogs3'));
    }
    
    public function blog4()
    {
        $id7= [4];
        $Blogs4= Blog::find($id7);

        return view('blogs.blog4', compact('Blogs4'));
    }
}
