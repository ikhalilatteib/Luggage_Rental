@extends('errors::minimal')

@section('title', __('Forbidden'))

@section('message')
    <div class="notfound-404">
        <h1>403</h1>
    </div>
    <h2>Oops! User does not have any of the necessary access rights.</h2>
@endsection
