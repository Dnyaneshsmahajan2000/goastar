@extends('layouts.app', ['title' => 'All Users'])
@section('content')

    <div class='row'>
        <div class='col-lg-12'>
            <div class="card m-1">
                <div class="card-header p-2 bg-primary ">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h6 class="mb-sm-0 text-white">All Users</h6>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 1;
                            @endphp
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->mobile }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->type }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ route('user.change.password', $user->id) }}"
                                            class="btn btn-sm btn-secondary">Change Password</a>

                                        @if ($user->is_blocked == 1)
                                            <form action="{{ route('user.unblock', $user->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">Unblock</button>
                                            </form>
                                        @else
                                            <form action="{{ route('user.block', $user->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">Block</button>
                                            </form>
                                        @endif

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
