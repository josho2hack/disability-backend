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
            <form action="{{-- {{ url('form-borrow') }} --}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-offset-6 col-sm-6">
                        <div class="square pull-right">
                            สัญญาเลขที่.....................
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
                            สัญญานี้ทำขึ้น ณ <input type="text" name="house-no"> แขวง <input type="text" name="sub-district"> 
                            เขต <input type="text" name="county">
                        </div>  
                        <div class="col-sm-12" style="padding-top: 5px;">
                        จังหวัด <input type="text" class="province" name="province"> 
                        เมื่อวันที่ <input type="text" name="day" class="day" style="width: 10%;"> 
                        เดือน <input type="text" class="month" name="month" style="width: 17%;"> 
                        พ.ศ. <input type="text" name="year" class="year" style="width: 15%;"> ระหว่าง สำนักงาน
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            ปลัดกระทรวงเทคโนโลยีสารสนเทศและการสื่อสาร โดย (ระบุชื่อ-สกุล) 
                            <input type="text" name="permanent_secretary" class="permanent_secretary" style="width: 49%;">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            ตำแหน่ง (ระบุตำแหน่งและคำสั่งมอบอำนาจ) <input type="text" name="rank" class="rank" style="width: 67%;">
                        </div>

                        @if( $form->type_status == 1 )
                        <div class="col-sm-1" style="padding-top: 5px;"></div>
                        <div class="col-sm-11" style="padding-top: 5px;">
                        {{ $form->user->title }} <input type="text" name="name" class="name" value="{{ $form->user->first_name }}" style="width: 96%;">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            วัน เดือน ปีเกิด <input type="text" name="birthday" class="birthday" style="width: 35%;"> 
                            เลขประจำตัวประชาชน <input type="text" name="citizen_id" style="width: 37%;">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            บ้านเลขที่ <input type="text" id="addressNo" name="addressNo" style="width: 12%;"> 
                            หมู่ที่ <input type="text" id="subDistricNo" name="subDistricNo" style="width: 12%;"> 
                            ตำบล <input type="text" id="subDistrict" name="subDistrict" style="width: 26%;"> 
                            อำเภอ <input type="text" id="district" name="district" style="width: 27%;"> 
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            จังหวัด <input type="text" id="province" name="province" style="width: 30%;"> 
                            รหัสไปรษณีย์ <input type="text" id="postcode" name="postcode" style="width: 18%;">
                            โทรศัพท์ <input type="text" value="" name="disabilityPhoneNumber" style="width: 28%;">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            กำลังศึกษาระดับ <input type="text" value="" name="disabilityColledge" style="width: 25%;"> 
                            สถานศึกษา <input type="text" value="" name="disabilityPhoneNumber" style="width: 52%;">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            อำเภอ <input type="text" value="" name="disabilityColledge" style="width: 35%;"> 
                            จังหวัด <input type="text" value="" name="disabilityPhoneNumber" style="width: 53%;">
                        </div>

                        @elseif ( $form->type_status == 2 )
                        <div class="col-sm-1" style="padding-top: 5px;"></div>
                        <div class="col-sm-11" style="padding-top: 5px;">
                         นาย <input type="text" name="name"  class="name" style="width: 55%;">
                        เกี่ยวข้องเป็น <input type="text" style="width: 29%;">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            และได้รับมอบอำนาจจากผู้พิการรายละเอียดปรากฏตามหนังสือมอบอำนาจฉบับลง
                            วันที่ <input type="text" style="width: 8%;">
                            เดือน <input type="text" style="width: 12%;">
                            ปี <input type="text" style="width: 11%;">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            วัน เดือน ปีเกิด <input type="text" name="birthday" class="birthday" style="width: 31%;"> 
                            เลขประจำตัวประชาชน <input type="text" name="citizen_id" style="width: 40%;">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            บ้านเลขที่ <input type="text" id="addressNo" name="addressNo" style="width: 12%;"> 
                            หมู่ที่ <input type="text" id="subDistricNo" name="subDistricNo" style="width: 12%;"> 
                            ตำบล <input type="text" id="subDistrict" name="subDistrict" style="width: 26%;"> 
                            อำเภอ <input type="text" id="district" name="district" style="width: 27%;"> 
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            จังหวัด <input type="text" id="province" name="province" style="width: 25%;"> 
                            รหัสไปรษณีย์ <input type="text" id="postcode" name="postcode" style="width: 20%;">
                            โทรศัพท์ <input type="text" value="" name="disabilityPhoneNumber" style="width: 31%;">
                        </div>
                        @endif
                        
                        <div class="col-sm-12" style="padding-top: 5px;">
                            ซึ่งต่อไปนี้จะเรียกว่า “ผู้ขอยืม”
                        </div>
                        <div class="col-sm-1" style="padding-top: 5px;"></div>
                        <div class="col-sm-11" style="padding-top: 5px;">
                            ทั้งสองฝ่ายได้ตกลงกันมีข้อความ ดังต่อไปนี้
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            ได้รับแจ้งผลการอนุมัติจากคณะอนุกรรมการฯ เมื่อวันที่ <input type="text" style="width: 5%;">
                            เดือน <input type="text" style="width: 10%;">
                            ปี <input type="text" style="width: 10%;">
                            รายละเอียดดังเอกสาร แนบ
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            และเมื่อหน่วยงานที่รับคำขอได้แจ้งให้มารับอุปกรณ์และเครื่องมือฯ ข้าพเจ้ายินดีที่จะมารับตามแจ้ง
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-5 col-sm-7">
                        <div class="form-group" style="padding-top: 5px;">
                            ลงชื่อ <input type="text" name="submitSign" style="width: 58%;"> ผู้แจ้งความประสงค์ 
                        </div>
                        <div style="padding-top: 5px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ( <input type="text" name="submitSign" style="width: 55%;"> )
                        </div>
                        <div style="padding-top: 5px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            คนพิการ/ผู้ยื่นคำขอแทน/ผู้แทนกลุ่ม
                        </div>
                    </div>
                </div>

                <hr>

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
                                <tr>
                                    <td> 1 </td>
                                    <td> รายการสิ่งของที่ยืม1 </td>
                                    <td> รหัส1 </td>
                                    <td> จำนวน1 </td>
                                    <td> ราคา (บาท)1 </td>
                                    <td> หมายเหตุ </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> รายการสิ่งของที่ยืม1 </td>
                                    <td> รหัส1 </td>
                                    <td> จำนวน1 </td>
                                    <td> ราคา (บาท)1 </td>
                                    <td> หมายเหตุ </td>
                                </tr>
                                <tr>
                                    <td> 3 </td>
                                    <td> รายการสิ่งของที่ยืม1 </td>
                                    <td> รหัส1 </td>
                                    <td> จำนวน1 </td>
                                    <td> ราคา (บาท)1 </td>
                                    <td> หมายเหตุ </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" align="center">รวม</td>
                                    <td align="center">0</td>
                                    <td align="center">0</td>
                                    <td align="center">0</td>
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
                        นับตั้งแต่วันที่ <input type="text" style="width: 8%;"> 
                        เดือน <input type="text" style="width: 10%;"> 
                        พ.ศ. <input type="text" style="width: 10%;"> 
                        ถึงวันที่ วันที่ <input type="text" style="width: 8%;"> 
                        เดือน <input type="text" style="width: 10%;"> 
                        พ.ศ. <input type="text" style="width: 10%;">
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

                <hr>

                <div class="row">
                    <div class="col-sm-offset-1 col-sm-11" style="padding-top: 5px;">
                        ข้อ ๖ เมื่อครบกำหนดเวลายืมตามข้อ ๒ แล้ว ผู้ขอยืมจะต้องส่งคืนสิ่งของที่ยืมให้แก่ผู้ให้ยืมภายใน กำหนด <input type="text" style="width: 10%;"> 
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
                        ดังเดิม ซึ่งผู้ขอยืมจะต้องดำเนินการให้แล้วเสร็จภายใน <input type="text" style="width: 10%;"> 
                        (<input type="text" style="width: 10%;">) วัน หรือผู้ให้ยืมจะดำเนินการซ่อมแซม          
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        สิ่งของที่ยืมที่เสียหายแล้วเรียกให้ผู้ขอยืมชดใช้เงินค่าซ่อมที่เสียไป พร้อมด้วยค่าเสียหายอื่นๆ ได้ หากผู้ขอยืมส่งคืนสิ่งของ   
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        ที่ยืมล่วงเลยระยะเวลาที่กำหนดไว้ในสัญญาข้อนี้ ผู้ขอยืมยอมชำระค่าปรับให้แกผู้ให้ยืมในอัตราวันละ <input type="text" style="width: 20%;"> 
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        (<input type="text" style="width: 20%;">) บาท ต่อสิ่งของที่ยืมหนึ่งรายการ นับจากวันที่ครบกำหนดระยะเวลาดังกล่าว จนถึงวันที่ส่งคืนสิ่งของที่
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

                <hr>

                <div class="row">
                    <div class="col-sm-offset-5 col-sm-7" style="padding-top: 5px;">
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
                    <button class="btn btn-raised btn-success">ส่งข้อมูล</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('footer')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
        $("#assets").change(function(){
            var asset_id = $("option:selected", this).val();

            if (asset_id != "") {
                $.post("{{ url('form-borrow/getNo') }}", {asset_id: asset_id}, function (data) {
                    $("#assetNo").val(data);
                });
            }
        });

        $( ".chkType" ).on( "click", function() {
            var chkType = $( ".chkType:checked" ).val();
            console.log(chkType);
            if (chkType == "1") {
                $.post("{{ url('form-borrow/getData') }}", {chkType: chkType}, function (data) {
                    $("#name").val(data.title + '   ' + data.first_name + '   ' + data.last_name);
                    $("#disabilityType").val(data.disability_type);
                    $("#citizenId").val(data.pwd_id);
                    $("#addressNo").val(data.house_no);
                    $("#subDistricNo").val(data.village_no);
                    $("#stress").val(data.lane);
                    $("#subDistrict").val(data.sub_district);
                    $("#district").val(data.district);
                    $("#province").val(data.province);
                    $("#postcode").val(data.postal_code);
                    $("#colledge").val(data.edu_place);
                    $("#phoneNumber").val(data.tel);
                    $("#email").val(data.email);
                });
            }

            if (chkType == "2") {
                $.post("{{ url('form-borrow/getData') }}", {chkType: chkType}, function (data) {
                    $("#name").val(data.title + '   ' + data.first_name + '   ' + data.last_name);
                    $("#disabilityType").val('-');
                    $("#citizenId").val(data.citizen_id);
                    $("#addressNo").val(data.house_no);
                    $("#subDistricNo").val(data.village_no);
                    $("#stress").val(data.lane);
                    $("#subDistrict").val(data.sub_district);
                    $("#district").val(data.district);
                    $("#province").val(data.province);
                    $("#postcode").val(data.postal_code);
                    $("#colledge").val(data.edu_place);
                    $("#phoneNumber").val(data.tel);
                    $("#email").val(data.email);
                });
            }

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
                $.post("{{ url('form-borrow/getcategory') }}", {sub_id: sub_id}, function (data) {
                    $("#assets_cate").html(data);
                });
            }
        });

        $("#assets_cate").change(function(){
            var ac_id = $("option:selected", this).val();

            if (ac_id != "") {
                $.post("{{ url('form-borrow/getassets') }}", {ac_id: ac_id}, function (data) {
                    $("#assets").html(data);
                });
            }
        });


        $('#files_copy_card').change(function(e){
            $('#copy_card').val(1);
            $('#copy_card_check').prop("checked", true);
        });
        $('#file_house_res').change(function(e){
            $('#house_res').val(1);
            $('#house_res_check').prop("checked", true);
        });
        $('#file_copy_train').change(function(e){
            $('#copy_train').val(1);
            $('#copy_train_check').prop("checked", true);
        });
        $('#file_sub_copy_citizen_id').change(function(e){
            $('#sub_copy_citizen_id').val(1);
            $('#sub_copy_citizen_id_check').prop("checked", true);
        });
        $('#file_power_attorney').change(function(e){
            $('#power_attorney').val(1);
            $('#power_attorney_check').prop("checked", true);
        });

    });
</script>
@endsection
