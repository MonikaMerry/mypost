<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // all post page
    public function userPage(){
        $posts = Post::get();
        return view('MyPost.mypost-dashboard',compact('posts'));
    }

    // category list on navbar
    public function categoryList(){
        $categories = Category::get();
        return view('MyPost.configs.navbar',compact('categories'));
    }

    // category related post
    public function showPost($id){
        $category_posts = Category::with('posts')->find($id);
        return view('MyPost.layout.category-post',compact('category_posts'));
    }

    // show single post details
    public function singlePost($id){
        $single_post = Post::with('categoryNames')->find($id);
        return view('MyPost.layout.single-post',compact('single_post'));
    }


}
