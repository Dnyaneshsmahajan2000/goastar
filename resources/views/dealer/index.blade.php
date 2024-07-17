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
               
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dealers as $dealer)
                        <tr>
                            <td>{{ $dealer->name }}</td>
                            <td>{{ $dealer->mobile }}</td>
                            <td>{{ $dealer->address }}</td>
                            <td>{{ $dealer->type }}</td>
                            <td>
                                <a href="{{ route('dealer.edit', $dealer->id) }}" class="btn btn-sm btn-warning">Edit</a>
                               
                                <form action="{{ route('dealer.delete', $dealer->id) }}" method="POST" style="display:inline;">
                                    @csrf
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
