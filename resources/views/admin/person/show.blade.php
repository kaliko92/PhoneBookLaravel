@extends('layouts.master')

@section('title', 'Person')
    
 @section('content')
    <div class="container mt-3">
        <h1 class="text-center">{{$person['name']}}</h1>
        {{-- <p><b>Category : </b>{{$category['name']}}</p> --}}
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Contact</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $conn)                    
                    <tr>
                        <td>{{$conn->id}}</td>
                        <td>{{$conn->type}}</td>
                        <td>{{$conn->value}}</td>
                        <td>                            
                            <a href="{{'../contact/'.$conn['id']}}" class="btn btn-danger btn-sm">Delete</a>
                            <a href="{{'../contact/'.$conn['id']}}"  class="btn btn-info btn-sm">Edit</a>
                        </td>
                    </tr>
                @empty
                    <p> 'No operation yet' </p>
                @endforelse
            </tbody>
            
        </table>

        <a href="{{ url('admin/person') }}" class="add-category btn btn-primary"><i class="fa fa-undo"></i> Return to list</a> 


    </div>
@endsection 