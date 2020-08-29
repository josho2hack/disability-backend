@extends('layouts.admin-nonmenu')

@section('content')

    <body id="falcon" class="authentication">
        <!-- Application Content -->
        <div class="wrapper">
            <div class="header header-filter"
                style="background-image: url('{{ asset('assets/images/login-bg.jpg') }}'); background-size: cover; background-position: top center;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                            <div class="card card-signup">
                                <form class="form" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="header header-primary text-center">
                                        <h4>สมัครสมาชิก</h4>
                                        {{-- <div class="social-line">
                                            <a href="#" class="btn btn-just-icon">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="#" class="btn btn-just-icon">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#" class="btn btn-just-icon">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div> --}}
                                    </div>
                                    <h3 class="mt-0">PWDSTHAI</h3>
                                    <p class="help-block"></p>
                                    <div class="content">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="ชื่อ..." name="first_name"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="นามสกุล..."
                                                name="last_name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email"
                                                class="form-control underline-input @error('email') is-invalid @enderror"
                                                placeholder="อีเมล์..." name="email" value="{{ old('email') }}" required
                                                autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" placeholder="รหัสผ่าน..."
                                                class="form-control" name="password" required autocomplete="new-password" />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" placeholder="รหัสผ่านอีกครั้ง..."
                                                class="form-control" name="password_confirmation" required
                                                autocomplete="new-password" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="เลขประจำตัวประชาชน..."
                                                name="citizen_id">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="เลขบัตรประจำตัวคนพิการ..."
                                                name="pwd_id">
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="icheck-primary d-inline mr-3">
                                                <input class="form-check-input" type="radio" value="true" name="gender"
                                                    formControlName="gender" id="inlineRadio1" [checked]="men_checked">
                                                <label for="inlineRadio1" class="form-check-label">ชาย</label>
                                            </div>
                                            <div class="icheck-primary d-inline">
                                                <input class="form-check-input" type="radio" value="false" name="gender"
                                                    formControlName="gender" id="inlineRadio2">
                                                <label for="inlineRadio2" class="form-check-label">หญิง</label>
                                            </div>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes"> ยอมรับ
                                            </label>
                                        </div>
                                    </div>
                                    <div class="footer text-center mb-20">
                                        <button type="submit" class="btn btn-info btn-raised">{{ __('ยืนยัน') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vendor JavaScripts -->
        <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    </body>
@endsection
