<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        session()->flush();
        $posts = Post::paginate(2);

        return view('dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id', 'title');
        $post = new Post();

        return view('dashboard.post.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Post::create($request->validated());
        return to_route('post.index')->with('status', 'Post created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');
        return view('dashboard.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        $data = $request->validated();


        if (isset($data['image'])) {
            $data['image'] = $filename = time().'.'.$data['image']->extension();
            $request->image->move(public_path('uploads/posts'), $filename);
        }

        $post->update($data);
        return to_route('post.index')->with('status', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();
        return to_route('post.index')->with('status', 'Post eliminated');
    }
}
