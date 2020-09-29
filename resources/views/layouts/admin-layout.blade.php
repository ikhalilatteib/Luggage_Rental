<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luggage Rental</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ozel.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendors/chartjs/Chart.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/img/hero/LR.png')}}" type="image/x-icon">
</head>
<body>
<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <img src="{{asset('assets/img/logo/Luggage_Rental.png')}}" alt="" srcset="">
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class='sidebar-title'>Main Menu</li>
                    <li class="sidebar-item active ">
                        <a href="/admin" class='sidebar-link'>
                            <i data-feather="home" style="color:black;width:40px;height: 20px "></i>
                            <span>Dashboard</span>
                        </a>

                    </li>


                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="triangle" style="color:black;width:40px;height: 20px "></i>
                            <span>Admin Operations</span>
                        </a>

                        <ul class="submenu">

                            <li>
                                <a href="/adminadd">Add User</a>
                            </li>

                            <li>
                                <a href="/cree">Add Admin</a>
                            </li>

                            <li>
                                <a href="/adminlist">Update User</a>
                            </li>

                            <li>
                                <a href="/adminlist">Delete User</a>
                            </li>

                        </ul>

                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="briefcase" style="color:black;width:40px;height: 20px "></i>
                            <span>Sales Operations</span>
                        </a>

                        <ul class="submenu">

                            <li>
                                <a href="/buy">Add Sale</a>
                            </li>
                            <li>
                                <a href="/now">All Salls </a>
                            </li>
                            <li>
                                <a href="{{route('approve.sales')}}">Approve Sale</a>
                            </li>
                            <li>
                                <a href="/waiting">Waiting Sale</a>
                            </li>
                            <li>
                                <a href="{{route('unapprove')}}">No Approved Sale</a>
                            </li>
                        </ul>

                    </li>


                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="file-text" style="color:black;width:40px;height: 20px "></i>
                            <span>Lists</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="/adminler">Admin List</a>
                            </li>

                            <li>
                                <a href="/adminlist">Users List</a>
                            </li>

                        </ul>

                    </li>


                    <li class="sidebar-item  ">
                        <a href="table-datatable.html" class='sidebar-link'>
                            <i data-feather="file-plus" style="color:black;width:40px;height: 20px "></i>
                            <span>TODO list</span>
                        </a>

                    </li>


                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="trending-up" style="color:black;width:40px;height: 20px "></i>
                            <span>Satistic</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="ui-chart-chartjs.html">ChartJS</a>
                            </li>

                            <li>
                                <a href="ui-chart-apexchart.html">Apexchart</a>
                            </li>

                        </ul>

                    </li>


                    <li class='sidebar-title'>Pages</li>


                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="user" style="color:black;width:40px;height: 20px "></i>
                            <span>Authentication</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="auth-login.html">Login</a>
                            </li>

                            <li>
                                <a href="auth-register.html">Register</a>
                            </li>

                            <li>
                                <a href="auth-forgot-password.html">Forgot Password</a>
                            </li>

                        </ul>

                    </li>


                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="alert-circle" style="color:black;width:40px;height: 20px "></i>
                            <span>Errors</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="error-403.html">403</a>
                            </li>

                            <li>
                                <a href="error-404.html">404</a>
                            </li>

                            <li>
                                <a href="error-500.html">500</a>
                            </li>

                        </ul>

                    </li>


                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x" style="color:black;width:40px; "></i></button>
        </div>
    </div>
    <div id="main">
        <nav class="navbar navbar-header navbar-expand navbar-light">
            <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
            <button class="btn navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                    <li class="dropdown nav-icon">
                        <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-lg-inline-block">
                                <i data-feather="bell"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                            <h6 class='py-2 px-4'>Notifications</h6>
                            <ul class="list-group rounded-none">
                                <li class="list-group-item border-0 align-items-start">
                                    <div class="avatar bg-success mr-3">
                                        <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                    </div>
                                    <div>
                                        <h6 class='text-bold'>New Order</h6>
                                        <p class='text-xs'>
                                            An order made by Ahmad Saugi for product Samsung Galaxy S69
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown nav-icon mr-2">
                        <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-lg-inline-block">
                                <i data-feather="mail"></i>
                            </div>
                        </a>
                    </li>
                    @guest
                        <li class="dropdown nav-icon mr-2">
                            <a href="{{ route('login') }}">
                                <span data-feather="user" class="flaticon-user"></span>
                            </a>
                        </li>
                    @else
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"
                               class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar mr-1">
                                    <img src="" alt="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block"> {{ Auth::user()->name }}</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="/profile/{{Auth::user()->id}}"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <div class="main-content container-fluid">
            @yield('content')
        </div>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-left">
                    <p>2020 &copy; Voler</p>
                </div>
                <div class="float-right">
                    <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a
                            href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="{{asset('assets/js/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>

<script src="{{asset('assets/vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/js/pages/dashboard.js')}}"></script>
<script src="{{asset('assets/js/main1.js')}}"></script>
</body>
</html>
