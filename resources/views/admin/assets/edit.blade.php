@extends('layouts.admin')
@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0">1.1 ระบบอุปกรณ์และเครื่องมือ</h3>
                <small class="text-muted">1.1.1 กลุ่มหลักอุปกรณ์และเครื่องมือ</small>
            </div>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font hb-cyan">
                        <strong>กลุ่มหลักอุปกรณ์และเครื่องมือ</strong>
                    </h3>
                    <div class="p-15 bg-white b-b">
                        <div class="btn-toolbar">
                            <div class="btn-group pull-right">
                                <a href="{{route('maingroups.create')}}" class="btn btn-info btn-raised">สร้างกลุ่มหลัก</a>
                            </div>
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
