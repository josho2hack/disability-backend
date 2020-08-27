@extends('layouts.admin')
@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0">1.1 ระบบอุปกรณ์และเครื่องมือ</h3>
                <small class="text-muted">ภาพรวมอุปกรณ์และเครื่องมือ</small>
            </div>
            <div class="btn-group pull-right">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('root')}}"><i class="fa fa-home"></i></a>
                    </li>
                    <li>
                        <a href="{{route('admin')}}">1. บริหารจัดการระบบ</a>
                    </li>
                    <li class="active">1.1 ระบบอุปกรณ์และเครื่องมือ</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- cards row -->
    <div class="row clearfix stats">
        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="boxs padder-v">
                <div class="h2 text-info">551</div>
                <span class="text-muted">ทั้งหมด</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <a href="javascript:void(0);" class="block padder-v bg-amethyst">
                <span class="text-white h2 block">400</span>
                <span class="text-white">ถูกยืม</span>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="boxs padder-v">
                <div class="h2">30</div>
                <span class="text-muted">ซ่อมแซม</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <a href="javascript:void(0);" class="block padder-v bg-info">
                <span class="text-white h2 block">21</span>
                <span class="text-white">ชำรุด</span>
            </a>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font hb-cyan">
                        <strong>อุปกรณ์และเครื่องมือ</strong>
                    </h3>
                </div>
                <div class="boxs-widget">
                    <div class="form-group">
                        <div class="btn-group pull-right">
                            <a href="{{route('maingroups.index')}}" class="btn btn-info btn-raised mr-10">กลุ่มหลัก</a>
                            <a href="{{route('subgroups.index')}}" class="btn btn-info btn-raised">กลุ่มย่อย</a>
                        </div>
                    </div>
                </div>
                <div class="boxs-body">

                </div>
                <div class="boxs-footer">

                </div>
            </section>
        </div>
    </div>
@endsection
