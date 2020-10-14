@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))
@section('message')
    <div class="notfound-404">
        <h1>500</h1>
    </div>
    <h2>Oops! Server Error.</h2>
@endsection
