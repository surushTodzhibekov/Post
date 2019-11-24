<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class BlogController extends Controller
{
  protected $limit = 5;

  public function index()
   {
       $categories = Category::with(['posts' => function($query) {
           $query->published();
       }])->orderBy('title', 'asc')->get();

       $posts = Post::with('author')
                   ->latestFirst()
                   ->published()
                   ->paginate($this->limit);

       return view("blog.index", compact('posts', 'categories'));
   }

   public function category($id)
   {
       $categories = Category::with(['posts' => function($query) {
           $query->published();
       }])->orderBy('title', 'asc')->get();

       // \DB::enableQueryLog();
       $posts = Post::with('author')
                   ->latestFirst()
                   ->published()
                   ->where('category_id', $id)
                   ->paginate($this->limit);

        return view("blog.index", compact('posts', 'categories'));

       //  dd(\DB::getQueryLog());
   }

  public function show(Post $post)
  {
    //$post = Post::findOrFail($id);
    return view("blog.show", compact('post'));
  }
}
