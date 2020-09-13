@extends('layouts.admin')
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/file-upload/css/jquery.fileupload.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/file-upload/css/jquery.fileupload-ui.css') }}">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/js/vendor/file-upload/css/jquery.fileupload-noscript.css') }}">
    </noscript>
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/js/vendor/file-upload/css/jquery.fileupload-ui-noscript.css') }}">
    </noscript>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endsection
@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="col-sm-6 col-xs-12">
            <h3 class="h3 m-0">1.1 ระบบบริหารจัดการครุภัณฑ์</h3>
            <small class="text-muted">1.1.1 กลุ่มหลักอุปกรณ์และเครื่องมือ</small>
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
                <li class="active">1.1.1 กลุ่มหลักอุปกรณ์</li>
            </ol>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font">
                        <strong>สร้างกลุ่มหลักอุปกรณ์และเครื่องมือ</strong>
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
                    <form class="form-horizontal" role="form" action="{{ route('maingroups.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">กลุ่มหลัก</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="">
                                <p class="help-block mb-0">Ex: โปรแกรมพจนานุกรมสำหรับคนพิการ</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">สัญลักษณ์</label>
                            <div class="col-sm-10">
                                <select name="icon" tabindex="2" class="selectpicker" style="width: 240px;">
                                    <option value="fa-desktop" selected
                                        data-content="<i class='fa fa-desktop'></i> fa-desktop"></option>
                                    <option value="fa-laptop" data-content="<i class='fa fa-laptop'></i> fa-laptop">
                                    </option>
                                    <option value="fa-fax" data-content="<i class='fa fa-fax'></i> fa-fax"></option>
                                    <option value="fa-keyboard-o"
                                        data-content="<i class='fa fa-keyboard-o'></i> fa-keyboard-o"></option>
                                    <option value="fa-headphones"
                                        data-content="<i class='fa fa-headphones'></i> fa-headphones"></option>
                                    <option value="fa-hdd-o" data-content="<i class='fa fa-hdd-o'></i> fa-hdd-o"></option>
                                    <option value="fa-print" data-content="<i class='fa fa-print'></i> fa-print"></option>
                                    <option value="fa-suitcase" data-content="<i class='fa fa-suitcase'></i> fa-suitcase">
                                    </option>
                                    <option value="fa-video-camera"
                                        data-content="<i class='fa fa-video-camera'></i> fa-video-camera"></option>
                                    <option value="fa-floppy-o" data-content="<i class='fa fa-floppy-o'></i> fa-floppy-o">
                                    </option>
                                    <option value="fa-cloud-download"
                                        data-content="<i class='fa fa-cloud-download'></i> fa-cloud-download"></option>
                                    <option value="fa-cog" data-content="<i class='fa fa-cog'></i> fa-cog"></option>
                                    <option value="fa-wrench" data-content="<i class='fa fa-wrench'></i> fa-wrench">
                                    </option>
                                    <option value="fa-wheelchair"
                                        data-content="<i class='fa fa-wheelchair'></i> fa-wheelchair"></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">สีพื้นหลัง</label>
                            <div class="col-sm-10">
                                <select name="color" tabindex="2" class="selectpicker" style="width: 240px;">
                                    <option value="l-green" selected data-content="<span class='l-green'>l-green</span>">
                                    </option>
                                    <option value="l-pink" data-content="<span class='l-pink'>l-pink</span>"></option>
                                    <option value="l-khaki" data-content="<span class='l-khaki'>l-khaki</span>"></option>
                                    <option value="l-blue" data-content="<span class='l-blue'>l-blue</span>"></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">รูปภาพ</label>
                            <div class="col-sm-10">
                                <input type="file" class="filestyle" data-buttonText="เลือกไฟล์รูปภาพ"
                                    data-iconName="fa fa-inbox" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">ประเภท</label>
                            <div class="col-sm-10">
                                <select name="main_groups_id" tabindex="2" class="chosen-select" style="width: 240px;">
                                    <option value="1" selected>เทคโนโลยีสารสนเทศและการสื่อสาร</option>
                                    <option value="2">เทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-raised btn-success">บันทึก</button>
                                <a href="{{ route('maingroups.index') }}" class="btn btn-raised btn-default">ยกเลิก</a>
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
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
@endsection
