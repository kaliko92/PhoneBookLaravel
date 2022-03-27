@extends('layouts.master')

@section('content')
    <section class="landing">
        <div class="dark-overlay">
        <div class="landing-inner">
            <h1 class="x-large">Phone Book</h1>
            <p class="lead">
                Get free phonebook account
            </p>
            <div class="buttons">
            <a href="{{route('register')}}" class="btn btn-primary">Sign Up</a>
            <a href="{{route('login')}}" class="btn btn">Login</a>
            </div>
        </div>
        </div>
    </section>
@endsection

