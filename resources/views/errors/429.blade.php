@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('message')
    <div class="notfound-404">
        <h1>429</h1>
    </div>
    <h2>Oops! Too Many Requests.</h2>
@endsection
