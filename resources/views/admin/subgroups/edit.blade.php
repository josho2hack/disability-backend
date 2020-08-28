@extends('layouts.admin')
@section('header')

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
                        <strong>แก้ไขกลุ่มย่อยอุปกรณ์และเครื่องมือ</strong>
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
                    <form class="form-horizontal" role="form" action="{{ route('subgroups.update', $subgroup->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">กลุ่มย่อย</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder=""
                                    value="{{ $subgroup->name }}">
                                <p class="help-block mb-0">Ex: โปรแกรมพจนานุกรมภาษามือสำหรับคนพิการ</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">รายละเอียด</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description" placeholder=""
                                    value="{{ $subgroup->description }}">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="for_give" class="col-sm-2 control-label">ให้ยืม/ให้</label>
                            <div class="col-sm-10">
                                <select name="for_give" tabindex="5" class="chosen-select" style="width: 240px;">
                                    <option value="1" @if ($subgroup->for_give == 1) selected
                                        @endif>ให้ยืม</option>
                                    <option value="2" @if ($subgroup->for_give == 2) selected
                                        @endif>ให้</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">กลุ่มหลัก</label>
                            <div class="col-sm-10">
                                <select name="sub_groups_id" tabindex="5" class="chosen-select" style="width: 240px;">
                                    @foreach ($maingroups as $maingroup)
                                        <option value="{{ $maingroup->id }}" @if ($subgroup->sub_groups_id == $maingroup->id) selected
                                    @endif>
                                    {{ $maingroup->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="">
                            <label for="image" class="col-sm-2 control-label">รูปภาพ</label>
                            <div class="col-sm-10">
                                <input id="fileupload" type="file" name="image">
                            </div>
                        </div>
                        <!--//Up load File ---------------------------------------------------------->

                        @if ($subgroup->image)
                            <div class="form-group">
                                <label class="col-sm-2 control-label">รูปภาพเดิม</label>
                                <div class="col-sm-offset-2 col-sm-10">
                                    {{-- <img src="/subgroup/{{ $subgroup->id }}/avatar" />
                                    --}}
                                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($subgroup->image)) }}">
                                </div>
                            </div>
                        @endif

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

@endsection

@section('footer-script')

@endsection
