@extends('layouts.admin')
@section('header')

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
                    <a href="{{ route('admin') }}">1. ระบบจัดการครุภัณฑ์</a>
                </li>
                <li>
                    <a href="{{ route('assets.dashboard') }}">1.1 อุปกรณ์และเครื่องมือ</a>
                </li>
                <li class="active">1.1.3 รายละเอียดอุปกรณ์</li>
            </ol>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font">
                        <strong>แก้ไขอุปกรณ์และเครื่องมือ</strong>
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
                    <form class="form-horizontal" role="form" action="{{ route('assets.update', $asset->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="code" class="col-sm-2 control-label">รหัสครุภัณฑ์</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="code" placeholder=""
                                    value="{{ $asset->code }}">
                                <p class="help-block mb-0">Ex: 74400010010/000001-2556</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">ยี่ห้อ ชนิด แบบ ขนาดและลักษณะ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description" placeholder=""
                                    value="{{ $asset->description }}">
                                <p class="help-block mb-0">Ex: อุปกรณ์สื่อสาร (I-mobile IQ6)</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="serial_no" class="col-sm-2 control-label">หมายเลข (Serail Number)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="serial_no" placeholder=""
                                    value="{{ $asset->serial_no }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-sm-2 control-label">ราคา/หน่วย</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="price" placeholder=""
                                    value="{{ $asset->price }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="budget" class="col-sm-2 control-label">วิธีได้มา</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="budget" placeholder=""
                                    value="{{ $asset->budget }}">
                                <p class="help-block mb-0">Ex: EAuction</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="doc_no" class="col-sm-2 control-label">เลขที่เอกสาร</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="doc_no" placeholder=""
                                    value="{{ $asset->doc_no }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="asset_statuses_id" class="col-sm-2 control-label">สถานะ</label>
                            <div class="col-sm-10">
                                <select name="asset_statuses_id" tabindex="7" class="chosen-select" style="width: 240px;">
                                    @foreach ($asset->statuses as $status)
                                        <option value="{{ $status->id }}" @if ($status->id == $asset->assetstatus->id)
                                            selected
                                    @endif>{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="asset_categories_id" class="col-sm-2 control-label">กลุ่มย่อย</label>
                            <div class="col-sm-10">
                                <select name="asset_categories_id" tabindex="8" class="chosen-select" style="width: 240px;">
                                    @foreach ($asset->cates as $cate)
                                        <option value="{{ $cate->id }}" @if ($cate->id == $asset->assetcategory->id)
                                            selected
                                    @endif >{{ $cate->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="location" class="col-sm-2 control-label">ใช้ประจำที่</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="location" placeholder=""
                                    value="{{ $asset->location }}">
                                <p class="help-block mb-0">Ex: ทส.</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="out_stock_evidance" class="col-sm-2 control-label">หลักฐานการจ่าย</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="out_stock_evidance" placeholder=""
                                    value="{{ $asset->out_stock_evidance }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="doc_no" class="col-sm-2 control-label">หมายเหตุ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="remark" placeholder=""
                                    value="{{ $asset->remark }}">
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
    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src="{{ asset('assets/js/vendor/file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('assets/bundles/fileuploadscripts.bundle.js') }}"></script>
@endsection

@section('footer-script')
<script>
    $(window).load(function () {
        /*
         * jQuery File Upload Plugin JS Example 8.9.1
         * https://github.com/blueimp/jQuery-File-Upload
         *
         * Copyright 2010, Sebastian Tschan
         * https://blueimp.net
         *
         * Licensed under the MIT license:
         * http://www.opensource.org/licenses/MIT
         */

        /* global $, window */

        $(function () {
            'use strict';

            // Initialize the jQuery File Upload widget:
            $('#fileupload').fileupload({
                // Uncomment the following to send cross-domain cookies:
                //xhrFields: {withCredentials: true},
                url: 'assets/js/vendor/file-upload/server/php/'
            });

            // Enable iframe cross-domain access via redirect option:
            $('#fileupload').fileupload(
                'option',
                'redirect',
                window.location.href.replace(
                    /\/[^\/]*$/,
                    'assets/js/vendor/file-upload/cors/result.html?%s'
                )
            );

            if (window.location.hostname === 'blueimp.github.io') {
                // Demo settings:
                $('#fileupload').fileupload('option', {
                    url: '//jquery-file-upload.appspot.com/',
                    // Enable image resizing, except for Android and Opera,
                    // which actually support image resizing, but fail to
                    // send Blob objects via XHR requests:
                    disableImageResize: /Android(?!.*Chrome)|Opera/
                        .test(window.navigator.userAgent),
                    maxFileSize: 5000000,
                    acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
                });
                // Upload server status check for browsers with CORS support:
                if ($.support.cors) {
                    $.ajax({
                        url: '//jquery-file-upload.appspot.com/',
                        type: 'HEAD'
                    }).fail(function () {
                        $('<div class="alert alert-danger"/>')
                            .text('Upload server currently unavailable - ' +
                            new Date())
                            .appendTo('#fileupload');
                    });
                }
            } else {
                // Load existing files:
                $('#fileupload').addClass('fileupload-processing');
                $.ajax({
                    // Uncomment the following to send cross-domain cookies:
                    //xhrFields: {withCredentials: true},
                    url: $('#fileupload').fileupload('option', 'url'),
                    dataType: 'json',
                    context: $('#fileupload')[0]
                }).always(function () {
                    $(this).removeClass('fileupload-processing');
                }).done(function (result) {
                    $(this).fileupload('option', 'done')
                        .call(this, $.Event('done'), { result: result });
                });
            }
        });

    });
</script>
@endsection
