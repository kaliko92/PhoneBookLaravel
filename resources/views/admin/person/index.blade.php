@extends('layouts.master')

@section('title', 'People')
    
@section('content')
    <div class="container mt-3">
        <h1 class="text-center">People</h1>

        <table class="table">
            <thead class="table-secondary">
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
                            <a href="{{'person/'.$person['id']}}" class="badge btn btn-primary btn-sm"><i class="fa fa-info-circle"></i></a>
                            {{-- Edit --}}
                            <a onclick="editPerson({{$person->id}});" 
                                class="badge btn btn-secondary btn-sm" href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                            {{-- Delete --}}
                            <a onclick="deletePerson({{$person->id}});" 
                                class="badge btn btn-danger  btn-sm" href="javascript:void(0)"><i class="fa fa-ban"></i></a>
                        </td>
                    </tr>
                @empty
                    <p> 'No people yet' </p>
                @endforelse 
            </tbody>
            
        </table>

        {{-- @if ($accessAddPerson) --}}
            <a id="btnCreate" href="javascript:void(0)" class="add-category btn btn-primary"><i class="fa fa-plus"></i> Add new person</a>
        {{-- @endif --}}
        {{-- @if ($accessAddPerson || $accessUpdatePerson)
            @include('admin.person.createModal',['people' => $people])
        @endif --}}
    </div>
@endsection 




@section('script')
    @include('admin.person.script.autocomplete') 
    @include('admin.person.script.showModal') 
    @include('admin.person.script.editModal') 
    @include('admin.person.script.saveModal') 
    @include('admin.person.script.updateModal') 
    @include('admin.person.script.deleteModal')       
@endsection