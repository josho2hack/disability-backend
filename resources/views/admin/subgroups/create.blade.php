@extends('layouts.admin')
@section('header')

    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/file-upload/css/jquery.fileupload.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/file-upload/css/jquery.fileupload-ui.css') }}">
@endsection
@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="col-sm-6 col-xs-12">
            <h3 class="h3 m-0">1.1 ระบบอุปกรณ์และเครื่องมือ</h3>
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
                    <a href="{{ route('assets.dashboard') }}">1.1 ระบบอุปกรณ์และเครื่องมือ</a>
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
                    <h3 class="custom-font hb-cyan">
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
                            <label for="description" class="col-sm-2 control-label">รูปภาพ</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="image" placeholder="">
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
                                        <option value="{{ $maingroup->id }}">{{ $maingroup->name }}</option>
                                    @endforeach
                                </select>
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

    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src="{{ asset('assets/js/vendor/file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('assets/bundles/fileuploadscripts.bundle.js') }}"></script>

    <!-- Page Specific Scripts -->
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
	<!--/ Page Specific Scripts -->

@endsection
