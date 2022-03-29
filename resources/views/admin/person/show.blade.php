@extends('layouts.master')

@section('title')
    Phonebook - {{$person->name}}
@endsection
    
 @section('content')
    <section class="container">
        <div class="title-with-tools">
            <h1 class="large text-primary">{{$person->name}}</h1>
            <div class="buttons">
                <a id="btnCreate" href="javascript:void(0)" class="btn">
                    <i class="fa fa-plus text-primary"></i> <span class="hide-sm">Add new contact</span>
                </a>
                <a id="btnReturn" href="{{ url('admin/person') }}" class="btn">
                    <i class="fa fa-undo text-primary"></i> <span class="hide-sm">Return to list</span>
                </a>
            </div>            
        </div>
        {{-- <h1 class="text-center">{{$person['name']}}</h1> --}}
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
                            <a href="{{'../contact/'.$conn['id']}}" class="badge badge-danger"><i class="fa fa-ban"></i> <span class="hide-sm">Delete</span></a>
                            <a href="{{'../contact/'.$conn['id']}}"  class="badge badge-secondary"><i class="fa fa-edit"></i> <span class="hide-sm">Edit</span></a>
                        </td>
                    </tr>
                @empty
                    {{-- <p> 'No operation yet' </p> --}}
                @endforelse
            </tbody>
            
        </table>


        {{-- @forelse($contacts)
        @empty
            <p> 'No people yet' </p>
        @endforelse --}}
        {{-- <a href="{{ url('admin/person') }}" class="add-category btn btn-primary"><i class="fa fa-undo"></i> Return to list</a>  --}}


    </section>
@endsection 