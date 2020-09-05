<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>:: PWDSTHAI ::</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('../assets/js/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/vendor/animsition.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.css') }}">
    <!-- CSS Files -->
    <link href="{{ asset('../assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('../assets/css/custom-css.css') }}" rel="stylesheet">

    <style>
        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        a:active {
            text-decoration: none;
        }

        #header .branding {
            background-color: #fff;
            width: 235px;
            height: 60px;
            float: left;
            padding: 0 15px;
        }

        #content {
            padding-top: 0px;
        }
        .no-leftmenu.device-xs #header .nav-left .leftmenu-collapse {
            display: none;
        }

    </style>
</head>

<body id="falcon" class="no-leftmenu">
    <div id="wrap" class="animsition">

        <!-- HEADER Content -->
        <div id="header">
            <header class="clearfix">
                <div class="container p-0">

                <!-- Branding -->
                <div class="branding p-0 m-0" style="background-color: #8560a9 !important; width: 80px !important;">
                    <a class="brand" href="{{ url('/') }}">
                        <span style="color: white !important;">ONDE
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

                <!-- Left-side navigation -->
                <ul class="nav-left pull-left list-unstyled list-inline">
                    <li class="leftmenu-collapse">
                        <a role="button" tabindex="0" class="collapse-leftmenu">
                            โครงการพัฒนาระบบบริหารจัดการ อุปกรณ์และเครื่องมือด้าน ICT สาหรับคนพิการ
                        </a>
                    </li>
                </ul>
                <!-- Left-side navigation end -->

                <!-- Right-side navigation -->
                <ul class="nav-right pull-right list-inline">

                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('register'))
                            <li>
                                <a class="nav-link" href="{{ route('register') }}" role="button" tabindex="0"><i
                                        class="fa fa-key"></i> {{ __('สมัครสมาชิก') }}</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url('/') }}" role="button" tabindex="0"><i
                                        class="fa fa-sign-in"></i> {{ __('เข้าสู่ระบบ') }}</a>
                            </li>
                        @endif
                        {{-- <li class="dropdown users">
                            <a href="" role="button" tabindex="0">
                                <i class="fa fa-sign-in"></i> {{ __('เข้าสู่ระบบ') }}
                            </a>
                        </li> --}}

                    @else

                    @endguest
                </ul>
                <!-- Right-side navigation end -->
                </div>
            </header>
        </div>
        <!--/ HEADER Content  -->
        <section id="content">
            <div class="header header-filter">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </section>

        <!--/ FOOTER Content -->
        <section id="footer">
            <div class="container p-0">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-9">
                        <h4 class="title">สำนักงานคณะกรรมการดิจิทัลเพื่อเศรษฐกิจและสังคมแห่งชาติ</h4>
                        <p>120 หมู่ 3 ชั้น 9 อาคารรัฐประศาสนภักดี ศูนย์ราชการเฉลิมพระเกียรติ 80 พรรษา 5 ธันวาคม 2550</p>
                        <p>ถนนแจ้งวัฒนะ แขวงทุ่งสองห้อง เขตหลักสี่ กรุงเทพฯ 10210</p>
                        <p>โทร. <a href="tel:+6621421202" class="footer-link">0 2142 1202</a> | แฟกซ์. <a href="tel:+6621437962" class="footer-link">0 2143 7962</a> | อีเมล์. <a href="mailto:pr.onde@onde.go.th" class="footer-link">pr.onde@onde.go.th</a> </p>
                    </div>
                    <div class="col-sm-12 col-md-3 text-center">
                        <h4><span>ช่องทางการติดต่อ</span></h4>
                        <div class="row clearfix text-center">
                            {{-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> --}}
                                <a href="https://www.youtube.com/channel/UCuCrGM49GT0kFdXMRDYqQRA/playlists" target="_blank">
                                    <img class="footer-icons" src="{{ asset('../assets/images/footer-icons/youtube.png') }}" alt="Youtube">
                                </a>
                            {{-- </div> --}}
                            {{-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> --}}
                                <a href="https://web.facebook.com/ONDE.GO.TH/" target="_blank">
                                    <img class="footer-icons" src="{{ asset('../assets/images/footer-icons/fb.png') }}" alt="Facebook">
                                </a>
                            {{-- </div> --}}
                            {{-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> --}}
                                <a href="mailto:pr.onde@onde.go.th" target="_blank">
                                    <img class="footer-icons" src="{{ asset('../assets/images/footer-icons/mail.png') }}" alt="E-mail">
                                </a>
                            {{-- </div> --}}
                            {{-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> --}}
                                <a href="https://twitter.com/ONDE_GO_TH" target="_blank">
                                    <img class="footer-icons" src="{{ asset('../assets/images/footer-icons/twitter.png') }}" alt="Twitter">
                                </a>
                            {{-- </div> --}}
                            {{-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> --}}
                                <a href="https://www.instagram.com/onde_go_th/" target="_blank">
                                    <img class="footer-icons" src="{{ asset('../assets/images/footer-icons/instagram.png') }}" alt="Instagram">
                                </a>
                            {{-- </div> --}}
                            {{-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> --}}
                                <a href="http://line.me/ti/p/%40uvj2550p" target="_blank">
                                    <img class="footer-icons" src="{{ asset('../assets/images/footer-icons/Line_icon.png') }}" alt="Line">
                                </a>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix p-0 m-0" style="background: #382851;">
                <div class="container p-0 text-center pt-15 pb-15">
                    <h5>สงวนลิขสิทธิ์ © 2560 สำนักงานคณะกรรมการดิจิทัลเพื่อเศรษฐกิจและสังคมแห่งชาติ</h5>
                </div>
            </div>
        </section>
    </div>
    <!--  Vendor JavaScripts -->
    <script src="{{ asset('../assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('../assets/bundles/vendorscripts.bundle.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('../assets/bundles/mainscripts.bundle.js') }}"></script>
</body>

</html>
