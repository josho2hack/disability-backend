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
                            <h1 class="font-thin h3 m-0">แก้ไขข้อมูลโปรไฟล์</h1>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <section class="boxs">
                            <div class="boxs-header">
                                <h3 class="custom-font hb-cyan">
                                    <strong>ข้อมูลโปรไฟล์ส่วนตัว </strong></h3>
                            </div>
                            <div class="boxs-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="boxs-body">
                                            <form class="form-horizontal" action="{{ url('profile/edit') }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">คำนำหน้าชื่อ</label>
                                                    <div class="col-sm-10">
                                                        <select id="title" name="title" class="chosen-select"
                                                            style="width: 100%;">
                                                            <option value="นาย" selected>นาย
                                                            </option>
                                                            <option value="นางสาว">นางสาว</option>
                                                            <option value="นาง">นาง</option>
                                                            <option value="ดช.">ดช.</option>
                                                            <option value="ดญ.">ดญ.</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">ชื่อ</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{ $user->first_name }}" name="first_name" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">นามสกุล</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{ $user->last_name }}"  name="last_name" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">วันเกิด</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" value="{{ $user->birthday }}"  name="birthday" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">เพศ</label>
                                                    <div class="col-sm-10">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="gender" value="1"
                                                            @if($user->gender == 1) checked @endif> ชาย
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="gender" value="2"
                                                            @if($user->gender == 2) checked @endif> หญิง
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">เลขบัตรประชาชน</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{ $user->citizen_id }}" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">เลขผู้พิการ</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{ $user->pwd_id }}" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">ประเภทผู้พิการ</label>
                                                    <div class="col-sm-10">
                                                        <select name="disability_type_id">
                                                            @foreach( $disability as $disabilities )
                                                            <option value="{{ $disabilities->id }}">{{ $disabilities->description }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-raised btn-primary">ยืนยัน
                                                        </button>
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
@endsection
