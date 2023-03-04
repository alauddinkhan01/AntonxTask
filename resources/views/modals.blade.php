<!-- Modal [sign] -->
<div id="loginModal" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                <i class="icon-close fas fa-arrow-right"></i>
            </div>
            <div class="modal-body">
                <form id="login-form">
                    @csrf
                    <div class="col-12 p-0 align-self-center">
                        <div class="row">
                            <div class="col-12 p-0 pb-3">
                                <h2>Sign In</h2>
                                {{-- <p>Don't have an accountsssssss? <a href="#" class="register-signin" id="register-popup"
                                        data-toggle="modal" data-target="#register">Register
                                        now</a>.</p> --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Enter Email">
                                <span role="alert"
                                    style="width: 100%; margin-top: 0.25rem; font-size: 80%; color: #dc3545;">
                                    <strong id="login-error-email"></strong>
                                </span>
                            </div>
                            <div class="col-12 p-0 input-group">
                                <input id="login-password-input" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="Enter Password">
                                <i class="icon-close fas fa-eye-slash" role="button" id="login-show-password"
                                    style="position: absolute; right:10px; bottom: 22px; z-index: 1;"></i>
                                <i class="icon-close fas fa-eye d-none" role="button" id="login-hide-password"
                                    style="position: absolute; right:10px; bottom: 22px; z-index: 1;"></i>
                                <span role="alert"
                                    style="width: 100%; margin-top: 0.25rem; font-size: 80%; color: #dc3545;">
                                    <strong id="login-error-password"></strong>
                                </span>
                            </div>
                            <div>
                                {{-- <a href="{{ route('password.request') }}" class="float-end">Forgot Password?</a> --}}
                            </div>
                            <span role="alert"
                                style="width: 100%; margin-top: 0.25rem; font-size: 80%; color: #dc3545;">
                                <strong id="login-error-msg"></strong>
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group align-self-center">
                                <button type="button" id="login-form-btn" class="btn primary-button">SIGN
                                    IN</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal [register] -->
<div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                <i class="icon-close fas fa-arrow-right"></i>
            </div>
            <div class="modal-body">
                <form id="register-form">
                    @csrf
                    <div class="col-12 p-0 align-self-center">
                        <div class="row">
                            <div class="col-12 p-0 pb-3">
                                <h2>Register</h2>
                                <p>Have an account? <a href="#" class="register-signin" id="login-link"
                                        data-dismiss="modal">Sign
                                        In</a>.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Enter Name">
                                <span role="alert"
                                    style="width: 100%; margin-top: 0.25rem; font-size: 80%; color: #dc3545;">
                                    <strong id="reg-name-error"></strong>
                                </span>
                            </div>
                            <div class="col-12 p-0 input-group">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Enter Email">
                                <span role="alert"
                                    style="width: 100%; margin-top: 0.25rem; font-size: 80%; color: #dc3545;">
                                    <strong id="reg-email-error"></strong>
                                </span>
                            </div>
                            <div class="col-12 p-0 input-group">
                                <input id="signup-password" type="password"
                                    class="form-control signup-password @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password"
                                    placeholder="Enter Password">
                                <i class="icon-close fas fa-eye-slash" role="button" id="signup-show-password"
                                    style="position: absolute; right:10px; bottom: 17px"></i>
                                <i class="icon-close fas fa-eye d-none" role="button" id="signup-hide-password"
                                    style="position: absolute; right:10px; bottom: 17px"></i>

                            </div>
                            <div class="col-12 p-0 input-group">
                                <input id="password-confirm" type="password"
                                    class="form-control confirm-password @error('password') is-invalid @enderror"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Enter Confirm Password">
                                <i class="icon-close fas fa-eye-slash" role="button" id="confirm-show-password"
                                    style="position: absolute; right:10px; bottom: 17px"></i>
                                <i class="icon-close fas fa-eye d-none" role="button" id="confirm-hide-password"
                                    style="position: absolute; right:10px; bottom: 17px"></i>
                            </div>
                            <div class="col-12">
                                <span role="alert"
                                    style="width: 100%; margin-top: 0.25rem; font-size: 80%; color: #dc3545;">
                                    <strong id="reg-password-error"></strong>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group align-self-center">
                                <button type="button" id="register-form-btn"
                                    class="btn primary-button">REGISTER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal [map] -->
<div class="modal fade" id="sizeExceedModal" tabindex="-1" role="dialog" aria-labelledby="sizeExceedModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-red" id="exampleModalLongTitle">Warning</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                You Cannot Upload More than 2GB....
            </div>
            <div class="modal-footer">
                <button type="button" class="btn primary-button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal [responsive menu] -->
<div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                <i class="icon-close fas fa-arrow-right"></i>
            </div>
            <div class="menu modal-body">
                <div class="row w-100">
                    <div class="items p-0 col-12 text-center">
                        <!-- Append [navbar] -->
                    </div>
                    <div class="contacts p-0 col-12 text-center">
                        <!-- Append [navbar] -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
