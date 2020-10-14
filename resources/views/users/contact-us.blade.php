@extends('layouts.admin-layout')
@section('content')
    <br>
    <br>
    <div class="justify-content-center">
        <center>
            <div class="col-md-12 col-lg-10">
                @forelse($contacts as $contact)
                    <div class="card-body" style="background-color: white;">
                        <form>
                            <div class="pl-lg-4">
                                <div class="card2" style="border: 1px solid white">
                                    <div class="card2-body" style="text-align: left">
                                        <form style="width: 100%">
                                            <table class="tablist2">
                                                <tr>
                                                    <td>Name: </td>
                                                    <th>{{$contact->name}} </th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Email:
                                                    </td>
                                                    <th>
                                                        {{$contact->email}}
                                                    </th>
                                                </tr>
                                            </table>
                                            <h3 style="font-size: 20px; font-family: 'Times New Roman'; background-color: #0c2e60;color: white;text-align: center; padding: 10px">
                                                Message
                                            </h3>
                                            <p style="border: 1px solid white;">
                                                {{$contact->text}}
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                    <div>
                        <hr style="border: 1px solid red;">
                    </div>
                @empty
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
                                    <img src="{{asset('assets/images/sanfur.png')}}" alt="Empty" style="width: 100%;">
                                    <figcaption>
                                        <h1 style="text-align: center;font-size: 25px; color:black;">There are no
                                            publications for the
                                            moment</h1>
                                    </figcaption>
                                </figure>
                            </center>
                        </div>
                    </div>
                @endforelse
            </div>
        </center>
    </div>
@endsection
