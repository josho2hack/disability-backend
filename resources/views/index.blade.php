@extends('layouts.main-login')
@section('content')
<div class="row clearfix" style="margin-top: 40px; margin-bottom: 40px;">
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h2 class="h3 m-0">เมนูสำหรับเข้าสู่ระบบ</h2>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="{{ url('user-login') }}" style="text-decoration: none;">
                <div class="boxs project_widget">
                    <div class="pw_img" style="height: 160px;">
                        <img class="img-responsive" src="{{ asset('assets/images/user_login.png') }}" alt="เมนูเข้าสู่ระบบสำหรับผู้ใช้" >
                    </div>
                    <div class="pw_content">
                        <div class="pw_header">
                            <h6>เมนูเข้าสู่ระบบสำหรับผู้ใช้</h6>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="{{ url('admin-login') }}" style="text-decoration: none;">
                <div class="boxs project_widget">
                    <div class="pw_img" style="height: 160px;">
                        <img class="img-responsive" src="{{ asset('assets/images/administrator_login.png') }}" alt="เมนูเข้าสู่ระบบสำหรับผู้ดูแลระบบ" >
                    </div>
                    <div class="pw_content">
                        <div class="pw_header">
                            <h6>เมนูเข้าสู่ระบบสำหรับผู้ดูแลระบบ</h6>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="{{ url('audit-login') }}" style="text-decoration: none;">
                <div class="boxs project_widget">
                    <div class="pw_img" style="height: 160px;">
                        <img height="150" class="img-responsive" src="{{ asset('assets/images/aditor_login.jpg') }}" alt="เมนูเข้าสู่ระบบสำหรับผู้ตรวจสอบ" >
                    </div>
                    <div class="pw_content">
                        <div class="pw_header">
                            <h6>เมนูเข้าสู่ระบบสำหรับผู้ตรวจสอบ</h6>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="{{ url('approve-login') }}" style="text-decoration: none;">
                <div class="boxs project_widget">
                    <div class="pw_img" style="height: 160px;">
                        <img height="150" class="img-responsive" src="{{ asset('assets/images/aprrover_login.jpg') }}" alt="เมนูเข้าสู่ระบบสำหรับผู้อนุมัติ" >
                    </div>
                    <div class="pw_content">
                        <div class="pw_header">
                            <h6>เมนูเข้าสู่ระบบสำหรับผู้อนุมัติ</h6>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h2 class="h3 m-0">ข่าวสารประชาสัมพันธ์</h2>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        @foreach ($news as $item)
        <div class="col-xs-12 col-sm-6 col-md-4">
            <a href="shownews/{{ $item["id"] }}" style="text-decoration: none;">
                <div class="boxs project_widget">
                    <div class="pw_img" style="height: 250px;">
                        <img class="img-responsive" src="{{ asset('uploads/news/'.$item["cover_name"]) }}" alt="{{ $item["title"] }}" >
                    </div>
                    <div class="pw_content">
                        <div class="pw_header">
                            <h6>{{ $item["title"] }}</h6>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection