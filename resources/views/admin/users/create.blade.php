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
                    <h3 class="custom-font hb-green">
                        เพิ่มสมาชิก
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
                    <form class="form-horizontal" role="form" action="{{ route('users.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">คำนำหน้าชื่อ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" placeholder="">
                                <p class="help-block mb-0">ตัวอย่าง: นาย นาง นางสาว</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name" class="col-sm-2 control-label">ชื่อ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="first_name" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-sm-2 control-label">นามสกุล</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="last_name" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pwd_id" class="col-sm-2 control-label">เลขผู้พิการ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pwd_id" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="citizen_id" class="col-sm-2 control-label">เลขประชาชน</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="citizen_id" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">อีเมล์</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">รหัสผ่าน</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-sm-2 control-label">เพศ</label>
                            <div class="col-sm-10">
                                <select name="gender" tabindex="5" class="chosen-select" style="width: 240px;">
                                    <option value="1" selected>ชาย</option>
                                    <option value="0">หญิง</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            @php
                            $disabilities = \App\DisabilityType::all();
                            @endphp
                            <label for="disability_type_id" class="col-sm-2 control-label">ประเภทคนพิการ</label>
                            <div class="col-sm-10">
                                <select id="disability_type_id" name="disability_type_id" class="chosen-select"
                                    style="width: 400px;">
                                    @foreach ($disabilities as $disability)
                                        <option value="{{ $disability->id }}">{{ $disability->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            @php
                            $roles = \App\Role::all();
                            @endphp
                            <label for="role" class="col-sm-2 control-label">สิทธิ์การใช้งาน</label>
                            <div class="col-sm-10">
                                <select name="role" class="chosen-select" style="width: 400px;">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}" @if ($role->id == 1)
                                            selected
                                    @endif>{{ $role->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr class="line-dashed full-witdh-line" />
                        <div class="form-group">
                            <label class="col-sm-2 control-label">รูปภาพ</label>
                            <div class="col-sm-10">
                                <input type="file" class="filestyle" data-buttonText="เลือกรูป" data-iconName="fa fa-inbox"
                                    name="avatar">
                            </div>
                        </div>
                        <hr class="line-dashed full-witdh-line" />
                        <div class="form-group">
                            <label for="active" class="col-sm-2 control-label">เปิดใช้งาน</label>
                            <div class="togglebutto col-sm-10">
                                <input name="active" type="checkbox" value="1" checked>
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
