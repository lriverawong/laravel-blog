<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // bring in the model
        // namespace of App and title of Post
        // ======= eloquent =====
//        $posts = Post::all();
        // ordering by title
//        $posts = Post::orderBy('title', 'asc')->get();
        $posts = Post::orderBy('created_at', 'desc')->get();
//        return Post::where('title', 'Post 2')->get();

        // ===== RAW QUERIES ======
//        $posts = DB::select('SELECT * FROM posts');

        // getting a single post
//        $posts = Post::orderby('title', 'desc')->take(1)->get();

        // pagination
//        $posts = Post::orderBy('created_at', 'desc')->paginate(1);
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);


        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // the submission is prevented unless the following validation is verified...
        $this->validate($request, [
           'title' => 'required',
           'body' => 'required'
        ]);

        // create post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
//        return Post::find($id);
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
