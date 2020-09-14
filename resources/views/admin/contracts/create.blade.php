@extends('layouts.form')
@section('content')
<style>
    body{
        font-size: 17px;
    }
    .square{
        /* border: 1px solid #000;  */
        margin-top: 50px;
        overflow: auto; 
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
        font-size: 17px;
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
        <h3 class="h3 m-0">3.3 สร้างสัญญา</h3>
    </div>

    <div class="boxs">
        <div class="boxs-body" style="width: 1000px; margin: auto;">
            <form action="{{ route('contracts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="contracts" value="1">
                <div class="row">
                    <div class="col-sm-offset-6 col-sm-6">
                        <div class="square pull-right">
                            สัญญาเลขที่ <input type="number" value="00001">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="text-center">
                    <strong>
                        สัญญายืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสาร <br>
                    หรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร
                    </strong>    
                    <p>
                        (แนบท้ายระเบียบสำนักงานปลัดเทคโนโลยีสารสนเทศและการสื่อสาร <br>
                    ว่าด้วยการทำสัญญายืมและการทำสัญญาค้ำประกันในการให้ยืมเทคโนโลยีสารสนเทศและการสื่อสาร <br>
                    หรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสารแก่คนพิการ พ.ศ. ๒๕๕๖)
                    </p>
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-1 text-right" style="padding-top: 5px;"></div>
                        <div class="col-sm-11" style="padding-top: 5px;">
                            สัญญานี้ทำขึ้น ณ <input type="text" name="doc_office"> แขวง <input type="text" name="doc_sub_district"> 
                            เขต <input type="text" name="doc_district">
                        </div>  
                        <div class="col-sm-12" style="padding-top: 5px;">
                        จังหวัด <input type="text" class="province" name="doc_province"> 
                        เมื่อวันที่ .....{{ date('d') }}.....
                        เดือน .....{{ date('m') }}.....
                        พ.ศ. .....{{ date('Y')+543 }}..... ระหว่าง สำนักงาน
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            ปลัดกระทรวงเทคโนโลยีสารสนเทศและการสื่อสาร โดย (ระบุชื่อ-สกุล) 
                            <input type="text" name="PS_name" class="permanent_secretary" style="width: 49%;">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            ตำแหน่ง (ระบุตำแหน่งและคำสั่งมอบอำนาจ) <input type="text" name="position" class="rank" style="width: 67%;">
                        </div>

                        @if( $form->first()->type_status == 1 )
                        <div class="col-sm-1" style="padding-top: 5px;"></div>
                        <div class="col-sm-11" style="padding-top: 5px;">
                        {{ $form->first()->user->title }} <input type="text" name="name" class="name" value="{{ $form->first()->user->first_name }}" style="width: 96%;">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            วัน เดือน ปีเกิด <input type="text" name="birthday" class="birthday" style="width: 35%;"
                            value="{{ DateThai($form->first()->user->birthday) }}"> 
                            เลขประจำตัวประชาชน <input type="text" name="citizen_id" style="width: 37%;"
                            value="{{ flexNformat($form->first()->user->citizen_id, "/-1234-+++++-55-1", "-") }}">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            บ้านเลขที่ <input type="text" id="addressNo" name="addressNo" style="width: 12%;"
                            value="{{ $form->first()->address->house_no }}"> 
                            หมู่ที่ <input type="text" id="subDistricNo" name="subDistricNo" style="width: 12%;"
                            value="{{ $form->first()->address->village_no }}"> 
                            ตำบล <input type="text" id="subDistrict" name="subDistrict" style="width: 26%;"
                            value="{{ $form->first()->address->sub_district }}"> 
                            อำเภอ <input type="text" id="district" name="district" style="width: 27%;"
                            value="{{ $form->first()->address->district }}"> 
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            จังหวัด <input type="text" id="province" name="province" style="width: 30%;"
                            value="{{ $form->first()->address->province }}"> 
                            รหัสไปรษณีย์ <input type="text" id="postcode" name="postcode" style="width: 18%;"
                            value="{{ $form->first()->address->postal_code }}">
                            โทรศัพท์ <input type="text" name="disabilityPhoneNumber" style="width: 28%;"
                            value="{{ $form->first()->address->tel }}">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            กำลังศึกษาระดับ <input type="text" name="disabilityColledge" style="width: 25%;"
                            value="ป.ตรี"> 
                            สถานศึกษา <input type="text" name="disabilityPhoneNumber" style="width: 52%;"
                            value="{{ $form->first()->address->edu_place }}">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            อำเภอ <input type="text" value="" name="disabilityColledge" style="width: 35%;"> 
                            จังหวัด <input type="text" value="" name="disabilityPhoneNumber" style="width: 53%;">
                        </div>

                        @elseif ( $form->first()->type_status == 2 )
                        <div class="col-sm-1" style="padding-top: 5px;"></div>
                        <div class="col-sm-11" style="padding-top: 5px;">
                         {{ $form->first()->substitute->title }} 
                         <input type="text" name="name" value="
                            {{ $form->first()->substitute->first_name }}
                            {{ $form->first()->substitute->last_name }}
                         " class="name" style="width: 55%;" readonly>
                        เกี่ยวข้องเป็น <input type="text" style="width: 29%;" value="{{ $form->first()->substitute->related }}" readonly>
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            และได้รับมอบอำนาจจากผู้พิการรายละเอียดปรากฏตามหนังสือมอบอำนาจฉบับลง
                            วันที่ <input type="text" style="width: 8%;" readonly value="{{ date('d', strtotime($form->first()->substitute->proxy_date)) }}">
                            เดือน <input type="text" style="width: 12%;" readonly value="{{fullMonth(date('m', strtotime($form->first()->substitute->proxy_date)))}}">
                            ปี <input type="text" style="width: 11%;" readonly value="{{ date('Y', strtotime($form->first()->substitute->proxy_date))+543 }}">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            วัน เดือน ปีเกิด <input type="text" name="birthday" class="birthday" style="width: 31%;" readonly 
                            value="{{ DateThai($form->first()->substitute->brithday) }}"> 
                            เลขประจำตัวประชาชน <input type="text" name="citizen_id" style="width: 40%;" readonly 
                            value="{{ flexNformat($form->first()->substitute->citizen_id, "/-////-/////-//-/", "-") }}">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            บ้านเลขที่ <input type="text" id="addressNo" name="addressNo" style="width: 12%;" readonly 
                            value="{{ $form->first()->substitute->house_no }}"> 
                            หมู่ที่ <input type="text" id="subDistricNo" name="subDistricNo" style="width: 12%;" readonly 
                            value="{{ $form->first()->substitute->village_no }}"> 
                            ตำบล <input type="text" id="subDistrict" name="subDistrict" style="width: 26%;" readonly 
                            value="{{ $form->first()->substitute->sub_district }}"> 
                            อำเภอ <input type="text" id="district" name="district" style="width: 27%;" readonly 
                            value="{{ $form->first()->substitute->district }}"> 
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            จังหวัด <input type="text" id="province" name="province" style="width: 25%;" readonly
                            value="{{ $form->first()->substitute->province }}"> 
                            รหัสไปรษณีย์ <input type="text" id="postcode" name="postcode" style="width: 20%;" readonly
                            value="{{ $form->first()->substitute->postal_code }}">
                            โทรศัพท์ <input type="text" name="disabilityPhoneNumber" style="width: 31%;" readonly
                            value="{{ $form->first()->substitute->tel }}">
                        </div>
                        @endif

                        <div class="col-sm-12" style="padding-top: 5px;">
                            ซึ่งต่อไปนี้จะเรียกว่า “ผู้ขอยืม”
                        </div>
                        <div class="col-sm-1" style="padding-top: 5px;"></div>
                        <div class="col-sm-11" style="padding-top: 5px;">
                            ทั้งสองฝ่ายได้ตกลงกันมีข้อความ ดังต่อไปนี้
                        </div>

                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-1" style="padding-top: 20px;"></div>
                    <div class="col-sm-11" style="padding-top: 20px;">
                        ข้อ ๑ ผู้ให้ยืมตกลงให้ผู้ขอยืม ยืมอุปกรณ์และ/หรือเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสารหรือเทคโนโลยี
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        สิ่งอำนวยความสะดวกเพื่อการสื่อสาร ซึ่งต่อไปนี้จะเรียกว่า “สิ่งของที่ยืม” ดังรายการต่อไปนี้
                    </div>
                    <div class="col-sm-12" style="padding-top: 20px;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;"> ที่ </th>
                                    <th style="text-align: center;"> รายการสิ่งของที่ยืม </th>
                                    <th style="text-align: center;"> รหัส </th>
                                    <th style="text-align: center;"> จำนวน </th>
                                    <th style="text-align: center;"> ราคา (บาท) </th>
                                    <th style="text-align: center;"> หมายเหตุ </th>
                                </tr>                       
                            </thead>
                            <tbody>
                                @foreach( $form as $list )
                                <tr>
                                    <td align="center"> {{ $loop->iteration }} </td>
                                    <td> {{ $list->accessorie_list }} </td>
                                    <td align="right"> {{ $list->accessorie_no }} </td>
                                    <td align="right"> 1 หน่วย </td>
                                    <td align="right"> {{ number_format($list->asset->price, 2) }} </td>
                                    <td> {{ $list->asset->remark }} </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <input type="hidden" name="form01id" value="{{ $form->first()->id }}">
                                    <td colspan="3" align="center">รวม</td>
                                    <td align="right"> {{ $form->count() }} หน่วย </td>
                                    <td align="right"> {{ number_format($total, 2) }} </td>
                                    <td align="center"></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="col-sm-1" style="padding-top: 20px;"></div>
                    <div class="col-sm-11" style="padding-top: 20px;">
                        ทั้งนี้ ผู้ขอยืมได้รับสิ่งของที่ยืมจากผู้ให้ยืมในสภาพที่ดีสามารถใช้งานได้ไปครบถ้วนถูกต้องทุกรายการแล้วในวันลง
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        นามในสัญญานี้
                    </div>
                    <div class="col-sm-1" style="padding-top: 5px;"></div>
                    <div class="col-sm-11" style="padding-top: 5px;">
                        ข้อ ๒ ผู้ให้ยืมตกลงให้ยืมสิ่งของที่ยืมตามข้อ ๑ เป็นระยะเวลา 
                        <input type="text"> (<input type="text" style="width: 15%;">) ปี
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        นับตั้งแต่วันที่ 
                        <select name="start_day" >
                            <option selected> วันที่ </option>
                            @for ($i = 1; $i <= 31; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        เดือน 
                        <select name="start_month" >
                            <option selected> เดือน </option>
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        พ.ศ. 
                        <select name="start_year" >
                            <option selected> ปี </option>
                            @for ($i = 2560; $i <= 2600; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        ถึงวันที่ วันที่ 
                        <select name="stop_day" >
                            <option selected> วัน </option>
                            @for ($i = 1; $i <= 31; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        เดือน 
                        <select name="stop_month" >
                            <option selected> เดือน </option>
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        พ.ศ. 
                        <select name="stop_year" >
                            <option selected> ปี </option>
                            @for ($i = 2560; $i <= 2600; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-sm-1" style="padding-top: 5px;"></div>
                    <div class="col-sm-11" style="padding-top: 5px;">
                        ข้อ ๓ กรณีสิ่งของที่ยืม สูญหาย หรือบุบสลาย หรือชำรุดบกพร่องไม่ว่าจากเหตุสุดวิสัย หรือจากการกระทำ
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        ของบุคคลใดก็ตาม โดยเหตุที่เกิดจากผู้ขอยืม ซึ่งมิใช่เป็นการใช้งานตามปกติ ผู้ขอยืมต้องรับผิดชอบชดใช้สิ่งของที่ยืม  
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        และแก้ไขความชำรุดบกพร่องนั้น หรือชดใช้เป็นเงินตามราคาสิ่งของที่ยืมในราคาท้องตลาดโดยที่หักค่าเสื่อมราคาแล้ว
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        ภายใน ๓๐ (สามสิบ) วัน นับตั้งแต่ได้รับแจ้งหนังสือจากผู้ให้ยืม
                    </div>
                    <div class="col-sm-1" style="padding-top: 5px;"></div>
                    <div class="col-sm-11" style="padding-top: 5px;">
                        ข้อ ๔ ผู้ขอยืมจะใช้และควบคุมดูแลให้มีการใช้สิ่งของที่ยืมอย่างระมัดระวังมิให้เกิดการชำรุดเสียหาย  
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        และบำรุงรักษาทรัพย์สินให้อยู่ในสภาพพร้อมที่จะใช้งานได้ตลอดเวลาและผู้ขอยืมต้องปฏิบัติตามระเบียบที่เกี่ยวข้องของ
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        สำนักงานปลัดกระทรวงเทคโนโลยีสารสนเทศและการสื่อสาร โดยเคร่งครัด
                    </div>
                    <div class="col-sm-1" style="padding-top: 5px;"></div>
                    <div class="col-sm-11" style="padding-top: 5px;">
                            ข้อ ๕ ผู้ขอยืมยินยอมให้ผู้ให้ยืมหรือตัวแทนเข้าตรวจสอบสภาพของทรัพย์สินที่ยืมตลอดระยะเวลา ตามสัญญานี
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        โดยผู้ขอยืมจะอำนวยความสะดวกแกผู้ให้ยืมหรือตัวแทน หากผู้ให้ยืมหรือผู้แทนตรวจสอบพบว่าหรือมีเหตุอันควรเชื่อว่า
                    </div>
                    <div class="col-sm-offset-2 col-sm-10" style="padding-top: 5px;">
                        ๑.  ผู้ขอยืมมิได้นำไปใช้ให้เกิดประโยชน์
                    </div>
                    <div class="col-sm-offset-2 col-sm-10" style="padding-top: 5px;">
                        ๒.  ผู้ขอยมจะหน่าย ปล่อยปละละเลย หรือนำไปใช้ผิดวัตถุประสงค์ ซึ่งทำให้สิ่งที่ยืมนั้นเสียหายหรืออาจจะ
                    </div>
                    <div class="col-sm-12">
                        เสียหายในส่วนหนึ่งส่วนใดทั้งหมด
                    </div>
                    <div class="col-sm-offset-2 col-sm-10" style="padding-top: 5px;">
                        ๓.    ผู้ขอยืมจะนำไปแสวงหาผลประโยชน์เพื่อตนเองหรือบุคคลอื่นโดยทุจริต
                    </div>
                    <div class="col-sm-offset-1 col-sm-11" style="padding-top: 5px;">
                        ผู้ให้ยืมอาจบอกเลิกสัญญานี้ก่อนครบกำหนดระยะเวลาตามข้อ ๒ ได้ ทั้งนี้ ผู้ให้ยืมจะบอกเหตุแห่งการบอกเลิก
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        สัญญาเป็นหนังสือต่อผู้ขอยืมไม่น้อยกว่า ๓๐ (สามสิบ) วัน ก่อนถึงวันที่จะให้ส่งมอบสิ่งของที่ยืมคืน
                    </div>
    
                </div>


                <div class="row">
                    <div class="col-sm-offset-1 col-sm-11" style="padding-top: 5px;">
                        ข้อ ๖ เมื่อครบกำหนดเวลายืมตามข้อ ๒ แล้ว ผู้ขอยืมจะต้องส่งคืนสิ่งของที่ยืมให้แก่ผู้ให้ยืมภายใน กำหนด <input type="date" name="return_date" style="width: 15%;"> 
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        (<input type="text" style="width: 10%;">) วัน นับแต่วันครบกำหนด โดยผู้ขอยืมจะต้องส่งคืนสิ่งของที่ยืมให้ครบถ้วนทุกรายการและสิ่งของที่ยืม        
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        ดังกล่าวจะต้องอยู่ในสภาพดี หรือมิได้ชำรุดเสียหายอันมิใช่เกิดจากการใช้งานตามปกติหากผู้ขอยืมส่งคืนสิ่งของที่ยืม
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        ในสภาพชำรุดเสียหายที่เกิดจากการใช้งานที่ผิดปกติ หรือผิดวิธี ผู้ให้ยืมมีสิทธิเรียกให้ผู้ขอยืมซ่อมแซมทรัพย์สินให้มีสภาพดี
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        ดังเดิม ซึ่งผู้ขอยืมจะต้องดำเนินการให้แล้วเสร็จภายใน <input type="text" name="estimate_day" style="width: 10%;"> 
                        (<input type="text" style="width: 10%;">) วัน หรือผู้ให้ยืมจะดำเนินการซ่อมแซม          
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        สิ่งของที่ยืมที่เสียหายแล้วเรียกให้ผู้ขอยืมชดใช้เงินค่าซ่อมที่เสียไป พร้อมด้วยค่าเสียหายอื่นๆ ได้ หากผู้ขอยืมส่งคืนสิ่งของ   
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        ที่ยืมล่วงเลยระยะเวลาที่กำหนดไว้ในสัญญาข้อนี้ ผู้ขอยืมยอมชำระค่าปรับให้แกผู้ให้ยืมในอัตราวันละ <input type="text" style="width: 20%;"> 
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        (<input type="text" name="fines" style="width: 20%;">) บาท ต่อสิ่งของที่ยืมหนึ่งรายการ นับจากวันที่ครบกำหนดระยะเวลาดังกล่าว จนถึงวันที่ส่งคืนสิ่งของที่
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        ยืมครบทุกรายการแล้ว
                    </div>
                    <div class="col-sm-offset-1 col-sm-11" style="padding-top: 5px;">
                        สัญญานี้ทำขึ้นเป็นสองฉบับ มีข้อความถูกต้องตรงกัน คู้สัญญาได้อ่านหรือฟังจนเข้าใจข้อความโดยละเอียดตลอด
                    </div>
                    <div class="col-sm-12">
                        แล้ว จึงได้ลงลายมือชื่อไว้เป็นสำคัญต่อหน้าพยานและคู่สัญญาต่างยึดถือไว้ฝ่ายละหนึ่งฉบับ
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-5 col-sm-7">
                        <div class="form-group" style="padding-top: 5px;">
                            ลงชื่อ <input type="text" name="submitSign" style="width: 58%;"> ผู้ขอยืม 
                        </div>
                        <div style="padding-top: 5px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ( <input type="text" name="submitSign" style="width: 55%;"> )
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-5 col-sm-7">
                        <div class="form-group" style="padding-top: 5px;">
                            ลงชื่อ <input type="text" name="submitSign" style="width: 58%;"> ผู้ให้ยืม 
                        </div>
                        <div style="padding-top: 5px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ( <input type="text" name="submitSign" style="width: 55%;"> )
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-5 col-sm-7">
                        <div class="form-group" style="padding-top: 5px;">
                            ลงชื่อ <input type="text" name="submitSign" style="width: 58%;"> พยาน 
                        </div>
                        <div style="padding-top: 5px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ( <input type="text" name="submitSign" style="width: 55%;"> )
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-5 col-sm-7">
                        <div class="form-group" style="padding-top: 5px;">
                            ลงชื่อ <input type="text" name="submitSign" style="width: 58%;"> พยาน 
                        </div>
                        <div style="padding-top: 5px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ( <input type="text" name="submitSign" style="width: 55%;"> )
                        </div>
                    </div>
                </div>
<br>

                <div class="row">
                    <div class="col-sm-offset-5 col-sm-7" style="padding-top: 5px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        วันที่ ...{{ date('d') }}.. เดือน .......{{ date('m') }}...... พ.ศ. ............{{ (date('Y'))+543 }}.................
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12" style="padding-top: 5px;">
                        ข้าพเจ้า (นาย/นาง/นางสาว) <input type="text" style="width: 40%;"> 
                        วัน เดือน ปีเกิด <input type="text" style="width: 20%;">
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                         เลขประจำตัวประชาชน <input type="text" style="width: 30%;">
                         อยู่บ้านเลขที่ <input type="text" style="width: 10%;"> หมู่ที่ <input type="text" style="width: 10%;"> 
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        ตำบล <input type="text" style="width: 20%;"> 
                        อำเภอ <input type="text" id="district" name="district" style="width: 20%;"> 
                        จังหวัด <input type="text" id="province" name="province" style="width: 20%;"> 
                        รหัสไปรษณีย์ <input type="text" id="postcode" name="postcode" style="width: 10%;">
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        โทรศัพท์ <input type="text" value="" style="width: 25%;">
                        ยินยอมให้ (นาย/นาง/นางสาว) <input type="text" value="" style="width: 35%;">
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        ซึ่งเป็นคู่สมรสของข้าพเจ้าทำสัญญาฉบับนี้
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-5 col-sm-7">
                        <div class="form-group" style="padding-top: 5px;">
                            ลงชื่อ <input type="text" name="submitSign" style="width: 58%;"> ผู้ยินยอม 
                        </div>
                        <div style="padding-top: 5px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ( <input type="text" name="submitSign" style="width: 55%;"> )
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-5 col-sm-7">
                        <div class="form-group" style="padding-top: 5px;">
                            ลงชื่อ <input type="text" name="submitSign" style="width: 58%;"> พยาน 
                        </div>
                        <div style="padding-top: 5px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ( <input type="text" name="submitSign" style="width: 55%;"> )
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-5 col-sm-7">
                        <div class="form-group" style="padding-top: 5px;">
                            ลงชื่อ <input type="text" name="submitSign" style="width: 58%;"> พยาน 
                        </div>
                        <div style="padding-top: 5px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ( <input type="text" name="submitSign" style="width: 55%;"> )
                        </div>
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-raised btn-success">ส่งข้อมูล</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('footer')
@endsection
