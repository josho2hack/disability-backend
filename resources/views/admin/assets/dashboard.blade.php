@extends('layouts.admin')
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection
@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0">1.1 ระบบอุปกรณ์และเครื่องมือ</h3>
                <small class="text-muted">ภาพรวมอุปกรณ์และเครื่องมือ</small>
            </div>
            <div class="btn-group pull-right">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('root')}}"><i class="fa fa-home"></i></a>
                    </li>
                    <li>
                        <a href="{{route('admin')}}">1. บริหารจัดการระบบ</a>
                    </li>
                    <li class="active">1.1 ระบบอุปกรณ์และเครื่องมือ</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- cards row -->
    <div class="row clearfix stats">
        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="boxs padder-v">
                <div class="h2 text-info">551</div>
                <span class="text-muted">ทั้งหมด</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <a href="javascript:void(0);" class="block padder-v bg-amethyst">
                <span class="text-white h2 block">400</span>
                <span class="text-white">ถูกยืม</span>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="boxs padder-v">
                <div class="h2">30</div>
                <span class="text-muted">ซ่อมแซม</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <a href="javascript:void(0);" class="block padder-v bg-info">
                <span class="text-white h2 block">21</span>
                <span class="text-white">ชำรุด</span>
            </a>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font hb-cyan">
                        <strong>อุปกรณ์และเครื่องมือ</strong>
                    </h3>
                    <p class="text-info"><strong>ทั้งหมด <span class="text-success">{{$assets->count()}}</span> รายการ</strong></p>
                </div>
                <div class="boxs-widget">
                    <div class="form-group">
                        <div class="btn-group pull-right">
                            <a href="{{route('maingroups.index')}}" class="btn btn-info btn-raised mr-10">กลุ่มหลัก</a>
                            <a href="{{route('subgroups.index')}}" class="btn btn-info btn-raised mr-10">กลุ่มย่อย</a>
                            <a href="{{route('assets.index')}}" class="btn btn-info btn-raised">อุปกรณ์และเครื่องมือทั้งหมด</a>
                        </div>
                    </div>
                </div>
                <div class="boxs-body">
                    <table id="searchTextResults" data-filter="#filter" data-page-size="25"
                        class="footable table table-custom table-hover">
                        <thead>
                            <tr>
                                <th>ลำดับที่</th>
                                <th>กลุ่มหลัก</th>
                                <th>กลุ่มย่อย</th>
                                <th>รูปภาพ</th>
                                <th>ทั้งหมด</th>
                                <th>คงคลัง</th>
                                <th>รอรับ</th>
                                <th>ยืม</th>
                                <th>เสีย</th>
                                <th>ส่งซ่อม</th>
                                <th>สูญหาย</th>
                                <th>อื่น ๆ</th>
                            </tr>
                        </thead>
                        <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                        </tbody>
                        <tfoot class="hide-if-no-paging">
                            <tr>
                                <td colspan="12" class="text-right">
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
@endsection

@section('footer-script')
    <!--  Page Specific Scripts  -->
    <script>
        $(function() {
            $('.footable').footable();

        });

    </script>
@endsection
