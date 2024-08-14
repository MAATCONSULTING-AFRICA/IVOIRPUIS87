<?php

namespace App\Http\Controllers\backend;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(Request $request){

       $query = Post::query();

       if ($request->has('category') && $request->category != 'All Category') {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('id', $request->category);
            });
        }
        if ($request->has('sort')) {
            if ($request->sort == 'Recent') {
                $query->orderBy('created_at', 'desc');
            } elseif ($request->sort == 'Popular') {
                $query->orderBy('created_at', 'desc');
            }
        }
        $posts = $query->with(['category', 'user'])->paginate(10);

        $categories = Category::all();

            return view('backend.blog.index', [
                'posts' => $posts,
                'categories' => $categories,
            ]);
    }
    public function show($id){
        $post = Post::with(['comments.user', 'tags', 'likes', 'user'])->findOrFail($id);

        $comments = $post->comments()->paginate(3);
        return view('backend.blog.show', [
            'post' => $post,
            'comments'=> $comments,
        ]);
    }
}
