<!DOCTYPE html>
{{-- <html  lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html  lang="en-US">

    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">


        {{-- jQuery --}}
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        {{-- jQuery Modal  --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

        
        {{-- Bootstrap --}}
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        

        
        
        {{-- ajax --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        {{--  --}}
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}
        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        {{-- Other --}}
        {{-- <script src="{{ asset('js/bill.js') }}"></script> --}}
        <script src="/js/app.js"></script>
        {{-- <script src="/js/style.js"></script> --}}
        {{-- {{ URL::asset('js/treeview.js')}} --}}
        {{-- <script type="text/javascript" src="{{ asset('js/treeview.js') }}"></script> --}}

        <link href="/css/style.css" rel="stylesheet" type="text/css" >
        {{-- <link href="/css/bill.css" rel="stylesheet" type="text/css" > --}}
        {{-- <link href="/css/treeview.css" rel="stylesheet" type="text/css" > --}}
        {{-- <link href="/css/tools.css" rel="stylesheet"> --}}

        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/treeview.css') }}" >
        <script type="text/javascript" src="{{ asset('js/treeview.js') }}"></script> --}}

        {{-- jsdelivr for autocomplete search combobox --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

        
        <title>@yield('title')</title>
    </head>
    <body  class="antialiased">
        <div class="container">
            @include('layouts.header')
        </div>

        <main class="flex-shrink-0">
        {{-- <main> --}}

            @yield('content')       
            @yield('modal')  
        </main>
        

        {{-- @include('layouts.footer')         --}}
    </body>
</html>



@yield('script')     
