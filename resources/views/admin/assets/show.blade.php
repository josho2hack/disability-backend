@extends('layouts.admin')

@section('header')

@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0">1.1 ระบบบริหารจัดการครุภัณฑ์</h3>
                <small class="text-muted">1.1.3 อุปกรณ์และเครื่องมือ</small>
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
                    <li class="active">1.1.3 อุปกรณ์และเครื่องมือ</li>
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
                        <strong>รายละเอียดอุปกรณ์และเครื่องมือ</strong>
                    </h3>
                </div>
                <div class="boxs-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Id:</strong>
                                {{ $asset->id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>รหัสครุภัณฑ์:</strong>
                                {{ $asset->code }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ยี่ห้อ ชนิด แบบ ขนาดและลักษณะ:</strong>
                                {{ $asset->description }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>หมายเลข:</strong>
                                {{ $asset->serial_no }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ราคา/หน่วย:</strong>
                                {{ $asset->price }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>วิธีได้มา:</strong>
                                {{ $asset->budget }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>เลขที่เอกสาร:</strong>
                                {{ $asset->doc_no }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>สถานะ:</strong>
                                {{ $asset->assetstatus->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ใช้ประจำที่:</strong>
                                {{ $asset->location }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>หลักฐานการจ่าย:</strong>
                                {{ $asset->out_stock_evidance }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>หมายเหตุ:</strong>
                                {{ $asset->remark }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ประเภทคนพิการที่มีสิทธิ์:</strong>
                                @foreach ($asset->cate->disablilityTypes as $disablilityType)
                                    <ul>
                                        <li style="list-style-type: none;">{{$loop->index + 1}}. {{ $disablilityType->description }}</li>
                                    </ul>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>กลุ่มย่อย:</strong>
                                {{ $asset->assetcategory->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>กลุ่มหลัก:</strong>
                                {{ $subgroup->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ประเภท:</strong>
                                {{ $subgroup->maingroup->name }}
                            </div>
                        </div>
                        @if ($asset->cate->image)
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                            {{-- <img src="/subgroup/{{$subgroup->id}}/avatar" /> --}}
                            <img src="data:image/png;base64,{{ chunk_split(base64_encode($asset->cate->image)) }}">
                            </div>
                        </div>
                        @endif
                    </div>

                    <a class="btn btn-raised btn-default" href="{{ route('assets.index') }}">กลับ</a>

                </div>
                <div class="boxs-footer text-right bg-tr-black lter dvd dvd-to">

                </div>
            </section>
        </div>
    </div>
@endsection

@section('footer')

@endsection
