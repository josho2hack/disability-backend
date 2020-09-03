@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
            <div class="page ui-lists-page">
                <!-- bradcome -->
                <div class="b-b mb-10">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <h1 class="font-thin h3 m-0">ลงทะเบียนความต้องการฝึกอบรมการใช้อุปกรณ์/เครื่องมือ</h1>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <section class="boxs">
                            <div class="boxs-header">
                                <h3 class="custom-font hb-cyan">
                                    <strong>กรอกข้อมูลลงทะเบียน </strong></h3>
                            </div>
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="boxs-body" @if(session()->has('message')) style="display: none;" @endif>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="boxs-body">
                                            <form class="form-horizontal" action="practice/add" method="post">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">ชื่อหลักสูตร</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{ $practice->name }}" name="name" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">กลุ่มหลัก</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{ $practice->main->name }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">กลุ่มย่อย</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{ $practice->sub->name }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">ชื่ออุปกรณ์</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{ $practice->cate->name }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="button" class="btn btn-raised btn-primary" onclick="window.history.back()" >ย้อนกลับ</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
@endsection

@section('footer')
    <script src="{{ asset('assets/js/vendor/footable/footable.all.min.js') }}"></script>
@endsection
