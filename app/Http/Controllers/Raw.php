<?php

namespace App\Http\Controllers;
use App\Tag;
use App\Post;


use Illuminate\Http\Request;

class Raw extends Controller
{ 
    //HOME
    public function rawValues(){
        $tags = Tag::all();
        $posts = Post::all();
        return view('pages.raw', compact(['tags', 'posts']));
    }

   //post ID sort
    public function postIdAsc(){
        $tags = Tag::all();
        $posts = Post::all();
        return view('pages.raw', compact(['tags', 'posts']));
    }
    public function postIdDesc(){
        $tags = Tag::all();
        $posts = Post::orderBy('id', 'desc')->get();
        return view('pages.raw', compact(['tags', 'posts']));
    }

    //post TITLE sort
    public function postTitleAsc(){
        $tags = Tag::all();
        $posts = Post::orderBy('title', 'asc')->get();
        return view('pages.raw', compact(['tags', 'posts']));
    }

    public function postTitleDesc(){
        $tags = Tag::all();
        $posts = Post::orderBy('title', 'desc')->get();
        return view('pages.raw', compact(['tags', 'posts']));
    }
}
