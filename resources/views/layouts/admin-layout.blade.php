@extends('layouts.fixe-page')
@section('content')
    <aside class="menu-sidebar2">
        <div class="menu-sidebar2__content js-scrollbar1">
            <div class="account2">
                <div class="image img-cir img-120">
                    <img src="{{asset('Doc/img/54867 600px (2).jpg')}}" width="120" height="120" alt="John Doe" />
                </div>
                <h4 class="name">Ibrahim Khalil Atteib</h4>
                <a href="{{ route('logout') }}"    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            <nav class="navbar-sidebar2">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="/admin">
                            <i class="fas fa-tachometer-alt"></i>Dashbord
                        </a>
                    </li>
                    <li class="active has-sub">
                        <a class="js-arrow" href="/adminadd">
                            <i class="fas fa-tachometer-alt"></i>Add
                        </a>
                    </li>
                    <li>
                        <a href="/adminlist">
                            <i class="fas fa-chart-bar"></i>List</a>
                        <span class="inbox-num"></span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-shopping-basket"></i>Awaiting Approval</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-shopping-basket"></i>Approved Publication</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-shopping-basket"></i>No Approved</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-shopping-basket"></i>publication expired</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    @yield('admin')
    <div style="clear: left"></div>
    <div class="custom-pre-footer">
    </div>
@endsection
