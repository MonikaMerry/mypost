@extends('Admin.layouts.admin')
@section('main-content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Create Product </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Product</li>
                    </ol>
                </nav>
            </div>
              {{-- validation alert --}}
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          {{-- validation alert ends --}}

          {{-- success alert --}}
              @if (Session::has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
              @endif
          
          {{-- success alert ends --}}

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create Product</h4>
                            <p class="card-description"> Create Product </p>
                            <form class="forms-sample" action="{{ url('product/product') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control"
                                        placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="">Select Category</label>
                                    <select class="form-select" id="" name="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categoryList as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>File upload</label>
                                    <div class="input-group">
                                        <input type="file" name="product_images[]" multiple class="form-control" placeholder="Upload Image">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Description</label>
                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Price</label>
                                    <input type="number" name="price" class="form-control" id="exampleInputName1"
                                        placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Quantity</label>
                                    <input type="number" name="quantity" class="form-control" id="exampleInputName1"
                                        placeholder="Quantity">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Discount</label>
                                    <input type="number" name="discount" class="form-control" id="exampleInputName1"
                                        placeholder="Discount">
                                </div>
                               
                                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                <a href="{{url('post/post')}}"> <button type="button" class="btn btn-gradient-info btn-fw " >Back</button></a>   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a
                        href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                        class="mdi mdi-heart text-danger"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
