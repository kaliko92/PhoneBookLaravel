<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Kaeo</a>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        {{-- @if ($permission->where('access','account')->first()->index==1) --}}
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/person')}}">People</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/contact')}}">Contact</a>
          </li>
        {{-- @endif --}}
        {{-- @if ($permission->where('access','category')->first()->index==1)
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/category')}}">Categories</a>
          </li>
        @endif
        @if ($permission->where('access','item')->first()->index==1)
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/item')}}">Items</a>
          </li>
        @endif
        @if ($permission->where('access','person')->first()->index==1)
          <li class="nav-item">
              <a class="nav-link" href="{{url('admin/person')}}">People</a>
          </li>
        @endif
        @if ($permission->where('access','permission')->first()->index==1)
          <li class="nav-item">
              <a class="nav-link" href="{{url('admin/user/permission/25')}}">Permission</a>
          </li>
        @endif --}}
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" 
                    role="button" aria-haspopup="true" aria-expanded="false">Bill</a>
          <div class="dropdown-menu">
            @foreach ($opBills as $opBill)
              <a class="dropdown-item" href="{{ url('admin/bill') ."/".$opBill->type }}">{{$opBill->name}}</a>
            @endforeach
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" 
                    role="button" aria-haspopup="true" aria-expanded="false">Entry</a>
          <div class="dropdown-menu">
            @foreach ($opEntries as $opEntry)
              <a class="dropdown-item" href="{{ url('admin/entry') ."/".$opEntry->name }}">{{$opEntry->title}}</a>
            @endforeach
          </div>
        </li> --}}
      </ul>


      <ul class="navbar-nav ml-auto">
       
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
                @if ($user->role=='kaeo' || $user->role=='admin')
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <i class="fa fa-eye"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      {{-- <ul class="dropdown-item dropdown" href="#">parent</a> --}}
                      @foreach ($users as $user)
                        <a class="dropdown-item" href="#">
                            {{$user->name}}
                        </a>
                    
                      @endforeach
                    </div>
                  {{-- <li class="nav-item">
                    <a class="navbarDropdown" href="#"><i class="fa fa-eye"></i></a>
                  </li> --}}
                @endif
            
            <li class="nav-item dropdown">

                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  {{-- <div class="dropdown-menu">
                    <li class="nav-item"> --}}
                    {{-- </li>
                  </div> --}}
                    <a class="dropdown-item" href="{{ url('profile') }}"
                        onclick="event.preventDefault();
                                  document.getElementById('profile-form').submit();">
                            {{ 'profile' }}
                    </a>
                    <form id="profile-form" action="{{ url('admin/user/profile') }}" method="GET" class="d-none">
                        
                    </form>


                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                  
                </div>
            </li>
        @endguest
    </ul>
    </div>

    {{-- @extends('layouts.loginnav') --}}
  </nav>