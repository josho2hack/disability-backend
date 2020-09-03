@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0"> ลงทะเบียนความต้องการฝึกอบรมการใช้อุปกรณ์/เครื่องมือ</h3>
            </div>
        </div>

    </div>
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font hb-cyan">
                        <strong>รายการฝึกอบรม</strong>
                    </h3>
                </div>
                <div class="boxs-widget">
                    <div class="form-group">
                        <div class="btn-group pull-right">
                            <a href="{{ url('practice') }}" class="btn btn-success btn-raised">ลงทะเบียนความต้องการฝึกอบรม</a>
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
                        class="footable table table-custom table-hover">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อหลักสูตร</th>
                                <th>ดำเนินการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($practice as $pra)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $pra->name }}</td>
                                    <td>
                                        <a href="{{ url('practice/'.$pra->id) }}" class="btn btn-raised btn-info"
                                            title="รายละเอียด"> <i class="fa fa-eye"></i></a>
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
