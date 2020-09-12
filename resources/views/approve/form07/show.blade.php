@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
    <style>
        .square{
            border: 1px solid #000; 
            overflow: auto; 
            width: 240px;
            height: 80px;
            text-align: center;
            font-size: 17px;
        }
        .fill-text-justify{
            text-align: justify;
            text-justify: distribute;
        }
        input{
            border: none;
            background-color: #FFF;
            padding: 0px;
            padding-top: 10px;
            width: 50px;
            text-align: center;
            font-size: 1.2rem;
        }
        input[type="text"]{
            
            width: auto;
            padding: 0px 10px;
            border-bottom: 2px dotted #4D585F;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type="number"]{
            border-bottom: 2px dotted #4D585F;
            -moz-appearance: textfield;
        }
        input[type="checkbox"],input[type="radio"]{
            width: auto;
        }
        input[type="file"]{
            background: #1a1a1a;
            border: 1px solid #FCF;
            color: #FCC:
        }
        input[type="checkbox"][disabled]{
            cursor: auto;
        }
    
    </style>
@endsection

@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="h3 m-0">
                    @if (Auth::user()
            ->roles()
            ->first()->name == 'Admin')3.
                    @endif
                    @if (Auth::user()
            ->roles()
            ->first()->name == 'Approve')1.
                    @endif
                    อนุมัติคำขอ
                </h3>
                <small class="text-muted">
                    @if (Auth::user()
            ->roles()
            ->first()->name == 'Admin')3.
                    @endif
                    @if (Auth::user()
            ->roles()
            ->first()->name == 'Approve')1.
                    @endif
                    1 เอกสารเข้า ทก07
                </small>
            </div>
            <div class="btn-group pull-right">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('root') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('approve') }}">
                            @if (Auth::user()
            ->roles()
            ->first()->name == 'Admin')3.
                            @endif
                            @if (Auth::user()
            ->roles()
            ->first()->name == 'Approve')1.
                            @endif อนุมัติคำขอ
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('form07.index') }}">
                            @if (Auth::user()
            ->roles()
            ->first()->name == 'Admin')3.
                            @endif
                            @if (Auth::user()
            ->roles()
            ->first()->name == 'Approve')1.
                            @endif 1 เอกสารเข้า ทก07
                        </a>
                    </li>
                    <li class="active">
                        @if (Auth::user()
            ->roles()
            ->first()->name == 'Admin')3.1.
                        @endif
                        @if (Auth::user()
            ->roles()
            ->first()->name == 'Approve')1.1.
                        @endif
                        1 รายละเอียดเอกสารเข้า ทก07
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="boxs">
            <div class="boxs-body" style="width: auto; margin: auto; padding: 15px 80px; height: 75vh;">
                    <div class="row">
                        <div class="col-sm-offset-6 col-sm-6">
                            <div class="square pull-right">
                                <div> ทก.๐๗ </div>
                                <div> สำหรับคณะอนุกรรมการฯ </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="text-center">
                            แบบรายงานการขอยืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสาร<br>   
                        หรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร ตามกฎกระทรวงฯ <br><br>
                        ครั้งที่ <input type="text" name="round" value="{{ $form07->round }}" readonly style="width:5%;" readonly> ประจำปีงบประมาณ <input type="text" name="year" value="{{ $form07->year }}" style="width:10%;" readonly><br>
                        หน่วยงานที่รับคำขอฯ <input type="text" name="office" style="width:15%;" value="{{ $form07->office }}" readonly> จังหวัด <input type="text" name="city" style="width:12%;" value="{{ $form07->city }}" readonly>
                        </div>
                    </div>
    
                    <div class="row">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="vertical-align: middle; text-align: center;">ที่</th>
                                    <th style="vertical-align: middle; text-align: center;" >ชื่อ – สกุล คนพิการ</th>
                                    <th style="vertical-align: middle; text-align: center;" rowspan="2">ที่อยู่</th>
                                    <th style="vertical-align: middle; text-align: center;" rowspan="2">ประเภทความพิการ</th>
                                    <th style="vertical-align: middle; text-align: center;" rowspan="2">อายุ</th>
                                    <th style="vertical-align: middle; text-align: center;" rowspan="2">รายการอุปกรณ์/เครื่องมือฯ ที่ขอยืม</th>
                                    <th style="vertical-align: middle; text-align: center;" rowspan="2">ราคา/หน่วย</th>
                                    <th style="vertical-align: middle; text-align: center;" colspan="2">การขอใช้สิทธิ</th>
                                    <th style="vertical-align: middle; text-align: center;" rowspan="2">หมายเหตุ</th>
                                </tr>
                                <tr>
                                    <th style="text-align: center;">หมายเลขบัตรประชาชน</th>
                                    <th style="text-align: center;">รายบุคคล</th>
                                    <th style="text-align: center;">รายกลุ่ม</th>
                                </tr>
                                
                                
                            </thead>
                            <tbody>
                                @foreach ($form01s as $form)
                                <tr align="center">
                                    <td rowspan="2" style="vertical-align: middle;"> {{ $loop->iteration }} </td>
                                    <td> {{ $form->user->fullname }} </td>
                                    <td rowspan="2" style="vertical-align: middle;"> 
                                        {{ $form->address->house_no ?? '' }} {{ $form->address->village_no ?? '' }}
                                        {{ $form->address->lane ?? '' }} {{ $form->address->sub_district ?? '' }}
                                        {{ $form->address->district ?? '' }} {{ $form->address->province ?? '' }}
                                        {{ $form->address->postal_code ?? '' }}
                                    </td>
                                    <td rowspan="2" style="vertical-align: middle;">{{ $form->user->disabilityType->description }}</td>
                                    <td rowspan="2" style="vertical-align: middle;"> 
                                        {{ $form->user->age }}
                                    </td>
                                    <td rowspan="2" style="vertical-align: middle;"> 
                                        {{ $form->accessorie_no }}
                                    </td>
                                    <td rowspan="2" style="vertical-align: middle;"> {{  number_format($form->asset->price) }} </td>
                                    <td rowspan="2" style="vertical-align: middle;"> {{-- @if($audit->table == 'App\Form01') --}} <i class="fa fa-check"></i>  {{-- @endif --}}</td>
                                    <td rowspan="2" style="vertical-align: middle;">{{-- @if($audit->table == 'App\Form03') <i class="fa fa-check"></i>  @endif  --}}</td>
                                    <td rowspan="2" style="vertical-align: middle;">  </td>
                                </tr>
                                <tr>
                                    <td align="center"> {{ flexNformat($form->user->citizen_id, ".-....-.....-..-.", "-") }} </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
    
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
