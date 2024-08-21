<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $postCount     = Post::count();
        $categoryCount = Category::count();

        return view('Admin.admin-dashboard',compact('postCount','categoryCount'));
    } 
}
   
