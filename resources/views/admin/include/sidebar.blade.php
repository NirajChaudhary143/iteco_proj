

<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start ms-0   bg-gradient-dark" id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <div class="navbar-brand m-0">
          <img src="{{asset('user/images/title_logo.jpg')}}" class="navbar-brand-img h-100" alt="main_logo" style="mix-blend-mode:color-burn;">
          <span class="ms-1 font-weight-bold text-white">ADMIN PANEL</span>
        </div>
      </div>
      <hr class="horizontal light mt-0 mb-2">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('admin.panel')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Users Settings</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person_add_alt</i>
              </div>
              <span class="nav-link-text ms-1">Add User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">manage_accounts</i>
              </div>
              <span class="nav-link-text ms-1">Change User Details</span>
            </a>
          </li>
          
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Projects Settings</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('add.project')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">library_add</i>
              </div>
              <span class="nav-link-text ms-1">Add Project</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="{{route('view.project')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">settings</i>
                </div>
                <span class="nav-link-text ms-1">Change Project Details</span>
              </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">News Settings</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('news.form')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Add News</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('view.news')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Edit News</span>
          </a>
      </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="#">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">notifications</i>
              </div>
              <span class="nav-link-text ms-1">Notifications</span>
            </a>
          </li>
          @if(!auth()->user())
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
          </li>
         
          <li class="nav-item">
            <a class="nav-link text-white " href="../pages/sign-in.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">login</i>
              </div>
              <span class="nav-link-text ms-1">Sign In</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../pages/sign-up.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">assignment</i>
              </div>
              <span class="nav-link-text ms-1">Sign Up</span>
            </a>
          </li>
          @endif
        </ul>
      </div>
      <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
          <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="btn btn-outline-light mt-4 w-100">Log Out</button>
            </form>
        </div>
      </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm opacity-6 text-dark" aria-current="page">Pages</li>
              <li class="breadcrumb-item text-sm opacity-6 text-dark" aria-current="page">{{$page_category}}</li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{$category_name}}</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">{{$page_title}}</h6>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group input-group-outline">
                <label class="form-label">Type here...</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
             
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
              </li>
              <li class="nav-item dropdown pe-2 d-flex align-items-center">                
                <a href="javascript:;" class="nav-link text-body" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-user me-sm-1"></i>
                </a>
  
                <ul class="dropdown-menu  dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                  <li>
                    <a class="dropdown-item border-radius-md" href="{{route('profile.edit')}}">Change Password</a>
                  </li>
                  
                  <li>
                    <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button class="dropdown-item border-radius-md">Log Out</button>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->