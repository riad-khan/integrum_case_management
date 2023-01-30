@extends('Admin')

@section('content')
    <div class="ms-content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="/dashboard"><i class="material-icons">home</i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Profile Update</a></li>

                    </ol>
                </nav>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <h6>Profile update</h6>
                    </div>
                    <div class="ms-panel-body">
                        <form method="post" action="{{ url('/store-profile') }}" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">First name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="fname"
                                            value="{{ Auth::user()->first_name }}" id="validationCustom01"
                                            placeholder="First name" value="John">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Last name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="lname"
                                            value="{{ Auth::user()->last_name }}" id="validationCustom02"
                                            placeholder="Last name" value="Doe">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom03">Birthday</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="dob"
                                            value="{{ Auth::user()->date_of_birth }}" id="validationCustom03"
                                            placeholder="your birthday">
                                        <div class="invalid-feedback">
                                            Please provide a valid date.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom03">Language</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="language"
                                            value="{{ Auth::user()->language }}" id="validationCustom03"
                                            placeholder="language">
                                        <div class="invalid-feedback">
                                            Please provide a valid value.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom03">Website</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="website"
                                            value="{{ Auth::user()->website }}" id="validationCustom03"
                                            placeholder="website">
                                        <div class="invalid-feedback">
                                            Please provide a valid value.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom03">Phone Number</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="phone"
                                            value="{{ Auth::user()->phone_number }}" id="validationCustom03"
                                            placeholder="website">
                                        <div class="invalid-feedback">
                                            Please provide a valid value.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom03">Email Address</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="email"
                                            value="{{ Auth::user()->email }}" id="validationCustom03"
                                            placeholder="Email Address">
                                        <div class="invalid-feedback">
                                            Please provide a valid email.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="validationCustom04">update password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password" id="validationCustom04"
                                            placeholder="Password">
                                        <div class="invalid-feedback">
                                            Please provide a password.
                                        </div>
                                    </div>
                                </div>
                            </div>
                           

                           

                            <button class="btn btn-primary mt-4 d-block w-100" type="submit">Update Profile</button>
                        </form>

                    </div>
                </div>
            </div>






        </div>
    </div>
@endsection
