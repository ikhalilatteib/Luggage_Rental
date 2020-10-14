@extends('layouts.fixe-page')
@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/chat-css.css')}}">
    <div class="container">
        <div class="justify-content-center">
            <!-- Page header start -->
            <center>
            <div class="page-title">
                <div class="row gutters">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                        <h5 class="title">Chat App</h5>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="daterange-container">
                            <div class="date-range">
                                <div id="reportrange">
                                    <i class="fa fa-calendar cal"></i>
                                    <span class="range-text">Jun 11, 2019 - Jul 10, 2019</span>
                                    <i class="fa fa-chevron-down arrow"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page header end -->

            <!-- Content wrapper start -->

            <div class="content-wrapper">
                <!-- Row start -->
                <div class="row gutters" style="display: block">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="card5">
                            <!-- Row start -->
                            <div class="selected-user" style="text-align: left; color: white;">
                                <span>To: <span class="name">Emily Russell</span></span>
                            </div>
                            <div class="chat-container">
                                @foreach($chats as $chat)
                                <ul class="chat-box chatContainerScroll">
                                    @if(Auth::user()->id==$chat->sender)
                                    <li class="chat-left">
                                        <div class="chat-text" style="margin-left: 40px; text-align: left; background-color: #65d7b8">
                                            {{$chat->content}}
                                        </div>
                                        <div class="chat-hour">08:55 <span class="fa fa-check-circle"></span></div>
                                    </li>
                                    @else
                                    <li class="chat-right">
                                        <div class="chat-hour">08:56 <span class="fa fa-check-circle"></span></div>
                                        <div class="chat-text" style="margin-right: 40px;text-align: left;">
                                            {{$chat->content}}
                                        </div>
                                    </li>
                                    @endif
                                </ul>
                                @endforeach
                                <div class="form-group mt-3 mb-0">
                                    <form action="/sender/4" method="POST">
                                        @csrf
                                        <textarea class="form-control" rows="3"
                                                  placeholder="Type your message here..." name="content"></textarea>
                                        <br>
                                        <button type="submit" class="btn btn-primary">
                                            Send
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>
                </div>
            </div>
            </center>
        </div>
        <!-- Row end -->
    </div>
    <!-- Content wrapper end -->
@endsection
