<!--@modal - login modal-->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Login
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form id="modal-login-form" method="POST" action="{{ route('login') }}" data-parsley-validate="">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label class="sr-only" for="username">Username or Email</label>
                        <input type="text" name="username" id="username" class="form-control email" value="{{ old('email') }}" required autofocus placeholder="Username or Email">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <small>Not a member? <a href="#signup-modal" data-toggle="modal" class="signup">Sign up now!</a></small>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->