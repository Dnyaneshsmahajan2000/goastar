@extends('layouts.app', ['title' => 'All Recharge'])
@section('content')

<div class='row'>
    <div class='col-lg-12'>
        <div class="card">
            <div class="card-header p-2 bg-primary ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h6 class="mb-sm-0 text-white">All Recharge</h6>
                </div>
            </div>
            <div class="card-body">
               
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Date</th>
                            <th>Dealer Name</th>             
                            <th>Amount</th>
                            <th>Details</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count=1;
                        @endphp
                        @foreach($recharges as $recharge)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{ $recharge->date }}</td>
                            <td>{{ ucwords($recharge->DealerName->name) }}</td>       
                            <td>{{ $recharge->amount }}</td>
                            <td>{{ ucwords($recharge->details) }}</td>
                          
                            <td>
                                <a href="{{ route('recharge.edit', $recharge->id) }}" class="btn btn-sm btn-warning">Edit</a>
                               
                                <form action="{{ route('recharge.destroy', $recharge->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this recharge?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- end card -->
    </div>
</div>

@stop
