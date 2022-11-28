<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    //Cotrolador para los posts

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:32'
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->save();

        return redirect()->route('posts')->with('success', 'Post creado correctamente');
    }

    // Clase para mostrar todos los posts

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    // Clase para editartodos los posts

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    // Clase para mostrar mensaje al actualizar los posts

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->save();

        // dd($request); debuging
        return redirect()->route('posts')->with('success', 'Post actualizado!');
    }

     // Clase para eliminar los posts
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts')->with('success', 'Post eliminado!');
    }
}
