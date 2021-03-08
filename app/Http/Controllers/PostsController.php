<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view ('posts.index', ['posts' => $posts]);
       /* $posts = Post::latest()->paginate(5);
        return view('applicants.index',compact('applicants'))
        ->with('i', (request()->input('page', 1) - 1) * 5);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([

            'name' => 'required',
            'course' => 'required',
            'age' => 'required',
            'status' => 'required',
            'previous_job' => 'required',
    
        ]);

        Post::create([
            'name' => request('name'),
            'course' => request('course'),
            'age' => request('age'),
            'status' => request('status'),
            'previous_job' => request('previous_job'),
        ]);

            return redirect('/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post)
    {
       //dd(request()->all());

       request()->validate([

        'name' => 'required',
        'course' => 'required',
        'age' => 'required',
        'status' => 'required',
        'previous_job' => 'required',

    ]);

    $post->update([

        'name' => request('name'),
        'course' => request('course'),
        'age' => request('age'),
        'status' => request('status'),
        'previous_job' => request('previous_job'),

    ]);

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
  
        return redirect('/posts');
    }
}
