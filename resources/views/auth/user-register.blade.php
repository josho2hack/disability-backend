<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>:: PWDSTHAI - Admin Dashboard ::</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <link rel="stylesheet" href="assets/js/vendor/bootstrap/bootstrap.min.css">
  <!--  Fonts and icons -->
  <!-- CSS Files -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body id="falcon" class="authentication">
  <!-- Application Content -->
  <div class="wrapper">
    <div class="header header-filter" style="background-image: url('assets/images/login-bg.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="card card-signup">
            <form class="form" method="POST" action="{{ route('regitersubmit')}}">
                <div class="header header-primary text-center">
                  <h4>สมัครสมาชิก</h4>
                  <!-- <div class="social-line">
                    <a href="#" class="btn btn-just-icon">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#" class="btn btn-just-icon">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-just-icon">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </div> -->
                </div>
                <h3 class="mt-0">PWDSTHAI</h3>
                <p class="help-block"></p>
                <div class="content">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="ชื่อ..." name="firstname">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="นามสกุล..." name="lastname">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control underline-input" placeholder="อีเมล์...">
                  </div>
                  <div class="form-group">
                    <input type="password" placeholder="รหัสผ่าน..." class="form-control" />
                  </div>
                  <div class="form-group">
                    <input type="password" placeholder="รหัสผ่านอีกครั้ง..." class="form-control" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="เลขประจำตัวประชาชน..." name="">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="เลขบัตรประจำตัวคนพิการ..." name="">
                  </div>
                  <div class="row">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios">
                      ชาย
                    </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios">
                        หญิง
                      </label>
                    </div>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="optionsCheckboxes"> ยอมรับ
                    </label>
                  </div>
                </div>
                <div class="footer text-center mb-20">
                    <button type="submit" class="btn btn-info btn-raised">ยืนยัน</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Application Content -->
  <!--  Vendor JavaScripts -->
  <script src="assets/bundles/libscripts.bundle.js"></script>
  <script src="assets/bundles/mainscripts.bundle.js"></script>  <!-- Custom Js -->
</body>
</html>
