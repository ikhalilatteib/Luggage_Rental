@extends('layouts.fixe-page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Rent Your Luggage') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('sale.done') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="vol" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                                <div class="col-md-6">
                                    <input id="vol" type="text" class="form-control @error('vol') is-invalid @enderror" name="vol" value="{{ old('vol') }}" required autocomplete="vol" autofocus>

                                    @error('vol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Departure Date') }}</label>

                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>

                                    @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="depart" class="col-md-4 col-form-label text-md-right">{{ __('Departure Time') }}</label>
                                <div class="col-md-6">
                                    <input id="depart" type="time" class="form-control @error('depart') is-invalid @enderror" name="depart" value="{{ old('depart') }}" required autocomplete="depart">

                                    @error('depart')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="arrived" class="col-md-4 col-form-label text-md-right">{{ __('Arrival Time') }}</label>
                                <div class="col-md-6">
                                    <input id="arrived" type="time" class="form-control @error('arrived') is-invalid @enderror" name="arrived" value="{{ old('arrived') }}" required autocomplete="arrived">

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
                                    <input id="from" type="text" class="form-control @error('from') is-invalid @enderror" name="from" value="{{ old('from') }}" required autocomplete="from">

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
                                    <input id="to" type="text" class="form-control @error('to') is-invalid @enderror" name="to" value="{{ old('to') }}" required autocomplete="to">

                                    @error('to')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="to" class="col-md-4 col-form-label text-md-right">{{ __('How many KG can you sell') }}</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="kg" required>

                                    @error('kg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="note" class="col-md-4 col-form-label text-md-right">{{ __('Write a NOTE what can you get') }}</label>
                                <div class="col-md-6">
                                    <textarea rows="2" class="form-control" name="note" placeholder="Exemple: Book, Togs..." required></textarea>

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
                                            {{ __('Sale') }}
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
