<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#untuk memanggil model buku yang sudah dibuat
use App\Models\Post;
class LatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $data_posts = Post::all()->sortByDesc('id');

        return view('posts.index', compact('data_posts'));
    }

    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){
        $posts = new posts;
        $posts->image = $request->image;
        $posts->title =$request-> title;
        $posts->content=$request->content;
        $posts->save();
        return redirect('/posts');
    }

    public function destroy($id) {
        $posts = posts::find($id);
        $posts->delete();
        return redirect('/posts');
    }
    public function update(Request $request, $id){
        $posts = posts::find($id);
        $posts->image = $request->image;
        $posts->title = $request->title;
        $posts->content=$request->content;
        $posts->update();
        return redirect('/posts');
    }
    public function edit($id){
        $posts = posts::find($id);
        return view('posts.edit', compact('posts'));
    }
}


    
