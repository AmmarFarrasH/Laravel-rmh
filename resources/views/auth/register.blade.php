<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('starttemplate/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('starttemplate/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('starttemplate/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new membership</p>
                <form action="{{ route('register.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('nama_petugas') is-invalid @enderror"
                                placeholder="Nama Petugas" value="{{ @old('nama_petugas') }}" name="nama_petugas">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user-circle"></span>
                                </div>
                            </div>
                            @error('nama_petugas')
                                <span span id="terms-error" class="error invalid-feedback"
                                    style="display: inline;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                placeholder="Username" value="{{ @old('username') }}" name="username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            @error('username')
                                <span span id="terms-error" class="error invalid-feedback"
                                    style="display: inline;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                placeholder="Password" name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                                <span span id="terms-error" class="error invalid-feedback"
                                    style="display: inline;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
            </div>
            </form>
            <a href="{{ route('auth.login') }}" class="text-center">Saya Telah memiliki akun</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{ asset('starttemplate/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('starttemplate/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('starttemplate/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
