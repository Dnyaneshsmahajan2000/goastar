@extends('layouts.app', ['title' => 'All Results'])
@section('content')

    <div class='row'>
        <div class='col-lg-12'>
            <div class="card">

                <div class="card-header p-2 bg-primary ">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h6 class="mb-sm-0 text-white">All Results</h6>
                         <div class="page-title-right">
                        <a title="Alt + A" id='view-all-button' href='{{ @route('results.create') }}'
                            class=" btn btn-sm btn-light">
                            Add New Result
                        </a>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped align-middle table-nowrap">
                        <thead>
                            <tr>

                                <th>Sr. No</th>
                                <th>Date</th>
                                <th>Game Name</th>
                                <th>Open 3</th>
                                <th>Open 1</th>
                                <th>Close 3</th>
                                <th>Close 1</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $count= 1;
                            @endphp
                            @foreach ($results as $result)
                                <tr>
                                    <td> {{ $count++ }}</td>
                                    {{-- <td><img src="{{ @asset($result->photo) }}" width="80" height="80"></td> --}}
                                    <td>{{ date('d-m-Y' , strtotime($result->date)) }}</td>

                                    <td>{{ $result->game->game_name_en }} ( {{ $result->game->game_name_mr }} )</td>
                                    <td>{{ $result->open_3 }}</td>
                                    <td>{{ $result->open_1 }}</td>
                                    <td>{{ $result->close_3 }}</td>
                                    <td>{{ $result->close_1 }}</td>
                                    <td>
                                        <a href="{{ route('results.edit', $result->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('results.delete', $result->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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
