@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card">
         <div class="card-body">
            <div class="text-center">
                <h3>แบบคำขอยืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสารหรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร ตามกฎกระทรวงฯ</h3>
            </div>
            <br><br>
            <div class="text-right">
              เขียนที่ {{ $form->write_at }}

              <br><br>
              วันที่  {{ $form->created_at->format('d') }}  เดือน {{ $form->created_at->format('m') }}  ปี {{ $form->created_at->format('Y')+543 }}  
            </div>
            <div class="text-left">
                <div class="row">
                    <div class="col-sm-1">
                        <h4>เรื่อง</h4>
                    </div>
                    <div class="col-sm-11">
                        <h4>ขอยืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสารหรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร ตามกฎกระทรวงฯ</h4>   
                    </div>  
                </div>
                <div class="row">
                    <div class="col-sm-1">
                        <h4>เรียน</h4>
                    </div>
                    <div class="col-sm-11">
                        <h4>ประธานคณะอนุกรรมการส่งเสริมและพัฒนาการเข้าถึงและใช้ประโยชน์จากข้อมูลข่าวสาร การสื่อสารบริการโทรคมนาคม เทคโนโลยีสารสนเทศและการสื่อสาร เทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสารและบริการสื่อสารสาธารณะสำหรับคนพิการ ตามกฎกระทรวงฯ</h4>   
                    </div>  
                </div>
            </div>
            <br><br>
            <div class="text-left">
               <h4> สิ่งที่ส่งมาด้วยเอกสารหลักฐาน </h4>
            </div>
              <div class="form-group">
                  <label style="color:#000000;" class="col-sm-8 control-label text-left">สำเนาบัตรประจำตัวคนพิการ พร้อมรับรองสำเนาถูกต้อง</label>
                  <div class="col-sm-4">
                      <input type="number" class="form-control" value="{{ $form->copy_card }}" readonly >
                      {{-- <p class="help-block mb-0">Ex: โปรแกรมพจนานุกรมสำหรับคนพิการ</p> --}}
                  </div>
              </div>
              <div class="form-group">
                <label for="name" style="color:#000000;" class="col-sm-8 control-label text-left">สำเนาทะเบียนบ้านของคนพิการ พร้อมรับรองสำเนาถูกต้อง</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" value="{{ $form->house_res }}" readonly >
                    {{-- <p class="help-block mb-0">Ex: โปรแกรมพจนานุกรมสำหรับคนพิการ</p> --}}
                </div>
            </div>
            <div class="form-group">
                <label for="name" style="color:#000000;" class="col-sm-8 control-label text-left">สำเนาเอกสารรับรองการเข้ารับการฝึกอบรมตามหลักสูตรที่กระทรวงเทคโนโลยีสารสนเทศและการสื่อสารกำหนด พร้อมรับรองสำเนาถูกต้อง (ถ้ามี)</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" value="{{ $form->copy_train }}" readonly >
                    {{-- <p class="help-block mb-0">Ex: โปรแกรมพจนานุกรมสำหรับคนพิการ</p> --}}
                </div>
            </div>
            <div class="form-group">
                <label for="name" style="color:#000000;" class="col-sm-8 control-label text-left">สำเนาบัตรประจำตัวประชาชนหรือสำเนาทะเบียนบ้านของ ผู้ยื่นคำขอแทน พร้อมรับรองสำเนาถูกต้อง</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" value="{{ $form->sub_copy_citizen_id }}" readonly >
                    {{-- <p class="help-block mb-0">Ex: โปรแกรมพจนานุกรมสำหรับคนพิการ</p> --}}
                </div>
            </div>
            <div class="form-group">
                <label for="name" style="color:#000000;" class="col-sm-8 control-label text-left">หนังสือมอบอำนาจจากคนพิการหรือหลักฐานที่แสดงว่ามีส่วนเกี่ยวข้องกับคนพิการเนื่องจากเป็นผู้ปกครอง ผู้พิทักษ์ ผู้อนุบาล หรือผู้ดูและคนพิการ (กรณี ผู้ยื่นขอแทน)</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" value="{{ $form->power_attorney }}" readonly >
                    {{-- <p class="help-block mb-0">Ex: โปรแกรมพจนานุกรมสำหรับคนพิการ</p> --}}
                </div>
            </div>
            <br><br><br> <br> <br><br><br>
            <div class="form-group">
                <label style="color:#000000;" class="col-sm-12 control-label text-left">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้าพเจ้า นาย/นาง/นางสาว {{ $form->user->first_name }} {{ $form->user->last_name }} 
                  <label class="radio-inline">
                      <input type="radio" name="type" @if($form->type == 1) checked @endif> <p style="color:#000000;">คนพิการ</p>
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="type" @if($form->type == 2) checked @endif><p style="color:#000000;">ผู้ยื่นคำขอแทน</p>
                  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  ประเภทความพิการ...@if( $user->disability_type_id == null)..................@else.......{{ $user->disability->description }}..@endif
                  ..............ปัตรประจำตัวคนพิการ {{ $user->pwd_id }} ที่อยู่ที่สามารถติดต่อได้
                </label>
            </div>
            <div class="form-group">
                <label style="color:#000000;" class="col-sm-12 control-label text-left">
                   บ้านเลขที่.....................{{ $form->address->house_no }}................หมู่ที่..............{{ $form->address->village_no }}............ซอย/ถนน.............{{ $form->address->lane }}............. ตำบล/แขวง...............{{ $form->address->sub_district }}....................<br>
                   อำเภอ/เขต..............{{ $form->address->district }}.................จังหวัด.....................{{ $form->address->province }}........................รหัสไปษณีย์..................{{ $form->address->postal_code }}...................<br>
                   สถานศึกษา.........................................{{ $form->address->edu_place }}.............................................โทรศัพท์....................{{ $form->address->tel }}..............................................<br>ที่อยู่อีเมล์ (e-mail address)...................{{ $user->email }}.......................................................................................................................
                  </label>
            </div>
            <div class="form-group">
                <label style="color:#000000;" class="col-sm-12 control-label text-left">
                  มีความประสงค์ขอยืมอุปกรณ/เครื่องมือ เทคโนโลยีสารสนเทศและการสื่อส่ารหรือ เทตโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสารให้ แก่ ................................... (ชื่อ-นามสกุลคนพิการ)...................... <br>
                  เลขบัตรประจำตัวคนพิการ ....................................................................................... ที่อยู่ที่สามารถติดต่อได้ <br>
                  บ้านเลขที่............................................หมู่ที่............ซอย/ถนน................................................ ตำบล/แขวง................................................. <br>
                  อำเภอ/เขต................................................................ จังหวัด.................................................. รหัสไปรษณีย์................................................ <br>
                  สถานศึกษา..........................................................................................................................โทรศัพท์................................................................<br>
                  ที่อยู่อีเมล์ (e-mail address).....................................................................................................................................................................<br>
                  โดยมีวัฒถุประสงค์เพื่อ (โปรดระบุ)................................................................................................................................................................<br>
                  ในรายการอุปกรณ์.............................................................................................. เลขที่อุปกรณ์........................................................................<br>
                  </label>
            </div>
            <div class="form-group">
                <label style="color:#000000;" class="col-sm-12 control-label text-left">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้าาพเจ้าขอรับรองว่า ข้อความข้างต้นเป็นจริงทุกประการ เมื่อได้รับอุปกรณ์/เครื่องมือเทคโนโลยีสารสนเทศและการสื้่อสารหรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสารแล้ว จะนำไปใช้ให้เกิดประโยชน์ และได้ยอมรับ กฎเกณฑ์ วิธีการ และเงื่อนไขที่กระทรวงเทคโนโลยีสารสนเทศและการสื่อสารกำหนด
                  </label>
            </div>
            <br><br><br> <br> <br> <br><br><br><br> <br><br><br>
            <div class="text-right">
              ขอแสดงความนับถือ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <br><br>
              ลงชื่อ....................................(คนพิการ/ผู้ยื่นคำแทน)<br>
              (..........................................................)  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
                  

        </div>  
    </div>
</div>
@endsection
