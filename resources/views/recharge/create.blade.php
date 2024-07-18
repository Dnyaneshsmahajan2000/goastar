@extends('layouts.app', ['title' => 'Add New Dealer'])
@section('content')

    <div class='row'>
        <div class='col-lg-12'>
            <div class="card">
                <div class="card-header p-2 bg-primary ">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h6 class="mb-sm-0 text-white">Add New Recharge</h6>
                        <div class="page-title-right">
                            <a title="Alt + A" id='view-all-button' href='{{ @route('recharge.index') }}'
                                class=" btn btn-sm btn-light">
                                View All Recharge
                            </a>
                        </div>


                    </div>
                </div>
                <div class="card-body">

                    <form action="{{ route('recharge.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf <!-- CSRF token for security -->

                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-xxl-4 col-md-3">
                                    <div>
                                        <label for="mobile" class="form-label">Date<span class="text-danger font-weight-bold">*</span></label>
                                        <input type="date" autofocus required class="form-control" id="date" name="date" value="{{ date('Y-m-d') }}">
                                    </div>
                                    
                                    @error('date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-xxl-4 col-md-3">
                                    <div>
                                        <label for="name" class="form-label">Dealer Name<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <select class="form-select" name="dealer_id" id="">
                                            @foreach ($dealers as $dealer)
                                            <option value="{{ $dealer->id }}">{{ ucwords($dealer->name) }}</option>
                                                
                                            @endforeach
                                        </select>

                                    </div>
                                    @error('dealer_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                
                                <div class="col-xxl-4 col-md-3">
                                    <div>
                                        <label for="dob" class="form-label">Amount<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <input type="text" autofocus placeholder="Amount" required class="form-control"
                                            id="amount" name="amount" value="{{ old('amount') }}">
                                    </div>
                                    @error('amount')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-xxl-4 col-md-3">
                                    <div>
                                        <label for="dob" class="form-label">Details<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <input type="text" autofocus placeholder="Details" required class="form-control"
                                            id="details" name="details" value="{{ old('details') }}">
                                    </div>
                                    @error('details')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-md-10"></div>
                                        <div class="col">
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-primary ">Recharge</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--end row-->
                        </div>
                    </form>

                </div>
            </div><!-- end card -->
        </div>
    </div>

@stop
