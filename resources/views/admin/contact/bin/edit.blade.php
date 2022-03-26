@extends('layouts.master')

@section('content')
    <h1 class="text-center">Edit Person</h1>

    <div class="container">
        <form action="{{url('admin/person/update')}}" method="POST">
            @csrf
            <input type="hidden" value={{$person['id']}} name="id">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="name"  value="{{$person['name']}}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input name="phone" type="text" class="form-control" id="phone"  value="{{$person['phone']}}">
            </div>
            <div class="mb-3">
                <label for="note" class="form-label">Note</label>
                <textarea name="note" id="note" class="form-control" >{{$person['note']}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

@endsection