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
                                   <h2 style="text-align: center;font-size: 22px">{{$user->email}}</h2>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-last-name">Tel</label>
                                    @if($user->tel==Null)
                                        <div class="col-md-6" style="background-color: white"> <h2 style="text-align: center;font-size: 22px">Empty</h2></div>
                                    @else
                                        <div class="col-md-6" style="background-color: white"> <h2 style="text-align: center; font-size: 22px">{{$user->tel}}</h2></div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div style="float: right">
                    <a href="/guncelle/{{$user->id}}">
                        <button class="btn btn-primary" style="background-color:black;font-family: 'Cambria';">
                            Edit
                        </button>
                    </a>
                    <a data-toggle="modal" data-target="#exampleModalCenter" href="/sil/{{$user->id}}">
                        <button class="btn btn-danger" style="font-family: 'Cambria';">
                            Delete
                        </button>
                    </a>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: black; font-size: 20px; font-family: Roboto;">Profile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="color: black; font-size: 18px; font-family: Roboto;">
                                    Are are sure to delete your account?
                                </div>
                                <div class="modal-footer">
                                    <button type="button"  data-dismiss="modal" style="background-color: #000000; border-color: #000000;">Cancel</button>
                                    <a href="/sil/{{$user->id}}"> <button type="button" style="background-color: #ea0000; border-color: #ea0000;" >Delete</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </center>
@endsection
