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
                                <input type="text" class="form-control" name="price" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="budget" class="col-sm-2 control-label">วิธีได้มา</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="budget" placeholder="">
                                <p class="help-block mb-0">Ex: EAuction</p>
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
                                        <option value="{{ $status->id }}"
                                            @if ($status->id == 1)
                                            selected
                                            @endif>{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="asset_categories_id" class="col-sm-2 control-label">กลุ่มย่อย</label>
                            <div class="col-sm-10">
                                <select name="asset_categories_id" tabindex="5" class="chosen-select" style="width: 240px;">
                                    @foreach ($cates as $cate)
                                        <option value="{{ $cate->id }}"
                                            @if ($cate->id == 1)
                                            selected
                                            @endif>{{ $cate->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="location" class="col-sm-2 control-label">ใช้ประจำที่</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="location" placeholder="">
                                <p class="help-block mb-0">Ex: ทส.</p>
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

@endsection

@section('footer-script')

@endsection
