<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::with('comments')->orderBy('created_at', 'DESC')->paginate(10);

        return view('post.index', compact('posts'));

    }


    public function show($id)
    {
        $posts=Post::with(['comments.user','user'])->find($id);
        $postscomentarios=$posts->comments()->orderBy('created_at', 'DESC')->paginate(8);


        return view('post.comentar', compact('posts','postscomentarios'));

    }



    public function store(Request $request){
       $request->user()->posts()->create($request->all());

      return redirect('post')->withSuccess('post realizado com sucesso!');;

    }
}
