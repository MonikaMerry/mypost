<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.config.link')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->

        @include('Admin.config.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            
            @include('Admin.config.sidebar')

            <!-- partial -->
          @yield('main-content')
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->


    {{-- script starts --}}

    @include('Admin.config.script')

   {{-- script ends --}}

</body>

</html>
