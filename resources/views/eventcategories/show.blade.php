@extends('layouts.admin')

@section('header')

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
                        <strong>รายละเอียดหมวดหมู่กิจกรรม</strong>
                    </h3>
                </div>
                <div class="boxs-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Id:</strong>
                                {{ $eventcategory->id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>กลุ่มหลัก:</strong>
                                {{ $eventcategory->name  }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>สี:</strong>
                                <span style="color: {{ $eventcategory->color }}">{{$eventcategory->color}}</span>
                            </div>
                        </div>
                    </div>

                        <a class="btn btn-raised btn-default" href="{{ route('eventcategories.index') }}">กลับ</a>

                </div>
                <div class="boxs-footer text-right bg-tr-black lter dvd dvd-to">

                </div>
            </section>
        </div>
    </div>
@endsection

@section('footer')

@endsection
