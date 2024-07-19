@extends('layouts.app', ['title' => 'All Games'])
@section('content')

    <div class='row'>
        <div class='col-lg-12'>
            <div class="card">
                <div class="card-header p-2 bg-primary ">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h6 class="mb-sm-0 text-white">Manage All Games</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-striped align-middle table-nowrap">
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
                                    <td><img src="{{ @asset($game->photo) }}" width="80" height="80"></td>

                                    <td>{{ $game->game_name_en }}</td>
                                    <td>{{ $game->game_name_mr }}</td>
                                    <td>{{ $game->open_time }}</td>
                                    <td>{{ $game->close_time }}</td>
                                    <td>
                                <a href="{{ route('game.index', $game->id) }}" class="btn btn-sm btn-primary">Edit</a>

                                @if ($game->disable==1)
                                <form action="{{ route('game.enable', $game->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success">Enable</button>
                                </form>
                            @else
                                <form action="{{ route('game.disable', $game->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Disable</button>
                                </form>
                            
                                
                            @endif
                                {{-- <form action="{{ route('game.index', $game->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form> --}}
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
