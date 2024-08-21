<!DOCTYPE html>
<html lang="en">

<head>
     @include('MyPost.configs.header')
</head>

<body>

  <!-- ======= Header ======= -->
     @include('MyPost.configs.navbar')
  <!-- End Header -->
      
  {{-- <!-- ======= Hero Section ======= -->
     @include('MyPost.configs.hero-section')
  <!-- End Hero Section --> --}}

  <!-- Main -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->

       @yield('main-content')

    <!-- End Gallery Section -->

  </main>

  <!-- End #main -->


  <!-- ======= Footer ======= -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

   @include('MyPost.configs.footer')

  {{-- script starts --}}
      @include('MyPost.configs.script')
  {{-- script ends --}}

</body>

</html>
