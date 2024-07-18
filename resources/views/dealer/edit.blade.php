@extends('layouts.app', ['title' => 'Edit Dealer'])
@section('content')

    <div class='row'>
        <div class='col-lg-12'>
            <div class="card">
                <div class="card-header p-2 bg-primary ">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h6 class="mb-sm-0 text-white">Edit User</h6>
                        <div class="page-title-right">
                            <a title="Alt + A" id='view-all-button' href='{{ @route('dealer.index') }}'
                                class=" btn btn-sm btn-light">
                                View All Dealers
                            </a>
                        </div>


                    </div>
                </div>
                <div class="card-body">

                    <form action="{{ route('dealer.update',$dealer->id) }}" method="POST" class="needs-validation" novalidate>
                        @csrf <!-- CSRF token for security -->
                        @method('PUT')

                        <div class="live-preview">
                            <div class="row gy-4">

                                <div class="col-xxl-4 col-md-3">
                                    <div>
                                        <label for="name" class="form-label"> Name<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <input type="text" autofocus placeholder="Enter Your Full Name" required class="form-control"
                                            id="name" name="name" value="{{ old('name',$dealer->name) }}">
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
                                            id="mobile" name="mobile" value="{{ old('mobile',$dealer->mobile) }}">
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
                                            id="email" name="email" value="{{ old('email',$dealer->email) }}">
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
                                            id="city" name="city" value="{{ old('city',$dealer->city) }}">
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
                                            <option value="Andhra Pradesh-28" {{ $dealer->state == 'Andhra Pradesh-28' ? 'selected' : '' }}>Andhra Pradesh-28</option>
                                            <option value="Arunachal Pradesh-12" {{ $dealer->state == 'Arunachal Pradesh-12' ? 'selected' : '' }}>Arunachal Pradesh-12</option>
                                            <option value="Assam-18" {{ $dealer->state == 'Assam-18' ? 'selected' : '' }}>Assam-18</option>
                                            <option value="Bihar-10" {{ $dealer->state == 'Bihar-10' ? 'selected' : '' }}>Bihar-10</option>
                                            <option value="Chhattisgarh-22" {{ $dealer->state == 'Chhattisgarh-22' ? 'selected' : '' }}>Chhattisgarh-22</option>
                                            <option value="Goa-30" {{ $dealer->state == 'Goa-30' ? 'selected' : '' }}>Goa-30</option>
                                            <option value="Gujarat-24" {{ $dealer->state == 'Gujarat-24' ? 'selected' : '' }}>Gujarat-24</option>
                                            <option value="Haryana-06" {{ $dealer->state == 'Haryana-06' ? 'selected' : '' }}>Haryana-06</option>
                                            <option value="Himachal Pradesh-02" {{ $dealer->state == 'Himachal Pradesh-02' ? 'selected' : '' }}>Himachal Pradesh-02</option>
                                            <option value="Jharkhand-20" {{ $dealer->state == 'Jharkhand-20' ? 'selected' : '' }}>Jharkhand-20</option>
                                            <option value="Karnataka-29" {{ $dealer->state == 'Karnataka-29' ? 'selected' : '' }}>Karnataka-29</option>
                                            <option value="Kerala-32" {{ $dealer->state == 'Kerala-32' ? 'selected' : '' }}>Kerala-32</option>
                                            <option value="Madhya Pradesh-23" {{ $dealer->state == 'Madhya Pradesh-23' ? 'selected' : '' }}>Madhya Pradesh-23</option>
                                            <option value="Maharashtra-27" {{ $dealer->state == 'Maharashtra-27' ? 'selected' : '' }}>Maharashtra-27</option>
                                            <option value="Manipur-14" {{ $dealer->state == 'Manipur-14' ? 'selected' : '' }}>Manipur-14</option>
                                            <option value="Meghalaya-17" {{ $dealer->state == 'Meghalaya-17' ? 'selected' : '' }}>Meghalaya-17</option>
                                            <option value="Mizoram-15" {{ $dealer->state == 'Mizoram-15' ? 'selected' : '' }}>Mizoram-15</option>
                                            <option value="Nagaland-13" {{ $dealer->state == 'Nagaland-13' ? 'selected' : '' }}>Nagaland-13</option>
                                            <option value="Odisha-21" {{ $dealer->state == 'Odisha-21' ? 'selected' : '' }}>Odisha-21</option>
                                            <option value="Punjab-03" {{ $dealer->state == 'Punjab-03' ? 'selected' : '' }}>Punjab-03</option>
                                            <option value="Rajasthan-08" {{ $dealer->state == 'Rajasthan-08' ? 'selected' : '' }}>Rajasthan-08</option>
                                            <option value="Sikkim-11" {{ $dealer->state == 'Sikkim-11' ? 'selected' : '' }}>Sikkim-11</option>
                                            <option value="Tamil Nadu-33" {{ $dealer->state == 'Tamil Nadu-33' ? 'selected' : '' }}>Tamil Nadu-33</option>
                                            <option value="Telangana-36" {{ $dealer->state == 'Telangana-36' ? 'selected' : '' }}>Telangana-36</option>
                                            <option value="Tripura-16" {{ $dealer->state == 'Tripura-16' ? 'selected' : '' }}>Tripura-16</option>
                                            <option value="Uttar Pradesh-09" {{ $dealer->state == 'Uttar Pradesh-09' ? 'selected' : '' }}>Uttar Pradesh-09</option>
                                            <option value="Uttarakhand-05" {{ $dealer->state == 'Uttarakhand-05' ? 'selected' : '' }}>Uttarakhand-05</option>
                                            <option value="West Bengal-19" {{ $dealer->state == 'West Bengal-19' ? 'selected' : '' }}>West Bengal-19</option>
                                            <option value="Andaman and Nicobar Islands-35" {{ $dealer->state == 'Andaman and Nicobar Islands-35' ? 'selected' : '' }}>Andaman and Nicobar Islands-35</option>
                                            <option value="Chandigarh-04" {{ $dealer->state == 'Chandigarh-04' ? 'selected' : '' }}>Chandigarh-04</option>
                                            <option value="Dadra and Nagar Haveli and Daman and Diu-26" {{ $dealer->state == 'Dadra and Nagar Haveli and Daman and Diu-26' ? 'selected' : '' }}>Dadra and Nagar Haveli and Daman and Diu-26</option>
                                            <option value="Delhi-07" {{ $dealer->state == 'Delhi-07' ? 'selected' : '' }}>Delhi-07</option>
                                            <option value="Jammu and Kashmir-01" {{ $dealer->state == 'Jammu and Kashmir-01' ? 'selected' : '' }}>Jammu and Kashmir-01</option>
                                            <option value="Ladakh-37" {{ $dealer->state == 'Ladakh-37' ? 'selected' : '' }}>Ladakh-37</option>
                                            <option value="Lakshadweep-31" {{ $dealer->state == 'Lakshadweep-31' ? 'selected' : '' }}>Lakshadweep-31</option>
                                            <option value="Puducherry-34" {{ $dealer->state == 'Puducherry-34' ? 'selected' : '' }}>Puducherry-34</option>
                                        </select>
                                        @error('state')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                

                                </div>

                                <div class="col-xxl-3 col-md-3">
                                    <div>
                                        <button type="submit" class="btn btn-primary mt-4" name="submit">Update
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
