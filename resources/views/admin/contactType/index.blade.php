@extends('layouts.master')

@section('title', 'Contact Types')
    
@section('content')
    <section class="container">
        <div class="title-with-tools">
            <h1 class="large text-primary">Contact Types</h1>
            <div class="buttons">
                <a id="btnCreate" href="javascript:void(0)" class="btn">
                    <i class="fa fa-plus text-primary"></i> <span class="hide-sm">Add new contact types</span>
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
                @forelse ($contactTypes as $contactType)
                    <tr>
                        <td>{{$contactType->id}}</td>
                        <td>{{$contactType->name}}</td>
                        {{-- Operation --}}
                        <td>
                           {{-- Edit --}}
                            <a onclick="editContactTypes({{$contactType->id}});" 
                                class="badge badge-secondary" href="javascript:void(0)"><i class="fa fa-edit"></i> <span class="hide-sm">Edit</span></a>
                            {{-- Delete --}}
                            <a onclick="deleteContactTypes({{$contactType->id}});" 
                                class="badge badge-danger" href="javascript:void(0)"><i class="fa fa-ban"></i> <span class="hide-sm">Delete</span></a>
                        </td>
                    </tr>
                @empty
                    {{-- <p> 'No people yet' </p> --}}
                @endforelse 
            </tbody>
            
        </table>

      
        <div class="text-center">
            {{ $contactTypes->links(); }}          
        </div>      
    </section>


    @include('admin.contactType.createModal',['contactTypes' => $contactTypes])
@endsection 




@section('script')
    @include('admin.contactType.scriptIndex.autocomplete') 
    @include('admin.contactType.scriptIndex.showModal') 
    @include('admin.contactType.scriptIndex.editModal') 
    @include('admin.contactType.scriptIndex.saveModal') 
    @include('admin.contactType.scriptIndex.updateModal') 
    @include('admin.contactType.scriptIndex.deleteModal')       
@endsection