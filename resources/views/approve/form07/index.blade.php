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
                    1 เอกสารเข้า ทก07
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
                    <li class="active">
                        @if (Auth::user()
            ->roles()
            ->first()->name == 'Admin')3.
                        @endif
                        @if (Auth::user()
            ->roles()
            ->first()->name == 'Approve')1.
                        @endif
                        1 เอกสารเข้า ทก07
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
                        <strong>เอกสารเข้า ทก07</strong>
                    </h3>
                </div>
                <div class="boxs-body">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table id="searchTextResults" data-filter="#filter" data-page-size="25"
                        class="table table-custom table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle;">ลำดับ</th>
                                <th style="text-align: center; vertical-align: middle;">เลขที่ ทก.07</th>
                                <th style="text-align: center; vertical-align: middle;">รายการ</th>
                                <th style="text-align: center; vertical-align: middle;">วันที่ / เวลา ตรวจสอบ</th>
                                <th style="text-align: center; vertical-align: middle;">วันที่ / เวลา อนุมัติ</th>
                                <th style="text-align: center; vertical-align: middle;">ดำเนินการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($form07 as $form)
                            <tr>
                                    <td style="text-align: center; vertical-align: middle;">{{ $loop->index + 1 }}</td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        {{ sprintf('%02d', $form->form01s[0]->id) }}
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">{{ $form->form01s->count() }}</td>
                                    <td style="text-align: center; vertical-align: middle;">{{ formatDateThai($form->created_at->isoFormat("Y-M-D H:mm:ss")) }}</td>
                                    <td style="text-align: center; vertical-align: middle;">{{ ($form->report != null ? formatDateThai($form->report) : 'ร่าง')   }}</td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        @if (!empty($form->form01s[0]->form09s_id))
                                                <a href="{{ route('form07.show', $form) }}" class="btn btn-raised btn-info"
                                                title="รายละเอียด"> ดู </a>
                                                <button class="btn btn-raised btn-success" style="display: inline" type="submit" title="อนุมัติ"
                                                    disabled>
                                                    <span style="color: blue">อนุมัติแล้ว</span>
                                                </button>
                                                <button class="del btn btn-raised btn-primary" style="display: inline" type="submit"
                                                    title="ยกเลิก" disabled>
                                                    ยกเลิก </button>

                                        @elseif (!empty($form->form01s[0]->form10s_id))
                                                <a href="{{ route('form07.show', $form) }}" class="btn btn-raised btn-info"
                                                title="รายละเอียด"> ดู </a>
                                                <button class="btn btn-raised btn-success" style="display: inline" type="submit" title="อนุมัติ"
                                                    disabled>
                                                    อนุมัติ
                                                </button>
                                                <button class="del btn btn-raised btn-primary" style="display: inline" type="submit"
                                                    title="ยกเลิก" disabled>
                                                    <span style="color: red"> ยกเลิกแล้ว </span></button>
                                        @else
                                                <a href="{{ route('form07.show', $form) }}" class="btn btn-raised btn-info"
                                                title="รายละเอียด"> ดู </a>
                                                <form action="{{ route('form07.update', $form->id) }}" style="display: inline" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="approve" value="1">
                                                    <button class="btn btn-raised btn-success" type="submit"
                                                        title="อนุมัติ">
                                                        อนุมัติ</button>
                                                </form>
                                                <form action="{{ route('form07.update', $form) }}" style="display: inline" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="cancel" value="1">
                                                    <button class="del btn btn-raised btn-primary" type="submit"
                                                        title="ยกเลิก">  ยกเลิก </button>
                                                </form>
                                        @endif
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
