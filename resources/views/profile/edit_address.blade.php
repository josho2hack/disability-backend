@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
            <div class="page ui-lists-page">
                <!-- bradcome -->
                <div class="b-b mb-10">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="font-thin h3 m-0">แก้ไขข้อมูลที่อยู่</h1>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <section class="boxs">
                            <div class="boxs-header">
                            </div>
                            <div class="boxs-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="boxs-body">
                                            <form class="form-horizontal" action="{{ url('profile/edit_address') }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">บ้านเลขที่</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$address->house_no}}" name="house_no">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">หมู่ที่</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$address->village_no}}" name="village_no">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">ซอย</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$address->lane}}" name="lane">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">ตำบล</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$address->sub_district}}" name="sub_district">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">อำเภอ</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$address->district}}" name="district">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">จังหวัด</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$address->province}}" name="province">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">รหัสไปรษณีย์</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$address->postal_code}}" name="postal_code">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">สถานที่ศึกษา</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$address->edu_place}}" name="edu_place">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">เบอร์โทร</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$address->tel}}" name="tel">
                                                    </div>
                                                </div>
                                                <input type="hidden" value="{{ $address->id }}" name="id">
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-raised btn-primary">ยืนยัน</button>
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
