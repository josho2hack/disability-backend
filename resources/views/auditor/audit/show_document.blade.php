@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0"> เอกสารที่แนบมา</h3>
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
                <form action="{{ route('audits.create') }}" >
                <div class="boxs-widget">
                    <div class="form-group">
                        <div class="btn-group pull-right" style="display: none;">
                            <button type="submit" class="btn btn-success btn-raised">สร้าง ทก.07</button>
                        </div>
                    </div>
                </div>

                <div class="boxs-body">

                    @if(session()->has('message'))
                        <div class="alert alert-danger">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <table id="searchTextResults" data-filter="#filter" data-page-size="25"
                        class=" table table-custom table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center;">ลำดับ</th>
                                <th style="text-align: center;">รายการ</th>
                                <th style="text-align: center;">จำนวน</th>
                                <th style="text-align: center;">ดาวน์โหลด</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td align="center">1</td>
                                    <td>
                                        สำเนาบัตรประจำตัวคนพิการ พร้อมรับรองสำเนาถูกต้อง
                                    </td>
                                    <td align="center"> 
                                        1 ฉบับ
                                    </td>
                                    <td align="center"> 
                                        <a download href="{{ asset($doc->copy_card) }}" title="ดาวน์โหลด" class="btn btn-raised btn-info"> 
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">2</td>
                                    <td>
                                        สำเนาทะเบียนบ้านของคนพิการ พร้อมรับรองสำเนาถูกต้อง
                                    </td>
                                    <td align="center"> 
                                        1 ฉบับ
                                    </td>
                                    <td align="center"> 

                                        <a download href="{{ asset($doc->house_res) }}" title="ดาวน์โหลด" class="btn btn-raised btn-info"> 
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">3</td>
                                    <td>
                                        สำเนาเอกสารรับรองการเข้ารับการฝึกอบรมตามหลักสูตรที่กระทรวงเทคโนโลยีสารสนเทศและการสื่อสารกำหนด พร้อมรับรองสำเนาถูกต้อง 
                                    </td>
                                    <td align="center"> 
                                        1 ฉบับ
                                    </td>
                                    <td align="center"> 
                                        <a download href="{{ asset($doc->copy_train) }}" title="ดาวน์โหลด" class="btn btn-raised btn-info"> 
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">4</td>
                                    <td>
                                        สำเนาบัตรประจำตัวประชาชนของผู้ยื่นคำขอแทน
                                    </td>
                                    <td align="center"> 
                                        1 ฉบับ
                                    </td>
                                    <td align="center"> 
                                        <a download href="{{ asset($doc->sub_copy_citizen_id) }}" title="ดาวน์โหลด" class="btn btn-raised btn-info"> 
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">5</td>
                                    <td>
                                        หนังสือมอบอำนาจจากคนพิการหรือหลักฐานที่แสดงว่ามีส่วนเกี่ยวข้องกับคนพิการเนื่องจากเป็นผู้ปกครอง ผู้พิทักษ์ ผู้อนุบาล หรือผู้ดูแลคนพิการ (กรณี ผู้ยื่นคำขอแทน)
                                    </td>
                                    <td align="center"> 
                                        1 ฉบับ
                                    </td>
                                    <td align="center"> 
                                        <a download href="{{ asset($doc->power_attorney) }}" title="ดาวน์โหลด" class="btn btn-raised btn-info"> 
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                    </form>
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
