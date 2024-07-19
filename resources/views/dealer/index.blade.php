@extends('layouts.app', ['title' => 'All Dealers'])
@section('content')

<div class='row'>
    <div class='col-lg-12'>
        <div class="card">
            <div class="card-header p-2 bg-primary ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h6 class="mb-sm-0 text-white">All Dealers</h6>
                </div>
            </div>
            <div class="card-body">
               
                <div class="table-responsive">
                    <table class="table table-striped align-middle table-nowrap">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count=1;
                        @endphp
                        @foreach($dealers as $dealer)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{ ucwords($dealer->name) }}</td>
                            <td>{{ $dealer->mobile }}</td>
                            <td>{{ $dealer->email }}</td>
                            <td>{{ ucwords($dealer->city) }}</td>
                            <td>{{ $dealer->state }}</td>
                            <td>
                                <a href="{{ route('dealer.edit', $dealer->id) }}" class="btn btn-sm btn-warning">Edit</a>
                               
                                <form action="{{ route('dealer.destroy', $dealer->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this dealer?');">
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
            </div>
        </div><!-- end card -->
    </div>
</div>

@stop
