@extends('layouts.admin-layout')
@section('admin')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">DASHBOARD</div>
                    <div class="card-body">
                        <div class="form-group row">
                                <div class="col-md-3">
                                    <div class="w3-card" style=" height: 200px">
                                        <img src="{{asset('image/ekle.png')}}" height="190" width="190">

                                    </div>
                                    <div class="card-header1">Add New User</div>
                                </div>
                            <div class="col-md-3">
                                <div class="w3-card" style=" height: 200px">
                                    <img src="{{asset('image/list.png')}}" height="190" width="190">

                                </div>
                                <div class="card-header1">List of All Users</div>
                            </div>
                            <div class="col-md-3">
                                <div class="w3-card" style=" height: 200px">
                                    <img src="{{asset('image/bekleme.png')}}" height="190" width="190">
                                </div>
                                <div class="card-header1">Waiting Approval</div>
                            </div>
                            <div class="col-md-3">
                                <div class="w3-card" style=" height: 200px">
                                    <img src="{{asset('image/basari.png')}}" height="190" width="190">

                                </div>
                                <div class="card-header1">Approved Publication</div>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <div class="w3-card" style=" height: 200px">
                                    <img src="{{asset('image/blok.png')}}" height="190" width="190">

                                </div>
                                <div class="card-header1">Non Approved</div>
                            </div>
                            <div class="col-md-3">
                                <div class="w3-card" style=" height: 200px">
                                    <img src="{{asset('image/bitti.png')}}" height="190" width="190">

                                </div>
                                <div class="card-header1">Publication Expired</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="clear: left"></div>
    <div class="custom-pre-footer">
    </div>
@endsection
