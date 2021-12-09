<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Image;
use Auth;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('posts.create', );
    }

    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'image' => 'required|image|max:8000',
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

    public function delete($id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();  // įvykdoma SQL užklausa, kuri pašalina duomenis iš DB
        return redirect('/settings/posts');
    }
}
