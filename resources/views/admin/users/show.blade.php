@extends('layouts.admin')

@section('header')

@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="col-sm-6 col-xs-12">
            <h3 class="h3 m-0">1.2 ระบบสมาชิก</h3>
            <small class="text-muted">1.2.1 สมาชิก</small>
        </div>
        <div class="btn-group pull-right">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('root') }}"><i class="fa fa-home"></i></a>
                </li>
                <li>
                    <a href="{{ route('admin') }}">1. บริหารจัดการระบบ</a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}">1.2 ระบบสมาชิก</a>
                </li>
                <li class="active">1.2.1 สมาชิก</li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header hb-blue">
                    <h3 class="custom-font">
                        รายละเอียดสมาชิก
                    </h3>
                </div>
                <div class="boxs-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Id:</strong>
                                {{ $user->id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>คำนำหน้าชื่อ:</strong>
                                {{ $user->title }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ชื่อ</strong>
                                {{ $user->first_name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>นามสกุล:</strong>
                                {{ $user->last_name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>เลขผู้พิการ:</strong>
                                {{ $user->pwd_id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>เลขประชาชน:</strong>
                                {{ $user->citizen_id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>อีเมล์:</strong>
                                {{ $user->email }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>เพศ:</strong>
                                @if ($user->gender == 1)
                                    ชาย
                                @else
                                    หญิง
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ประเภทคนพิการ:</strong>
                                {{ $user->disability->description ?? '' }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>สิทธิ์การใช้งาน:</strong>
                                {{ $user->role()->description }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>สถานะ:</strong>
                                @if ($user->active == 1)
                                    เปิดการใช้งาน
                                @else
                                    ปิดการใช้งาน
                                @endif
                            </div>
                        </div>

                        @if (!empty($user->avatar_name))
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    {{-- <img src="/subgroup/{{ $subgroup->id }}/avatar" />
                                    --}}
                                    {{-- <img src="data:image/png;base64,{{ chunk_split(base64_encode($user->cate->image)) }}"> --}}
                                    <img src="{{ url($user->avatar) }}" alt="รูปแทนผู้ใช้">
                                </div>
                            </div>
                        @endif

                        @if (!empty($user->pwd_pic))
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    {{-- <img src="/users/{{ $user->id }}/pwd_pic" />
                                    --}}
                                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($user->pwd)) }}" alt="บัตรคนพิการ">
                                    {{-- <img src="{{ url($user->pwd) }}" alt="บัตรคนพิการ"> --}}
                                </div>
                            </div>
                        @endif
                    </div>

                    <a class="btn btn-raised btn-default" href="{{ route('users.index') }}">กลับ</a>

                </div>
                <div class="boxs-footer text-right bg-tr-black lter dvd dvd-to">

                </div>
            </section>
        </div>
    </div>
@endsection

@section('footer')

@endsection
