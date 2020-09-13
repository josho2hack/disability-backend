@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0">13 ดาวน์โหลด</h3>
                <small class="text-muted">13.1 ดาวน์โหลดไฟล์</small>
            </div>
            <div class="btn-group pull-right">
                <ol class="breadcrumb">
                    <li>
                        <a href=""><i class="fa fa-home"></i></a>
                    </li>
                    <li>
                        <a href="">13 ดาวน์โหลด</a>
                    </li>
                    <li class="active">13.1 ดาวน์โหลดไฟล์</li>
                </ol>
            </div>
        </div>

    </div>
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font hb-cyan">
                        <strong>รายการไฟล์</strong>
                    </h3>
                </div>
                <div class="boxs-body">
                    <table id="searchTextResults" data-filter="#filter" data-page-size="25"
                        class="footable table table-custom table-hover">
                        <thead>
                            <tr>
                                <th>ลำดับที่</th>
                                <th>ชื่อไฟล์</th>
                                <th>ดาวโหลด</th>
                                <th colspan=3>ดำเนินการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $file)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $file->name }}</td>
                                    <td><a href="{{ asset($file->cover_path) }}" class="btn btn-success btn-raised"><i class="fa fa-download"></i> ดาวโหลด</a></td>
                                    <td> </td>
                                    {{-- <td>
                                        <a href="{{ route('maingroups.show', $maingroup) }}" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('maingroups.edit', $maingroup->id) }}"
                                            class="btn btn-raised btn-warning" title="แก้ไข"> <i class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <form action="{{ route('maingroups.destroy', $maingroup->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="del btn btn-raised btn-primary" type="submit" title="ลบ">
                                                <i class="fa fa-trash"></i></button>
                                        </form>
                                    </td> --}}
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
