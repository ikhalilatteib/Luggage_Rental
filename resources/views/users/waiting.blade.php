@extends('layouts.admin-layout')
@section('content')
    <div class="justify-content-center">
        <div class="row">
            @foreach($buy as $buys)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card2">
                        <div class="card-header2">
                            <table style="width: 100%; text-align: left;">
                                <tr>
                                    <th style="text-align: center">From: <h4
                                            style=" text-transform: uppercase;color: #12fcfc;">{{$buys->from}}</h4>
                                    </th>
                                    <th style="text-align: center">To: <h4
                                            style=" text-transform: uppercase;color: #12fcfc;">{{$buys->to}}</h4>
                                    </th>
                                </tr>
                            </table>
                        </div>
                        <div class="card2-body">
                            <form style="width: 100%">
                                <table class="tablist1">
                                    <tr>
                                        <td rowspan="2">Company Name <h2
                                                style="font-size: 20px">{{$buys->vol}}</h2></td>
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
                                        <th colspan="3" style="text-align: center"><h3>I can get {{$buys->kg}}
                                                Kg</h3></th>

                                    </tr>
                                </table>
                                <h2>
                                    Not
                                </h2>
                                <p>
                                    {{$buys->note}}
                                </p>
                            </form>
                            <div>

                                <form method="POST" action="/approve/{{$buys->id}}">
                                    <div class="form-check-inline" style="text-align: left">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_approve"
                                                   style="font-size: 15px;background-color: blue;" value="1"><font
                                                style="font-size: 15px;color: blue;"> Approve</font>
                                        </label>
                                    </div>
                                    <div class="form-check-inline" style="float: right">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_approve"
                                                   style="font-size: 15px; background-color: red;" value="0"><font
                                                style="font-size: 15px;color: red;"> Unapprove</font>
                                        </label>
                                    </div>
                                    @csrf
                                    <center>
                                        <br>
                                        <br>
                                        <button type="submit" class="btn-primary">
                                            Confirmation
                                        </button>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                </div>
            @endforeach
        </div>
    </div>
@endsection
