@extends('layouts.admin')
@section('header')

@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="col-sm-6 col-xs-12">
            <h3 class="h3 m-0">1.2 ระบบสมาชิก</h3>
            <small class="text-muted">1.2.1 สมาชิก</small>
        </div>
        <div class="btn-group pull-right">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('root') }}"><i class="fa fa-home"></i></a>
                </li>
                <li>
                    <a href="{{ route('admin') }}">1. บริหารจัดการระบบ</a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}">1.2 ระบบสมาชิก</a>
                </li>
                <li class="active">1.2.1 สมาชิก</li>
            </ol>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font hb-blue">
                        <strong>กำหนดค่าสมาชิกเสมาชิก</strong>
                    </h3>
                </div>
                <div class="boxs-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Error</strong> มีปัญหาในการบันทึกข้อมูล<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-horizontal" role="form" action="{{ route('users.optionupdate') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="first_name" class="col-sm-2 control-label">ชื่อ</label>
                            <div class="col-sm-10">
                                <label>
                                    <input name="first_name" type="checkbox" value="1" @if ($option->first_name)
                                    checked
                                    @endif> แก้ไขได้
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-sm-2 control-label">นามสกุล</label>
                            <div class="col-sm-10">
                                <label>
                                    <input name="last_name" type="checkbox" value="1" @if ($option->last_name)
                                    checked
                                    @endif> แก้ไขได้
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pwd_id" class="col-sm-2 control-label">เลขผู้พิการ</label>
                            <div class="col-sm-10">
                                <label>
                                    <input name="pwd_id" type="checkbox" value="1" @if ($option->pwd_id)
                                    checked
                                    @endif> แก้ไขได้
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="citizen_id" class="col-sm-2 control-label">เลขประชาชน</label>
                            <div class="col-sm-10">
                                <label>
                                    <input name="citizen_id" type="checkbox" value="1" @if ($option->citizen_id)
                                    checked
                                    @endif> แก้ไขได้
                                </label>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">อีเมล์</label>
                            <div class="col-sm-10">
                                <input name="email" type="checkbox" value="1" @if ($option->email)
                                checked
                                @endif>
                            </div>
                        </div> --}}
                        {{-- <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">รหัสผ่าน</label>
                            <div class="col-sm-10">
                                <label>
                                    <input name="password" type="checkbox" value="1" @if ($option->password)
                                    checked
                                    @endif> แก้ไขได้
                                </label>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label class="col-sm-2 control-label">รูปภาพ</label>
                            <div class="col-sm-10">
                                <label>
                                    <input name="avatar_name" type="checkbox" value="1" @if ($option->avatar_name)
                                    checked
                                    @endif> แก้ไขได้
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="verify" class="col-sm-2 control-label">ยืนยันอีเมล์</label>
                            <div class="col-sm-10">
                                <label>
                                    <input name="verify" type="checkbox" value="1" @if ($option->verify)
                                    checked
                                    @endif> ให้ยืนยันอีเมล์
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-raised btn-success">บันทึก</button>
                                <a href="{{ route('users.index') }}" class="btn btn-raised btn-default">ยกเลิก</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="boxs-footer">

                </div>
            </section>
        </div>
    </div>
@endsection
@section('footer')
    <script src="{{ asset('assets/js/vendor/filestyle/bootstrap-filestyle.min.js') }}"></script>
@endsection

@section('footer-script')

@endsection
