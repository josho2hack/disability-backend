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
                            <h1 class="font-thin h3 m-0">เพิ่มข้อมูลผู้ยื่นคำขอยืมแทน</h1>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <section class="boxs">
                            <div class="boxs-header">
                                <h3 class="custom-font hb-cyan">
                                    <strong>ข้อมูลผู้ยื่นคำขอยืมแทน </strong></h3>
                            </div>
                            <div class="boxs-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="boxs-body">
                                            <form class="form-horizontal" action="{{ url('substitute') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">คำนำหน้า</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="คำนำหน้า" name="title">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">ชื่อ</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="ชื่อ" name="first_name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">นามสกุล</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="นามสกุล" name="last_name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">เกี่ยวข้องเป็น</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="เกี่ยวข้องเป็น" name="related">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">หนังสือมอบอำนาจลงวันที่</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control" placeholder="หนังสือมอบอำนาจลงวันที่" name="proxy_date">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">วันกิด</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control" placeholder="วันกิด" name="brithday">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">เลขประชาชน</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="เลขประชาชน" name="citizen_id">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">บ้านเลขที่</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="บ้านเลขที่" name="house_no">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">หมู่ที่</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="หมู่ที่" name="village_no">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">ซอย</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="ซอย" name="lane">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">ตำบล</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="ตำบล" name="sub_district">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">อำเภอ</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="อำเภอ" name="district">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">จังหวัด</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="จังหวัด" name="province">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">รหัสไปรษณีย์</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="รหัสไปรษณีย์" name="postal_code">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">ระดับการศึกษา</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="ระดับการศึกษา" name="degree">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">สถานที่ศึกษา</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="สถานที่ศึกษา" name="edu_place">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">เบอร์โทร</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="เบอร์โทร" name="tel">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">อีเมลล์</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="อีเมลล์" name="email">
                                                </div>
                                            </div>
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
