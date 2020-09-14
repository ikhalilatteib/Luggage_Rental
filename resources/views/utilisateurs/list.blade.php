@extends('layouts.fixe-page')
@section('content')
    <br><br>
    <div >
        <center>
            <h1 class="caplist" >Kullancılar Listesi</h1>
            <br>
            <table class="tablist">

                <thead>
                <tr>
                    <th >ID</th>
                    <th >Ad</th>
                    <th >Soyad</th>
                    <th >Email</th>
                    <th >Update Date</th>
                    <th >Güncelle</th>
                    <th >Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td><a href="/guncelle/{{$user->id}}">Güncelle</a></td>
                        @method('DELETE')
                        <td><a onclick="return confirm('Are you Sure?')" href="/sil/{{$user->id}}">Sil</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </center>
    </div>
@endsection
