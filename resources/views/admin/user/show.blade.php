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
          src="{{URL::asset('/img/unknown.jpg')}}"
          alt=""
          {{-- height="100"
          width="100" --}}
        />

        <div>
            <h2>{{$user->name}}</h2>
            <p>{{$user->email}}</p>
            
        </div>
    </div>
</section>
@endsection