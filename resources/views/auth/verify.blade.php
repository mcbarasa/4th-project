@extends('layouts.app')

@section('content')
<style>
    .container{
        background: white;
        margin: 6rem 30rem 10rem 30rem;
        border-radius: 0.4rem;
        height: 15rem;
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
    #dd{
        margin-left: 1rem;
    }
    #ddy{
        margin-left: 3rem;
    }
    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
