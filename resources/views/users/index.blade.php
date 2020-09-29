@extends('layouts.fixe-page')
@section('content')
    <!--? slider Area Start -->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center slide-bg"
                 style="background-image: url('{{asset('Doc/img/1411.jpg')}}'); background-size: cover">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                            <div class="col-md-6">
                                <img src="{{asset('assets/img/hero/LR.png')}}" alt="Luggage_Rental"
                                     data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms"/>
                                <h1 data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms"
                                    style="background-color: #0f192a; text-align: center; opacity: 80%; color: white; font-family: Javanese Text;padding-top: 10px ">
                                    You are in the right place
                                </h1>
                                <!-- Hero-btn -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center slide-bg"
                 style="background-image: url('{{asset('Doc/img/1411.jpg')}}'); background-size: cover">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                            <div class="col-md-6">
                                <img src="{{asset('assets/img/hero/LR.png')}}" alt="Luggage_Rental"
                                     data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms"/>
                                <h1 data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms"
                                    style="background-color: #0f192a; opacity: 80%; color: white; font-family: Javanese Text; padding-top: 10px">
                                    You are in the right place
                                </h1>
                                <!-- Hero-btn -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? Popular Items Start -->
    <div class="popular-items section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-70 text-center">
                        <h2>Popular Items</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
            <div class="justify-content-center">
                <div class="row">
                    @foreach($buy as $buys)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="card2">
                                <div class="card-header2">
                                    <table class="col-md-6" style="width: 100%">
                                        <tr>
                                            <th>From: {{$buys->from}}</th>
                                            <th>To: {{$buys->to}}</th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card2-body">
                                    <form method="post" style="width: 100%">
                                        <table class="tablist1">
                                            <tr>
                                                <th rowspan="2">Company Name: {{$buys->vol}} </th>
                                                <td colspan="2">Departure Date: {{$buys->date}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Departure Time: {{$buys->depart}}
                                                </td>
                                                <td>
                                                    Arrival Time: {{$buys->arrived}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="3" style="text-align: center"><h3>I can get {{$buys->kg}}Kg</h3></th>

                                            </tr>
                                        </table>
                                        <h2>
                                            Not
                                        </h2>
                                        <p>
                                            {{$buys->note}}
                                        </p>
                                    </form>
                                    <div class=" row justify-content-center">
                                        <button class="btn-primary">
                                            <a href="/profile">
                                                contact
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Button -->
            <div class="row justify-content-center">
                <div class="room-btn pt-70">
                    <a href="catagori.h" class="btn view-btn1">View More Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Items End -->
@endsection
