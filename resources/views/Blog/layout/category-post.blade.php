@extends('MyPost.layout.mypost')
@section('main-content')
@include('MyPost.configs.page-header')
<section id="gallery" class="gallery">
    <div class="container-fluid">
      <div class="row gy-4 ">
        @if ($category_posts->count() > 0)
        
        @foreach ($category_posts->posts as $post)
       @if ($post->post_image)
        @foreach (explode('|', $post->post_image)  as $image)
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="gallery-item card">
               <img src="{{ asset($image) }}" class=" card-img-top" alt=""  height="150px" width="50px">

              <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text"> {{$post->description}}</p>
              </div>
            {{-- <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{asset($image)}}" title="{{$post->title}}" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              <a href="" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div> --}}
          </div>
          
        </div><!-- End Gallery Item -->
        @endforeach
        @endif
        @endforeach
        @endif
      </div>
    


    </div>
  </section>
@endsection