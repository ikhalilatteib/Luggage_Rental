@extends('layouts.fixe-page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update Your Sall') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/updatebuy/{{$buy->id}}">
                            @csrf
                            <div class="form-group row">
                                <label for="vol"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                                <div class="col-md-6">
                                    <input id="vol" type="text" class="form-control @error('vol') is-invalid @enderror"
                                           name="vol" value="{{$buy->vol}}" required autocomplete="vol" autofocus>

                                    @error('vol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Departure Date') }}</label>

                                <div class="col-md-6">
                                    <input id="date" type="date"
                                           class="form-control @error('date') is-invalid @enderror" name="date"
                                           value="{{$buy->date}}" required autocomplete="date" autofocus>

                                    @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="arrival" class="col-md-4 col-form-label text-md-right">{{ __('Arrival Date') }}</label>

                                <div class="col-md-6">
                                    <input id="arrival" type="date" class="form-control @error('arrival') is-invalid @enderror" name="arrival" value="{{$buy->arrival}}" required autocomplete="arrival" autofocus>

                                    @error('arrival')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="depart"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Departure Time') }}</label>
                                <div class="col-md-6">
                                    <input id="depart" type="time"
                                           class="form-control @error('depart') is-invalid @enderror" name="depart"
                                           value="{{$buy->depart}}" required autocomplete="depart">

                                    @error('depart')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="arrived"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Arrival Time') }}</label>
                                <div class="col-md-6">
                                    <input id="arrived" type="time"
                                           class="form-control @error('arrived') is-invalid @enderror" name="arrived"
                                           value="{{$buy->arrived}}" required autocomplete="arrived">

                                    @error('arrived')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="from" class="col-md-4 col-form-label text-md-right">{{ __('From') }}</label>
                                <div class="col-md-6">
                                    <input id="from" type="text"
                                           class="form-control @error('from') is-invalid @enderror" name="from"
                                           value="{{$buy->from}}" required autocomplete="from">

                                    @error('from')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="to" class="col-md-4 col-form-label text-md-right">{{ __('To') }}</label>
                                <div class="col-md-6">
                                    <input id="to" type="text" class="form-control @error('to') is-invalid @enderror"
                                           name="to" value="{{$buy->to}}" required autocomplete="to">

                                    @error('to')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="to"
                                       class="col-md-4 col-form-label text-md-right">{{ __('How many KG can you sell') }}</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="kg" required value="{{$buy->kg}}">

                                    @error('kg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="note"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Write a NOTE what can you get') }}</label>
                                <div class="col-md-6">
                                    <textarea rows="2" class="form-control" name="note" value="{{$buy->note}}"
                                              placeholder="Exemple: Book, Togs..." required></textarea>

                                    @error('note')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <center>
                                        <button type="submit" class="btn-primary">
                                            {{ __('Update') }}
                                        </button>
                                    </center>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
