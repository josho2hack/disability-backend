@extends('layouts.admin-nonmenu')

@section('header')

@endsection

@section('content')

    <body id="falcon" class="authentication">
        <!-- Application Content -->
        <div class="wrapper">
            <div class="header header-filter"
                style="background-image: url('{{ asset('assets/images/login-bg.jpg') }}'); background-size: cover; background-position: top center;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 text-center">
                            <div class="card card-signup">
                                <form class="form" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="header header-primary text-center">
                                        <h4>สมัครสมาชิก</h4>
                                        <div class="social-line">
                                            {{-- <a href="#" class="btn btn-just-icon">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="#" class="btn btn-just-icon">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#" class="btn btn-just-icon">
                                                <i class="fa fa-google-plus"></i>
                                            </a> --}}
                                        </div>
                                    </div>
                                    <h4 class="mt-0">
                                        ระบบบริหารจัดการ<br>
                                        อุปกรณ์และเครื่องมือด้าน ICT สำหรับคนพิการ
                                      </h4>
                                    <p class="help-block">กรอกข้อมูลสำหรับสมัครสมาชิก</p>
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
                                        <div class="form-group">
                                            @php
                                            $disability = \App\DisabilityType::all();
                                            @endphp
                                            <select id="disability_type" name="disability_type" class="chosen-select"
                                                style="width: 100%;">
                                                @foreach( $disability as $disabilities )
                                                    <option value="{{ $disabilities->id }}">{{ $disabilities->description }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="redio">
                                            <label for="inlineRadio1" class="form-check-label mr-10">
                                                <input class="form-check-input" type="radio" value="1" name="gender"
                                                    id="inlineRadio1" checked>ชาย
                                            </label>
                                            <label for="inlineRadio2" class="form-check-label mb-10">
                                                <input class="form-check-input" type="radio" value="0" name="gender"
                                                    id="inlineRadio2">หญิง
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="terms_and_conditions" onclick="terms_changed(this)"> ยอมรับ
                                                <a
                                                    href="https://www.onde.go.th/view/1/นโยบายคุ้มครองข้อมูลส่วนบุคคล/TH-TH">นโยบาย</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="footer text-center mb-20">
                                        <button type="submit" id="submit_button" class="btn btn-info btn-raised"
                                            disabled>{{ __('ยืนยัน') }}</button>
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
        <script>
            //JavaScript function that enables or disables a submit button depending
            //on whether a checkbox has been ticked or not.
            function terms_changed(termsCheckBox) {
                //If the checkbox has been checked
                if (termsCheckBox.checked) {
                    //Set the disabled property to FALSE and enable the button.
                    document.getElementById("submit_button").disabled = false;
                } else {
                    //Otherwise, disable the submit button.
                    document.getElementById("submit_button").disabled = true;
                }
            }

        </script>
    </body>
@endsection
