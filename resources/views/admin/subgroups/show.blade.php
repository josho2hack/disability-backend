@extends('layouts.admin')

@section('header')

@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
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
                    <li class="active">1.1.2 กลุ่มย่อยอุปกรณ์</li>
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
                        <strong>รายละเอียดกลุ่มหลักอุปกรณ์และเครื่องมือ</strong>
                    </h3>
                </div>
                <div class="boxs-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Id:</strong>
                                {{ $subgroup->id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>กลุ่มย่อย:</strong>
                                {{ $subgroup->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>รายละเอียด:</strong>
                                {{ $subgroup->description }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ให้ยืม/ให้:</strong>
                                {{ $subgroup->for_give }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>กลุ่มหลัก:</strong>
                                {{ $subgroup->subgroup->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ประเภท:</strong>
                                {{ $subgroup->type }}
                            </div>
                        </div>
                        @if ($subgroup->image)
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    {{-- <img src="/subgroup/{{ $subgroup->id }}/avatar" />
                                    --}}
                                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($subgroup->image)) }}">
                                </div>
                            </div>
                        @endif

                        @if (!empty($subgroup->document))
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>คู่มือ:</strong>
                                    <a href="{{ url($subgroup->doc) }}">ไฟล์เอกสารคู่มือ</a>
                                </div>
                            </div>
                        @endif

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>เรียนรู้การใช้งาน:</strong>
                                {{ $subgroup->url }}
                            </div>
                        </div>
                    </div>

                    <a class="btn btn-raised btn-default" href="{{ route('subgroups.index') }}">กลับ</a>

                </div>
                <div class="boxs-footer text-right bg-tr-black lter dvd dvd-to">

                </div>
            </section>
        </div>
    </div>
@endsection

@section('footer')

@endsection
