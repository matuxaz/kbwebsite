<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'image' => 'required|image',
            'description' => 'required',
        ]);

        $image = request()->file('image');
        $filename=time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->fit(1200, 1200)->save(public_path('/storage/images/'.$filename));

        auth()->user()->posts()->create([
            'title' => $data['title'],
            'image' => $filename,
            'description' => $data['description'],
        ]);

        return redirect('/profile/'.auth()->user()->id);
    }

    public function show(\App\Models\Post $post){
        return view('posts.show', compact('post'));
    }
}
