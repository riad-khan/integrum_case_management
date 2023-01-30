@extends('Admin')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-xl-6 col-md-12 ">
        <div class="ms-panel">
          <div class="ms-panel-header">
            <h6>Signup Form</h6>
          </div>
          <div class="ms-panel-body">
            <form class="needs-validation" novalidate action="{{ route('register') }}" method="POST">
              @csrf

              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationCustom01">First name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="fname" id="validationCustom01" autocomplete="off" placeholder="First name"  required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationCustom02">Last name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="lname" id="validationCustom02" autocomplete="off" placeholder="Last name"  required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="validationCustom02">Phone Number</label>
                  <div class="input-group">
                    <input type="digit" class="form-control" name="phone" id="validationCustom02" autocomplete="off" placeholder="Last name" >
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="validationCustom02">Date Of Birth</label>
                  <div class="input-group">
                    <input type="date" class="form-control" name="dob" id="validationCustom02" autocomplete="off" placeholder="Last name">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="validationCustom03">Email Address</label>
                  <div class="input-group">
                    <input type="email" class="form-control" name="email" id="validationCustom03" autocomplete="off" placeholder="Email Address" required>
                    <div class="invalid-feedback">
                      Please provide a valid email.
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mb-2">
                  <label for="validationCustom04">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" name="password" id="validationCustom04" autocomplete="off" placeholder="Password" required>
                    <div class="invalid-feedback">
                      Please provide a password.
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mb-2">
                  <label for="validationCustom04">Confirm password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" name="password_confirmation" id="validationCustom04" autocomplete="off" placeholder="confirm password" required>
                    <div class="invalid-feedback">
                      Please provide a password.
                    </div>
                  </div>
                </div>
              </div>
              

              <div class="form-group">
                <div class="form-check pl-0">
                  {!! NoCaptcha::renderJs() !!}

                        {!! NoCaptcha::display() !!}

                        @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                        @endif
                </div>
              </div>
              <div class="form-group">
                <div class="form-check pl-0">
                  <label class="ms-checkbox-wrap">
                    <input class="form-check-input" name="agree" type="checkbox" value="1" id="invalidCheck" required="">
                    <i class="ms-checkbox-check"></i>
                  </label>
                  <span> Agree to terms and conditions </span>
                </div>
              </div>
              <button class="btn btn-primary mt-4 d-block w-100" type="submit">Create Account</button>
            </form>
            <p class="mb-0 mt-3">Already Have an account? <a class="btn-link" href="#">Login to Account</a> </p>
          </div>
        </div>
      </div>
</div>
@endsection