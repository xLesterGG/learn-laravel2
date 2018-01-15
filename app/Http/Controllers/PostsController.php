<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use Carbon\Carbon;

class PostsController extends Controller
{

    public function __contruct(){
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(){

        $posts = Post::latest()
        ->filter(request(['month','year']))
        ->get();


        $archives = Post::selectRaw('year(created_at) year,monthname(created_at) month, count(*) published')
        ->groupBy('year','month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();

        return view('posts.index',compact('posts','archives'));
    }

    public function show(Post $post){ //route model binding

        // $post = Post::find($id);
        return view ('posts.show',compact('post'));
    }

    public function create(){
        return view ('posts.create');
    }

    public function store(){
        // $post = new Post;
        //
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->save();


        // Post::create([
        //     'title' => request('title'),
        //     'body' => request('body')
        // ]);

        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required'
        ]);
        // Post::create(request(['title','body']));

        auth()->user()->publish(
            new Post(request(['title','body']))
        );


        return redirect('/');
    }
}
