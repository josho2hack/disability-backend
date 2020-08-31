@extends('layouts.admin')
@section('header')

@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="col-sm-6 col-xs-12">
            h3 class="h3 m-0">1.2 ระบบสมาชิก</h3>
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
                    <li class="active">1.2.2 เพิ่มสมาชิก</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font hb-cyan">
                        <strong>เพิ่มสมาชิก</strong>
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
                            <label for="prefix" class="col-sm-2 control-label">คำนำหน้าชื่อ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="prefix" placeholder="">
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

@endsection

@section('footer-script')

@endsection