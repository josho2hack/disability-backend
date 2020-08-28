@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')

    <x-alert />

  <div class="b-b mb-10">
    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <h3 class="h3 m-0">12.1 จัดการข่าวสาร</h3>
            <small class="text-muted">แก้ไขข่าวสาร</small>
        </div>
        <div class="btn-group pull-right">
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-home"></i> 12 ระบบจัดการหน้าเว็บไซต์</a>
                </li>
                <li class="active">12.1 จัดการข่าวสาร</li>
            </ol>
        </div>
    </div>
  </div>

  
  <div class="row">
      <div class="col-lg-6">
          <section class="boxs">
            <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('put')

                <div class="boxs-header">
                <h3 class="custom-font hb-cyan">
                    <strong>ฟอร์มแก้ไขข่าวสาร</strong>
                </h3>
                </div>
            
                <div class="boxs-body">
                    <div class="form-group">
                        <label for="title">หัวข้อ:</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $news->title }}">
                    </div>
        
                    <div class="form-group">
                        <label for="description">รายละเอียด:</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $news->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <img src="{{ $news->cover_link }}" style="max-width: 100%">
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">รูปภาพ:</label>
                        <div class="col-sm-10">
                            <input type="file" name="upload" class="filestyle" data-buttonText="เลือกรูปภาพ" data-iconName="fa fa-inbox">
                        </div>
                    </div>
                </div>
        
                <div class="boxs-footer">
                    <button class="btn btn-primary btn-raised">บันทึก</button>
                </div>
            </form>
          </section>
      </div>
  </div>


@endsection

@section('footer')
    <script src="{{ asset('assets/js/vendor/footable/footable.all.min.js') }}"></script>

    <script src="{{ asset('assets/js/vendor/sparkline/jquery.sparkline.min.js') }}"></script>     
    <script src="{{ asset('assets/js/vendor/animsition/js/jquery.animsition.min.js') }}"></script> 
    <script src="{{ asset('assets/js/vendor/screenfull/screenfull.min.js') }}"></script> 
    <script src="{{ asset('assets/js/vendor/slider/bootstrap-slider.min.js') }}"></script> 
    <script src="{{ asset('assets/js/vendor/colorpicker/js/bootstrap-colorpicker.min.js') }}"></script> 
    <script src="{{ asset('assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.js') }}"></script> 
    <script src="{{ asset('assets/js/vendor/daterangepicker/moment.min.js') }}"></script> 
    <script src="{{ asset('assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script> 
    <script src="{{ asset('assets/js/vendor/chosen/chosen.jquery.min.js') }}"></script> 
    <script src="{{ asset('assets/js/vendor/filestyle/bootstrap-filestyle.min.js') }}"></script> 

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
