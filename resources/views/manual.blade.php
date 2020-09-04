@extends('layouts.admin')
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection
@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0"> รายละเอียดอุปกรณ์</h3>
                <small class="text-muted">&nbsp;</small>
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
                        class="footable table table-custom table-hover">
                        <thead>
                            <tr>
                                <th colspan="12">กลุ่ม: เทคโนโลยีสารสนเทศและการสื่อสาร
                                   
                                    <span class="text-info">
                                        {{ $subgroup->where('main_groups_id', 1)->count() }}
                                    </span>
                                    รายการ</th>
                            </tr>
                            <tr>
                                <th width="100">ลำดับ</th>
                                <th width="500" style="padding-left: 100px;">กลุ่มหลัก</th>
                                <th width="400" style="text-align:center;">รูปภาพ</th>
                                <th width="400" style="text-align:center;">ศึกษาการใช้อุปกรณ์เครื่องมือ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $subgroup->where('main_groups_id', 1) as $sub )
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td colspan="4" style="padding-left: 100px">  {{ $sub->name }}</td>
                                </tr>
                                @foreach( $sub->assetCategories as $cate )
                                    <tr>
                                        <td colspan=""></td>                                        
                                        <td colspan="" style="padding-left: 100px;">{{ $loop->index + 1 }}. {{ $cate->name }}</td>
                                        <td align="center" ><img src="data:image/png;base64,{{ base64_encode($cate->image) }}"
                                                width="50" height="50"></td>
                                        <td align="center"><a target="_blank" href="{{ asset('manual/1.คอมพิวเตอร์ตั้งโต๊ะ1.jpg') }}" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> <i class="fa fa-download"></i></a></td>
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
                                    
                                    <span class="text-info">
                                       {{ $subgroup->where('main_groups_id', 2)->count() }}
                                    </span>
                                    รายการ</th>
                            </tr>
                            <tr>
                                <th width="100">ลำดับ</th>
                                <th width="500" style="padding-left: 100px;">กลุ่มหลัก</th>
                                <th width="400" style="text-align:center;">รูปภาพ</th>
                                <th width="400" style="text-align:center;">ศึกษาการใช้อุปกรณ์เครื่องมือ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $subgroup->where('main_groups_id', 2) as $sub )
                                <tr>
                                    <td >{{ $loop->index + 1 }}</td>
                                    <td colspan="4" style="padding-left: 100px;">{{ $sub->name }}</td>
                                </tr>
                                @foreach( $sub->assetCategories as $cate )
                                    <tr>
                                        <td></td>                                        
                                        <td colspan="" style="padding-left: 100px;">{{ $loop->index + 1 }}. {{ $cate->name }}</td>
                                        <td align="center" ><img src="data:image/png;base64,{{ base64_encode($cate->image) }}"
                                                width="50" height="50"></td>
                                        <td align="center"><a href="" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> <i class="fa fa-download"></i></a></td>
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
