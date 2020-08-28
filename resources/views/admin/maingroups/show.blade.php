@extends('layouts.admin')

@section('header')

@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0">1.1 ระบบอุปกรณ์และเครื่องมือ</h3>
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
                        <a href="{{ route('assets.dashboard') }}">1.1 ระบบอุปกรณ์และเครื่องมือ</a>
                    </li>
                    <li class="active">1.1.1 กลุ่มหลักอุปกรณ์และเครื่องมือ</li>
                </ol>
            </div>
        </div>

    </div>
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font hb-cyan">
                        <strong>รายละเอียดกลุ่มหลักอุปกรณ์และเครื่องมือ</strong>
                    </h3>
                </div>
                <div class="boxs-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Id:</strong>
                                {{ $maingroup->id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>กลุ่มหลัก:</strong>
                                {{ $maingroup->name  }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ประเภท:</strong>
                                {{ $maingroup->maingroup->name  }}
                            </div>
                        </div>
                    </div>

                        <a class="btn btn-raised btn-default" href="{{ route('maingroups.index') }}">กลับ</a>

                </div>
                <div class="boxs-footer text-right bg-tr-black lter dvd dvd-to">

                </div>
            </section>
        </div>
    </div>
@endsection

@section('footer')

@endsection
