@extends('layouts.admin-layout')
@section('content')
    <div class="col-md-12">
        <br><br>
        <div>
            <center>
                <h1 class="caplist">Users List</h1>
                <br>
                <table class="tablist">

                    <thead>
                    <tr>
                        <td class="tetelist">No</td>
                        <td class="tetelist">Name</td>
                        <td class="tetelist">Last</td>
                        <td class="tetelist">Tel</td>
                        <td class="tetelist">Email</td>
                        <td class="tetelist">Deleted Date</td>
                        <td class="tetelist">Edit</td>
                        <td class="tetelist">Delete</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->tel}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td><a href="/guncelle/{{$user->id}}">Edit</a></td>
                            <td><a data-toggle="modal" data-target="#exampleModalCenter" href="/sil/{{$user->id}}">Delete</a>
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle"
                                                    style="color: black; font-size: 20px; font-family: Roboto;">
                                                    Profile</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body"
                                                 style="color: black; font-size: 18px; font-family: Roboto;">
                                                Are are sure to delete this is account?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel
                                                </button>
                                                <a href="/sil/{{$user->id}}">
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </center>
        </div>

    </div>
@endsection
