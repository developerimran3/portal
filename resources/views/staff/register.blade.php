<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Doccure - Register</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--[if lt IE 9]>
   <script src="assets/js/html5shiv.min.js"></script>
   <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Staff Register</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            <div class="form-group">
                                @include('layouts.message')
                            </div>
                            <!-- Form -->
                            <form action="{{ route('staff.register') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Name" name="name"
                                        value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="User Name" name="username"
                                        value="{{ old('username') }}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email" name="email"
                                        value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Phone" name="phone"
                                        value="{{ old('phone') }}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Address" name="address"
                                        value="{{ old('address') }}">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="role">
                                        <option>-- Select --</option>
                                        <option value="Account">Account</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Librarian">Librarian</option>
                                        <option value="Nurses">Nurses</option>
                                        <option value="Bus Drivers">Bus Drivers</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="file" name="photo"
                                        value="{{ old('photo') }}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Password" name="password"
                                        value="{{ old('password') }}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Confirm Password"
                                        name="password_confirmation">
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                                </div>
                            </form>
                            <!-- /Form -->
                            <div class="text-center dont-have">Already have an account? <a
                                    href="{{ route('staff.login') }}">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

</body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->

</html>
