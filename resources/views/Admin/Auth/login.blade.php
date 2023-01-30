@extends('Admin')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-xl-6 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header">
                    <h6>Login Form</h6>
                </div>
                <div class="ms-panel-body">
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
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
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom08">Email Address</label>
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" id="validationCustom08"
                                        placeholder="Email Address" autocomplete="off" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="validationCustom09">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" id="validationCustom09"
                                        placeholder="Password" autocomplete="off" required>
                                    <div class="invalid-feedback">
                                        Please provide a password.
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label class="ms-checkbox-wrap">
                                <input class="form-check-input" type="checkbox" value="">
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Remember Password </span>
                        </div> --}}

                        {!! NoCaptcha::renderJs() !!}

                        {!! NoCaptcha::display() !!}

                        @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                        @endif

                        <button class="btn btn-primary mt-4 d-block w-100" type="submit">Sign In</button>
                    </form>
                    <p class="mb-0 mt-3">Don't have an account? <a class="btn-link" href="/register">Create an Account</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
