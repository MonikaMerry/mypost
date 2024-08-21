@extends('Admin.layouts.admin')
@section('main-content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Edit Post </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
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
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- success alert ends --}}

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Post</h4>
                            <p class="card-description"> Edit Post </p>
                            <form class="forms-sample" action="{{ url('post/post')}}/{{$edit_product->id}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputName1"
                                        placeholder="Name" value="{{ $edit_post->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Select Category</label>
                                    <select class="form-select" id="exampleSelectGender" name="category_id">
                                        <option>Select Category</option>
                                        @foreach ($categoryList as $category)
                                            <option @if ($category->id == $editPost->category_id) selected @endif
                                                value="{{ $category->id }}">
                                                {{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>File upload</label>
                                    <div class="input-group col-xs-12">

                                        @if ('post_images/{{ $editPost->post_image }}')
                                            @foreach (explode('|', $editPost->post_image) as $item)
                                                <div class="container images-shown">
                                                    <img src="{{ asset($item) }}" height="50" width="50">
                                                </div>
                                            @endforeach
                                        @else
                                            <p>No image found</p>
                                        @endif
                                        <br>
                                        <input type="file" name="post_images[]" multiple class="form-control file-upload-info" placeholder="Upload Image" value="{{ $editPost->post_image }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-gradient-primary me-2">Upadate</button>
                                <a href="{{ url('post/post') }}"> <button type="button"class="btn btn-gradient-info btn-fw ">Back</button></a>
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
