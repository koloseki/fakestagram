<?php

namespace App\Http\Controllers;

use Illuminate\Http;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Intervention\Image\Image;

class PostsContoller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image'],
        ]);

        $imagePath = request('image')->store('uploads','public');

        $manager = new ImageManager(new Driver());
        $image = $manager->read(public_path("storage/{$imagePath}"));
        $image->cover(1200, 1200,'center');

        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);


        return redirect('/profile/' .auth()->user()->id);

    }

    public function show(\App\Models\Post $post)
    {
        return view('posts.show',compact('post'));
    }
}
