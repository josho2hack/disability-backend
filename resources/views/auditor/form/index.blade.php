@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0"> ส่ง ทก.07</h3>
            </div>
        </div>

    </div>
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font hb-cyan">

                    </h3>
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
                                <th style="text-align: center">ลำดับ</th>
                                <th style="text-align: center">เลขที่ ทก.07</th>
                                <th style="text-align: center">รายการ</th>
                                <th style="text-align: center">วันที่ / เวลาที่บันทึก</th>
                                <th style="text-align: center">วันที่ / เวลาที่ตรวจสอบ</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                                <tr>
                                    <td align="center"> 1 </td>
                                    <td align="center"> 1 </td>
                                    <td align="center"> 3 </td>
                                    <td align="center"> 9-10-2563 08:30:00 </td>
                                    <td align="center"> ร่าง </td>
                                    <td align="center">
                                        <a href="" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> ดู</a>
                                        <a href="" class="btn btn-raised btn-warning"
                                            title="รายละเอียด"> แก้ไข</a>
                                        <a href="" class="btn btn-raised btn-success"
                                            title="รายละเอียด"> ตรวจสอบ OK</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center"> 2 </td>
                                    <td align="center"> 2 </td>
                                    <td align="center"> 3 </td>
                                    <td align="center"> 9-10-2563 08:30:00 </td>
                                    <td align="center"> 9-10-2563 12:30:00 </td>
                                    <td align="center">
                                        <a href="" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> ดู</a>
                                        <a href="" class="btn btn-raised btn-success"
                                            title="รายละเอียด" disabled style="color: #000;"> ตรวจสอบแล้ว</a>
                                    </td>
                                </tr>

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
