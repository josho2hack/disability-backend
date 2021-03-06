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
            ->first()->name == 'Admin')3.2
                    @endif
                    @if (Auth::user()
            ->roles()
            ->first()->name == 'Approve')1.2
                    @endif
                    เอกสาร ทก09 (อนุมัติ)
                </h3>
                <small class="text-muted">
                    @if (Auth::user()
            ->roles()
            ->first()->name == 'Admin'){{-- 3. --}}
                    @endif
                    @if (Auth::user()
            ->roles()
            ->first()->name == 'Approve'){{-- 1. --}}
                    @endif
                    {{-- 2 เอกสาร ทก09 (อนุมัติ) --}}
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
                        2 เอกสาร ทก09 (อนุมัติ)
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
                        <strong>เอกสาร ทก09 (อนุมัติแล้ว)</strong>
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
                            <th style="text-align: center; vertical-align: middle;">เลขที่ ทก.09</th>
                            <th style="text-align: center; vertical-align: middle;">รายการ</th>
                            <th style="text-align: center; vertical-align: middle;">วันที่ / เวลา ทำสัญญา</th>
                            <th style="text-align: center; vertical-align: middle;">วันที่ / เวลา สร้างหนังสือสัญญา</th>
                            <th style="text-align: center; vertical-align: middle;">ดำเนินการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($form13 as $form)
                        {{-- {{ dd($form) }} --}}
                            <tr>
                                <td style="text-align: center; vertical-align: middle;">{{ $loop->index + 1 }}</td>
                                <td style="text-align: center; vertical-align: middle;">
                                    {{ sprintf('%02d', $form->id) }}
                                </td>
                                <td style="text-align: center; vertical-align: middle;">{{ $form->form01s->count() }}</td>
                                <td style="text-align: center; vertical-align: middle;">{{ ($form->report != '' ? formatDateThai($form->report) : 'ร่าง') }}</td>
                                {{-- {{ dd($form) }} --}}
                                <td style="text-align: center; vertical-align: middle;">{{ ($docContract->first()->created_at != '' ? formatDateThai($docContract->first()->created_at) : 'ร่าง') }}</td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <a href="{{ route('form10.show', $form) }}" class="btn btn-raised btn-info"
                                        title="รายละเอียด"> ดู </a>
                                    @if (!empty($docContract->first()->created_at))
                                    <a href="" class="btn btn-raised btn-success"
                                        title="สร้างสัญญา" disabled>
                                        <span style="color: green:">สร้างสัญญาแล้ว</span>
                                    </a>
                                    @else
                                        <a href="{{ route('contracts.create', 'id='.$form->id) }}" class="btn btn-raised btn-success" type="submit"
                                            title="สร้างสัญญา">
                                            สร้างสัญญา
                                        </a>
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

    </script>
@endsection
