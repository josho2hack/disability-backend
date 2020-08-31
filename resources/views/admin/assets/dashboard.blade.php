@extends('layouts.admin')
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection
@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0">1.1 ระบบบริหารจัดการครุภัณฑ์</h3>
                <small class="text-muted">ภาพรวมอุปกรณ์และเครื่องมือ</small>
            </div>
            <div class="btn-group pull-right">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('root') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('admin') }}">1. บริหารจัดการระบบ</a>
                    </li>
                    <li class="active">1.1 ระบบบริหารจัดการครุภัณฑ์</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- cards row -->
    @php
    $stock = 0;
    $inuse = 0;
    $repair = 0;
    $lost = 0;
    foreach ($sub1 as $sub) {
    $stock += $sub->assets->where('asset_statuses_id','1')->count();
    $inuse += $sub->assets->where('asset_statuses_id','3')->count();
    $repair += $sub->assets->where('asset_statuses_id','5')->count();
    $lost += $sub->assets->where('asset_statuses_id','6')->count();
    }
    foreach ($sub2 as $sub) {
    $stock += $sub->assets->where('asset_statuses_id','1')->count();
    $inuse += $sub->assets->where('asset_statuses_id','3')->count();
    $repair += $sub->assets->where('asset_statuses_id','5')->count();
    $lost += $sub->assets->where('asset_statuses_id','6')->count();
    }
    @endphp
    <div class="row clearfix stats">
        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="boxs padder-v">
                <div class="h2 text-info">{{ $stock }}</div>
                <span class="text-muted">คงหลือ</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <a href="javascript:void(0);" class="block padder-v bg-amethyst">
                <span class="text-white h2 block">{{ $inuse }}</span>
                <span class="text-white">ถูกยืม</span>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="boxs padder-v">
                <div class="h2">{{ $repair }}</div>
                <span class="text-muted">ส่งซ่อม</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <a href="javascript:void(0);" class="block padder-v bg-info">
                <span class="text-white h2 block">{{ $lost }}</span>
                <span class="text-white">สูญหาย</span>
            </a>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font hb-blue">
                        อุปกรณ์และเครื่องมือ
                    </h3>
                    <p class="text-info"><strong>ครุภัณฑ์ทั้งหมด <span class="text-success">{{ $assetcount }}</span>
                            รายการ</strong></p>
                </div>
                <div class="boxs-widget">
                    <div class="form-group">
                        <div class="btn-group pull-right">
                            <a href="{{ route('maingroups.index') }}" class="btn btn-info btn-raised mr-10">กลุ่มหลัก</a>
                            <a href="{{ route('subgroups.index') }}" class="btn btn-info btn-raised mr-10">กลุ่มย่อย</a>
                            <a href="{{ route('assets.index') }}"
                                class="btn btn-info btn-raised">อุปกรณ์และเครื่องมือทั้งหมด</a>
                        </div>
                    </div>
                </div>
                <div class="boxs-body">
                    <table id="searchTextResults" data-filter="#filter" data-page-size="25" data-sorting="false"
                        class="footable table table-custom table-hover">
                        <thead>
                            <tr>
                                <th colspan="12">กลุ่ม: เทคโนโลยีสารสนเทศและการสื่อสาร
                                    @php
                                    $all = 0;
                                    foreach ($sub1 as $sub) {
                                    $all += $sub->assets->count();
                                    }
                                    @endphp
                                    <span class="text-info">
                                        {{ $all }}
                                    </span>
                                    รายการ</th>
                            </tr>
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
                            @foreach ($sub1 as $sub)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td colspan="3"><a
                                            href="{{ route('assets.sub.selected', $sub->id) }}">{{ $sub->name }}</a></td>
                                    <td>
                                        {{ $sub->assets->count() }}
                                    </td>
                                    <td>{{ $sub->assets->where('asset_statuses_id', '1')->count() }}</td>
                                    <td>{{ $sub->assets->where('asset_statuses_id', '2')->count() }}</td>
                                    <td>{{ $sub->assets->where('asset_statuses_id', '3')->count() }}</td>
                                    <td>{{ $sub->assets->where('asset_statuses_id', '4')->count() }}</td>
                                    <td>{{ $sub->assets->where('asset_statuses_id', '5')->count() }}</td>
                                    <td>{{ $sub->assets->where('asset_statuses_id', '6')->count() }}</td>
                                    <td>{{ $sub->assets->where('asset_statuses_id', '7')->count() }}</td>
                                </tr>
                                @foreach ($sub->assetCategories as $cate)
                                    <tr>
                                        <td></td>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td><a href="{{ route('assets.selected', $cate->id) }}">{{ $cate->name }}</a></td>
                                        <td><img src="data:image/png;base64,{{ chunk_split(base64_encode($cate->image)) }}"
                                                width="50" height="50"></td>

                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->count() }}</td>
                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->where('asset_statuses_id', '1')->count() }}
                                        </td>
                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->where('asset_statuses_id', '2')->count() }}
                                        </td>
                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->where('asset_statuses_id', '3')->count() }}
                                        </td>
                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->where('asset_statuses_id', '4')->count() }}
                                        </td>
                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->where('asset_statuses_id', '5')->count() }}
                                        </td>
                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->where('asset_statuses_id', '6')->count() }}
                                        </td>
                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->where('asset_statuses_id', '7')->count() }}
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach

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

                    <table id="searchTextResults1" data-filter="#filter" data-page-size="25" data-sorting="false"
                        class="footable table table-custom table-hover">
                        <thead>
                            <tr>
                                <th colspan="12">กลุ่ม: เทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร
                                    @php
                                    $all = 0;
                                    foreach ($sub2 as $sub) {
                                    $all += $sub->assets->count();
                                    }
                                    @endphp
                                    <span class="text-info">
                                        {{ $all }}
                                    </span>
                                    รายการ</th>
                            </tr>
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
                            @foreach ($sub2 as $sub)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td colspan="3"><a
                                            href="{{ route('assets.sub.selected', $sub->id) }}">{{ $sub->name }}</a></td>
                                    <td>
                                        {{ $sub->assets->count() }}
                                    </td>
                                    <td>{{ $sub->assets->where('asset_statuses_id', '1')->count() }}</td>
                                    <td>{{ $sub->assets->where('asset_statuses_id', '2')->count() }}</td>
                                    <td>{{ $sub->assets->where('asset_statuses_id', '3')->count() }}</td>
                                    <td>{{ $sub->assets->where('asset_statuses_id', '4')->count() }}</td>
                                    <td>{{ $sub->assets->where('asset_statuses_id', '5')->count() }}</td>
                                    <td>{{ $sub->assets->where('asset_statuses_id', '6')->count() }}</td>
                                    <td>{{ $sub->assets->where('asset_statuses_id', '7')->count() }}</td>
                                </tr>
                                @foreach ($sub->assetCategories as $cate)
                                    <tr>
                                        <td></td>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td><a href="{{ route('assets.selected', $cate->id) }}">{{ $cate->name }}</a></td>
                                        <td><img src="data:image/png;base64,{{ chunk_split(base64_encode($cate->image)) }}"
                                                width="50" height="50"></td>

                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->count() }}</td>
                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->where('asset_statuses_id', '1')->count() }}
                                        </td>
                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->where('asset_statuses_id', '2')->count() }}
                                        </td>
                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->where('asset_statuses_id', '3')->count() }}
                                        </td>
                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->where('asset_statuses_id', '4')->count() }}
                                        </td>
                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->where('asset_statuses_id', '5')->count() }}
                                        </td>
                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->where('asset_statuses_id', '6')->count() }}
                                        </td>
                                        <td>{{ $sub->assets->where('asset_categories_id', $cate->id)->where('asset_statuses_id', '7')->count() }}
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach

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
