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
                                            <form class="form-horizontal" @if( isset($_POST['maingroup']) && isset($_POST['subgroup']) ) action="practice/add" @else action="" @endif method="post">
                                                @csrf
                                                @if(isset($_POST['maingroup']))
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">ชื่อหลักสูตร</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{$_POST['name']}}" name="name">
                                                    </div>
                                                </div>
                                                @else
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">ชื่อหลักสูตร</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" placeholder="ชื่อหลักสูตร" name="name">
                                                    </div>
                                                </div>
                                                @endif
                                                <div class="form-group" @if(isset($_POST['maingroup'])) style="display: none;" @endif>
                                                    <label for="inputEmail3" class="col-sm-2 control-label">กลุ่มหลัก</label>
                                                    <div class="col-sm-10">
                                                        <select name="maingroup" id="" onchange="this.form.submit();">
                                                            <option value="" disabled selected> กลุ่มหลัก </option>
                                                            @foreach( $maingroup as $main )
                                                            <option value="{{ $main->id }}">{{ $main->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                @if(isset($_POST['maingroup']))
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">กลุ่มหลัก</label>
                                                    <div class="col-sm-10">
                                                        <select name="maingroup" id="" onchange="this.form.submit();">
                                                            @foreach( $maingroup as $main )
                                                            <option value="{{ $main->id }}" 
                                                            @if($main->id == $_POST['maingroup']) selected @else  @endif
                                                            >{{ $main->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group" @if(isset($_POST['subgroup'])) style="display: none;" @endif>
                                                    <label for="inputEmail3" class="col-sm-2 control-label">กลุ่มย่อย</label>
                                                    <div class="col-sm-10">
                                                        <select name="subgroup" id="" onchange="this.form.submit();">
                                                            @foreach( $subgroup->where('main_groups_id', $_POST['maingroup']) as $sub )
                                                            <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">กลุ่มย่อย</label>
                                                    <div class="col-sm-10">
                                                        <select name="subgroup" id="" onchange="this.form.submit();">
                                                            <option value="" selected disabled>กลุ่มย่อย</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                @endif
                                                
                                                @if(isset($_POST['subgroup']))
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">กลุ่มย่อย</label>
                                                    <div class="col-sm-10">
                                                        <select name="subgroup" id="" onchange="this.form.submit();">
                                                            @foreach( $subgroup->where('main_groups_id', $_POST['maingroup']) as $sub )
                                                            <option value="{{ $sub->id }}"
                                                                @if( $sub->id == $_POST['subgroup'] )
                                                                selected
                                                                @endif 
                                                                >{{ $sub->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">ชื่ออุปกรณ์</label>
                                                    <div class="col-sm-10">
                                                        <select name="subgroup" id="" onchange="this.form.submit();">
                                                            @foreach( $assetcategory->where('sub_groups_id', $_POST['subgroup']) as $asset )
                                                            <option value="{{ $asset->id }}">{{ $asset->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">ชื่ออุปกรณ์</label>
                                                    <div class="col-sm-10">
                                                        <select name="asset" id="" onchange="this.form.submit();">
                                                            <option value="" selected disabled>ชื่ออุปกรณ์</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                @endif
                                                
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
        $("#AttorneyEmpresa").change(function(){
            console.log($('#AttorneyEmpresa option:selected').val());
        })
    });
    </script>
@endsection
