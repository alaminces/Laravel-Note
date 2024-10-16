<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::paginate(10);
        return view('posts.index',compact('posts'));
    }
   
    // soft delete
    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
   

    // trashed posts
    public function trashedPosts() {
        $trashedPosts = Post::onlyTrashed()->get();
        return view('posts.trashed-post',compact('trashedPosts'));
    }

    // restore post
    public function restore($id) {
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->restore();
        return redirect()->back();
    }

     // force delete / permanantly delete
    public function force_delete($id) {
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->forceDelete();
        return redirect()->back();
    }

    // with trashed posts
    public function withTrashedPosts() {
        $withTrashedPosts = Post::withTrashed()->orderByDesc('deleted_at')->paginate(5);
        return view('posts.with_trashed',compact('withTrashedPosts'));
    }
}
