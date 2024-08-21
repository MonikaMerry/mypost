@extends('Admin.layouts.admin')
@section('main-content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Products </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item " aria-current="page">Products</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Product Lists</h4>
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

              {{-- update alert --}}
              @if (Session::has('warning'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('warning') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
              @endif
          {{-- update alert ends --}}
          
              {{-- danger alert --}}
              @if (Session::has('danger'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('danger') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
              @endif
          
          {{-- danger alert ends --}}
          {{-- <div class="table-responsive"> --}}
              <table class="table" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key=>$product)
                     <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->categoryNames->category_name}}</td>
                        <td>
                            @foreach (explode('|',$product->image) as $item)
                                 <img src="{{asset($item)}}" alt="" id="images" class="img">
                            @endforeach
                        </td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount}}</td>
                        <td>
                            {{-- <div class="row"> --}}
                            <a href="{{url('product/product')}}/{{$product->id}}"> <button type="button" class="btn btn-gradient-warning btn-fw " >Edit</button></a>
                            <form action="{{url('product/product')}}/{{$product->id}}" method="POST" enctype="multipart/form-data" > 
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-gradient-danger btn-fw " >Delete</button> 
                            </form> 
                        {{-- </div> --}}
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            {{-- </div> --}}
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

