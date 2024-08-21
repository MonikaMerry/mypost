@extends('Admin.layouts.admin')
@section('main-content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Posts </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Posts</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Post Lists</h4>
              {{-- <p class="card-description"> Add class <code>.table</code>
              </p> --}}
                {{-- success alert --}}
                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert"
                      aria-label="Close"></button>
              </div>
                @endif
            
            {{-- success alert ends --}}
              {{-- danger alert --}}
              @if (Session::has('danger'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('danger') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
              @endif
          
          {{-- danger alert ends --}}
          <div class="table-responsive">
              <table class="table " >
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col" class="description">Description</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Posts</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $key=>$post)
                     <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{$post->categoryNames->category_name}}</td>
                        <td>
                            @foreach (explode('|',$post->post_image) as $item)
                                 <img src="{{asset($item)}}" alt="" id="images" class="img" height="150" weight="150">
                            @endforeach
                        </td>
                        <td>
                            <div class="row">
                            <a href="{{url('post/post')}}/{{$post->id}}"> <button type="button" class="btn btn-gradient-warning btn-fw " >Edit</button></a>
                            <form action="{{url('post/post')}}/{{$post->id}}" method="POST" enctype="multipart/form-data" > 
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-gradient-danger btn-fw " >Delete</button> 
                            </form> 
                        </div>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
      </div>
    </footer>
    <!-- partial -->
  </div>
@endsection

