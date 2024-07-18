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
                                        <label for="state" class="form-label">State<span class="text-danger font-weight-bold">*</span></label>
                                        <select name="state" id="state" class="form-select">
                                            <option value="">--- Select State ---</option>
                                            <option value="Andhra Pradesh-28" {{ old('state') == 'Andhra Pradesh-28' ? 'selected' : '' }}>Andhra Pradesh-28</option>
                                            <option value="Arunachal Pradesh-12" {{ old('state') == 'Arunachal Pradesh-12' ? 'selected' : '' }}>Arunachal Pradesh-12</option>
                                            <option value="Assam-18" {{ old('state') == 'Assam-18' ? 'selected' : '' }}>Assam-18</option>
                                            <option value="Bihar-10" {{ old('state') == 'Bihar-10' ? 'selected' : '' }}>Bihar-10</option>
                                            <option value="Chhattisgarh-22" {{ old('state') == 'Chhattisgarh-22' ? 'selected' : '' }}>Chhattisgarh-22</option>
                                            <option value="Goa-30" {{ old('state') == 'Goa-30' ? 'selected' : '' }}>Goa-30</option>
                                            <option value="Gujarat-24" {{ old('state') == 'Gujarat-24' ? 'selected' : '' }}>Gujarat-24</option>
                                            <option value="Haryana-06" {{ old('state') == 'Haryana-06' ? 'selected' : '' }}>Haryana-06</option>
                                            <option value="Himachal Pradesh-02" {{ old('state') == 'Himachal Pradesh-02' ? 'selected' : '' }}>Himachal Pradesh-02</option>
                                            <option value="Jharkhand-20" {{ old('state') == 'Jharkhand-20' ? 'selected' : '' }}>Jharkhand-20</option>
                                            <option value="Karnataka-29" {{ old('state') == 'Karnataka-29' ? 'selected' : '' }}>Karnataka-29</option>
                                            <option value="Kerala-32" {{ old('state') == 'Kerala-32' ? 'selected' : '' }}>Kerala-32</option>
                                            <option value="Madhya Pradesh-23" {{ old('state') == 'Madhya Pradesh-23' ? 'selected' : '' }}>Madhya Pradesh-23</option>
                                            <option value="Maharashtra-27" {{ old('state') == 'Maharashtra-27' ? 'selected' : '' }}>Maharashtra-27</option>
                                            <option value="Manipur-14" {{ old('state') == 'Manipur-14' ? 'selected' : '' }}>Manipur-14</option>
                                            <option value="Meghalaya-17" {{ old('state') == 'Meghalaya-17' ? 'selected' : '' }}>Meghalaya-17</option>
                                            <option value="Mizoram-15" {{ old('state') == 'Mizoram-15' ? 'selected' : '' }}>Mizoram-15</option>
                                            <option value="Nagaland-13" {{ old('state') == 'Nagaland-13' ? 'selected' : '' }}>Nagaland-13</option>
                                            <option value="Odisha-21" {{ old('state') == 'Odisha-21' ? 'selected' : '' }}>Odisha-21</option>
                                            <option value="Punjab-03" {{ old('state') == 'Punjab-03' ? 'selected' : '' }}>Punjab-03</option>
                                            <option value="Rajasthan-08" {{ old('state') == 'Rajasthan-08' ? 'selected' : '' }}>Rajasthan-08</option>
                                            <option value="Sikkim-11" {{ old('state') == 'Sikkim-11' ? 'selected' : '' }}>Sikkim-11</option>
                                            <option value="Tamil Nadu-33" {{ old('state') == 'Tamil Nadu-33' ? 'selected' : '' }}>Tamil Nadu-33</option>
                                            <option value="Telangana-36" {{ old('state') == 'Telangana-36' ? 'selected' : '' }}>Telangana-36</option>
                                            <option value="Tripura-16" {{ old('state') == 'Tripura-16' ? 'selected' : '' }}>Tripura-16</option>
                                            <option value="Uttar Pradesh-09" {{ old('state') == 'Uttar Pradesh-09' ? 'selected' : '' }}>Uttar Pradesh-09</option>
                                            <option value="Uttarakhand-05" {{ old('state') == 'Uttarakhand-05' ? 'selected' : '' }}>Uttarakhand-05</option>
                                            <option value="West Bengal-19" {{ old('state') == 'West Bengal-19' ? 'selected' : '' }}>West Bengal-19</option>
                                            <option value="Andaman and Nicobar Islands-35" {{ old('state') == 'Andaman and Nicobar Islands-35' ? 'selected' : '' }}>Andaman and Nicobar Islands-35</option>
                                            <option value="Chandigarh-04" {{ old('state') == 'Chandigarh-04' ? 'selected' : '' }}>Chandigarh-04</option>
                                            <option value="Dadra and Nagar Haveli and Daman and Diu-26" {{ old('state') == 'Dadra and Nagar Haveli and Daman and Diu-26' ? 'selected' : '' }}>Dadra and Nagar Haveli and Daman and Diu-26</option>
                                            <option value="Delhi-07" {{ old('state') == 'Delhi-07' ? 'selected' : '' }}>Delhi-07</option>
                                            <option value="Jammu and Kashmir-01" {{ old('state') == 'Jammu and Kashmir-01' ? 'selected' : '' }}>Jammu and Kashmir-01</option>
                                            <option value="Ladakh-37" {{ old('state') == 'Ladakh-37' ? 'selected' : '' }}>Ladakh-37</option>
                                            <option value="Lakshadweep-31" {{ old('state') == 'Lakshadweep-31' ? 'selected' : '' }}>Lakshadweep-31</option>
                                            <option value="Puducherry-34" {{ old('state') == 'Puducherry-34' ? 'selected' : '' }}>Puducherry-34</option>
                                        </select>
                                        @error('state')
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
