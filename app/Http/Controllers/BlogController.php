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
       $posts = Post::with('author')
                   ->latestFirst()
                   ->published()
                   ->paginate($this->limit);

       return view("blog.index", compact('posts'));
   }

   public function category(Category $category)
   {
       $categoryName = $category->title;

      //  \DB::enableQueryLog();
       $posts = $category->posts()
                   ->with('author')
                   ->latestFirst()
                   ->published()
                   ->paginate($this->limit);

        return view("blog.index", compact('posts', 'categoryName'));

         //dd(\DB::getQueryLog());
   }

  public function show(Post $post)
  {
    //$post = Post::findOrFail($id);
    return view("blog.show", compact('post'));
  }
}
