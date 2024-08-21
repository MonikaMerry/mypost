<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('categoryNames')->get();
        // return $products;
        return view('Admin.ProductCategoryModules.Product.product-list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoryList = ProductCategory::get();
        return view('Admin.ProductCategoryModules.Product.create-product',compact('categoryList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // validation
         $validated = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            // 'product_images' => ['required','mimes:png,jpg,jpeg'],
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'discount' => 'required',
        ]);
        
        $product                 = new Product();
        $product->title          = $request->title;
        $product->category_id    = $request->category_id;
        $product->description    = $request->description;
        $product->price          = $request->price;
        $product->quantity       = $request->quantity;
        $product->discount       = $request->discount;
         // image logics
        $images = [];
        if ($files = $request->file('product_images')) {
           foreach ($files as $file) {
             $image_name      = md5(rand(1000,10000));
             $ext             = strtolower($file->getClientOriginalExtension());
             $image_full_name = $image_name.".".$ext;
             $upload_path      = ('product_images/');
             $image_url       = $upload_path . $image_full_name;
             $file->move($upload_path,$image_full_name);
             $images[] = $image_url;
            
        }
       }
       $product->image = implode('|',$images);
       $product->save();
       return redirect()->back()->with('success','Product Created Successfully');
      

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categoryList = ProductCategory::get();
        $edit_product = Product::find($id);
        return view('Admin.ProductCategoryModules.Product.edit-product',compact('categoryList','edit_product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
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
            'title' => 'required',
            'category_id' => 'required',
            // 'product_images' => ['required','mimes:png,jpg,jpeg'],
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'discount' => 'required',
        ]);

        $update_product                 = Product::find($id);
        $update_product->title          = $request->title;
        $update_product->category_id    = $request->category_id;
        $update_product->description    = $request->description;
        $update_product->price          = $request->price;
        $update_product->quantity       = $request->quantity;
        $update_product->discount       = $request->discount;
         // image logics
        $images = [];
        if ($files = $request->file('product_images')) {
           foreach ($files as $file) {
             $image_name      = md5(rand(1000,10000));
             $ext             = strtolower($file->getClientOriginalExtension());
             $image_full_name = $image_name.".".$ext;
             $upload_path      = ('product_images/');
             $image_url       = $upload_path . $image_full_name;
             $file->move($upload_path,$image_full_name);
             $images[] = $image_url;
            
        }
       }
       $update_product->image = implode('|',$images);
    //    return $update_product;
       $update_product->save();
       return redirect('product/product')->with('success','Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_product = Product::find($id);
        $delete_product->delete();

        return back()->with('danger','Product Deleted Successfully');
    }
}
