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

<!-- bradcome -->
<div class="b-b mb-10">
    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <h2 class="h3 m-0">ข่าวสารประชาสัมพันธ์</h2>
        </div>
    </div>
</div>

<div class="row clearfix">
    @foreach ($news as $item)
    <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="shownews/{{ $item["id"] }}" style="text-decoration: none;">
            <div class="boxs project_widget">
                <div class="pw_img" style="height: 250px;">
                    <img class="img-responsive" src="{{ asset('uploads/news/'.$item["cover_name"]) }}" alt="{{ $item["title"] }}" >
                </div>
                <div class="pw_content">
                    <div class="pw_header">
                        <h6>{{ $item["title"] }}</h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection
