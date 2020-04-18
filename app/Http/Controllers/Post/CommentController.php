<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Notifications\PostCommented;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
         $comment=$request->user()->comments()->create($request->all());

         $author=$comment->post->user;
      /*  $author->notify(new PostCommented($comment));*/

        return redirect()->route('posts', $comment->post_id)
            ->withSuccess('Comentario realizado com sucesso!');
        
    }
}
