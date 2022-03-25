<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        

        $id4= [1];
        $Blogs1= Blog::find($id4);
        $id5= [2];
        $Blogs2= Blog::find($id5);
        $id6= [3];
        $Blogs3= Blog::find($id6);
        $id7= [4];
        $Blogs4= Blog::find($id7);

        return view('blogs.blog',  compact('Blogs1', 'Blogs2', 'Blogs3', 'Blogs4'));
        







    }
}
