@extends('layouts.admin')
@section('header')
    <link href="{{ asset('js/minicolors/jquery.minicolors.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0">1.8 ระบบจัดการเว็บ</h3>
                <small class="text-muted">1.8.2 จัดการกิจกรรม</small>
            </div>
            <div class="btn-group pull-right">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('root') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('admin') }}">1 ระบบจัดการครุภัณฑ์</a>
                    </li>
                    <li>
                        <a href="{{ route('events.index') }}">1.8 ระบบจัดการเว็บ</a>
                    </li>
                    <li class="active">1.8.2 จัดการหมวดหมู่กิจกรรม</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font">
                        <strong>สร้างหมวดหมู่กิจกรรม</strong>
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
                    <form class="form-horizontal" role="form" action="{{ route('eventcategories.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">หมวดหมู่</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="">
                                <p class="help-block mb-0">Ex: ลงทะเบียนยืม</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">รายละเอียด</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">สี</label>
                            <div class="col-sm-10">
                                <input name="color" type="text" id="text-field" class="form-control colorpicker" value="#70c24a">
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
@section('footer-script')
    <script src="{{ asset('js/minicolors/jquery.minicolors.js') }}"></script>
    <script>
        $(document).ready(function() {

            $('.colorpicker').each(function() {
                //
                // Dear reader, it's actually very easy to initialize MiniColors. For example:
                //
                //  $(selector).minicolors();
                //
                // The way I've done it below is just for the demo, so don't get confused
                // by it. Also, data- attributes aren't supported at this time...they're
                // only used for this demo.
                //
                $(this).minicolors({
                    control: $(this).attr('data-control') || 'hue',
                    defaultValue: $(this).attr('data-defaultValue') || '',
                    format: $(this).attr('data-format') || 'hex',
                    keywords: $(this).attr('data-keywords') || '',
                    inline: $(this).attr('data-inline') === 'true',
                    letterCase: $(this).attr('data-letterCase') || 'lowercase',
                    opacity: $(this).attr('data-opacity'),
                    position: $(this).attr('data-position') || 'bottom',
                    swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split(
                        '|') : [],
                    change: function(value, opacity) {
                        if (!value) return;
                        if (opacity) value += ', ' + opacity;
                        if (typeof console === 'object') {
                            console.log(value);
                        }
                    },
                    theme: 'bootstrap'
                });

            });

        });

    </script>
@endsection
