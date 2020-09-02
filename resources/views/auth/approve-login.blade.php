<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>:: PWDSTHAI - Approve Login ::</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/js/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Files -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body id="falcon" class="authentication">
  <div class="wrapper">
    <div class="header header-filter" style="background-image: url('assets/images/login-bg-approve.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="card card-signup">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="header header-primary text-center">
                  <h4>เข้าสู่ระบบผู้อนุมัติ</h4>
                  {{-- <div class="social-line">
                    <a href="javascript:void(0);" class="btn btn-just-icon">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a  href="javascript:void(0);" class="btn btn-just-icon">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="javascript:void(0);" class="btn btn-just-icon">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </div> --}}
                </div>
                <h3 class="mt-0">PWDSTHAI</h3>
                <p class="help-block"></p>
                <div class="content">
                  <div class="form-group">
                    <input id="email" type="email" class="form-control underline-input" name="email" placeholder="อีเมล์..." value="" required autocomplete="email" autofocus>
                  </div>
                  <div class="form-group">
                    <input id="password" type="password" placeholder="รหัสผ่าน..." name="password"class="form-control underline-input" required autocomplete="current-password">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> จำข้อมูลไว้ใน ระบบ</label>
                  </div>
                </div>
                <div class="footer text-center">
                    <button type="submit" class="btn btn-raised btn-info">
                        {{ __('เข้าสู่ระบบ') }}
                    </button>
                </div>
                <a href="{{ route('password.request') }}" class="btn btn-wd">ลืมรหัสผ่าน?</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  Vendor JavaScripts -->
  <script src="assets/bundles/libscripts.bundle.js"></script>
  <script src="assets/bundles/mainscripts.bundle.js"></script>
  <!-- Custom Js -->
</body>
</html>
