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
        <h3 class="h3 m-0">5.2 สัญญาค้ำประกัน</h3>
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
                        สัญญาค้ำประกัน
                    </strong>    
                    <p>
                        (แนบท้ายระเบียบสำนักงานปลัดเทคโนโลยีสารสนเทศและการสื่อสาร <br>
                    ว่าด้วยการทำสัญญายืมและการทำสัญญาค้ำประกันในการให้ยืมเทคโนโลยีสารสนเทศและการสื่อสาร <br>
                    หรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสารแก่คนพิการ พ.ศ. ๒๕๕๖)
                    </p>
                        <br>
                    </div>
                </div>
                <div class="form-group">
                    <div class="text-right">
                        ทำที่ .............................................................<br>..................................................................{{-- {{ $address->house_no }}  หมู่  {{ $address->village_no }}   ต.  {{ $address->sub_district }} 
                         อ. {{ $address->district }}  จ.  {{ $address->province }}  {{ $address->postal_code }} --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-6 col-sm-6">
                        <div class="form-group">

                            วันที่ <input type="text" value="{{ date('d') }}" style="width: 10%;"> 
                            เดือน <input type="text" value="{{ fullmonth(date('m')) }}" style="width: 25%"> 
                            ปี <input type="text" value="{{ date('Y')+543 }}" readonly style="width: 25%;">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-1 text-right" style="padding-top: 5px;"></div>
                        <div class="col-sm-11" style="padding-top: 5px;">
                            ข้าพเจ้า นาย <input type="text" name="house-no" style="width: 70%;"> 
                            อายุ <input type="text" name="county" style="width: 10%;"> ปี
                        </div>  
                        <div class="col-sm-12" style="padding-top: 5px;">
                        เลขบัตรประชาชนเลขที่ <input type="text" style="width: 38%;"> 
                        อยู่บ้านเลขที่ <input type="text" name="day" class="day" style="width: 15%;"> 
                        หมู่ที่ <input type="text" class="month" name="month" style="width: 15%;"> 
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                        ตำบล <input type="text" style="width: 25%;">
                        อำเภอ <input type="text" style="width: 25%;">
                        จังหวัด <input type="text" style="width: 32%;">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                        รหัสไปรษณีย์ <input type="text" style="width: 22%;">
                        โทรศัพท์ <input type="text" style="width: 60%;">
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            ขอทำสัญญาค้ำประกันฉบับนี้ให้ไว้ต่อสำนักงานปลัดกระทรวงเทคโนโลยีสารสนเทศและการสื่อสาร ซึ่งต่อไปนี้ จะเรียกว่า “ผู้ให้ยืม”  
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            ดังมีข้อความ ต่อไปนี้ 
                        </div>
                        <div class="col-sm-offset-1 col-sm-11" style="padding-top: 5px;">
                            ๑.  ตามที่ นาย <input type="text" style="width: 80%;"> ซึ่งต่อไปนี้
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            จะเรียกว่า “ผู้ขอยืม” ได้ทำสัญญากับผู้ให้ยืมเพื่อขอยืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสาร หรือ
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                            เทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร ซึ่งต่อไปนี้จะเรียกว่า “สิ่งของที่ยืม”
                        </div>
                        <div class="col-sm-12" style="padding-top: 5px;">
                             ตามสัญญาเลขที่ <input type="text" style="width: 20%">
                             ลงวันที่ <input type="text" style="width: 10%">
                             เดือน <input type="text" style="width: 15%">
                             พ.ศ. <input type="text" style="width: 12%"> 
                             ซึ่งต่อไปนี้จะเรียกว่า
                        </div>   
                        <div class="col-sm-12" style="padding-top: 5px;">
                            “สัญญายืม” ดังรายการต่อไปนี้
                        </div>
                    </div>
                </div>

                <div class="row">
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
                                    <td align="center"> 1 </td>
                                    <td> รายการสิ่งของที่ยืม </td>
                                    <td align="right"> รหัส </td>
                                    <td align="right"> 1 หน่วย </td>
                                    <td align="right"> 1,0000 </td>
                                    <td> หมายเหตุ </td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" align="center">รวม</td>
                                    <td align="right"> 1 หน่วย </td>
                                    <td align="right"> 1,000 </td>
                                    <td align="center"></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="col-sm-1" style="padding-top: 20px;"></div>
                    <div class="col-sm-11" style="padding-top: 20px;">
                        ๒.  ข้าพเจ้ายินยอมผูกพันตนเองเป็นผู้ค้ำประกันตามสัญญายืมดังกล่าวว่า ถ้าผู้ขอยืมทำสิ่งของที่ยืมสูญหายหรือชำรุดบกพร่อง ซึ่ง
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        มิใช่เป็นการใช้งานตามปกติหรือผู้ขอยืมไม่ปฏิบัติตามเงื่อนไขในสัญญายืมหรือ ปฏิบัติผิดเงื่อนไขข้อใดข้อเงินตามราคาที่หักค่าเสื่อมแล้ว ภายใน 
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        ๓๐ วัน (สามสิบ) วัน นับแต่ได้รับการบอกกล่าวเป็นหนังสือจากผู้ให้ยืมโดยผู้ให้ยืมไม่จำต้องเรียกร้องให้ผู้ขอยืมชำระหนี้
                    </div>
                    <div class="col-sm-1" style="padding-top: 5px;"></div>
                    <div class="col-sm-11" style="padding-top: 5px;">
                       ๓.   ข้าพเจ้ายอมรับรู้และยินยอมในกรณีผ่อนเวลาหรือผ่อนผันให้แก่ผู้ขอยืมหรือยินยอมให้ผู้ขอยืม ปฏิบัติผิดแผกไปจากเงื่อนไขใด ๆ 
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        ในสัญญายืม ให้ถือว่าข้าพเจ้าได้ยินยอมในกรณีนั้น ๆ ด้วย
                    </div>
                    <div class="col-sm-1" style="padding-top: 5px;"></div>
                    <div class="col-sm-11" style="padding-top: 5px;">
                        ๔.  ข้าพเจ้าจะไม่เพิกถอนการค้ำประกันไม่ว่ากรณีใด ๆ ตราบเท่าที่ผู้ขอยืมยังต้องรับผิดต่อผู้ให้ยืมตามเงื่อนไขในสัญญายืม
                    </div>
                    <div class="col-sm-offset-1 col-sm-11" style="padding-top: 5px;">
                        ข้าพเจ้าได้อ่านหรือฟังจนเป็นที่เข้าใจข้อความโดยละเอียดตลอดแล้ว จึงลงลายมือชื่อไว้เป็นสำคัญต่อหน้าพยาน 
                    </div>
    
                </div>

                <div class="row">
                    <div class="col-sm-offset-5 col-sm-7">
                        <div class="form-group" style="padding-top: 5px;">
                            ลงชื่อ <input type="text" name="submitSign" style="width: 58%;"> (ผู้ค้ำประกัน) 
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
                    <button class="btn btn-raised btn-success">ส่งข้อมูล</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('footer')
@endsection
