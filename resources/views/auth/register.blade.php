@extends('layouts.master')

@section('content')
<section class="container">
    <h1 class="large text-primary">
        Sign Up
    </h1>
    <p class="lead"><i class="fa fa-user"></i> Create Your Account</p>


    <form method="POST" class="form" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <input type="text" placeholder="Name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <input type="email" placeholder="Email Address" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" placeholder="Password" minlength="6" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" placeholder="Confirm Password" minlength="6" name="password_confirmation" required autocomplete="new-password"/>
        </div>

        <input type="submit" value="Register" class="btn btn-primary" />
    </form>


    <p class="my-1">
        Already have an account? <a href="{{url('login')}}">Sign In</a>
    </p>

</section>
@endsection
