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

    function deleterecord($id)
    {

        echo $id;
        $user = Blog::find($id);
        $user->delete();

        return redirect()->route('getdata');
        // $users = Blog::delete($id);
        // return view('/test');
    }


    function updateform()
    {
        return view('update');
    }

    function showdata($id)
    {
        $users = Blog::find($id);
        return view('update', ['blog' => $users]);
    }

    function postdata(Request $req)
    {
        $id = $req->input('userid');
        $blog = Blog::find($id);

        $inputs = $req->all();
        // dd($inputs);
        $blog->name = $inputs['name'];
        $blog->description = $inputs['description'];
        $blog->update();

        return redirect()->route('getdata');

        // DB::update('Update blog set name=?,description=? where id=?', [$name, $description, $id]);

        // echo "Record Updated";
    }
}
