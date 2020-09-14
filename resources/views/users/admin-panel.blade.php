@extends('layouts.fixe-page')
@section('content')
    <div class="custom-pre-footer">
    </div>
    <aside class="menu-sidebar2">
        <div class="menu-sidebar2__content js-scrollbar1">
            <div class="account2">
                <div class="image img-cir img-120">
                    <img src="{{asset('Doc/img/54867 600px (2).jpg')}}" width="120" height="120" alt="John Doe" />
                </div>
                <h4 class="name">Ibrahim Khalil Atteib</h4>
                <a href="#">Sign out</a>
            </div>
            <nav class="navbar-sidebar2">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="/adminadd">
                            <i class="fas fa-tachometer-alt"></i>Add
                            <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="/adminlist">
                            <i class="fas fa-chart-bar"></i>List</a>
                        <span class="inbox-num"></span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-shopping-basket"></i>eCommerce</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-trophy"></i>Features
                            <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="table.html">
                                    <i class="fas fa-table"></i>Tables</a>
                            </li>
                            <li>
                                <a href="form.html">
                                    <i class="far fa-check-square"></i>Forms</a>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <i class="fas fa-calendar-alt"></i>Calendar</a>
                            </li>
                            <li>
                                <a href="map.html">
                                    <i class="fas fa-map-marker-alt"></i>Maps</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Pages
                            <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div style="clear: left"></div>
    <div class="custom-pre-footer">
    </div>
@endsection
