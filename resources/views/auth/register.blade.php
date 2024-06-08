@extends('layouts.app')

@section('content')
<style>
    .container{
        background: white;
        margin: 6rem 30rem 10rem 30rem;
        border-radius: 0.4rem;
        height: 17rem;
    }
    .card{
        padding-top: 2rem;
        padding-left: 2rem;
    }
    .card-header{
        font-size: 1.5rem;
        font-weight: 600;
    }
    label{
        font-size: 1rem;
    }
    .btn:hover{
        color: blue;
        cursor: pointer;
    }
    #td{
        display: flex;
    }
    #name{
        margin-left: 5.3rem;
    }
    #email{
        margin-left: 1.8rem;
    }
    #password{
        margin-left: 3.8rem;
    }
    #password-confirm{
        margin-left: 0.3rem;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <br>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3" id="td">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name:') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3" id="td">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3" id="td">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3" id="td">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password:') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <br>
                        <div class="row mb-0">
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