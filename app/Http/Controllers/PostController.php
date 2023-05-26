<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show(Post $post){
        $next = Post::where('id', '>', $post->id)
            ->oldest('id')
            ->first();

        $prev = Post::where('id', '<', $post->id)
            ->latest('id')
            ->first();

        return view('pages.post',[
            'post'=>$post,
            'next'=>$next,
            'prev'=>$prev,
        ]);
    }

    public function history(){
        $category = Category::find(1);
        $posts = $category->posts;
        return view('pages.history',compact('category','posts'));
    }

    public function library(){
        $category = Category::find(2);
        $posts = $category->posts;
        return view('pages.library',compact('category','posts'));
    }

}
