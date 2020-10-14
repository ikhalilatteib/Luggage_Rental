@extends('layouts.fixe-page')
@section('content')
    <br><br><br><br>
    <center>
        <figure>
            <img src="{{asset('Doc/img/basari.png')}}" alt="Başaralı Kayıt" width="250" height="70%">
            <figcaption>
                <h1 style=" font-family: Crimson Text; font-size:40px;">Your action has been completed successfully</h1>
            </figcaption>
        </figure>
    </center>
    <?php
    header("Refresh: 8; URL=/");
    ?>
@endsection
