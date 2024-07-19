@extends('layouts.app', ['title' => 'All Games'])
@section('content')

    <div class='row'>
        <div class='col-lg-12'>
            <div class="card">
                <div class="card-header p-2 bg-primary ">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h6 class="mb-sm-0 text-white">Add New Dealer</h6>
                        <div class="page-title-right">
                            <a title="Alt + A" id='view-all-button' href='{{ @route('dealer.index') }}'
                                class=" btn btn-sm btn-light">
                                View All Dealers
                            </a>
                        </div>


                    </div>
                </div>
                <div class="card-header p-2 bg-primary ">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h6 class="mb-sm-0 text-white">All Games</h6>
                    </div>
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>Sr. No</th>
                                <th>Arstrological images</th>
                                <th>Name</th>
                                <th>Name (Marathi)</th>
                                <th>Open Time</th>
                                <th>Close Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $count= 1;
                            @endphp
                            @foreach ($games as $game)
                                <tr>
                                    <td> {{ $count++ }}</td>
                                    <td><img src="{{ @asset($game->photo) }}" width="100" height="100"></td>

                                    <td>{{ $game->game_name_en }}</td>
                                    <td>{{ $game->game_name_mr }}</td>
                                    <td>{{ $game->open_time }}</td>
                                    <td>{{ $game->close_time }}</td>
                                    <td>
                                <a href="{{ route('game.index', $game->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                <form action="{{ route('game.index', $game->id) }}" method="POST" style="display:inline;">
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
