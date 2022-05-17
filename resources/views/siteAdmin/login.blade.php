<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <script nonce="6d78190f-d1db-4d0e-bc23-13e7fd3d25da">
    (function(w, d) {
        ! function(a, e, t, r) {
            a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = {
                deferred: []
            }, a.zaraz.track = (e, t) => {
                for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key]
            }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => {
                a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r])
            }, a.addEventListener("DOMContentLoaded", (() => {
                var t = e.getElementsByTagName(r)[0],
                    z = e.createElement(r),
                    n = e.getElementsByTagName("title")[0];
                n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen
                    .width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData
                    .e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a
                    .zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o =
                    (new Date).getTimezoneOffset(), z.defer = !0, z.src = "/cdn-cgi/zaraz/s.js?z=" +
                    btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z,
                        t)
            }))
        }(w, d, 0, "script");
    })(window, document);
    </script> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{url('fileAdmin')}}/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="{{url('fileAdmin')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="{{url('fileAdmin')}}/dist/css/adminlte.min.css?v=3.2.0">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Admin</b>H</a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <br>
                        <div class="w-100">
                            @error('email') {{$message}} @enderror
                        </div>
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="w-100">
                            @error('email') {{$message}} @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>

                    </div>
                </form>
                <!-- <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div> -->

                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div>

        </div>
    </div>


    <!-- <script src="{{url('fileAdmin')}}/plugins/jquery/jquery.min.js"></script>

    <script src="{{url('fileAdmin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{url('fileAdmin')}}/dist/js/adminlte.min.js?v=3.2.0"></script> -->
</body>

</html>