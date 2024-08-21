@extends('MyPost.layout.mypost')
@section('main-content')
{{-- @include('MyPost.configs.page-header') --}}
<div class="page-header d-flex align-items-center">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>{{$single_post->categoryNames->category_name}}</h2>
          <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>

          <a class="cta-btn" href="contact.html">Available for hire</a>
          <a class="cta-btn" href="{{url('user/user-page')}}">Back To Home</a>


        </div>
      </div>
    </div>
  </div>
<section class="single-post-content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 post-content" data-aos="fade-up">

          <!-- ======= Single Post Content ======= -->
              
          <div class="single-post">
            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>{{$single_post->created_at}}</span></div>
            <h1 class="mb-5">{{$single_post->title}}</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione officia sed, suscipit distinctio, numquam omnis quo fuga ipsam quis inventore voluptatum recusandae culpa, unde doloribus saepe labore alias voluptate expedita? Dicta delectus beatae explicabo odio voluptatibus quas, saepe qui aperiam autem obcaecati, illo et! Incidunt voluptas culpa neque repellat sint, accusamus beatae, cumque autem tempore quisquam quam eligendi harum debitis.</p>

            <figure class="my-4">
                @if ($single_post->post_image )
                 <img src="{{asset($single_post->post_image)}}" alt="" class="img-fluid"> 
                @endif
              <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit? </figcaption>
            </figure>
            <h5>Description</h5>
            <p class="mr-5">{{$single_post->description}}</p>
            <br>
            <p>Sunt reprehenderit, hic vel optio odit est dolore, distinctio iure itaque enim pariatur ducimus. Rerum soluta, perspiciatis voluptatum cupiditate praesentium repellendus quas expedita exercitationem tempora aliquam quaerat in eligendi adipisci harum non omnis reprehenderit quidem beatae modi. Ea fugiat enim libero, ipsam dicta explicabo nihil, tempore, nulla repellendus eos necessitatibus eligendi corporis cum? Eaque harum, eligendi itaque numquam aliquam soluta.</p>
          </div>
          
        
          
          <!-- End Single Post Content -->

        </div>
      </div>
    </div>
  </section>
@endsection