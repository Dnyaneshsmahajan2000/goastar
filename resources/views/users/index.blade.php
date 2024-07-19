@extends('layouts.app', ['title' => 'All Users'])
@section('content')

<div class='row'>
    <div class='col-lg-12'>
        <div class="card"><div class="card-header p-2 bg-primary ">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h6 class="mb-sm-0 text-white">All Users</h6>
                <div class="page-title-right">
                    <a title="Alt + A" id='view-all-button' href='{{ @route('user.create') }}'
                        class=" btn btn-sm btn-light">
                        Add New User
                    </a>
                </div>


            </div>
        </div>
            
            <div class="card-body">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped align-middle table-nowrap">

                    <thead> 
                        <tr>
                            <th>Sr.No</th>
                            <th data-sort="email">Name</th>
                            <th data-sort="phone">Mobile</th>
                            <th data-sort="email">Date of Birth</th>
                            <th data-sort="type">Address</th>
                            <th data-sort="type">Type</th>
                            <th data-sort="action">Action</th>

                        </tr>
                    </thead>
                    <tbody class="list form-check-all">
                        @php
                            $count=1;
                        @endphp
                        @foreach($users as $user)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>{{ date('d-m-Y', strtotime($user->dob ))}}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->type }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ route('user.change.password', $user->id) }}" class="btn btn-sm btn-secondary">Change Password</a>
                                
                                @if ($user->is_blocked==1)
                                    <form action="{{ route('user.unblock', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Unblock</button>
                                    </form>
                                @else
                                    <form action="{{ route('user.block', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Block</button>
                                    </form>
                                
                                    
                                @endif
                                </div>
                            
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
