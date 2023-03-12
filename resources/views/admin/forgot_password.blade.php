<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap"
        rel="stylesheet">
    @include('admin.layouts.style')
    @include('admin.layouts.scripts')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <section class="section">
                <div class="container container-login">
                    <div class="row">
                        <div
                            class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                            <div class="card card-primary border-box">
                                <div class="card-header card-header-auth">
                                    <h4 class="text-center">Reset Password</h4>
                                </div>
                                <div class="card-body card-body-auth">
                                    <form method="POST" action="{{route('admin.forgot_password_submit')}}">
                                        @csrf
                                        @if(session()->get('error_message'))

                                        <div class="alert alert-danger">{{session()->get('error_message')}}</div>

                                        @endif


                                        @if($errorss)
                                        <p class="text-danger">{{ $errorss }}</p>
                                        @endif


                                        @error('email')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Email Address" value="" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                Send Password Reset Link
                                            </button>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <a href="{{route('admin.Login')}}">
                                                    Back to login page
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="dist/js/scripts.js"></script>
    <script src="dist/js/custom.js"></script>

</body>

</html>