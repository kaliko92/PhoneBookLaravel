@extends('layouts.master')

@section('title', 'People')
    
@section('content')
    <section class="container">
        <div class="title-with-tools">
            <h1 class="large text-primary">People</h1>
            <div class="buttons">
                <a id="btnCreate" href="javascript:void(0)" class="btn">
                    <i class="fa fa-plus text-primary"></i> <span class="hide-sm">Add new person</span>
                </a>
            </div>
            
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($people as $person)
                    <tr>
                        <td>{{$person->id}}</td>
                        <td>{{$person->name}}</td>
                        {{-- Operation --}}
                        <td>
                            {{-- show statement --}} 
                            <a href="{{'person/'.$person->id}}" class="badge badge-primary"><i class="fa fa-info-circle"></i> <span class="hide-sm">Info</span></a>
                            {{-- Edit --}}
                            <a onclick="editPerson({{$person->id}});" 
                                class="badge badge-secondary" href="javascript:void(0)"><i class="fa fa-edit"></i> <span class="hide-sm">Edit</span></a>
                            {{-- Delete --}}
                            <a onclick="deletePerson({{$person->id}});" 
                                class="badge badge-danger" href="javascript:void(0)"><i class="fa fa-ban"></i> <span class="hide-sm">Delete</span></a>
                        </td>
                    </tr>
                @empty
                    {{-- <p> 'No people yet' </p> --}}
                @endforelse 
            </tbody>
            
        </table>

      
        <div class="text-center">
            {{ $people->links(); }}          
        </div>      
    </section>


    @include('admin.person.createModal',['people' => $people])
@endsection 




@section('script')
    @include('admin.person.scriptIndex.autocomplete') 
    @include('admin.person.scriptIndex.showModal') 
    @include('admin.person.scriptIndex.editModal') 
    @include('admin.person.scriptIndex.saveModal') 
    @include('admin.person.scriptIndex.updateModal') 
    @include('admin.person.scriptIndex.deleteModal')       
@endsection