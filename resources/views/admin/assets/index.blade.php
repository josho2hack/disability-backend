@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0">1.1 อุปกรณ์และเครื่องมือ</h3>
                <small class="text-muted">1.1.3 รายละเอียดอุปกรณ์และเครื่องมือ</small>
            </div>
            <div class="btn-group pull-right">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('root') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('admin') }}">1. ระบบจัดการครุภัณฑ์ </a>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}">1.1 อุปกรณ์และเครื่องมือ</a>
                    </li>
                    <li class="active">1.1.3 รายละเอียดอุปกรณ์</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font">
                        <strong>รายการอุปกรณ์และเครื่องมือ</strong>
                    </h3>
                    <div class="btn-group pull-right">
                        <a href="{{ route('assets.create') }}" class="btn btn-success btn-raised mr-10">เพิ่มอุปกรณ์และเครื่องมือ</a>
                    </div>
                    <p><strong>ทั้งหมด <span class="text-success">{{$assets->count()}}</span> รายการ</strong></p>
                    <div class="form-group">
                        <label for="filter" style="padding-top: 5px">ค้นหา:</label>
                        <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
                    </div>
                </div>
                <div class="boxs-body">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table id="searchTextResults" data-filter="#filter" data-page-size="25"
                        class="footable table table-custom table-hover">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>รหัสครุภัณฑ์</th>
                                <th>ยี่ห้อ ชนิด แบบ ขนาดและลักษณะ</th>
                                <th>สถานะ</th>
                                <th>หลักฐานการจ่าย</th>
                                <th colspan=3 style="width: 5%">ดำเนินการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assets as $asset)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $asset->code }}</td>
                                    <td>{{ $asset->description }}</td>
                                    <td>{{ $asset->assetStatus->name }}</td>
                                    <td>{{ $asset->out_stock_evidance }}</td>
                                    <td>
                                        <a href="{{ route('assets.show', $asset) }}" class="btn btn-raised btn-info btn-sm"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('assets.edit', $asset->id) }}"
                                            class="btn btn-raised btn-warning btn-sm" title="แก้ไข"> <i class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <form action="{{ route('assets.destroy', $asset->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="del btn btn-raised btn-primary btn-sm" type="submit" title="ลบ">
                                                <i class="fa fa-trash"></i></button>
                                        </form>
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
