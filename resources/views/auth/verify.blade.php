@extends('layouts.main-login')
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/sweetalert/sweetalert2.css') }}">
@endsection
@section('content')
    <div class="row clearfix" style="margin-top: 40px; margin-bottom: 40px;">
        <div class="col-sm-12 col-xs-12">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('กำลังส่งอีเมล์เพื่อยืนยันการสมัครอีกครั้ง') }}
                </div>
            @endif

            <div class="swal2-modal swal2-show"
                style="display: block; width: 500px; padding: 20px; background: rgb(255, 255, 255); min-height: 354px;"
                tabindex="-1">
                <ul class="swal2-progresssteps" style="display: none;"></ul>
                <div class="swal2-icon swal2-error" style="display: none;">
                    <span class="x-mark"><span class="line left"></span>
                        <span class="line right"></span></span>
                </div>
                <div class="swal2-icon swal2-question" style="display: none;">?</div>
                <div class="swal2-icon swal2-warning" style="display: none;">!</div>
                <div class="swal2-icon swal2-info" style="display: none;">i</div>
                <div class="swal2-icon swal2-success animate" style="display: block;">
                    <span class="line tip animate-success-tip"></span>
                    <span class="line long animate-success-long"></span>
                    <div class="placeholder"></div>
                    <div class="fix"></div>
                </div><img class="swal2-image" style="display: none;">
                <h2 class="swal2-title">ระบบได้รับข้อมูลของท่านแล้ว</h2>
                <div class="swal2-content" style="display: block;">
                    โปรดตรวจสอบอีเมล์ เพื่อยืนยันการสมัครสมาชิก
                </div>
                <input class="swal2-input" style="display: none;">
                <input type="file" class="swal2-file" style="display: none;">
                <div class="swal2-range" style="display: none;"><output></output><input type="range"></div>
                <select class="swal2-select" style="display: none;"></select>
                <div class="swal2-radio" style="display: none;"></div>
                <label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"></label>
                <textarea class="swal2-textarea" style="display: block;">หากยังไม่ได้รับอีเมล์ยืนยันการสมัครโปรคคลิกปุ่ม ส่งอีเมล์อีกครั้ง ด้านล่าง</textarea>
                <div class="swal2-validationerror" style="display: none;"></div>
                <hr class="swal2-spacer" style="display: block;">
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                <a href="{{ route('root') }}" type="button" class="swal2-confirm swal2-styled"
                    style="background-color: rgb(48, 133, 214); border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);">กลับหน้าหลัก</a>
                <button type="submit" class="swal2-cancel swal2-styled"
                    style="display: inline-block; background-color: rgb(170, 170, 170);">{{ __('ส่งอีเมล์อีกครั้ง') }}</button>
                </form>
                <span class="swal2-close" style="display: none;">×</span>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script src="{{ asset('assets/bundles/sweetalertscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/page/ui-alerts.js') }}"></script>
@endsection
