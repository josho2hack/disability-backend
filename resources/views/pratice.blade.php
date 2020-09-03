@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
            <div class="page ui-lists-page">
                <!-- bradcome -->
                <div class="b-b mb-10">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="font-thin h3 m-0">ลงทะเบียนความต้องการฝึกอบรมการใช้อุปกรณ์/เครื่องมือ</h1>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <section class="boxs">
                            <div class="boxs-header">
                                <h3 class="custom-font hb-cyan">
                                    <strong>กรอกข้อมูลลงทะเบียน </strong></h3>
                            </div>
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="boxs-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="boxs-body">
                                            <form class="form-horizontal" action="practice/add" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">ชื่อหลักสูตร</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="" name="name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">กลุ่มหลัก</label>
                                                    <div class="col-sm-10">
                                                        <select name="maingroup" id="maingroup" >
                                                            <option value="" disabled selected> กลุ่มหลัก </option>
                                                            @foreach( $maingroup as $main )
                                                            <option value="{{ $main->id }}">{{ $main->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">กลุ่มย่อย</label>
                                                    <div class="col-sm-10">
                                                        <select name="subgroup" id="subgroup">
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">ชื่ออุปกรณ์</label>
                                                    <div class="col-sm-10">
                                                        <select name="asset" id="asset">
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <input type="hidden" value="{{ \Auth::user()->id }}" name="user_id">
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-raised btn-primary">ลงทะเบียน</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
@endsection

@section('footer')
    <script src="{{ asset('assets/js/vendor/footable/footable.all.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
            headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
        $("#maingroup").change(function(){
            var main_id = $("option:selected", this).val();

            if (main_id != "") {
                $.post("{{ url('practice/subgroup') }}", {main_id: main_id}, function (data) {
                    $("#subgroup").html(data);
                });
            }
        });

        $("#subgroup").change(function(){
            var sub_id = $("option:selected", this).val();

            if (sub_id != "") {
                $.post("{{ url('practice/category') }}", {sub_id: sub_id}, function (data) {
                    $("#asset").html(data);
                });
            }
        });
    });
    </script>
@endsection
