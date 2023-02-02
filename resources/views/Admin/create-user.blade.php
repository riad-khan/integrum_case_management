@extends('Admin')

@section('content')
    <div class="ms-content-wrapper">
        <div class="row">

            <div class="col-xl-6 col-md-12">
                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <h6>Create New User</h6>
                    </div>
                    <div class="ms-panel-body">
                        <form action="{{url('/store-user')}}" method="post" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">First name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom01"
                                            placeholder="First name" name="first_name" value="" required="">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        @error('first_name')
                                        <span style="color: red" class="backend-error"> {{ $message }} </div>
                                    @enderror
                                    </div>

                                    
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Last name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom02"
                                            placeholder="Last name" name="last_name" value="" required="">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        @error('last_name')
                                        <span style="color: red" class="backend-error"> {{ $message }} </div>
                                    @enderror
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom03">Email Address</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" value="" id="validationCustom03"
                                            name="email" placeholder="Email Address" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid email.
                                        </div>
                                        @error('email')
                                        <span style="color: red" class="backend-error"> {{ $message }} </div>
                                    @enderror
                                    </div>
                                 
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom03">Date of Birth</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" value="" name="date_of_birth"
                                            id="validationCustom03" placeholder="Email Address" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid date.
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom03">Phone Number</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="" id="validationCustom03"
                                            placeholder="" name="phone_number" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid Number.
                                        </div>

                                        @error('phone_number')
                                        <span style="color: red" class="backend-error"> {{ $message }} </div>
                                    @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom03">Language</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="" name="language"
                                            id="validationCustom03">
                                        <div class="invalid-feedback">
                                            Please provide a valid Language.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom03">Website</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="" name="website"
                                            id="validationCustom03">
                                        <div class="invalid-feedback">
                                            Please provide a valid .
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom03">Location</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="" name="location"
                                            id="validationCustom03" autocomplete="off">
                                        <div class="invalid-feedback">
                                            Please provide a valid Language.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom03">Update password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password" value=""
                                            autocomplete="off" id="validationCustom03" placeholder="Email Address">
                                        <div class="invalid-feedback">
                                            Please provide a valid email.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="validationCustom03">User Permissions</label>
                                <div class="form-check pl-0">
                                    @foreach ($role as $item)
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input" name="roles[]" type="checkbox"
                                                value="{{ $item->id }}" id="invalidCheck">
                                            <i class="ms-checkbox-check"></i>

                                        </label>
                                        <span> {{ $item->role_name }} </span>
                                    @endforeach
                                </div>
                            </div>


                            <button class="btn btn-primary mt-4 d-block w-100" type="submit">Update</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
