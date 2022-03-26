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
                    <th>Date</th>
                    <th>Note</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                </tr>
            </thead>
            <tbody>
                @php $bal=0; @endphp
                @forelse ($day2ss as $day2)
                    
                    <tr>
                        <td>{{$day2->id}}</td>
                        <td>{{date("Y-m-d", strtotime($day2->day1->date))}}</td>
                        <td>{{$day2->day1->note}}</td>
                        <td>{{$day2->debit}}</td>
                        <td>{{$day2->credit}}</td>
                        <td>
                            @php
                                $bal += $day2->debit - $day2->credit;
                                echo $bal;
                            @endphp
                        </td>
                        {{-- <td>                            
                            <a href="{{'../item/delete/'.$item['id']}}" class="btn btn-danger btn-sm">Delete</a>
                            <a href="{{'../item/edit/'.$item['id']}}"  class="btn btn-info btn-sm">Edit</a>
                        </td> --}}
                    </tr>
                @empty
                    <p> 'No operation yet' </p>
                @endforelse
            </tbody>
            <tfoot>
                @isset($day2ss)
                    <th>
                        <th></th>
                        <th></th>
                        <th></th>
                        
                        <th>Balance</th>
                        <th>@php echo $bal; @endphp</th>
                    </th>
                @endisset    
                
               
            </tfoot>
            
        </table>

        <a href="{{ url('admin/person') }}" class="add-category btn btn-primary"><i class="fa fa-undo"></i> Return to list</a> 


    </div>
@endsection 