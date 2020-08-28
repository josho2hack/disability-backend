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
                            <h1 class="font-thin h3 m-0">จัดการโปรไฟล์</h1>
                        </div>
                        @if( $profile_address == null)
                        <div class="btn-group pull-right">
                            <a href="{{ url('profile/add') }}" class="btn btn-warning btn-raised">เพิ่มข้อมูลโปรไฟล์ที่อยู่</a>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <section class="boxs">
                            <div class="boxs-header">
                                <h3 class="custom-font hb-cyan">
                                    <strong>โปรไฟล์ส่วนตัว </strong></h3>
                            </div>
                            <div class="boxs-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="boxs-body">
                                            <form class="form-horizontal" action="{{ url('profile') }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">ชื่อ</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" val="{{ $user->first_name }}" name="house_no">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">นามสกุล</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" val="{{ $user->last_name }}" placeholder="หมู่ที่" name="village_no">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">ซอย</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" val="{{ $user->last_name }}" placeholder="ซอย" name="lane">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">ตำบล</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" val="{{ $user->last_name }}" placeholder="ตำบล" name="sub_district">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">อำเภอ</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" val="{{ $user->last_name }}" placeholder="อำเภอ" name="district">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">จังหวัด</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" val="{{ $user->last_name }}" placeholder="จังหวัด" name="province">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">รหัสไปรษณีย์</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" val="{{ $user->last_name }}" placeholder="รหัสไปรษณีย์" name="postal_code">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">สถานที่ศึกษา</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" val="{{ $user->last_name }}" placeholder="สถานที่ศึกษา" name="edu_place">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">เบอร์โทร</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" val="{{ $user->last_name }}" placeholder="เบอร์โทร" name="tel">
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
                    @if( $profile_address )
                    <div class="col-md-6 col-sm-12">
                        <section class="boxs">
                            <div class="boxs-header">
                                <h3 class="custom-font hb-cyan">
                                    <strong>ที่อยู่</strong>

                            </div>
                            <!-- /boxs header -->

                            <!-- boxs body -->
                            <div class="boxs-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="boxs-body">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">บ้านเลขที่</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$profile_address->house_no}}" placeholder="บ้านเลขที่" name="house_no" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">หมู่ที่</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$profile_address->village_no}}" placeholder="หมู่ที่" name="village_no" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">ซอย</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$profile_address->lane}}" placeholder="ซอย" name="lane" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">ตำบล</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$profile_address->sub_district}}" placeholder="ตำบล" name="sub_district" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">อำเภอ</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$profile_address->district}}" placeholder="อำเภอ" name="district" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">จังหวัด</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$profile_address->province}}" placeholder="จังหวัด" name="province" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">รหัสไปรษณีย์</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$profile_address->postal_code}}" placeholder="รหัสไปรษณีย์" name="postal_code" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">สถานที่ศึกษา</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$profile_address->edu_place}}" placeholder="สถานที่ศึกษา" name="edu_place" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">เบอร์โทร</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$profile_address->tel}}" placeholder="เบอร์โทร" name="tel" readonly>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    @endif
                </div>
            </div>
@endsection

@section('footer')
    <script src="{{ asset('assets/js/vendor/footable/footable.all.min.js') }}"></script>

    <!--  Page Specific Scripts  -->
    <script>
        $(function() {
            $('.footable').footable();

        });

        // $(document).on('click', '.del', function(e) {
        //     e.preventDefault();
        //     var form = e.target.form; // storing the form
        //     swal({
        //         title: "คุณต้องการลบข้อมูลใช่หรือไม่?",
        //             text: "การลบจะไม่สามารถกู้คืนได้ คุณต้องสร้างใหม่",
        //             type: "warning",
        //             showCancelButton: true,
        //             confirmButtonColor: '#DD6B55',
        //             confirmButtonText: 'ไช่, ลบข้อมูล!',
        //             cancelButtonText: "ไม่, ยกเลิก",
        //             closeOnConfirm: false
        //         },
        //         function() {
        //             form.submit();
        //             //swal("ลบข้อมูลเรียบร้อยแล้ว", "ข้อมูลของคุณถูกลบแล้ว", "success");
        //         });
        // });

    </script>
@endsection
