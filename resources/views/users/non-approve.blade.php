@extends('layouts.admin-layout')
@section('content')
    <br>
    <br>
    <div class="justify-content-center">
        <center>
            <div class="col-md-12 col-lg-10">
                @forelse($buys as $buy)
                    <div class="card-body" style="background-color: white;">
                        <form>
                            <div class="pl-lg-4">
                                <div class="card2" style="border: 1px solid white">
                                    <div>
                                        <table style="width: 100%; text-align: left;">
                                            <tr>
                                                <th style="text-align: center">From: <h1
                                                        style=" text-transform: uppercase;color: black;">{{$buy->from}}</h1>
                                                </th>
                                                <th style="text-align: center">To: <h1
                                                        style=" text-transform: uppercase;color: black;">{{$buy->to}}</h1>
                                                </th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card2-body" style="text-align: left">
                                        <form method="post" style="width: 100%">
                                            <table class="tablist2">
                                                <tr>
                                                    <td rowspan="2">Company Name <h2
                                                            style="font-size: 30px;">{{$buy->vol}}</h2></td>
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
                                                    <th colspan="3" style="text-align: center">
                                                        <h3 style="font-size: 20px;color:blue;">I can
                                                            get {{$buy->kg}}
                                                            Kg</h3>
                                                    </th>

                                                </tr>
                                            </table>
                                            <h3 style="font-size: 20px; font-family: 'Times New Roman'; background-color: #0c2e60;color: white;text-align: center;">
                                                Not
                                            </h3>
                                            <p style="border: 1px solid white;">
                                                {{$buy->note}}
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div>
                            <h1 style="color: blue">
                                <font style="color: black;font-size: 17px">created
                                    by</font> {{$buy->user[0]->name}} {{$buy->user[0]->last_name}} &nbsp;
                            </h1>
                        </div>
                    </div>
                    <br>
                    <div>
                        <hr style="border: 1px solid black;">
                    </div>
                @empty
                    <div class="col-md-12 col-lg-10">
                        <div class="card bg-secondary shadow" style="border-color: #f6f3f3">
                            <div class="card-header1">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">My Sales</h3>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12 col-lg-10">
                                <center>
                                    <figure class=" col-md-8 col-lg-6" style="text-align: center ">
                                        <img src="{{asset('assets/images/sanfur.png')}}" alt="Empty"
                                             style="width: 100%;">
                                        <figcaption>
                                            <h1 style="text-align: center;font-size: 25px; color:black;">There are no
                                                publications for the
                                                moment</h1>
                                        </figcaption>
                                    </figure>
                                </center>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </center>
    </div>
@endsection
