@extends('layouts.admin')
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
                <li class="active">1.1.1 กลุ่มหลักอุปกรณ์และเครื่องมือ</li>
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
                    <form class="form-horizontal" role="form" action="{{ route('maingroups.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">กลุ่มหลัก</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="">
                                <p class="help-block mb-0">Ex: โปรแกรมพจนานุกรมสำหรับคนพิการ</p>
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
