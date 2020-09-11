@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0"> @if (Auth::user()
                    ->roles()
                    ->first()->name == 'Admin')3.
                    @endif
                    @if (Auth::user()
                    ->roles()
                    ->first()->name == 'Approve')1.
                    @endif
                    อนุมัติคำขอ</h3>
                <small class="text-muted">
                    @if (Auth::user()
                    ->roles()
                    ->first()->name == 'Admin')3.
                    @endif
                    @if (Auth::user()
                    ->roles()
                    ->first()->name == 'Approve')1.
                    @endif
                    1 เอกสารเข้า ทก07</small>
            </div>
            <div class="btn-group pull-right">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('root') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('approve') }}">@if (Auth::user()
                            ->roles()
                            ->first()->name == 'Admin')3.
                            @endif
                            @if (Auth::user()
                            ->roles()
                            ->first()->name == 'Approve')1.
                            @endif อนุมัติคำขอ</a>
                    </li>
                    <li>
                        <a href="{{ route('form07.index') }}">@if (Auth::user()
                            ->roles()
                            ->first()->name == 'Admin')3.
                            @endif
                            @if (Auth::user()
                            ->roles()
                            ->first()->name == 'Approve')1.
                            @endif 1 เอกสารเข้า ทก07</a>
                    </li>
                    <li class="active">@if (Auth::user()
                        ->roles()
                        ->first()->name == 'Admin')3.1
                        @endif
                        @if (Auth::user()
                        ->roles()
                        ->first()->name == 'Approve')1.1
                        @endif
                        1 รายละเอียดเอกสารเข้า ทก07</li>
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
                        <strong>รายละเอียดเอกสารเข้า ทก07</strong>
                    </h3>
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
                                <th rowspan="2">ที่</th>
                                <th>ชื่อ - สกุล คนพิการ</th>
                                <th rowspan="2">ที่อยู่</th>
                                <th rowspan="2">ประเภทความพิการ</th>
                                <th rowspan="2">อายุ</th>
                                <th rowspan="2">รายการอุปกรณ์/เครื่องมือฯ ที่ขอยืม</th>
                                <th rowspan="2">ราคา/หน่วย</th>
                                <th colspan="2">การขอใช้สิทธิ์</th>
                                <th rowspan="2" colspan=3 style="width: 5%">ดำเนินการ</th>
                            </tr>
                            <tr>
                                <th>หมายเลขบัตรประจำตัวประชาชน</th>
                                <th>รายบุคคล</th>
                                <th>รายกลุ่ม</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($form01s as $form)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        {{ $form->user->fullname }}
                                        <br>
                                        {{ $form->user->citizen_id }}
                                    </td>
                                <td>{{ $form->address->house_no ?? '' }} {{$form->address->village_no ?? ''}}
                                    {{ $form->address->lane ?? '' }} {{$form->address->sub_district ?? ''}}
                                    {{ $form->address->district ?? '' }} {{$form->address->province ?? ''}}
                                    {{$form->address->postal_code ?? ''}}
                                </td>
                                    <td>{{ $form->user->disabilityType->description }}</td>
                                    <td>{{ $form->user->age }}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <td>
                                        <a href="{{ route('form07.show', $form) }}" class="btn btn-raised btn-info btn-sm"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a>
                                    </td>
                                    @if (empty($form->report))
                                    <td>
                                        <form action="{{ route('form07.update', $form->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="approve">
                                            <button class="btn btn-raised btn-success btn-sm" type="submit" title="ตรวจสอบผ่าน">
                                                ตรวจสอบผ่าน</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('form07.update', $form->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="cancel">
                                            <button class="del btn btn-raised btn-primary btn-sm" type="submit" title="ยกเลิก">
                                                <i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                    @else
                                    <td>
                                        <form action="{{ route('form07.update', $form->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="approve">
                                            <button class="btn btn-raised btn-success btn-sm" type="submit" title="ตรวจสอบแล้ว" disabled>
                                                ตรวจสอบแล้ว</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('form07.update', $form->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="cancel">
                                            <button class="del btn btn-raised btn-primary btn-sm" type="submit" title="ยกเลิก" disabled>
                                                <i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                    @endif
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
