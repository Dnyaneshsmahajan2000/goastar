@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Edit Result</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('results.index') }}" class="btn btn-sm btn-primary text-white">
                                <i class="ri-add-line align-bottom me-1"></i> Back to Results
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('results.update', $result->id) }}" method="POST" class="needs-validation"
                        novalidate>
                        @csrf
                        @method('PUT')

                        <div class="table-responsive">
                            <table class="table table-striped align-middle table-nowrap">
                                <tbody class="list form-check-all">
                                    <tr>
                                        <input type="hidden" name="game_id" value="{{ $result->game_id }}">

                                        <td class="col-2">
                                            {{ ucwords($game->game_name_en) }}<br>
                                            {{ $game->game_name_mr }}
                                        </td>
                                        <td>
                                            <label for="open_3" class="form-label">Open_3 Digit<span
                                                    class="text-danger fs-15"> *</span></label>
                                            <input type="number" class="form-control" id="open_3" name="open_3"
                                                value="{{ old('open_3', $result->open_3) }}" required>
                                            <div class="invalid-feedback">
                                                Please enter a valid Open 3 Digit.
                                            </div>
                                        </td>
                                        <td>
                                            <label for="open_1" class="form-label">Open_1 Digit<span
                                                    class="text-danger fs-15"> *</span></label>
                                            <input type="number" class="form-control" id="open_1" name="open_1"
                                                value="{{ old('open_1', $result->open_1) }}" required>
                                            <div class="invalid-feedback">
                                                Please enter a valid Open 1 Digit.
                                            </div>
                                        </td>
                                        <td>
                                            <label for="close_3" class="form-label">Close_3 Digit<span
                                                    class="text-danger fs-15"> *</span></label>
                                            <input type="number" class="form-control" id="close_3" name="close_3"
                                                value="{{ old('close_3', $result->close_3) }}" required>
                                            <div class="invalid-feedback">
                                                Please enter a valid Close 3 Digit.
                                            </div>
                                        </td>
                                        <td>
                                            <label for="close_1" class="form-label">Close_1 Digit<span
                                                    class="text-danger fs-15"> *</span></label>
                                            <input type="number" class="form-control" id="close_1" name="close_1"
                                                value="{{ old('close_1', $result->close_1) }}" required>
                                            <div class="invalid-feedback">
                                                Please enter a valid Close 1 Digit.
                                            </div>
                                        </td>
                                        <td>
                                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div><!-- end card -->
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
