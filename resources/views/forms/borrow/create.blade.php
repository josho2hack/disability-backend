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
    input{
        border: none;
        background-color: #a1a1a1;
        padding: 0px;
        width: 50px;
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
                            ขอยืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสารหรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อ<br>
                            การสื่อสาร ตามกฎกระทรวงฯ
                        </div>  
                    </div>
                    <div class="form-group"> 
                        <div class="col-sm-1 text-right">
                        เรียน
                        </div>
                        <div class="col-sm-11">
                            ประธานคณะกรรมการส่งเสริมและพัฒนาการเข้าถึงและใช้ประโยชน์จากข้อมูลข่าวสาร การสื่อสาร <br>
                            บริการโทรคมนาคม เทคโนโลยีสารสนเทศและการสื่อสาร เทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการ <br>
                            สื่อสารและบริการสื่อสารธารณะสำหรับคนพิการ
                        </div>                    
                    </div>
                </div>
                <div class="form-group">
                    สิ่งที่แนบมาด้วย
                </div>
                <div class="row">
                    <div class="form-group "> 
                        <div class="col-sm-1 text-right">
                        <input type="checkbox">
                        </div>
                        <div class="col-sm-6">
                            สำเนาบัตรประจำตัวคนพิการ พร้อมรับรองสำเนาถูกต้อง
                        </div>   
                        <div class="col-sm-5">
                            จำนวน
                            <input type="text">
                            ฉบับ แนบไฟล์
                            <input type="file">
                        </div>                  
                    </div>
                    <div class="form-group "> 
                        <div class="col-sm-1 text-right">
                        <input type="checkbox">
                        </div>
                        <div class="col-sm-6">
                            สำเนาทะเบียนบ้านคนพิการ พร้อมรับรองสำเนาถูกต้อง
                        </div>   
                        <div class="col-sm-5">
                            จำนวน
                            <input type="text">
                            ฉบับ แนบไฟล์
                            <input type="file">
                        </div>                  
                    </div>
                    <div class="form-group "> 
                        <div class="col-sm-1 text-right">
                        <input type="checkbox">
                        </div>
                        <div class="col-sm-6">
                            สำเนาเอกสารรับรองการเข้ารับการฝึกอบรมตามหลักสูตรที่<br>
                            กระทรวงเทคโนโลยีสารสนเทศและการสื่อสารกำหนด<br>
                            พร้อมรับรองสำเนาถูกต้อง (ถ้ามี)<br>
                        </div>   
                        <div class="col-sm-5">
                            จำนวน
                            <input type="text">
                            ฉบับ แนบไฟล์
                            <input type="file">
                        </div>                  
                    </div>
                    <br>    
                    <div class="form-group "> 
                        <div class="col-sm-1 text-right">
                        <input type="checkbox">
                        </div>
                        <div class="col-sm-5">
                            สำเนาบัตรประจำตัวประชาชนหรือสำเนาทะเบียนบ้านของ<br>
                            ผู้ยื่นคำขอแทน พร้อมร้บรองสำเนาถูกต้อง
                        </div>   
                        <div class="col-sm-6">
                            จำนวน
                            <input type="text">
                            ฉบับ แนบไฟล์
                            <input type="file">
                        </div>                  
                    </div>
                    <div class="form-group "> 
                        <div class="col-sm-1 text-right">
                        <input type="checkbox">
                        </div>
                        <div class="col-sm-5">
                            หนังสือมอบอำนาจจากคนพิการหรือหลักฐานที่แสดงว่ามีส่วน<br>
                            เกี่ยวข้องกับคนพิการเนื่องจากเป็นผู้ปกครอง ผู้พิทักษ์ ผู้อนุบาล<br>
                            หรือผู้ดูแลคนพิการ (กรณี ผู้ยื่นคำขอแทน)
                        </div>   
                        <div class="col-sm-6">
                            จำนวน
                            <input type="text">
                            ฉบับ แนบไฟล์
                            <input type="file">
                        </div>                  
                    </div>
                </div>
                
                <div class="row">   
                    <div class="col-sm-1"></div>
                    ข้าพเจ้า.....................................<input type="checkbox" name="">คนพิการ <input type="checkbox" name=""> ผู้ยื่นคำขอแทน <br> 
                    ประเภทความพิการ..................................................................................................................<br>
                    บัตรประจำตัวคนพิการ/บัตรประชาชนเลขที่ .................................................................................ที่อยู่ที่สามารถติดต่อได้<br>
                    บ้านเลขที่......................................หมู่ที่..............................ซอย/ถนน........................ตำบล/แขวง..................................<br> 
                    อำเภอ/เขต..........................................................จังหวัด...................................รหัสไปรษณีย์...................................................<br>
                    สถานศึกษา...............................................................................โทรศัพท์ ............................<br>   
                    ที่อยู่อีเมล์ (e-mail address) ................................................................................................................................................<br> 
                    <div class="col-sm-1"></div>มีความประสงค์ขอยืมอุปกรณ์/เครื่องมือ เทคโนโลยีสารสนเทศและการสื่อสารหรือ เทคโนโลยีสิ่งอำนวย<br>
                    ความสะดวกเพี่อการสื่อสาร ให้แก่ ........................................................ (ชื่อ-นามสกุลคนพิการ) ..........................................<br>
                    เลขบัตรประจำตัวคนพิการ .............................................................................................................. ที่อยู่ที่สามารถติดต่อได้  <br>
                    บ้านเลขที่ ....................... หมู่ที่ ........... ซอย/ถนน .............................................. ตำบล/แขวง .............................................<br>
                    อำเภอ/เขต ........................................... จังหวัด ......................................................... รหัสไปรษณีย์ ...................................<br>
                    สถานศึกษา ........................................................................................................................ โทรศัพท์ ...................................<br>
                    ที่อยู่อีเมล์ (e-mail address) ................................................................................................................................................<br>
                    โดยมีวัตถุประสงค์เพื่อ (โปรดระบุ) ........................................................................................................................................
                    ...............................................................................................................................................................................................<br>
                    ในรายการอุปกรณ์ ............................................................................. เลขที่อุปกรณ์ ............................................................<br>
                    <div class="col-sm-1"></div>
                    ข้าพเจ้าขอรับรองว่า ข้อความข้างต้นเป็นจริงทุกประการ เมื่อได้รับอุกปกรณ์/เครื่องมือเทคโนโลยี<br>
                    สารสนเทศและการสื่อสารหรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสารแล้ว จะนำไปใช้ให้เกิดประโยชน์ตาม<br>
                    หลักเกณฑ์ วิธีการ และเงื่อนไขที่กระทรวงเทคโนโลยีสารสนเทศและการสื่อสารกำหนด

                    <div class="col-sm-offset-6 col-sm-6">
                        <div class="form-group">
                            ขอแสดงความนับถือ 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5"></div>
                        <div class="col-sm-7">
                            <div class="form-group">
                            ลงชื่อ ......................................................................... ( คนพิการ/ผู้ยื่นคำขอแทน)<br>
                                ( .............................................................................)

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
