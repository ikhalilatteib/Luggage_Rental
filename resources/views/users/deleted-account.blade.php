@extends('layouts.admin-layout')
@section('content')
    <div class="col-md-12">
        <br><br>
        <div >
            <center>
                <h1 class="caplist" >Users List</h1>
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
                            <td>{{$user->deleted_at}}</td>
                           </tr>
                    @endforeach
                    </tbody>
                </table>
            </center>
        </div>
    </div>
@endsection
