@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0"> รายการแบบคำขอยืม</h3>
            </div>
        </div>

    </div>
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font hb-cyan">
                        <strong>รายการแบบคำขอยืมอุปกรณ์และเครื่องมือ ฯ (ทก.01)</strong>
                    </h3>
                </div>
                <div class="boxs-widget">
                    <div class="form-group">
                        {{-- @if ($form->count() < 1) --}}
                        <div class="btn-group pull-right">
                            <a href="{{ url('form-borrow/create') }}" class="btn btn-success btn-raised">สร้างแบบคำขอยืมอุปกรณ์และเครื่องมือ ฯ (ทก.01)</a>
                        </div>
                        {{-- @endif --}}
                        {{-- @if ($form->count() < 1)
                        <div class="btn-group pull-right">
                            <a href="{{ url('form-borrow/create') }}" class="btn btn-success btn-raised">สร้างแบบฟอร์มกลุ่ม (ทก.01)</a>
                        </div>
                        @endif --}}
                    </div>
                </div>

                <div class="boxs-body">

                    @if(session()->has('message'))
                        <div class="alert alert-danger">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <table id="searchTextResults" data-filter="#filter" data-page-size="25"
                        class=" table table-custom table-hover">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>เลขที่</th>
                                <th>วันที่</th>
                                <th>รายงานแบบคำขอยืมอุปกรณ์และเครื่องมือ ฯ (ทก.01)</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($form as $forms)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $forms->id }}</td>
                                    <td>{{ date('d-m-Y', strtotime($forms->created_at)) }}</td>
                                    <td>แบบฟอร์มขอยืม {{ $forms->accessorie_list }} จำนวน 1</td>
                                    <td>
                                        <a href="{{ url('pdf/'.$forms->id) }}" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot class="hide-if-no-paging">
                            <tr>
                                <td colspan="3" class="text-right">
                                    <ul class="pagination">
                                    </ul>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                </div>
                <div class="boxs-footer">

                </div>
            </section>
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
