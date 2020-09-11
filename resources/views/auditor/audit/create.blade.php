@extends('layouts.form')
@section('content')
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
    <!-- bradcome -->
    <div class="b-b mb-10">
        <h3 class="h3 m-0">6.1 แบบฟอร์มยืม</h3>
    </div>

    <div class="boxs">
        <div class="boxs-body" style="width: auto; margin: auto; padding: 15px 80px;">
            <form action="{{ route('audits.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-offset-6 col-sm-6">
                        <div class="square pull-right">
                            <div> ทก.๐๗ </div>
                            <div> สำหรับหน่วยงาน – ส่ง </div>
                            <div> คณะอนุกรรมการฯ </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        แบบรายงานการขอยืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสาร<br>   
                    หรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร ตามกฎกระทรวงฯ <br><br>
                    ครั้งที่ <input type="text" name="round" value="{{$round}}" readonly style="width:5%;"> ประจำปีงบประมาณ <input type="text" name="year" value="{{date('Y')+543}}" style="width:10%;"><br>
                    หน่วยงานที่รับคำขอฯ <input type="text" name="office" style="width:15%;" required> จังหวัด <input type="text" name="city" style="width:12%;" required>
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
                            @foreach( $audits as $audit)
                            <tr align="center">
                                <td rowspan="2" style="vertical-align: middle;"> {{ $loop->iteration }} </td>
                                <td> {{ $audit->user->first_name }} {{ $audit->user->last_name }} </td>
                                <td rowspan="2" style="vertical-align: middle;"> 
                                    {{ $audit->address->house_no }} หมู่ {{ $audit->address->village_no }}  
                                    ต.{{ $audit->address->sub_district }}อ.{{ $audit->address->district }} 
                                    จ.{{ $audit->address->province }}  {{ $audit->address->postal_code }}
                                </td>
                                <td rowspan="2" style="vertical-align: middle;"> {{ $audit->user->disability->description }} </td>
                                <td rowspan="2" style="vertical-align: middle;"> 
                                    {{ (date('Y')) - ((date('Y', strtotime($audit->user->birthday))))  }}
                                </td>
                                <td rowspan="2" style="vertical-align: middle;"> 
                                    @if(strlen($audit->accessorie_list)>55)
                                    {{ $audit->accessorie_list = substr($audit->accessorie_list, 0, 55)."..." }}
                                    @else
                                    {{ $audit->accessorie_list}}
                                    @endif
                                </td>
                                <td rowspan="2" style="vertical-align: middle;"> {{ number_format($audit->asset->price) }} </td>
                                <td rowspan="2" style="vertical-align: middle;"> {{-- @if($audit->table == 'App\Form01') --}} <i class="fa fa-check"></i>  {{-- @endif --}}</td>
                                <td rowspan="2" style="vertical-align: middle;">{{-- @if($audit->table == 'App\Form03') <i class="fa fa-check"></i>  @endif  --}}</td>
                                <td rowspan="2" style="vertical-align: middle;">  </td>
                            </tr>
                            <input type="hidden" name="form_id[]" value="{{$audit->id}}">
                            <tr>
                                <td align="center"> {{flexNformat($audit->user->citizen_id, ".-....-.....-..-.", "-") }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                

                    <div class="row">
                        <div class="col-sm-offset-5 col-sm-7">
                            <div class="form-group">
                            ลงชื่อ <input type="text" name="submitSign" style="width: 58%;"><br>
                                <span>( <input type="text" value="อริย์ธัช ทิพย์จักร์" name="submitSign" style="width: 70%;"> )</span>
                        </div>
                        </div>
                        <div class="col-sm-offset-5 col-sm-7">
                            <div class="form-group">
                            ตำแหน่ง <input type="text" name="submitSign" style="width: 58%;">หัวหน้าหน่วยงาน<br><br>
                                <span>ลงวันที่<input type="text" value="" style="width: 20%;">/<input type="text" value="" style="width: 20%;">/<input type="text" value="" style="width: 20%;">
                                </span>
                        </div>
                        </div>
                    </div>
                </div>


                <div class="text-right">
                    <button class="btn btn-raised btn-success">บันทึก ทก.07</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('footer')
@endsection
