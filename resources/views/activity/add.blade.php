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
                            <h1 class="font-thin h3 m-0">จัดการกิจกรรม</h1>
                        </div>
                        {{-- <div class="btn-group pull-right">
                            <a href="{{ url('activity/add') }}" class="btn btn-warning btn-raised">เพิ่มกิจกรรม</a>
                        </div> --}}
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <section class="boxs">
                            <div class="boxs-header">
                                <h3 class="custom-font hb-cyan">
                                    <strong>รายละเอียดกิจกรรม </strong></h3>
                            </div>
                            <div class="boxs-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="boxs-body">
                                            <form class="form-horizontal" action="{{ url('activity') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="title" class="col-sm-2 control-label">หัวข้อกิจกรรม</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" val="" name="title">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description" class="col-sm-2 control-label">รายละเอียดกิจกรรม</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="event_category_id" class="col-sm-2 control-label">หมวดหมู่ของกิจกรรม</label>
                                                    <div class="col-sm-10">
                                                        <select name="event_category_id" class="form-control">
                                                            <option value="" disabled selected>-- เลือกหมวดหมูของกิจกรรม --</option>
                                                            @foreach ($event_category as $item)
                                                                <option value="{{ $item->id }}">{{ $item->slug }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="event_group_id" class="col-sm-2 control-label">กลุ่มของกิจกรรม</label>
                                                    <div class="col-sm-10">
                                                        <select name="event_group_id" class="form-control">
                                                            <option value="" disabled selecte>-- เลือกกลุ่มของกิจกรรม --</option>
                                                            @foreach ($event_group as $item)
                                                                <option value="{{ $item->id }}">{{ $item->slug }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="activity_picture" class="col-sm-2 control-label">รูปภาพกิจกรรม</label>
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
