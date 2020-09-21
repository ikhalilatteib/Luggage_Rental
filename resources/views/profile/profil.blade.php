@extends('layouts.fixe-page')
@section('content')
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

    <!------ Include the above in your HEAD tag ---------->
<center>
    <div id="bado">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li style="font-family: Javanese Text; font-size: 20px; text-align: left;" class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
            </li>
        </ul>
    <div  class="container emp-profile">
        <form method="post">
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <br>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-6" style="text-align: left;">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        {{$user->name}}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" style="text-align: left;">
                                    <label>Last Name</label>
                                </div>
                                <div class="col-md-6" >
                                    <p>{{$user->last_name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" style="text-align: left;">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    @if($user->tel=='')
                                       <p>Empty</p>
                                    @else
                                        <p>{{$user->tel}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" style="text-align: left;">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$user->email}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <center>
                <div class="col-md-2">
                    <br>
                    <br>
                    <input type="submit" class="btn-primary" name="btnAddMore" value="Edit Profile"/>
                </div>
                </center>
        </form>
      </div>
    </div>
</center>
@endsection
