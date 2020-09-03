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
                            <h1 class="font-thin h3 m-0">รายละเอียดผู้ยื่นคำขอแทน</h1>
                        </div>
                        <div class="btn-group pull-right">
                            @if($check < 2)
                            <a href="{{ url('substitute/create') }}" class="btn btn-success btn-raised">เพิ่มข้อมูลผู้ยื่นคำขอแทนคนที่2</a>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- row -->
                
                <div class="row">
                    @foreach( $substitute as $sub )
                    <div class="col-md-6 col-sm-12">
                        <section class="boxs">
                            <div class="boxs-header">
                                <h3 class="custom-font ">
                                    <strong>ผู้ยื่นคำขอแทนคนที่{{ $loop->iteration }} </strong></h3>
                            </div>
                            <div class="boxs-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="boxs-body">
                                            <form class="form-horizontal" >
                                                <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-4 control-label">คำนำหน้า</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->title }}" name="title" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-4 control-label">ชื่อ</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->first_name }}" name="first_name" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-4 control-label">นามสกุล</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->last_name }}" name="last_name" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-4 control-label">เกี่ยวข้องเป็น</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->related }}" name="related" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-4 control-label">หนังสือมอบอำนาจลงวันที่</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ (date('d-m-Y', strtotime($sub->proxy_date))) }}" name= "proxy_date" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-4 control-label">วันกิด</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ (date('d-m-Y', strtotime($sub->brithday))) }}" name="brithday" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-4 control-label">เลขประชาชน</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->citizen_id }}" name="citizen_id" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-4 control-label">บ้านเลขที่</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->house_no }}" name="house_no" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-4 control-label">หมู่ที่</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->village_no }}" name="village_no" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-4 control-label">ซอย</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->lane }}" name="lane" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-4 control-label">ตำบล</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->sub_district }}" name="sub_district" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-4 control-label">อำเภอ</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->district }}" name="district" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-4 control-label">จังหวัด</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->province }}" name="province" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-4 control-label">รหัสไปรษณีย์</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->postal_code }}" name="postal_code " readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-4 control-label">ระดับการศึกษา</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->degree }}" name="degree" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-4 control-label">สถานที่ศึกษา</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->edu_place }}" name="edu_place" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-4 control-label">เบอร์โทร</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->tel }}" name="tel" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-4 control-label">อีเมลล์</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" value="{{ $sub->email }}" name="email" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-8">
                                                        <button type="button" class="btn btn-raised btn-warning">
                                                            <a href="{{ url('substitute/'.$sub->id.'/edit') }}" style="
                                                            text-decoration: none;
                                                            color: #ffffff;
                                                            " >แก้ไขข้อมูลผู้ยื่นคำขอแทน</a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    @endforeach
                </div>

                
            </div>
@endsection

@section('footer')
    <script src="{{ asset('assets/js/vendor/footable/footable.all.min.js') }}"></script>
@endsection
