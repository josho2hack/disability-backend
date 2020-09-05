@extends('layouts.form')
@section('content')
<style>
    .square{
        border: 1px solid #000; 
        overflow: auto; 
        width: 240px;
        height: 60px;
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
        width: 50px;
        text-align: center;
        font-size: 1.2rem;
    }
    input[type="text"]{
        text-align: left;
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

</style>
    <!-- bradcome -->
    <div class="b-b mb-10">
        <h3 class="h3 m-0">6.1 แบบฟอร์มยืม</h3>
    </div>

    <div class="boxs">
        <div class="boxs-body" style="width: 900px; margin: auto;">
            <form action="{{ url('form-borrow') }}" method="POST">
                <div class="row">
                    <div class="col-sm-offset-6 col-sm-6">
                        <div class="square pull-right">
                            <div> ทก.01 </div>
                            <div> สำหรับคนพิการ / ผู้ยื่นคำขอแทน </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        แบบคำขอยืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสาร<br>   
                        หรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร ตามกฎกระทรวงฯ
                    </div>
                </div>

                <div class="form-group">
                    <div class="text-right">
                        เขียนที่ {{ $address->house_no }} หมู่ {{ $address->village_no }}  ต.{{ $address->sub_district }}
                        <br> อ.{{ $address->district }} จ.{{ $address->province }}  {{ $address->postal_code }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-offset-6 col-sm-6">
                        <div class="form-group">
                            @php
                            switch (date('m'))
                            {
                            case '01' : $month="มกราคม"; break;
                            case '02' : $month="กุมภาพันธ์"; break;
                            case '03' : $month="มีนาคม"; break;
                            case '04' : $month="เมษายน"; break;
                            case '05' : $month="พฤษภาคม"; break;
                            case '06' : $month="มิถุนายน"; break;
                            case '07' : $month="กรกฎาคม"; break;
                            case '08' : $month="สิงหาคม"; break;
                            case '09' : $month="กันยายน"; break;
                            case '10' : $month="ตุลาคม"; break;
                            case '11' : $month="พฤศจิกายน"; break;
                            case '12' : $month="ธันวาคม"; break;
                            }
                            @endphp
                            วันที่...{{ date('d') }}.....เดือน.....{{ $month }}.....ปี....{{ date('Y')+543 }}.....
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-1 text-right">
                        เรื่อง
                        </div>
                        <div class="col-sm-11">
                            ขอยืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสารหรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อ
                            การสื่อสาร ตามกฎกระทรวงฯ
                        </div>  
                    </div>
                    <div class="form-group"> 
                        <div class="col-sm-1 text-right">
                        เรียน
                        </div>
                        <div class="col-sm-11">
                            ประธานคณะกรรมการส่งเสริมและพัฒนาการเข้าถึงและใช้ประโยชน์จากข้อมูลข่าวสาร การสื่อสาร 
                            บริการโทรคมนาคม เทคโนโลยีสารสนเทศและการสื่อสาร เทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการ 
                            สื่อสารและบริการสื่อสารธารณะสำหรับคนพิการ
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    สิ่งที่แนบมาด้วย
                </div>
                <div class="row fill-text-justify">
                    <div class="form-group clearfix mt-0"> 
                        <div class="col-sm-1 text-right pr-0">
                            <input type="checkbox">
                        </div>
                        <div class="col-sm-6">
                            สำเนาบัตรประจำตัวคนพิการ พร้อมรับรองสำเนาถูกต้อง
                        </div>   
                        <div class="col-sm-3 text-right">
                            จำนวน <input type="number"> ฉบับ 
                        </div>
                        <div class="col-sm-2">
                            <span class="btn btn-raised btn-xs btn-default fileinput-button m-0">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>แนบไฟล์</span>
                                <input type="file" name="files">
                            </span>
                        </div>
                    </div>
                    <div class="form-group clearfix mt-0"> 
                        <div class="col-sm-1 text-right pr-0">
                            <input type="checkbox">
                        </div>
                        <div class="col-sm-6">
                            สำเนาทะเบียนบ้านคนพิการ พร้อมรับรองสำเนาถูกต้อง
                        </div>   
                        <div class="col-sm-3 text-right">
                            จำนวน <input type="number"> ฉบับ 
                        </div>
                        <div class="col-sm-2">
                            <span class="btn btn-raised btn-xs btn-default fileinput-button m-0">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>แนบไฟล์</span>
                                <input type="file" name="files">
                            </span>
                        </div>
                    </div>
                    <div class="form-group clearfix mt-0"> 
                        <div class="col-sm-1 text-right pr-0">
                            <input type="checkbox">
                        </div>
                        <div class="col-sm-6">
                            สำเนาเอกสารรับรองการเข้ารับการฝึกอบรมตามหลักสูตรที่กระทรวงเทคโนโลยีสารสนเทศและการสื่อสารกำหนดพร้อมรับรองสำเนาถูกต้อง (ถ้ามี)
                        </div>   
                        <div class="col-sm-3 text-right">
                            จำนวน <input type="number"> ฉบับ 
                        </div>
                        <div class="col-sm-2">
                            <span class="btn btn-raised btn-xs btn-default fileinput-button m-0">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>แนบไฟล์</span>
                                <input type="file" name="files">
                            </span>
                        </div>
                    </div>
                    <div class="form-group clearfix mt-0"> 
                        <div class="col-sm-1 text-right pr-0">
                            <input type="checkbox">
                        </div>
                        <div class="col-sm-6">
                            สำเนาบัตรประจำตัวประชาชนหรือสำเนาทะเบียนบ้านของ ผู้ยื่นคำขอแทน พร้อมร้บรองสำเนาถูกต้อง
                        </div>   
                        <div class="col-sm-3 text-right">
                            จำนวน <input type="number"> ฉบับ 
                        </div>
                        <div class="col-sm-2">
                            <span class="btn btn-raised btn-xs btn-default fileinput-button m-0">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>แนบไฟล์</span>
                                <input type="file" name="files">
                            </span>
                        </div>
                    </div>
                    <div class="form-group clearfix mt-0"> 
                        <div class="col-sm-1 text-right pr-0">
                        <input type="checkbox">
                        </div>
                        <div class="col-sm-6">
                            หนังสือมอบอำนาจจากคนพิการหรือหลักฐานที่แสดงว่ามีส่วน เกี่ยวข้องกับคนพิการเนื่องจากเป็นผู้ปกครอง ผู้พิทักษ์ ผู้อนุบาล หรือผู้ดูแลคนพิการ (กรณี ผู้ยื่นคำขอแทน)
                        </div> 
                        <div class="col-sm-3 text-right">
                            จำนวน <input type="number"> ฉบับ 
                        </div>
                        <div class="col-sm-2">
                            <span class="btn btn-raised btn-xs btn-default fileinput-button m-0">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>แนบไฟล์</span>
                                <input type="file" name="files">
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="row">   
                    <div class="col-sm-offset-2 col-sm-10">
                        ข้าพเจ้า <input type="text" name="name" style="width: 65%;"> <input type="radio" name="chkType" checked> คนพิการ <input type="radio" name="chkType"> ผู้ยื่นคำขอแทน
                    </div>
                    <div class="col-sm-12">
                        ประเภทความพิการ <input type="text" cname="disabilityType" style="width: 85%;">
                    </div>
                    <div class="col-sm-12">
                        บัตรประจำตัวคนพิการ/บัตรประชาชนเลขที่ <input type="text" name="citizenId" style="width: 53%;"> ที่อยู่ที่สามารถติดต่อได้<br>
                    </div>
                    <div class="col-sm-12">
                        บ้านเลขที่ <input type="text" name="addressNo" style="width: 10%;"> หมู่ที่ <input type="text" name="subDistricNo" style="width: 10%;"> ซอย/ถนน <input type="text" name="stress" style="width: 25%;"> ตำบล/แขวง <input type="text" name="subDistrict" style="width: 25%;"> 
                    </div>
                    <div class="col-sm-12">
                        อำเภอ/เขต <input type="text" name="district" style="width: 25%;"> จังหวัด <input type="text" name="province" style="width: 25%;"> รหัสไปรษณีย์ <input type="text" name="postcode" style="width: 25%;">
                    </div>
                    <div class="col-sm-12">
                        สถานศึกษา <input type="text" name="colledge" style="width: 58%;"> โทรศัพท์ <input type="text" name="phoneNumber" style="width: 26%;">
                    </div>
                    <div class="col-sm-12 mb-20">
                        ที่อยู่อีเมล์ (e-mail address) <input type="text" name="email" style="width: 77%;">
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                        มีความประสงค์ขอยืมอุปกรณ์/เครื่องมือ เทคโนโลยีสารสนเทศและการสื่อสารหรือ เทคโนโลยีสิ่งอำนวยความสะดวกเพี่อ
                    </div>
                    <div class="col-sm-12">
                        การสื่อสารให้แก่ <input type="text" name="borrwTo" style="width: 30%;"> (ชื่อ-นามสกุลคนพิการ) <input type="text" name="disabilityName" style="width: 41%;">
                    </div>
                    <div class="col-sm-12">
                        เลขบัตรประจำตัวคนพิการ <input type="text" name="disabilityId" style="width: 65%;"> ที่อยู่ที่สามารถติดต่อได้ 
                    </div>
                    <div class="col-sm-12">
                        บ้านเลขที่ <input type="text" name="disabilityAddressNo" style="width: 10%;"> หมู่ที่ <input type="text" name="disabilitySubDistricNo" style="width: 10%;"> ซอย/ถนน <input type="text" name="disabilityStress" style="width: 25%;"> ตำบล/แขวง <input type="text" name="disabilitySubDistrict" style="width: 25%;"> 
                    </div>
                    <div class="col-sm-12">
                        อำเภอ/เขต <input type="text" name="disabilityDistrict" style="width: 25%;"> จังหวัด <input type="text" name="disabilityProvince" style="width: 25%;"> รหัสไปรษณีย์ <input type="text" name="disabilityPostcode" style="width: 25%;">
                    </div>
                    <div class="col-sm-12">
                        สถานศึกษา <input type="text" name="disabilityColledge" style="width: 58%;"> โทรศัพท์ <input type="text" name="disabilityPhoneNumber" style="width: 26%;">
                    </div>
                    <div class="col-sm-12">
                        ที่อยู่อีเมล์ (e-mail address) <input type="text" name="disabilityEmail" style="width: 77%;">
                    </div>
                    <div class="col-sm-12">
                        โดยมีวัตถุประสงค์เพื่อ (โปรดระบุ) <input type="text" name="objective1" style="width: 76%;">
                    </div>
                    <div class="col-sm-12">
                        <input type="text" name="objective2" style="width: 100%;">
                    </div>
                    <div class="col-sm-12 mb-20">
                        ในรายการอุปกรณ์ <input type="text" name="assetName" style="width: 37%;"> เลขที่อุปกรณ์ <input type="text" name="assetNo" style="width: 40%;"> 
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        ข้าพเจ้าขอรับรองว่า ข้อความข้างต้นเป็นจริงทุกประการ เมื่อได้รับอุกปกรณ์/เครื่องมือเทคโนโลยีสารสนเทศและการสื่อสาร
                    </div>
                    <div class="col-sm-12">
                        หรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสารแล้ว จะนำไปใช้ให้เกิดประโยชน์ตาม
                        หลักเกณฑ์ วิธีการ และเงื่อนไขที่กระทรวงเทคโนโลยีสารสนเทศและการสื่อสารกำหนด
                    </div>

                    <div class="col-sm-offset-6 col-sm-6">
                        <div class="form-group">
                            ขอแสดงความนับถือ
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-offset-5 col-sm-7">
                            <div class="form-group">
                            ลงชื่อ <input type="text" name="submitSign" style="width: 58%;"> ( คนพิการ/ผู้ยื่นคำขอแทน)
                                <span>( <input type="text" name="submitSign" style="width: 70%;"> )</span>

                        </div>
                        </div>

                    </div>
                </div>


                <div class="text-right">
                    <button class="btn btn-raised btn-success">ส่งข้อมูล</button>
                </div>
            </form>
        </div>
    </div>

    <!-- row -->
    {{-- <div class="row">
        <div class="col-md-12">
            <section class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font hb-cyan">
                        <strong>สร้างแบบฟอร์มยืม</strong>
                    </h3>
                </div>
                <div class="boxs-body">
                    <form class="form-horizontal" role="form" action="{{ url('form-borrow') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="container-fluid">
                                <div class="border">
                                        ทก.01<br>
                                    สำหรับคนพิการ / ผู้ยื่นคำขอแทน
                                </div>
                            </div>
                        </div>

                        <div class="header text-center">
                            แบบคำขอยืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสาร<br>    
                            หรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร ตามกฎกระทรวงฯ
                        </div>


                            <label for="name" class="control-label text-right " style="color: #000;">เขียนที่</label>

                                <input type="text" class="form-control" name="write_at" placeholder="">



                            <div class="row">
                                <div class="col-sm-offset-6">
                                        
                                </div>
                                <div class="col-sm-6">
                                    วสา่้วสา่วสา่วสา่วสา่วสา่วส
                                </div>
                            </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-8 control-label text-left"><li>สำเนาบัตรประจำตัวคนพิการ พร้อมรับรองสำเนาถูกต้อง</li></label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="copy_card" placeholder="จำนวนฉบับ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-8 control-label text-left"><li>สำเนาทะเบียนบ้านของคนพิการ พร้อมรับรองสำเนาถูกต้อง</li></label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="house_res" placeholder="จำนวนฉบับ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-8 control-label text-left"><li>สำเนาเอกสารรับรองการเข้ารับการฝึกอบรมตามหลักสูตรที่กระทรวงเทคโนโลยีสารสนเทศและการสื่อสารกำหนด พร้อมรับรองสำเนาถูกต้อง (ถ้ามี)</li></label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="copy_train" placeholder="จำนวนฉบับ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-8 control-label text-left"><li>สำเนาบัตรประจำตัวประชาชนหรือสำเนาทะเบียนบ้านของ ผู้ยื่นคำขอแทน พร้อมรับรองสำเนาถูกต้อง</li></label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="sub_copy_citizen_id" placeholder="จำนวนฉบับ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-8 control-label text-left"><li>หนังสือมอบอำนาจจากคนพิการหรือหลักฐานที่แสดงว่ามีส่วนเกี่ยวข้องกับคนพิการเนื่องจากเป็นผู้ปกครอง ผู้พิทักษ์ ผู้อนุบาล หรือผู้ดูและคนพิการ (กรณี ผู้ยื่นขอแทน)</li></label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="power_attorney" placeholder="จำนวนฉบับ">
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="name" class="col-sm-8 control-label text-left">
                        <li>
                            <label class="radio-inline">
                              <input type="radio" name="type" value="1" checked>คนพิการ
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="type" value="2">ผู้ยื่นคำขอแทน
                            </label>
                        </li>
                        </label>
                    </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label text-left"><li>โดยมีวัตถุประสงค์เพื่อ (โปรดระบุ) </li></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="objective" placeholder="โดยมีวัตถุประสงค์เพื่อ (โปรดระบุ)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label text-left"><li>ในรายการอุปกรณ์</li></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="accessorie_list" placeholder="ในรายการอุปกรณ์">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label text-left"><li>เลขที่อุปกรณ์</li></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="accessorie_no" placeholder="เลขที่อุปกรณ์">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-8">
                                <button type="submit" class="btn btn-raised btn-success">บันทึก</button>
                                <a href="{{ route('maingroups.index') }}" class="btn btn-raised btn-default">ยกเลิก</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="boxs-footer">
                </div>
            </section>
        </div>
    </div> --}}
@endsection
