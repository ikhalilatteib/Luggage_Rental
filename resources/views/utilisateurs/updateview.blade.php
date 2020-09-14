@extends('layouts.fixe-page')
@section('content')
    <br><br><br>
    <div id="pip">
        <center>
            <h2>Kayit Olun</h2>
            <br>
            <form action="/guncelledi/{{$users->id}} " method="POST">
                <table>
                    <tbody><tr>
                        <td>
                            <label>Ad</label><br>
                            <input type="text" name="name" value="{{$users->name}}" required>
                        </td>
                        <td>
                            <label>Soyad</label><br>
                            <input type="text" name="last_name" value="{{$users->last_name}}" required><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Email</label><br>
                            <input type="email" name="email" value="{{$users->email}}" required>
                        </td>
                        <td>
                            <label>Password</label><br>
                            <input type="password" name="password" value="{{$users->password}}" required>
                        </td>
                    </tr>
                    </tbody></table><br>
                <button type="submit" class="btn btn-primary">Kayit Olun</button>
                @csrf
            </form>

        </center>
    </div>
@endsection
