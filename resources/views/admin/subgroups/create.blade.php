@extends('layouts.admin')
@section('header')
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/file-upload/css/jquery.fileupload.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/file-upload/css/jquery.fileupload-ui.css') }}">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/js/vendor/file-upload/css/jquery.fileupload-noscript.css') }}">
    </noscript>
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/js/vendor/file-upload/css/jquery.fileupload-ui-noscript.css') }}">
    </noscript>
@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="col-sm-6 col-xs-12">
            <h3 class="h3 m-0">1.1 ระบบบริหารจัดการครุภัณฑ์</h3>
            <small class="text-muted">1.1.2 กลุ่มย่อยอุปกรณ์และเครื่องมือ</small>
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
                    <a href="{{ route('assets.dashboard') }}">1.1 ระบบบริหารจัดการครุภัณฑ์</a>
                </li>
                <li class="active">1.1.2 กลุ่มย่อยอุปกรณ์และเครื่องมือ</li>
            </ol>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font">
                        <strong>สร้างกลุ่มย่อยอุปกรณ์และเครื่องมือ</strong>
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
                    <form class="form-horizontal" role="form" action="{{ route('subgroups.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">กลุ่มย่อย</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="">
                                <p class="help-block mb-0">Ex: โปรแกรมพจนานุกรมภาษามือสำหรับคนพิการ</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">รายละเอียด</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description" placeholder="">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="for_give" class="col-sm-2 control-label">ให้ยืม/ให้</label>
                            <div class="col-sm-10">
                                <select name="for_give" tabindex="5" class="chosen-select" style="width: 240px;">
                                    <option value="1" selected>ให้ยืม</option>
                                    <option value="2">ให้</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">กลุ่มหลัก</label>
                            <div class="col-sm-10">
                                <select name="sub_groups_id" tabindex="5" class="chosen-select" style="width: 240px;">
                                    @foreach ($maingroups as $maingroup)
                                        <option value="{{ $maingroup->id }}" @if ($maingroup->id == 1)
                                            selected
                                    @endif>{{ $maingroup->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">รูปภาพ</label>
                            <div class="col-sm-10">
                                <input type="file" class="filestyle" data-buttonText="เลือกไฟล์รูปภาพ" data-iconName="fa fa-inbox"
                                    name="image">
                            </div>
                        </div>
                        <!--//Up load File ---------------------------------------------------------->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">คู่มือ</label>
                            <div class="col-sm-10">
                                <input type="file" class="filestyle" data-buttonText="เลือกไฟล์คู่มือ" data-iconName="fa fa-inbox"
                                    name="document">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="url" class="col-sm-2 control-label">เรียนรู้การใช้งาน</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="url" placeholder="http://...">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-raised btn-success">บันทึก</button>
                                <a href="{{ route('subgroups.index') }}" class="btn btn-raised btn-default">ยกเลิก</a>
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
