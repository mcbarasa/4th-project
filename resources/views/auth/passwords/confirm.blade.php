@extends('layouts.app')

@section('content')
<style>
.container{
    background: aquamarine;
    margin: 6rem 25rem 10rem 25rem;
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
#password{
    margin-left: 1rem;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <br>
                        <div class="row mb-3" id="td">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
