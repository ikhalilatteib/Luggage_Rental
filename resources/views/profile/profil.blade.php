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
                            <h2>Profile</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <!-- Hero Area End-->
    <center>
    <div class="col-xl-8 order-xl-1" >
        <div class="card bg-secondary shadow" style="border-color: #ea0000">
            <div class="card-header1">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">My account</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="#!" class=" btn-primary">Edit</a>
                    </div>
                </div>
            </div>
            <div class="card-body" style="background-color: white" >
                <form>
                    <h2  style="font-size: 30px;color:red;"><br>User information</h2>
                    <br>
                    <br>

                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-username">First Name</label>
                                    <div class="col-md-6" style="background-color: white"> <h2 style="text-align: center">{{$user->name}}</h2></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Last Name</label>
                                    <div class="col-md-6" style="background-color: white"> <h2 style="text-align: center">{{$user->last_name}}</h2></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused" >
                                    <label class="form-control-label" >Email</label>
                                   <h2 style="text-align: center">{{$user->email}}</h2>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-last-name">Tel</label>
                                    @if($user->tel==Null)
                                        <div class="col-md-6" style="background-color: white"> <h2 style="text-align: center">Empty</h2></div>
                                    @else
                                        <div class="col-md-6" style="background-color: white"> <h2 style="text-align: center">{{$user->tel}}</h2></div>
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
