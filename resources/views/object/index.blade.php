@extends('layouts.admin')
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection
@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0">รายการครุภัณฑ์ว่าง</h3>
                <small class="text-muted">&nbsp;</small>
            </div>
        </div>
    </div>
    <!-- cards row -->
    <div class="row clearfix stats">
        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="boxs padder-v">
                <div class="h2 text-info">
                    {{ $data['sum'] }}
                </div>
                <span class="text-muted">ทั้งหมด</span>
            </div>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font">
                        <strong>อุปกรณ์และเครื่องมือ</strong>
                    </h3>
                </div>

                <div class="boxs-body">
                    <table id="searchTextResults" data-filter="#filter" data-page-size="25" data-sorting="false"
                        class="table table-custom table-hover">
                        <thead>
                            <tr>
                                <th colspan="12">กลุ่ม: เทคโนโลยีสารสนเทศและการสื่อสาร
                                   
                                    <span class="text-info">
                                        @if(empty($data['total']['1'])) 0 @else {{ array_sum($data['total']['1']) }} @endif
                                    </span>
                                    รายการ</th>
                            </tr>
                            <tr>
                                <th width="100">ลำดับ</th>
                                <th width="500" style="padding-left: 100px;">กลุ่มหลัก</th>
                                <th width="400" style="text-align:center;">รูปภาพ</th>
                                <th width="100" style="text-align:right;">คงคลัง</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($data['1']))
                            @foreach($data['1'] as $main => $total)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td colspan="2" style="padding-left: 100px"> {{ $main }}</td>
                                    <td align="right">{{ array_sum($total) }}</td>
                                    <td></td>
                                </tr>
                                @foreach($total as $sub => $ac)
                                    <tr>
                                        <td colspan=""></td>                                        
                                        <td colspan="1" style="padding-left: 100px;">{{ $loop->index + 1 }}. {{ $sub }}</td>
                                        <td align="center" ><img src="data:image/png;base64,{{ base64_encode($data['image'][1][$sub]) }}"
                                                width="50" height="50"></td>
                                        <td align="right">{{ $ac }}</td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                            @endforeach
                            @endif
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
                        class="table table-custom table-hover">
                        <thead>
                            <tr>
                                <th colspan="12">กลุ่ม: เทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร
                                    
                                    <span class="text-info">
                                        @if(empty($data['total']['2'])) 0 @else {{ array_sum($data['total']['2']) }} @endif
                                    </span>
                                    รายการ</th>
                            </tr>
                            <tr>
                                <th width="100">ลำดับ</th>
                                <th width="500" style="padding-left: 100px;">กลุ่มหลัก</th>
                                <th width="400" style="text-align:center;">รูปภาพ</th>
                                <th width="100" style="text-align:right;">คงคลัง</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($data['2']))
                            @foreach($data['2'] as $main => $total)
                                <tr>
                                    <td >{{ $loop->index + 1 }}</td>
                                    <td colspan="2" style="padding-left: 100px;">{{ $main }}</td>
                                    <td align="right">{{ array_sum($total) }}</td>
                                    <td></td>
                                </tr>
                                @foreach($total as $sub => $ac)
                                    <tr>
                                        <td></td>                                        
                                        <td colspan="1" style="padding-left: 100px;">{{ $loop->index + 1 }}. {{ $sub }}</td>
                                        <td align="center" ><img src="data:image/png;base64,{{ base64_encode($data['image'][2][$sub]) }}"
                                                width="50" height="50"></td>
                                        <td align="right">{{ $ac }}</td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                            @endforeach
                            @endif
                                

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
