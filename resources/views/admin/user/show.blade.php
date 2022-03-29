@extends('layouts.master')

@section('title', 'Profile')
    
@section('content')
<section class="container">
    <div class="title-with-tools">
        <h1 class="large text-primary">{{$user->name}} Profile</h1>
        {{-- <div class="buttons">
            <a id="btnCreate" href="javascript:void(0)" class="btn">
                <i class="fa fa-plus text-primary"></i> <span class="hide-sm">Add new person</span>
            </a>
        </div> --}}
        
    </div>


    <div class="profile bg-light">
        <img
          class="round-img"
          src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200"
          alt=""
        />

        <div>
            <h2>{{$user->name}}</h2>
            <p>{{$user->email}}</p>
            
        </div>
    </div>
</section>
@endsection