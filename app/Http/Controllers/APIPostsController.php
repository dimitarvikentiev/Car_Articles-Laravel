<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Image;

class APIPostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return $posts;
    }

    public function store(Request $request)
    {
        if($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(444, 250)->insert(public_path('uploads/images/watermark.png'), 'bottom-right')->save(public_path('/uploads/images/' . $filename));

            $post = new Post(array(
                'user_id' => $request->get('user_id'),
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'image' => $filename
            ));

            $post->save();
        }
        
        else
        {
            $post = Post::create($request->all());
        }

        return 'New article succesfully created!: ' . $post;
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return $post;
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        if($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(444, 250)->insert(public_path('uploads/images/watermark.png'), 'bottom-right')->save(public_path('/uploads/images/' . $filename));

            $post->update(array(
                'user_id' => $request->get('user_id'),
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'image' => $filename
            ));
        } 
        
        else 
        { 
            $post->update($request->all());
        }

        return 'This article is updated!: ' . $post;
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return 'This ariticle is deleted! ' . $post;
    }
}
