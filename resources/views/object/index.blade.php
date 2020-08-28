@extends('layouts.admin')
@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h2 class="h3 m-0">รายการครุภัณฑ์ว่าง</h2>
                <small class="text-muted">&nbsp;</small>
            </div>
        </div>
    </div>

    <!-- cards row -->
    <div class="row clearfix">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <section class="boxs boxs-simple text-center">
                <div class="boxs-widget l-green p-30 -t">
                    <i class="fa fa-dropbox fa-3x"></i>
                </div>
                <div class="boxs-body">
                    <h2 class="m-0">{{ $asset->count() }}</h2>
                    <span class="text-muted">คงคลัง</span>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-body">
                    <table id="searchTextResults" data-filter="#filter" data-page-size="25"
                        class="footable table table-custom table-hover">
                        <thead>
                            <tr>
                                <th>ลำดับที่</th>
                                <th>รหัสครุภัณฑ์</th>
                                <th>ยี่ห้อ ชนิด แบบ ขนาดและลักษณะ</th>
                                <th>สถานะ</th>
                                <th>หลักฐานการจ่าย</th>
                                {{-- <th colspan=3>ดำเนินการ</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($asset as $assets)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $assets->code }}</td>
                                    <td>{{ $assets->description }}</td>
                                    <td>{{ $assets->assetStatus->name }}</td>
                                    <td>{{ $assets->out_stock_evidance }}</td>
                                    {{-- <td>
                                        <a href="{{ route('assets.show', $assets) }}" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a>
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
