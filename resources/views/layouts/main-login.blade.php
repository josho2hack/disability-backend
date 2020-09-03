<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>:: PWDSTHAI ::</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/js/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Files -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body id="falcon" class="authentication">
  <div class="wrapper">

    <!-- HEADER Content -->
    <div id="header">
      <header class="clearfix">
          <!-- Branding -->
          <div class="branding">
              <a class="brand" href="{{ url('/') }}">
                  <span>ONDE
                      @guest

                      @else
                          {{ Auth::user()->roles()->first()->description }}
                      @endguest
                  </span>
              </a>
              <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline">
                  <i class="fa fa-bars"></i>
              </a>
          </div>
          <!-- Branding end -->

          <!-- Right-side navigation -->
          <ul class="nav-right pull-right list-inline">

              <!-- Authentication Links -->
              @guest
                  @if (Route::has('register'))
                      <li>
                          <a class="nav-link" href="{{ route('register') }}" role="button" tabindex="0"><i
                                  class="fa fa-key"></i> {{ __('ลงทะเบียนเข้าใช้งาน') }}</a>
                      </li>
                  @endif
                  <li class="dropdown users">
                      <a href="" role="button" tabindex="0">
                          <i class="fa fa-sign-in"></i> {{ __('เข้าสู่ระบบ') }}
                      </a>
                  </li>

              @else

              @endguest
          </ul>
          <!-- Right-side navigation end -->
      </header>
  </div>
  <!--/ HEADER Content  -->

    <div class="header header-filter">
      <div class="container">
          @yield('content')
      </div>
    </div>
  </div>
<!--  Vendor JavaScripts -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
<!-- Custom Js -->
</body>
</html>
