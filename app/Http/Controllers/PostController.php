<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
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
            'location' => '',
            'caption' => 'required',
            'image' => ['required', 'image']
        ]);
        $imagePath = \request('image')->store('uploads', 'public');

        auth()->user()->posts()->create([
            'caption'=> $data['caption'],
            'image'=> $imagePath,
            'location'=>$data['location']
        ]);
        return redirect('/profile/' . \auth()->user()->id);
    }
}
