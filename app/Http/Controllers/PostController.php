<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(): void
    {

        $arr = [
            'author' => 'Joao',
            'title' => 'Meu titulo',
            'content' => 'conteudo'
        ];

        $post = new Post($arr);
        $post->save();
    }

    public function read()
    {
        $posts = new Post();
        return $posts::find(1);
    }

    public function readAll(): string
    {
        return Post::all();
    }

    public function update()
    {
        return Post::where('id', 2)->update([
            'title' => 'Novo titulo'
        ]);
    }

    public function delete()
    {
        return Post::where('id','=','3')->delete();
    }
}
