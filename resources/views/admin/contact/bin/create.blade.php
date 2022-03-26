@extends('layouts.master')

@section('content')
    <h1 class="text-center">Add Person</h1>
    
    <div class="container">
        <form action="store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="name" >
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input name="phone" type="text" class="form-control" id="phone" >
            </div>
            <div class="mb-3">
                <label for="note" class="form-label">Note</label>
                <textarea name="note" id="note" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    
@endsection