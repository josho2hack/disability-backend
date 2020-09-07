@extends('layouts.admin')
@section('header')
    <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}" media="screen">
    <link href="https://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="https://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet">
@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="col-sm-6 col-xs-12">
            <h3 class="h3 m-0">1.1 อุปกรณ์และเครื่องมือ</h3>
            <small class="text-muted">1.1.3 รายละเอียดอุปกรณ์และเครื่องมือ</small>
        </div>
        <div class="btn-group pull-right">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('root') }}"><i class="fa fa-home"></i></a>
                </li>
                <li>
                    <a href="{{ route('admin') }}">1. ระบบบริหารจัดการครุภัณฑ์</a>
                </li>
                <li>
                    <a href="{{ route('assets.dashboard') }}">1.1 ระบบบริหารจัดการครุภัณฑ์</a>
                </li>
                <li class="active">1.1.3 อุปกรณ์และเครื่องมือ</li>
            </ol>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font">
                        <strong>เพิ่มอุปกรณ์และเครื่องมือ</strong>
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
                    <form class="form-horizontal" role="form" action="{{ route('assets.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="received_date" class="col-sm-2 control-label">วันที่รับ</label>
                            <div class="col-sm-10">
                                <input name="received_date" type="date" id="my_hidden_input">
                                {{-- <div id="datepicker" class=""></div> --}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="code" class="col-sm-2 control-label">รหัสครุภัณฑ์</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="code" placeholder="">
                                <p class="help-block mb-0">Ex: 74400010010/000001-2556</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">ยี่ห้อ ชนิด แบบ ขนาดและลักษณะ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description" placeholder="">
                                <p class="help-block mb-0">Ex: อุปกรณ์สื่อสาร (I-mobile IQ6)</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="serial_no" class="col-sm-2 control-label">หมายเลข (Serial Number)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="serial_no" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-sm-2 control-label">ราคา/หน่วย</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="price" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="budget" class="col-sm-2 control-label">วิธีได้มา</label>
                            <div class="col-sm-10">
                                <select name="budget" tabindex="5" class="chosen-select" style="width: 240px;">
                                    <option value="EAuction" selected>EAuction</option>
                                    <option value="งบลงทุน">งบลงทุน</option>
                                    <option value="อื่นๆ">อื่นๆ</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="doc_no" class="col-sm-2 control-label">เลขที่เอกสาร</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="doc_no" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="asset_statuses_id" class="col-sm-2 control-label">สถานะ</label>
                            <div class="col-sm-10">
                                <select name="asset_statuses_id" tabindex="5" class="chosen-select" style="width: 240px;">
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}" @if ($status->id == 1)
                                            selected
                                    @endif>{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sub_groups_id" class="col-sm-2 control-label">กลุ่มหลัก</label>
                            <div class="col-sm-10">
                                <select id="sel_main" name="sub_groups_id" tabindex="8" class="chosen-select">
                                    @foreach ($mains as $main)
                                        <option value="{{ $main->id }}" @if ($main->id == 1)
                                            selected
                                    @endif>{{ $main->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="asset_categories_id" class="col-sm-2 control-label">กลุ่มย่อย</label>
                            <div class="col-sm-10">
                                <select id="sel_cate" name="asset_categories_id" tabindex="9" class="chosen-select">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="location" class="col-sm-2 control-label">ใช้ประจำที่</label>
                            <div class="col-sm-10">
                                <select name="location" tabindex="5" class="chosen-select" style="width: 240px;">
                                    <option value="ทส." selected>ทส.</option>
                                    <option value="อื่นๆ">อื่นๆ</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="out_stock_evidance" class="col-sm-2 control-label">หลักฐานการจ่าย</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="out_stock_evidance" placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="doc_no" class="col-sm-2 control-label">หมายเหตุ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="remark" placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-raised btn-success">บันทึก</button>
                                <a href="{{ route('assets.index') }}" class="btn btn-raised btn-default">ยกเลิก</a>
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
    <script src="https://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker-thai.js') }}"></script>
    <script src="{{ asset('js/locales/bootstrap-datepicker.th.js') }}"></script>
@endsection

@section('footer-script')
    <script id="example_script" type="text/javascript">
        $('#datepicker').datepicker({
            language: 'th-th',
            format: 'dd/mm/yyyy'
        });
        $('#datepicker').on('changeDate', function() {
            $('#my_hidden_input').val(
                $('#datepicker').datepicker('getFormattedDate')
            );
        });
    </script>

    <script>
        $(document).ready(function() {
            // Empty the dropdown
            //$('#sel_cate').find('option').not(':first').remove();
            $('#sel_cate').find('option').remove();
            // AJAX request
            $.ajax({
                url: 'getCates/' + 1,
                type: 'get',
                dataType: 'json',
                success: function(response) {

                    var len = 0;
                    if (response['data'] != null) {
                        len = response['data'].length;
                    }

                    if (len > 0) {
                        // Read data and create <option >
                        for (var i = 0; i < len; i++) {

                            var id = response['data'][i].id;
                            var name = response['data'][i].name;

                            var option = "<option value='" + id + "'>" + name + "</option>";

                            $("#sel_cate").append(option);
                        }
                    }

                }
            });

            // Department Change
            $('#sel_main').change(function() {

                // Department id
                var id = $(this).val();

                // Empty the dropdown
                $('#sel_cate').find('option').remove();

                // AJAX request
                $.ajax({
                    url: 'getCates/' + id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {

                        var len = 0;
                        if (response['data'] != null) {
                            len = response['data'].length;
                        }

                        if (len > 0) {
                            // Read data and create <option >
                            for (var i = 0; i < len; i++) {

                                var id = response['data'][i].id;
                                var name = response['data'][i].name;

                                var option = "<option value='" + id + "'>" + name + "</option>";

                                $("#sel_cate").append(option);
                            }
                        }

                    }
                });
            });

        });

    </script>

@endsection
