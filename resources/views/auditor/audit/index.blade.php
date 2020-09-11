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
                        class=" table table-custom table-hover" border="1">
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
                            @foreach( $audit as $list )
                                <tr>
                                    <td style="vertical-align: middle;" rowspan="2" align="center">
                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="check" name="check[]" value="{{ $list->borrow_single->id }}">
                                        </label>
                                    </div>
                                    </td>
                                    <td style="vertical-align: middle;" rowspan="2"align="center">{{ $loop->iteration }}</td>
                                    <td style="vertical-align: middle;" rowspan="2"align="center">{{ $list->borrow_single->id }}</td>
                                    <td style="vertical-align: middle;" align="center"> 
                                        {{ $list->borrow_single->user->first_name }} {{ $list->borrow_single->user->last_name }}
                                    </td>
                                    <td style="vertical-align: middle;" rowspan="2"align="center"> 
                                        @if(strlen($list->borrow_single->accessorie_list)>55)
                                        {{ $list->borrow_single->accessorie_list = substr($list->borrow_single->accessorie_list, 0, 55)."..." }}
                                        @else
                                        {{ $list->borrow_single->accessorie_list }} 
                                        @endif


                                    </td>
                                    <td style="vertical-align: middle;" rowspan="2"align="center"> 1 หน่วย </td>
                                    <td style="vertical-align: middle;" rowspan="2"align="center"> {{ formatDateThai($list->created_at->isoFormat('Y-M-D H:mm')) }} </td>
                                    <td style="vertical-align: middle;" rowspan="2"align="center"><a href="" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td align="center"> {{ flexNformat($list->borrow_single->user->citizen_id, ".-....-.....-..-.", "-") }} </td>
                                </tr>
                            @endforeach
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

        $(document).ready(function(){
            $('.check').click(function(){
                $('.btn-group').show();
            });
        });
    </script>


@endsection
