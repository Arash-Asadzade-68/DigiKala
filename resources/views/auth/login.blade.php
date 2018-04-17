@extends('layouts.index')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/loginStyle.css')}}">
@stop
@section('content')
    <div class="container">
        <div class="row justify-content-center m-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('ورود به دیجی کالا') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-4 col-form-label text-md-right">{{ __('پست الکترونیکی') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('کلمه عبور') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('مرا به خاطر بسپار') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown" style="direction: ltr">
                                        <button type="submit" class="btn" style="background-color: #2196f3; color: #fff; text-align: right">
                                            {{ __('ورود به دیجی کالا') }}
                                        </button>
                                        <button type="button" class="btn login" style="background-color:#3a9de8; color: #fff;" ></button>


                                    </div>
                                    <a class="btn btn-link forget" href="{{ route('password.request') }}">
                                        {{ __('کلمه عبور را فراموش کرده ام') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
