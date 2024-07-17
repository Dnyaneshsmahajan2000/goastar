@extends('layouts.app', ['title' => 'Add New Dealer'])
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
                <div class="card-body">

                    <form action="{{ route('dealer.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf <!-- CSRF token for security -->

                        <div class="live-preview">
                            <div class="row gy-4">

                                <div class="col-xxl-4 col-md-3">
                                    <div>
                                        <label for="name" class="form-label"> Name<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <input type="text" autofocus placeholder="Enter Your Full Name" required class="form-control"
                                            id="name" name="name" value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-xxl-4 col-md-3">
                                    <div>
                                        <label for="mobile" class="form-label">Mobile<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <input type="text" autofocus placeholder="Enter Your Mobile" required class="form-control"
                                            id="mobile" name="mobile" value="{{ old('mobile') }}">
                                    </div>
                                    @error('mobile')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-xxl-4 col-md-3">
                                    <div>
                                        <label for="dob" class="form-label">Email Id<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <input type="text" autofocus placeholder="Email Id" required class="form-control"
                                            id="email" name="email" value="{{ old('email') }}">
                                    </div>
                                    @error('dob')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-xxl-4 col-md-3">
                                    <div>
                                        <label for="dob" class="form-label">City<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <input type="text" autofocus placeholder="City" required class="form-control"
                                            id="city" name="city" value="{{ old('city') }}">
                                    </div>
                                    @error('city')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="col-xxl-4 col-md-3">
                                    <div>
                                        <label for="type" class="form-label">Type<span
                                            class="text-danger font-weight-bold">*</span></label>
                                        <select name="type" id="type" class="form-select">
                                            <option value="">--- Select Type ---</option>
                                            <option value="admin">Admin</option>
                                            <option value="master">Master</option>
                                            <option value="agent">Agent</option>
                                            <option value="user">User</option>
                                        </select>
                                        @error('type')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>

                                </div>

                                <div class="col-xxl-3 col-md-3">
                                    <div>
                                        <button type="submit" class="btn btn-primary mt-4" name="submit">Add
                                            Dealer</button>
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
