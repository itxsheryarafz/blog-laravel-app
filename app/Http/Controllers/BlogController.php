<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    function index()
    {
        return view('test');
    }

    function store(Request $req)
    {
        $blog = new Blog();

        $blog->name = $req->input('name');
        $blog->description = $req->input('description');

        $blog->save();

        return redirect()->route('getdata');
    }

    function show()
    {
        $users = Blog::all();
        // $users=DB::select('select * from blog') ;
        return view('data', ['blog' => $users]);
        // $blog=new Blog();
        // $d=Blog::all();
        // return view('data',compact('d'));
    }

    function delete($id)
    {
    }
}
