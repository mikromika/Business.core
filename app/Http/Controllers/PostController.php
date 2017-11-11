<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Requests\StorePost as StorePostRequest;
use App\Http\Requests\UpdatePost as UpdatePostRequest;
use Auth;
use Gate;


class PostController extends Controller
{
  public function index()    //posts list
{
    $posts = Post::published()->paginate();
    return view('posts.index', compact('posts'));
}

public function all()    //posts list
{
  //$posts = Post::all;
  $posts = Post::published()->paginate();
  return view('posts.public', compact('posts'));
}

    public function create ()     //Http get method

    {
      return view('posts.create');
    }

    public function store(StorePostRequest $request)     //Http post method
{
    $data = $request->only('title', 'body');
    $data['slug'] = str_slug($data['title']);
    $data['user_id'] = Auth::user()->id;
    $post = Post::create($data);
    return redirect()->route('edit_post', ['id' => $post->id]);
}

    public function drafts()     // list of all posts if published bit is set 0
{                                // post model: where('published', false);

  $postsQuery = Post::unpublished();
  if(Gate::denies('see-all-drafts')) {
      $postsQuery = $postsQuery->where('user_id', Auth::user()->id);
  }
  $posts = $postsQuery->paginate();
  return view('posts.drafts', compact('posts'));
}

public function edit(Post $post)       //Http get method
{
    return view('posts.edit', compact('post'));
}

public function update(Post $post, UpdatePostRequest $request)     //Http post method
{
    $data = $request->only('title', 'body');
    $data['slug'] = str_slug($data['title']);
    $post->fill($data)->save();
    return back();
}
public function publish(Post $post)
{
    $post->published = true;
    $post->save();
    return back();
}
public function show($id)     //single posts
{
    $post = Post::published()->findOrFail($id);
        return view('posts.show', compact('post'));
}

}
