@extends('layouts.fixe-page')
@section('content')
    <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <!-- Hero Area End-->
    <center>
        <div class="col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow" style="border-color: #f6f3f3">
                <div class="card-header1">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Sale Details</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="#!" class=" btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="background-color: white;padding-bottom: 100px">
                    <form>
                        <h2 style="font-size: 30px;color:red;"><br>User information</h2>
                        <br>
                        <br>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-username">First Name</label>
                                        <div class="col-md-6" style="background-color: white"><h2
                                                style="text-align: center">{{$user->name}}</h2></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Last Name</label>
                                        <div class="col-md-6" style="background-color: white"><h2
                                                style="text-align: center">{{$user->last_name}}</h2></div>
                                    </div>
                                </div>
                            </div>
                            <hr style="color: black; border: 1px solid black">
                            <div class="card2" style="border: 1px solid white">
                                <div>
                                    <table style="width: 100%; text-align: left;">
                                        <tr>
                                            <th style="text-align: center">From: <h1
                                                    style=" text-transform: uppercase;color: black;">{{$buys->from}}</h1>
                                            </th>
                                            <th style="text-align: center">To: <h1
                                                    style=" text-transform: uppercase;color: black;">{{$buys->to}}</h1>
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card2-body" style="text-align: left">
                                    <form method="post" style="width: 100%">
                                        <table class="tablist2">
                                            <tr>
                                                <td rowspan="2">Company Name <h2
                                                        style="font-size: 30px;">{{$buys->vol}}</h2></td>
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
                                                <th colspan="3" style="text-align: center">
                                                    <h3 style="font-size: 20px;color:blue;">I can get {{$buys->kg}}
                                                        Kg</h3>
                                                </th>

                                            </tr>
                                        </table>
                                        <h3 style="font-size: 20px; font-family: 'Times New Roman'; background-color: #0c2e60;color: white;text-align: center;">
                                            Not
                                        </h3>
                                        <p style="border: 1px solid white;">
                                            {{$buys->note}}
                                        </p>
                                    </form>
                                </div>
                                <br>
                            </div>
                            <hr style="color: black; border: 1px solid black">
                            <h2 style="font-size: 30px;color:red;"><br>User Contact</h2>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label">Email</label>
                                        <h2 style="text-align: center">{{$user->email}}</h2>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-last-name">Tel</label>
                                        @if($user->tel==Null)
                                            <div class="col-md-6" style="background-color: white"><h2
                                                    style="text-align: center">Empty</h2></div>
                                        @else
                                            <div class="col-md-6" style="background-color: white"><h2
                                                    style="text-align: center">{{$user->tel}}</h2></div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </center>
@endsection
