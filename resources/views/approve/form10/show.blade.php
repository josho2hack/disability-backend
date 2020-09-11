@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0">
                    @if (Auth::user()
            ->roles()
            ->first()->name == 'Admin')3.
                    @endif
                    @if (Auth::user()
            ->roles()
            ->first()->name == 'Approve')1.
                    @endif
                    อนุมัติคำขอ
                </h3>
                <small class="text-muted">
                    @if (Auth::user()
            ->roles()
            ->first()->name == 'Admin')3.
                    @endif
                    @if (Auth::user()
            ->roles()
            ->first()->name == 'Approve')1.
                    @endif
                    3 เอกสาร ทก10 (ยกเลิก)
                </small>
            </div>
            <div class="btn-group pull-right">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('root') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('approve') }}">
                            @if (Auth::user()
            ->roles()
            ->first()->name == 'Admin')3.
                            @endif
                            @if (Auth::user()
            ->roles()
            ->first()->name == 'Approve')1.
                            @endif อนุมัติคำขอ
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('form10.index') }}">
                            @if (Auth::user()
            ->roles()
            ->first()->name == 'Admin')3.
                            @endif
                            @if (Auth::user()
            ->roles()
            ->first()->name == 'Approve')1.
                            @endif 3 เอกสาร ทก10 (ยกเลิก)
                        </a>
                    </li>
                    <li class="active">
                        @if (Auth::user()
            ->roles()
            ->first()->name == 'Admin')3.3.
                        @endif
                        @if (Auth::user()
            ->roles()
            ->first()->name == 'Approve')1.3.
                        @endif
                        1 เอกสาร ทก10 (ยกเลิก)
                    </li>
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
                        <strong>เอกสาร ทก10 (ยกเลิก)</strong>
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
                    <strong>ครั้งที่</strong> {{ $form10->round }}
                    <br>
                    <strong>ประจำปีงบประมาณ</strong> {{ $form10->year }}
                    <br>
                    <strong>หน่วยงานที่รับคาขอฯ</strong> {{ $form10->office }}
                    <br>
                    <strong>จังหวัด</strong> {{ $form10->city }}
                    <table id="searchTextResults" data-filter="#filter" data-page-size="25"
                        class="footable table table-custom table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2">ที่</th>
                                <th>ชื่อ - สกุล คนพิการ</th>
                                <th rowspan="2">ที่อยู่</th>
                                <th rowspan="2">ประเภทความพิการ</th>
                                <th rowspan="2">รายการอุปกรณ์/เครื่องมือฯ ที่ยกเลิก</th>
                                <th rowspan="2">เหตุผลในการยกเลิก</th>
                                <th rowspan="2" colspan="2" style="width: 5%">ดำเนินการ</th>
                            </tr>
                            <tr>
                                <th>หมายเลขบัตรประจำตัวประชาชน</th>
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
                                    <td>{{ $form->address->house_no ?? '' }} {{ $form->address->village_no ?? '' }}
                                        {{ $form->address->lane ?? '' }} {{ $form->address->sub_district ?? '' }}
                                        {{ $form->address->district ?? '' }} {{ $form->address->province ?? '' }}
                                        {{ $form->address->postal_code ?? '' }}
                                    </td>
                                    <td>{{ $form->user->disabilityType->description }}</td>
                                    <td>{{ $form->accessorie_no }}</td>
                                    <td>{{ $form->remark }}</td>

                                    <td>
                                        <a href="{{ url('pdf/' . $form->id) }}" class="btn btn-raised btn-info btn-sm"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a>
                                    </td>
                                    @if (empty($form09->report))
                                        @if (!empty($form10->report))
                                            <td>
                                                <button class="btn btn-raised btn-success btn-sm" type="submit"
                                                    title="อนุมัติ" disabled>
                                                    อนุมัติ</button>
                                            </td>
                                        @else
                                        <td>
                                            <form action="{{ route('form10.update', $form->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="form01" value="1">
                                                <input type="hidden" name="approve" value="1">
                                                <button class="btn btn-raised btn-success btn-sm" type="submit"
                                                    title="อนุมัติ">
                                                    อนุมัติ</button>
                                            </form>
                                        </td>
                                        @endif
                                    @else
                                        <td>
                                            <button class="btn btn-raised btn-success btn-sm" type="submit" title="อนุมัติ"
                                                disabled>
                                                อนุมัติ</button>
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
