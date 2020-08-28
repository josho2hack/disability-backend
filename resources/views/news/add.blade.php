@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
            <div class="page ui-lists-page">
                <!-- bradcome -->
                <div class="b-b mb-10">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <h1 class="font-thin h3 m-0">จัดการข่าวสาร</h1>
                        </div>
                        {{-- <div class="btn-group pull-right">
                            <a href="{{ url('news/add') }}" class="btn btn-warning btn-raised">เพิ่มข่าว</a>
                        </div> --}}
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <section class="boxs">
                            <div class="boxs-header">
                                <h3 class="custom-font hb-cyan">
                                    <strong>รายละเอียดข่าวสาร </strong></h3>
                            </div>
                            <div class="boxs-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="boxs-body">
                                            <form class="form-horizontal" action="{{ route('news') }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="title" class="col-sm-2 control-label">หัวข้อข่าวสาร</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" val="" name="title">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description" class="col-sm-2 control-label">รายละเอียดข่าวสาร</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="news_picture" class="col-sm-2 control-label">รูปภาพข่าวสาร</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">อัพโหลด</span>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="upload">
                                                                <label class="custom-file-label" for="upload">เลือกรูปภาพ</label>
                                                            </div>
                                                        </div>
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
