@extends('layouts.master')

@section('title', 'People')
    
@section('content')
    @php
        $accessPerson = $permission->where('access','person')->first();
        $accessIndexPerson = $accessPerson->index==1;
        $accessShowPerson = $accessPerson->show==1;
        $accessAddPerson = $accessPerson->add==1;
        $accessUpdatePerson = $accessPerson->update==1;
        $accessDeletePerson = $accessPerson->delete==1;
        $notAccess = (!$accessShowPerson) && (!$accessUpdatePerson) && (!$accessDeletePerson);
    @endphp
    <div class="container mt-3">
        <h1 class="text-center">People</h1>

        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Note</th>
                    @if (!$notAccess)
                        <th>Operation</th>
                    @endif                    
                </tr>
            </thead>
            <tbody>
                @forelse ($people as $person)
                    <tr>
                        <td>{{$person['id']}}</td>
                        <td>{{$person['name']}}</td>
                        <td>{{$person['phone']}}</td>
                        <td>{{$person['note']}}</td>
                        {{-- Operation --}}
                        @if (!$notAccess)
                            <td>
                                {{-- show statement --}}
                                @if ($accessShowPerson)
                                    <a href="{{'person/'.$person['id']}}" class="badge btn btn-primary btn-sm"><i class="fa fa-info-circle"></i></a>
                                @endif
                                {{-- <a href="{{'person/delete/'.$person['id']}}" class="btn btn-danger btn-sm">Delete</a>
                                <a href="{{'person/edit/'.$person['id']}}" class="btn btn-secondary btn-sm">Edit</a> --}}
                                {{-- Edit --}}
                                @if ($accessUpdatePerson)
                                    <a onclick="editPerson({{$person->id}});" 
                                        class="badge btn btn-secondary btn-sm" href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                @endif
                                {{-- Delete --}}
                                @if ($accessDeletePerson)
                                    <a onclick="deletePerson({{$person->id}});" 
                                        class="badge btn btn-danger  btn-sm" href="javascript:void(0)"><i class="fa fa-ban"></i></a>
                                @endif
                            </td>
                        @endif
                    </tr>
                @empty
                    <p> 'No people yet' </p>
                @endforelse 
            </tbody>
            
        </table>

        @if ($accessAddPerson)
            <a id="btnCreate" href="javascript:void(0)" class="add-category btn btn-primary"><i class="fa fa-plus"></i> Add new person</a>
        @endif
        @if ($accessAddPerson || $accessUpdatePerson)
            @include('admin.person.createModal',['people' => $people])
        @endif
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