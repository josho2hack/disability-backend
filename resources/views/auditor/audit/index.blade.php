@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0"> ตรวจสอบก่อนสร้าง ทก.07</h3>
            </div>
        </div>

    </div>
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font hb-cyan">
                        {{-- <strong>รายการแบบคำขอยืมอุปกรณ์และเครื่องมือ ฯ (ทก.01)</strong> --}}
                    </h3>
                </div>
                <div class="boxs-widget">
                    <div class="form-group">
                        <div class="btn-group pull-right">
                            <a href="" class="btn btn-success btn-raised">สร้าง ทก.07</a>
                        </div>
                    </div>
                </div>

                <div class="boxs-body">

                    @if(session()->has('message'))
                        <div class="alert alert-danger">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <table id="searchTextResults" data-filter="#filter" data-page-size="25"
                        class=" table table-custom table-bordered">
                        <thead>
                            <tr>
                                <th rowspan="2" style="text-align: center; vertical-align: middle; ">เลือก</th>
                                <th rowspan="2" style="text-align: center; vertical-align: middle; ">ลำดับ</th>
                                <th rowspan="2" style="text-align: center; vertical-align: middle; ">เลขที่สัญญา</th>
                                <th style="text-align: center; vertical-align: middle; ">ชื่อ - นามสกุล คนพิการ </th>
                                <th rowspan="2" style="text-align: center; vertical-align: middle; ">อุปกรณ์</th>
                                <th rowspan="2" style="text-align: center; vertical-align: middle; ">จำนวน</th>
                                <th rowspan="2" style="text-align: center; vertical-align: middle; ">วัน/เวลา ที่รับ</th>
                                <th rowspan="2" style="text-align: center; vertical-align: middle; "></th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">เลขบัตรประชาชน</th>
                            </tr>
                        </thead>
                        <tbody>

                                <tr>
                                    <td align="center">
                                        <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="optionsCheckboxes">
                                                        </label>
                                                    </div>
                                    </td>
                                    <td align="center">1</td>
                                    <td align="center">1</td>
                                    <td align="center">
                                        กฤตติกา ใจดี<hr>
                                        1234567891234
                                    </td>
                                    <td align="center"> คอมพิวเตอร์ </td>
                                    <td align="center"> 1 หน่วย </td>
                                    <td align="center"> 9-10-2563 08:30:00 </td>
                                    <td align="center"><a href="" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td align="center"><input type="checkbox"></td>
                                    <td align="center">2</td>
                                    <td align="center">2</td>
                                    <td align="center">
                                        ชัญญา พาสบาย<hr>
                                        1234567891234
                                    </td>
                                    <td align="center"> คอมพิวเตอร์ </td>
                                    <td align="center"> 1 หน่วย </td>
                                    <td align="center"> 9-10-2563 08:30:00 </td>
                                    <td align="center"><a href="" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td align="center"><input type="checkbox"></td>
                                    <td align="center">3</td>
                                    <td align="center">3</td>
                                    <td align="center">
                                        โชติกา รุ่งเรือง <hr>
                                        1234567891234
                                    </td>
                                    <td align="center"> คอมพิวเตอร์ </td>
                                    <td align="center"> 1 หน่วย </td>
                                    <td align="center"> 9-10-2563 08:30:00 </td>
                                    <td align="center"><a href="" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td align="center"><input type="checkbox"></td>
                                    <td align="center">4</td>
                                    <td align="center">4</td>
                                    <td align="center">
                                        นิรดา ยินดี <hr>
                                        1234567891234
                                    </td>
                                    <td align="center"> คอมพิวเตอร์ </td>
                                    <td align="center"> 1 หน่วย </td>
                                    <td align="center"> 9-10-2563 08:30:00 </td>
                                    <td align="center"><a href="" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td align="center"><input type="checkbox"></td>
                                    <td align="center">5</td>
                                    <td align="center">5</td>
                                    <td align="center">
                                        ปาลิดา รักษา <hr>
                                        1234567891234
                                    </td>
                                    <td align="center"> คอมพิวเตอร์ </td>
                                    <td align="center"> 1 หน่วย </td>
                                    <td align="center"> 9-10-2563 08:30:00 </td>
                                    <td align="center"><a href="" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td align="center"><input type="checkbox"></td>
                                    <td align="center">6</td>
                                    <td align="center">6</td>
                                    <td align="center">
                                        ธนัชญา พูนทรัพย์ <hr>
                                        1234567891234
                                    </td>
                                    <td align="center"> คอมพิวเตอร์ </td>
                                    <td align="center"> 1 หน่วย </td>
                                    <td align="center"> 9-10-2563 08:30:00 </td>
                                    <td align="center"><a href="" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td align="center"><input type="checkbox"></td>
                                    <td align="center">7</td>
                                    <td align="center">7</td>
                                    <td align="center">
                                        นทีนาถ ร่ำรวย <hr>
                                        1234567891234
                                    </td>
                                    <td align="center"> คอมพิวเตอร์ </td>
                                    <td align="center"> 1 หน่วย </td>
                                    <td align="center"> 9-10-2563 08:30:00 </td>
                                    <td align="center"><a href="" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a></td>
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
