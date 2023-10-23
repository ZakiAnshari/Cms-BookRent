<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Rental Buku | Registration Page (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset ('AdminLTE-3.2.0/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition register-page">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('status'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
    @endif

    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1"><b>Book</b>Rental</a>
            </div>
            <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>


                <div class="input-group mb-3">
                    <input type="number" type="text" name="phone" id="phone"  class="form-control" placeholder="Phone" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>
                
                <div class="input-group mb-3">
                    <label for="address">Address</label>
                    <textarea name="address" id="address"
                    rows="5"
                    style="width: 100%;" ></textarea>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                <!-- /.col -->
                </div>
            </form>

            <a href="login" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('AdminLTE-3.2.0/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE-3.2.0/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
