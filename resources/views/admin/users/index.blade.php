@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0">1.2 ระบบสมาชิก</h3>
                <small class="text-muted">1.2.1 สมาชิก</small>
            </div>
            <div class="btn-group pull-right">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('root') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('admin') }}">1. บริหารจัดการระบบ</a>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}">1.2 ระบบสมาชิก</a>
                    </li>
                    <li class="active">1.2.1 สมาชิก</li>
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
                        <strong>รายการสมาชิก</strong>
                    </h3>
                    <div class="btn-group pull-right">
                        <a href="{{ route('users.create') }}" class="btn btn-success btn-raised mr-10">เพิ่มสมาชิก</a>
                        <a href="{{ route('users.option') }}" class="btn btn-info btn-raised">กำหนดค่าสมาชิก</a>
                    </div>
                    <p class=""><strong>สมาชิกทั้งหมด <span class="text-info"> {{ $users->count() }} </span>
                            รายการ</strong></p>
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
                                <th>ลำดับที่</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>เพศ</th>
                                <th>เลขผู้พิการ</th>
                                <th>สถานะ</th>
                                <th colspan=3 style="width: 5%">ดำเนินการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>
                                        @php
                                        if($user->gender == 1)
                                        echo "ชาย";
                                        else
                                        echo "หญิง";
                                        @endphp
                                    </td>
                                    <td>{{ $user->pwd_id }}</td>
                                    <td>
                                        @php
                                        if($user->active == 1)
                                        echo "เปิด";
                                        else
                                        echo "ปิด";
                                        @endphp
                                    </td>
                                    <td>
                                        <a href="{{ route('users.show', $user) }}" class="btn btn-raised btn-info btn-sm"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}"
                                            class="btn btn-raised btn-warning btn-sm" title="แก้ไข"> <i
                                                class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="del btn btn-raised btn-primary btn-sm" type="submit" title="ลบ"
                                                @if ($user->id == 1)
                                                disabled
                            @endif>
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
