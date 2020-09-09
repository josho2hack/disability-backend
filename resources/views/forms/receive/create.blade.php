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

</style>
    <!-- bradcome -->
    <div class="b-b mb-10">
        <h3 class="h3 m-0">6.1 แบบฟอร์มยืม</h3>
    </div>

    <div class="boxs">
        <div class="boxs-body" style="width: 900px; margin: auto;">
            <form action="{{ url('form-borrow') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-offset-6 col-sm-6">
                        <div class="square pull-right">
                            <div> ทก.02 </div>
                            <div> สำหรับคนพิการ / ผู้ยื่นคำขอแทน </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        แบบคำขอยืมรับอุปกรณ์และเครื่องมือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร<br>  
                        ตามกฎกระทรวงฯ
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
                            ขอรับอุปกรณ์และเครื่องมือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร ตามกฎกระทรวงฯ 
                        </div>  
                    </div>
                    <div class="form-group" > 
                        <div class="col-sm-1 text-right" style="padding-top: 5px;">
                        เรียน
                        </div>
                        <div class="col-sm-11" style="padding-top: 5px;">
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
                        <div class="col-sm-2">
                            <span class="btn btn-raised btn-xs btn-default fileinput-button m-0">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>แนบไฟล์</span>
                                <input type="file" name="files">
                            </span>
                        </div>
                        <div class="col-sm-1 text-right pr-0">
                            <input type="checkbox" disabled>
                        </div>
                        <div class="col-sm-6">
                            สำเนาบัตรประจำตัวคนพิการ พร้อมรับรองสำเนาถูกต้อง
                        </div>   
                        <div class="col-sm-3 text-right">
                            จำนวน <input type="number" name="copy_card" readonly> ฉบับ 
                        </div>
                    </div>
                    <div class="form-group clearfix mt-0"> 
                        <div class="col-sm-2">
                            <span class="btn btn-raised btn-xs btn-default fileinput-button m-0">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>แนบไฟล์</span>
                                <input type="file" name="files">
                            </span>
                        </div>
                        <div class="col-sm-1 text-right pr-0">
                            <input type="checkbox" disabled>
                        </div>
                        <div class="col-sm-6">
                            สำเนาทะเบียนบ้านคนพิการ พร้อมรับรองสำเนาถูกต้อง
                        </div>   
                        <div class="col-sm-3 text-right">
                            จำนวน <input type="number" name="house_res" readonly> ฉบับ 
                        </div>
                    </div>
                    <div class="form-group clearfix mt-0"> 
                        <div class="col-sm-2">
                            <span class="btn btn-raised btn-xs btn-default fileinput-button m-0">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>แนบไฟล์</span>
                                <input type="file" name="files">
                            </span>
                        </div>
                        <div class="col-sm-1 text-right pr-0">
                            <input type="checkbox" disabled>
                        </div>
                        <div class="col-sm-6">
                            สำเนาเอกสารรับรองการเข้ารับการฝึกอบรมตามหลักสูตรที่กระทรวงเทคโนโลยีสารสนเทศและการสื่อสารกำหนดพร้อมรับรองสำเนาถูกต้อง (ถ้ามี)
                        </div>   
                        <div class="col-sm-3 text-right">
                            จำนวน <input type="number" name="copy_train readonly"> ฉบับ 
                        </div>
                    </div>
                    <div class="form-group clearfix mt-0"> 
                        <div class="col-sm-2">
                            <span class="btn btn-raised btn-xs btn-default fileinput-button m-0">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>แนบไฟล์</span>
                                <input type="file" name="files">
                            </span>
                        </div>
                        <div class="col-sm-1 text-right pr-0">
                            <input type="checkbox" disabled>
                        </div>
                        <div class="col-sm-6">
                            สำเนาบัตรประจำตัวประชาชนหรือสำเนาทะเบียนบ้านของ ผู้ยื่นคำขอแทน พร้อมร้บรองสำเนาถูกต้อง
                        </div>   
                        <div class="col-sm-3 text-right">
                            จำนวน <input type="number" name="sub_copy_c readonlyitizen_id"> ฉบับ 
                        </div>
                    </div>
                    <div class="form-group clearfix mt-0"> 
                        <div class="col-sm-2">
                            <span class="btn btn-raised btn-xs btn-default fileinput-button m-0">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>แนบไฟล์</span>
                                <input type="file" name="files">
                            </span>
                        </div>
                        <div class="col-sm-1 text-right pr-0">
                        <input type="checkbox" disabled>
                        </div>
                        <div class="col-sm-6">
                            หนังสือมอบอำนาจจากคนพิการหรือหลักฐานที่แสดงว่ามีส่วน เกี่ยวข้องกับคนพิการเนื่องจากเป็นผู้ปกครอง ผู้พิทักษ์ ผู้อนุบาล หรือผู้ดูแลคนพิการ (กรณี ผู้ยื่นคำขอแทน)
                        </div> 
                        <div class="col-sm-3 text-right">
                            จำนวน <input type="number" name="power_atto readonlyrney"> ฉบับ 
                        </div>
                    </div>
                </div>
                
                <div class="row">   
                    <div class="col-sm-offset-2 col-sm-10">
                        ข้าพเจ้า <input type="text" id="name" name="name" style="width: 65%;"> 
                        <input type="radio" class="chkType" value="1" name="type"> คนพิการ 
                        <input type="radio" class="chkType" value="2" name="type"> ผู้ยื่นคำขอแทน
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        ประเภทความพิการ <input type="text" id="disabilityType" name="disabilityType" style="width: 85%;">
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        บัตรประจำตัวคนพิการ/บัตรประชาชนเลขที่ <input type="text" id="citizenId" name="citizenId" style="width: 53%;"> 
                        ที่อยู่ที่สามารถติดต่อได้<br>
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        บ้านเลขที่ <input type="text" id="addressNo" name="addressNo" style="width: 10%;"> 
                        หมู่ที่ <input type="text" id="subDistricNo" name="subDistricNo" style="width: 10%;"> 
                        ซอย/ถนน <input type="text" id="stress" name="stress" style="width: 25%;"> 
                        ตำบล/แขวง <input type="text" id="subDistrict" name="subDistrict" style="width: 25%;"> 
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        อำเภอ/เขต <input type="text" id="district" name="district" style="width: 25%;"> 
                        จังหวัด <input type="text" id="province" name="province" style="width: 25%;"> 
                        รหัสไปรษณีย์ <input type="text" id="postcode" name="postcode" style="width: 25%;">
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        สถานศึกษา <input type="text" id="colledge" name="colledge" style="width: 58%;"> 
                        โทรศัพท์ <input type="text" id="phoneNumber" name="phoneNumber" style="width: 26%;">
                    </div>
                    <div class="col-sm-12 mb-20" style="padding-top: 5px;">
                        ที่อยู่อีเมล์ (e-mail address) <input type="text" id="email" name="email" style="width: 77%;">
                    </div>

                    <div class="col-sm-offset-2 col-sm-10" style="padding-top: 5px;">
                        มีความประสงค์ขอรับอุปกรณ์/เครื่องมือ เทคโนโลยีสิ่งอำนวยความสะดวกเพี่อการสื่อสาร 
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        ให้แก่ <input type="text" name="borrwTo" value="{{ \Auth::user()->title.' '.\Auth::user()->first_name.' '.\Auth::user()->last_name }}" style="width: 88%;">
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        เลขบัตรประจำตัวคนพิการ <input type="text" name="disabilityId" value="{{ \Auth::user()->pwd_id }}" style="width: 65%;">
                    </div>
                    
                    <div class="col-sm-12" style="padding-top: 5px;">
                        โดยมีวัตถุประสงค์เพื่อ (โปรดระบุ) <input type="text" name="objective1" style="width: 75%;" name="objective" required>
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        <input type="text" name="objective2" style="width: 100%;">
                    </div>
                    <div class="col-sm-12 mb-20" style="padding-top: 5px;">
                        ในรายการต่อไปนี้  <select name="accessorie_list" id="assets" style="width: 37%;">
                                    <option value="" selected disabled>- เลือก -</option>
                                    @foreach( $assets as $asset )
                                        <option value="{{ $asset->id }}">{{ $asset->description }}</option>
                                    @endforeach
                                    </select>
                        เลขที่อุปกรณ์ <input type="text" id="assetNo" name="accessorie_no" style="width: 40%;">
                    </div>
                    <div class="col-sm-offset-2 col-sm-12" style="padding-top: 5px;">
                        ข้าพเจ้าขอรับรองว่า ข้อความข้างต้นเป็นจริงทุกประการ เมื่อได้รับอุกปกรณ์/เครื่องมือเทคโนโลยีสารสนเทศและการสื่อสาร
                    </div>
                    <div class="col-sm-12" style="padding-top: 5px;">
                        หรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสารแล้ว จะนำไปใช้ให้เกิดประโยชน์ตาม
                        หลักเกณฑ์ วิธีการ และเงื่อนไขที่กระทรวงเทคโนโลยีสารสนเทศและการสื่อสารกำหนด
                    </div>
<fieldset id="buildyourform">
    <legend>Build your own form!</legend>
</fieldset>
<input type="button" value="Preview form" class="add" id="preview" />
<input type="button" value="Add a field" class="add" id="add" />
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

        $("#add").click(function() {
            var lastField = $("#buildyourform div:last");
            var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
            var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
            fieldWrapper.data("idx", intId);
            var fName = $("<input type=\"text\" class=\"fieldname\" />");
            var fType = $("<select class=\"fieldtype\" name=\"field" + intId + "\"><option value=\"checkbox\">Checked</option><option value=\"textbox\">Text</option><option value=\"textarea\">Paragraph</option></select>");
            var removeButton = $("<input type=\"button\" class=\"remove\" value=\"-\" />");
            removeButton.click(function() {
                $(this).parent().remove();
            });
            fieldWrapper.append(fName);
            fieldWrapper.append(fType);
            fieldWrapper.append(removeButton);
            $("#buildyourform").append(fieldWrapper);
        });

    });
</script>
@endsection
