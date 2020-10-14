@extends('layouts.fixe-page')
@section('content')
    <!--? slider Area Start -->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider d-flex align-items-center slide-bg"
                 style="background-image: url('{{asset('Doc/img/1411.jpg')}}'); background-size: 100% 600px ;background-repeat: no-repeat; ">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                            <div class="col-md-6" style="padding-bottom: 40px">
                                <img src="{{asset('assets/img/hero/LR.png')}}" alt="Luggage_Rental"
                                     data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms"/>
                                <h3 data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms"
                                    style="background-color: #0f192a; text-align: center; opacity: 80%; color: white; font-family: Javanese Text;padding-top: 10px">
                                    You are in the right place
                                </h3>
                                <!-- Hero-btn -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider  d-flex align-items-center slide-bg"
                 style="background-image: url('{{asset('Doc/img/1411.jpg')}}'); background-size: 100% 600px ;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                            <div class="col-md-6" style="padding-bottom: 40px">
                                <img src="{{asset('assets/img/hero/LR.png')}}" alt="Luggage_Rental"
                                     data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms"/>
                                <h3 data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms"
                                    style="background-color: #0f192a; text-align: center; opacity: 80%; color: white; font-family: Javanese Text; padding-top: 10px">
                                    You are in the right place
                                </h3>
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
                        <h2>Sale Announcement</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="justify-content-center">
                <div class="row">
                    @forelse($buys as $buy)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="card2">
                                <div class="card-header2">
                                    <table style="width: 100%; text-align: left;">
                                        <tr>
                                            <th style="text-align: center">From: <h4
                                                    style=" text-transform: uppercase;color: #12fcfc;">{{$buy->from}}</h4>
                                            </th>
                                            <th style="text-align: center">To: <h4
                                                    style=" text-transform: uppercase;color: #12fcfc;">{{$buy->to}}</h4>
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card2-body">
                                    <form method="post" style="width: 100%">
                                        <table class="tablist1">
                                            <tr>
                                                <td rowspan="2">Company Name <h2
                                                        style="font-size: 20px">{{$buy->vol}}</h2></td>
                                                <td>Departure Date: {{$buy->date}}</td>
                                                <td>Arrival Date: {{$buy->arrival}}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Departure Time: {{$buy->depart}}
                                                </td>
                                                <td>
                                                    Arrival Time: {{$buy->arrived}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="3" style="text-align: center"><h3>I can get {{$buy->kg}}
                                                        Kg</h3></th>

                                            </tr>
                                        </table>
                                        <h2>
                                            Not
                                        </h2>
                                        <p>
                                            {{$buy->note}}
                                        </p>
                                    </form>
                                    <div class=" row justify-content-center">
                                        <button class="btn-primary">
                                            <a href="/detail/{{$buy->created_by}}">
                                                contact
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                        </div>
                    @empty
                        <center>
                                <div class="col-md-12 col-lg-10" style="background-color: white">
                                    <div class="card" style="border-color: #ffffff; background-color: white;">
                                        <div class="card-header1" style="background-color: white">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h3 >No Sales</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div>
                                            <figure class=" col-md-6 col-lg-6" style="text-align: center; background-color: white ">
                                                <img src="{{asset('assets/images/sanfur.png')}}" alt="Empty"
                                                     style="width: 100%;">
                                                <figcaption>
                                                    <h1 style="text-align: center;font-size: 25px; color:black;">
                                                        There are no
                                                        publications for the
                                                        moment</h1>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                        </center>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Items End -->
@endsection
