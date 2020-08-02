@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <form method="POST" action="{{ route('datosBancarios') }}">
                        @csrf
                        <label for="name" class="col-md-4 col-form-label text-md-right">Datos Bancarios</label>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('iban') }}</label>

                            <div class="col-md-6">
                                <input id="iban" type="text" class="form-control @error('iban') is-invalid @enderror" name="iban" value="{{ old('iban') }}" required autocomplete="iban" autofocus>

                                @error('iban')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <label for="name" class="col-md-4 col-form-label text-md-right">Datos Personales</label>
                        <div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">{{ __('dni') }}</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}"  autocomplete="dni" autofocus>

                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="calle" class="col-md-4 col-form-label text-md-right">{{ __('calle') }}</label>

                            <div class="col-md-6">
                                <input id="calle" type="text" class="form-control @error('calle') is-invalid @enderror" name="calle" value="{{ old('calle') }}"  autocomplete="calle" autofocus>

                                @error('calle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numeroDireccion" class="col-md-4 col-form-label text-md-right">{{ __('numero') }}</label>

                            <div class="col-md-6">
                                <input id="numeroDireccion" type="text" class="form-control @error('numeroDireccion') is-invalid @enderror" name="numeroDireccion" value="{{ old('numeroDireccion') }}"  autocomplete="numeroDireccion" autofocus>

                                @error('numeroDireccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pisoDireccion" class="col-md-4 col-form-label text-md-right">{{ __('piso') }}</label>

                            <div class="col-md-6">
                                <input id="pisoDireccion" type="text" class="form-control @error('pisoDireccion') is-invalid @enderror" name="pisoDireccion" value="{{ old('pisoDireccion') }}"  autocomplete="pisoDireccion" autofocus>

                                @error('pisoDireccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="puertaDireccion" class="col-md-4 col-form-label text-md-right">{{ __('puerta') }}</label>

                            <div class="col-md-6">
                                <input id="puertaDireccion" type="text" class="form-control @error('puertaDireccion') is-invalid @enderror" name="puertaDireccion" value="{{ old('puertaDireccion') }}"  autocomplete="puertaDireccion" autofocus>

                                @error('puertaDireccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="codigopostal" class="col-md-4 col-form-label text-md-right">{{ __('cp') }}</label>

                            <div class="col-md-6">
                                <input id="codigopostal" type="text" class="form-control @error('codigopostal') is-invalid @enderror" name="codigopostal" value="{{ old('codigopostal') }}"  autocomplete="codigopostal" autofocus>

                                @error('codigopostal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
