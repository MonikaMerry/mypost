<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('categoryNames')->get();
        return view('Admin.BlogModules.Post.post-list',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoryList = Category::get();
        return view('Admin.BlogModules.Post.create-post',compact('categoryList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    // validation
       $validated = $request->validate([
           'title' => 'required',
           'description' => 'required',
           'category_id' => 'required',
           'post_images' => ['required','mimes:jpeg,png,jpg'],
       ]);

       $createPost              = new Post();
       $createPost->title       = $request->title;
       $createPost->description = $request->description;
       $createPost->category_id = $request->category_id;
    // image logics
       $image = [];
       if ($files = $request->file('post_images')) {
          foreach ($files as $file) {
            $image_name      = md5(rand(1000,10000));
            $ext             = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name.".".$ext;
            $upload_path      = ('public/post_images/');
            $image_url       = $upload_path . $image_full_name;
            $file->move($upload_path,$image_full_name);
            $image[] = $image_url;
            
          }
       }
       $createPost->post_image = implode('|',$image);
    //    return $createPost;
       $createPost->save();
       
       return redirect()->back()->with('success','Post Created Successfully');
     
       

       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $editPost     = Post::find($id);
        $categoryList = Category::get();
        return view('Admin.BlogModules.Post.edit-post',compact('categoryList','editPost'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validation
    $validated = $request->validate([
        'title'       => 'required',
        'category_id' => 'required',
        'post_images' => ['required'],['mimes:png,jpg,jpeg'],
    ]);

    $updatePost              = Post::find($id);
    $updatePost->title       = $request->title;
    $updatePost->category_id = $request->category_id;

 // image logics
    $image = [];
    if ($files = $request->file('post_images')) {
       foreach ($files as $file) {
         $image_name      = md5(rand(1000,10000));
         $ext             = strtolower($file->getClientOriginalExtension());
         $image_full_name = $image_name.".".$ext;
         $upload_path     = ('public/post_images/');
         $image_url       = $upload_path . $image_full_name;
         $file->move($upload_path,$image_full_name);
         $image[] = $image_url;
         
       }
    }
    $updatePost->post_image = implode('|',$image);
    // return $updatePost;
    $updatePost->save();

    return redirect('post/post')->with('success','Post Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deletePost = Post::find($id);
        $deletePost->delete();

        return back()->with('danger','Post Deleted Successfully');
    }
}
