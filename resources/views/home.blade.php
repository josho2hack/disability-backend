@extends('layouts.admin')

@section('content')
<!-- bradcome -->
<div class="b-b mb-10">
    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <h2 class="h3 m-0">อุปกรณ์และเครื่องมือด้าน ICT สำหรับคนพิการ</h2>
            <small class="text-muted">รายการอุปกรณ์</small>
        </div>
    </div>
</div>

<!-- cards row -->
<div class="row clearfix">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <section class="boxs boxs-simple text-center">
            <div class="boxs-widget l-green p-30 -t">
                <i class="fa fa-desktop fa-3x"></i>
            </div>
            <div class="boxs-body">
                <h2 class="m-0">984</h2>
                <span class="text-muted">เครื่องคอมพิวเตอร์</span>
            </div>
        </section>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <section class="boxs boxs-simple text-center">
            <div class="boxs-widget l-pink p-30 -t">
                <i class="fa fa-laptop fa-3x"></i>
            </div>
            <div class="boxs-body">
                <h2 class="m-0">69</h2>
                <span class="text-muted">อุปกรณ์สื่อสาร (โทรศัพท์เคลื่อนที่)</span>
            </div>
        </section>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <section class="boxs boxs-simple text-center">
            <div class="boxs-widget l-khaki p-30 -t">
                <i class="fa fa-fax fa-3x"></i>
            </div>
            <div class="boxs-body">
                <h2 class="m-0">93</h2>
                <span class="text-muted">เครื่องช่วยสื่อสารพร้อมอุปกรณ์</span>
            </div>
        </section>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <section class="boxs boxs-simple text-center">
            <div class="boxs-widget l-blue p-30 -t">
                <i class="fa fa-keyboard-o fa-3x"></i>
            </div>
            <div class="boxs-body">
                <ul class="list-inline tbox m-0">
                    <h2 class="m-0">3,954</h2>
                    <span class="text-muted">เครื่องพิมพ์อักษรเบรลล์</span>
                </ul>
            </div>
        </section>
    </div>
</div>
@endsection
