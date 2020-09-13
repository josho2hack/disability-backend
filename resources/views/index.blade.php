@extends('layouts.main-login')
@section('content')
    <div class="row clearfix" style="margin-top: 40px; margin-bottom: 40px;">
        <!-- bradcome -->
        <div class="b-b mb-10">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h2 class="h3 m-0">เมนูสำหรับเข้าสู่ระบบ</h2>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{ url('user-login') }}" style="text-decoration: none;">
                    <div class="boxs project_widget">
                        <div class="pw_img" style="height: 160px;">
                            <img class="img-responsive" src="{{ asset('assets/images/user_login.png') }}"
                                alt="เมนูเข้าสู่ระบบสำหรับผู้ใช้">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header text-center">
                                <h6>ระบบจัดการสำหรับคนพิการ</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{ url('audit-login') }}" style="text-decoration: none;">
                    <div class="boxs project_widget">
                        <div class="pw_img" style="height: 160px;">
                            <img height="150" class="img-responsive" src="{{ asset('assets/images/aditor_login.jpg') }}"
                                alt="เมนูเข้าสู่ระบบสำหรับผู้ตรวจสอบ">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header text-center">
                                <h6>ระบบจัดการสำหรับผู้ตรวจสอบ</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{ url('approve-login') }}" style="text-decoration: none;">
                    <div class="boxs project_widget">
                        <div class="pw_img" style="height: 160px;">
                            <img height="150" class="img-responsive" src="{{ asset('assets/images/aprrover_login.jpg') }}"
                                alt="เมนูเข้าสู่ระบบสำหรับผู้อนุมัติ">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header text-center">
                                <h6>ระบบจัดการสำหรับผู้อนุมัติ</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{ url('admin-login') }}" style="text-decoration: none;">
                    <div class="boxs project_widget">
                        <div class="pw_img" style="height: 160px;">
                            <img class="img-responsive" src="{{ asset('assets/images/administrator_login.png') }}"
                                alt="เมนูเข้าสู่ระบบสำหรับผู้ดูแลระบบ">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header text-center">
                                <h6>ระบบจัดการสำหรับผู้ดูแล</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- bradcome -->
        <div class="b-b mb-10">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h2 class="h3 m-0">ข่าวสารประชาสัมพันธ์</h2>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            @foreach ($news as $item)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="shownews/{{ $item['id'] }}" style="text-decoration: none;">
                        <div class="boxs project_widget">
                            <div class="pw_img" style="height: 250px;">
                                <img class="img-responsive" src="{{ asset('uploads/news/' . $item['cover_name']) }}"
                                    alt="{{ $item['title'] }}">
                            </div>
                            <div class="pw_content">
                                <div class="pw_header">
                                    <h6>{{ $item['title'] }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>


        <!-- bradcome -->
        <div class="b-b mb-10">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h2 class="h3 m-0">อุปกรณ์และเครื่องมือด้าน ICT สำหรับคนพิการ</h2>
                    <small class="text-muted">รายการอุปกรณ์</small>
                </div>
            </div>
        </div>
        <!-- cards row -->
        <div class="row clearfix">
            @foreach ($subgroup as $item)
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <section class="boxs boxs-simple text-center">
                        <div class="boxs-widget">
                            {{-- @if (in_array($loop->index,array(0,4,8,12,16)))
                                @if(empty($item->color))
                                    l-green
                                @else
                                    {{ $item->color }}
                                @endif
                            @elseif(in_array($loop->index,array(1,5,9,13,17)))
                            @if(empty($item->color))
                                    l-pink
                                @else
                                    {{ $item->color }}
                                @endif
                            @elseif(in_array($loop->index,array(2,6,10,14,18)))
                                @if(empty($item->color))
                                    l-khaki
                                @else
                                    {{ $item->color }}
                                @endif
                            @elseif(in_array($loop->index,array(3,7,11,15,19)))
                                @if(empty($item->color))
                                    l-blue
                                @else
                                    {{ $item->color }}
                                @endif
                            @endif p-30 -t">
                            <i class="fa {{ $item->icon ?? 'fa-desktop' }} fa-3x"></i> --}}
                            <img src="{{ url($item->img) }}" alt="รูปภาพ" style="height: 103px; width: 135px;">
                        </div>
                        <div class="boxs-body">
                            <h2 class="m-0">{{ $item->assets->where('asset_statuses_id', '1')->count() }}</h2>
                            <span class="text-muted">{{ $item->name }}</span>
                        </div>
                    </section>
                </div>
                @if ($loop->index == 5)
                @break
                @endif
            @endforeach
        </div>
        <!-- cards row -->
        <div class="row clearfix">
            @foreach ($subgroup as $item)
            @if(in_array($loop->index,array(0,1,2,3,4,5)))
                @continue
            @endif
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <section class="boxs boxs-simple text-center">
                        <div class="boxs-widget">
                            {{-- @if (in_array($loop->index,array(0,4,8,12,16)))
                                @if(empty($item->color))
                                    l-green
                                @else
                                    {{ $item->color }}
                                @endif
                            @elseif(in_array($loop->index,array(1,5,9,13,17)))
                            @if(empty($item->color))
                                    l-pink
                                @else
                                    {{ $item->color }}
                                @endif
                            @elseif(in_array($loop->index,array(2,6,10,14,18)))
                                @if(empty($item->color))
                                    l-khaki
                                @else
                                    {{ $item->color }}
                                @endif
                            @elseif(in_array($loop->index,array(3,7,11,15,19)))
                                @if(empty($item->color))
                                    l-blue
                                @else
                                    {{ $item->color }}
                                @endif
                            @endif p-30 -t">
                            <i class="fa {{ $item->icon ?? 'fa-desktop' }} fa-3x"></i> --}}
                            <img src="{{ url($item->img) }}" alt="รูปภาพ" style="height: 103px; width: 135px;">
                        </div>
                        <div class="boxs-body">
                            <h2 class="m-0">{{ $item->assets->where('asset_statuses_id', '1')->count() }}</h2>
                            <span class="text-muted">{{ $item->name }}</span>
                        </div>
                    </section>
                </div>
                @if ($loop->index == 11)
                @break
                @endif
            @endforeach
        </div>

         <!-- cards row -->
         <div class="row clearfix">
            @foreach ($subgroup as $item)
            @if(in_array($loop->index,array(0,1,2,3,4,5,6,7,8,9,10,11)))
                @continue
            @endif
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <section class="boxs boxs-simple text-center">
                        <div class="boxs-widget">
                            {{-- @if (in_array($loop->index,array(0,4,8,12,16)))
                                @if(empty($item->color))
                                    l-green
                                @else
                                    {{ $item->color }}
                                @endif
                            @elseif(in_array($loop->index,array(1,5,9,13,17)))
                            @if(empty($item->color))
                                    l-pink
                                @else
                                    {{ $item->color }}
                                @endif
                            @elseif(in_array($loop->index,array(2,6,10,14,18)))
                                @if(empty($item->color))
                                    l-khaki
                                @else
                                    {{ $item->color }}
                                @endif
                            @elseif(in_array($loop->index,array(3,7,11,15,19)))
                                @if(empty($item->color))
                                    l-blue
                                @else
                                    {{ $item->color }}
                                @endif
                            @endif p-30 -t">
                            <i class="fa {{ $item->icon ?? 'fa-desktop' }} fa-3x"></i> --}}
                            <img src="{{ url($item->img) }}" alt="รูปภาพ" style="height: 103px; width: 135px;">
                        </div>
                        <div class="boxs-body">
                            <h2 class="m-0">{{ $item->assets->where('asset_statuses_id', '1')->count() }}</h2>
                            <span class="text-muted">{{ $item->name }}</span>
                        </div>
                    </section>
                </div>
                @if ($loop->index == 17)
                @break
                @endif
            @endforeach
        </div>
    </div>
@endsection
