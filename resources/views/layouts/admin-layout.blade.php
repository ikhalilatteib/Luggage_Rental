<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Luggage Rental</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/base/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/jquery-bar-rating/fontawesome-stars-o.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/jquery-bar-rating/fontawesome-stars.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ozel.css')}}">

    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets/img/hero/LR.png')}}"/>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
             style="background-color: white">
            <a class="navbar-brand brand-logo" href="/"><img src="{{asset('assets/img/logo/luggage_rental.png')}}"
                                                             alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="/"><img src="{{asset('assets/img/hero/LR.png')}}" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-search d-none d-lg-block">
                    <div class="input-group">
                        <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search"
                               aria-describedby="search">
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                @guest
                    <li class="nav-item dropdown d-flex mr-4 ">
                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                           id="notificationDropdown" href="{{ route('login') }}">
                            <i class="icon-head"></i>
                        </a>
                    </li>
                @else
                    <li class="nav-item dropdown d-flex mr-4 ">
                        <a href="" data-toggle="dropdown"
                           class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-none d-md-block d-lg-inline-block"> {{ Auth::user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                             aria-labelledby="notificationDropdown">
                            <a class="dropdown-item preview-item" href="/profile/{{Auth::user()->id}}"> <i
                                    class="icon-head"></i> Account</a>
                            <a class="dropdown-item preview-item" href="{{route('contact')}}"><i class="icon-mail"></i>
                                Messages</a>
                            <a class="dropdown-item preview-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="icon-inbox"></i>{{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <li class="nav-item dropdown mr-4 d-lg-flex d-none">
                    <a class="nav-link count-indicatord-flex align-item s-center justify-content-center" href="/">
                        <i class="mdi mdi-home-outline"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: white ">
            <div class="user-profile">
                <div class="user-image">
                    <img src="{{asset('uploads/admin/admin_5f85f9b08f407.jpg')}}" alt="admin">
                </div>
                <div class="user-name" style="color:black;">
                    I.KHALIL ATTEIB YACOUB
                </div>
                <div class="user-designation" style="color:black;">
                    Administrator
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}">
                        <i class="icon-box menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth"
                       style="border-top: 1px solid red ">
                        <i class="icon-head menu-icon"></i>
                        <span class="menu-title">Basic Action</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('create')}}"> Add Admin </a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('add.users')}}"> Add User </a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('users.list')}}">
                                    Uploads/Deletes </a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('deleted.user')}}">
                                    deleted accounts </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                       aria-controls="ui-basic" style="border-top: 1px solid red">
                        <i class="icon-disc menu-icon"></i>
                        <span class="menu-title">Sales Operations</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('sale')}}">Add Sale</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('now')}}">All Sales</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('approve.sales')}}">Approved
                                    Sales</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('waiting')}}">Waiting Sales</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('unapprove')}}">Unapproved Sales</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{route('deleted.sale')}}">Deleted Sales</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('users.list')}}">
                        <i class="icon-file menu-icon"></i>
                        <span class="menu-title">Users List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="border-top: 1px solid red">
                        <i class="icon-pie-graph menu-icon"></i>
                        <span class="menu-title">Charts</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">
                        <i class="icon-help menu-icon"></i>
                        <span class="menu-title">Inbox</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="icon-book menu-icon"></i>
                        <span class="menu-title">Terms & Conditions</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
        @include('layouts.alert')
        @yield('content')
        <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a
                            href="{{route('home')}}" >Luggage Rental</a>. All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- base:js -->
<script src="{{asset('admin/vendors/base/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('admin/js/off-canvas.js')}}"></script>
<script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('admin/js/template.js')}}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admin/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{asset('admin/js/dashboard.js')}}"></script>
<script src="{{asset('admin/js/chart.js')}}"></script>
<!-- End custom js for this page-->
</body>
</html>

