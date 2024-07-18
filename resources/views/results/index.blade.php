@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <style>
                .card {
                    margin: 1px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
                    padding: 10px;
                }
            </style>

            <div class="row">
                @foreach ($games as $game)
                    @php
                        $game_result = \App\Models\Result::where('id', $game->id)
                            ->where('date', date('Y-m-d'))
                            ->first();

                        $now = now()->setTimezone('Asia/Kolkata')->format('g:i:s');
                    @endphp

                    <div class="col-md-3 mb-4">
                        <form action="{{ $game_result ? route('results.closeSave') : route('results.openSave') }}"
                            class="needs-validation" id="useradd-form" novalidate method="POST">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <h5>{{ ucwords($game->game_name_en) }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <h5>{{ ucwords($game->game_name_mr) }}</h5>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" class="form-control" name="game_id"
                                        value="{{ $game->id }}">

                                    @if ($now > $game->open_time)
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="open_3" class="form-label">Open_3 Digit<span
                                                            class="text-danger fs-15">*</span></label>
                                                    <input type="number" class="form-control" id="open_3"
                                                        oninput="calculateSumAndSetLastDigit('open')" name="open_3"
                                                        value="{{ optional($game_result)->open_3 }}"
                                                        {{ $game_result ? 'readonly' : '' }}>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="open_1" class="form-label">Open_1 Digit<span
                                                            class="text-danger fs-15">*</span></label>
                                                    <input type="number" class="form-control" id="open_1"
                                                        name="open_1" value="{{ optional($game_result)->open_1 }}"
                                                        {{ $game_result ? 'readonly' : '' }}>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($now > $game->close_time && $game_result)
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="close_3" class="form-label">Close_3 Digit<span
                                                            class="text-danger fs-15">*</span></label>
                                                    <input type="number" class="form-control" id="close_3"
                                                        name="close_3" oninput="calculateSumAndSetLastDigit('close')">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="close_1" class="form-label">Close_1 Digit<span
                                                            class="text-danger fs-15">*</span></label>
                                                    <input type="number" class="form-control" id="close_1"
                                                        name="close_1">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div style="text-align: end;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>

            <div class="noresult" style="display: none">
                <div class="text-center">
                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                        colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                    <h5 class="mt-2">Sorry! No Result Found</h5>
                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for your
                        search.</p>
                </div>
            </div>
        </div>
    </div><!-- end card -->
</div>
<!-- end col -->
</div>
<!-- end col -->
</div>
</div>
@endsection

@push('scripts')
<script>
    function calculateSumAndSetLastDigit(type) {
        const value = document.getElementById(`${type}_3`).value;
        const digitSum = value.split('').reduce((sum, digit) => sum + parseInt(digit), 0);
        const lastDigit = digitSum % 10;
        document.getElementById(`${type}_1`).value = lastDigit;
    }
</script>
@endpush
