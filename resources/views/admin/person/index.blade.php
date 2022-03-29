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
                        <td>{{$person['id']}}</td>
                        <td>{{$person['name']}}</td>
                        {{-- Operation --}}
                        <td>
                            {{-- show statement --}} 
                            {{-- badge btn btn-primary btn-sm --}}
                            <a href="{{'person/'.$person['id']}}" class="badge badge-primary"><i class="fa fa-info-circle"></i> <span class="hide-sm">Info</span></a>
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

        {{-- @if ($accessAddPerson) --}}
            {{-- <a id="btnCreate" href="javascript:void(0)" class="add-category btn btn-primary"><i class="fa fa-plus"></i> Add new person</a> --}}
        
        {{-- @endif --}}
        {{-- @if ($accessAddPerson || $accessUpdatePerson)
            @include('admin.person.createModal',['people' => $people])
        @endif --}}
    </section>
@endsection 




@section('script')
    @include('admin.person.script.autocomplete') 
    @include('admin.person.script.showModal') 
    @include('admin.person.script.editModal') 
    @include('admin.person.script.saveModal') 
    @include('admin.person.script.updateModal') 
    @include('admin.person.script.deleteModal')       
@endsection