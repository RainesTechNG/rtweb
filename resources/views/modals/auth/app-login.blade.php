<!--@modal - signup modal-->
<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Sign Up
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form id="modal-register-form" method="POST" action="{{ route('register') }}" data-parsley-validate="">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label class="sr-only" for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control email" value="{{ old('email') }}" required autofocus placeholder="Email...">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control email" value="{{ old('email') }}" required placeholder="Username...">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <input type="password" name="password" id="password_conf" class="form-control password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="password_confirmation">Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control password" placeholder="Confirm Password" data-parsley-equalto="#password_conf" >
                    </div>
                    <hr />
                    <button class="btn btn-primary" type="submit">Sign up</button>
                </form>
            </div>
            <div class="modal-footer">
                <small>Already signed up? <a href="#login-modal" data-toggle="modal">Login here</a>.</small>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->