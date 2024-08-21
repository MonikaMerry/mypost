<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="profile" />
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">David Grey. H</span>
            <span class="text-secondary text-small">Project Manager</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#cate" aria-expanded="false" aria-controls="cate">
          <span class="menu-title">Product Category</span>
          <i class="menu-arrow"></i>
          <i class="fa fa-cubes menu-icon"></i>
        </a>
        <div class="collapse" id="cate" >
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{url('productcategory/category/create')}}">Create Product Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('productcategory/category')}}">List Product Category</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
          <span class="menu-title">Product</span>
          <i class="menu-arrow"></i>
          <i class="fa fa-tasks menu-icon"></i>
        </a>
        <div class="collapse" id="product">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{url('product/product/create')}}">Create Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('product/product')}}">List Products</a>
            </li>
          </ul>
        </div>
      </li>

   
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
          <span class="menu-title">Category</span>
          <i class="menu-arrow"></i>
          <i class=" fa fa-book menu-icon"></i>
        </a>
        <div class="collapse" id="category">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{url('category/category')}}">Category Lists</a>
            </li>
          </ul>
        </div>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#post" aria-expanded="false" aria-controls="post">
          <span class="menu-title">Post</span>
          <i class="menu-arrow"></i>
          <i class="fa fa-camera menu-icon"></i>
        </a>
        <div class="collapse" id="post">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{url('post/post/create')}}">Create Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('post/post/')}}">Post Lists</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-lock menu-icon"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/login.html"> Login </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/register.html"> Register </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
   {{-- <hr>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span class="menu-title">Blog</span>
          <i class="fa fa-photo menu-icon"></i>
        </a>
      </li>
      --}}
        {{-- <li class="nav-item">
              <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
            </li> --}}
      {{-- <li  class="nav-item">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="heading0">
              <h3 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse0" aria-expanded="false" aria-controls="collapse0">textMain</button>
              </h3>
            </div>
            <div id="collapse0" class="collapse" aria-labelledby="heading0" data-parent="#accordion">
              <div class="card-body">
                <div class="card">
                  <div class="card-header" id="heading0_1">
                    <h3 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse0_1" aria-expanded="false" aria-controls="collapse0_1">sub-collapse text</button>
                    </h3>
                  </div>
                  <!-- remove data-parent here or set to "#collapse0" -->
                  <div id="collapse0_1" class="collapse" aria-labelledby="heading0_1">
                    <div class="card-body">
                      <p>text</p>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </li> --}}