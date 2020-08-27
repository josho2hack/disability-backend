@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card">
         <div class="card-body">
            <div class="text-center">
                <h3>แบบคำขอยืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสารหรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร ตามกฎกระทรวงฯ</h3>
            </div>
            <br><br>
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

                <div class="form-inline">
                  <div class="form-group mb-2">
                    <input for="staticEmail2" class="form-check-input" type="checkbox">
                    <label style="color:#000000;" type="text" readonly class="form-control-plaintext" id="staticEmail2">
                        สำเนาบัตรประจำตัวคนพิการ พร้อมรับรองสำเนาถูกต้อง
                    </label>
                  </div>
                  <div class="form-group mx-sm-3 mb-2">
                    <input type="number" class="form-control" id="inputPassword2" placeholder="จำนวน">
                  </div>
                </div>
                <div class="form-inline">
                  <div class="form-group mb-2">
                    <input for="staticEmail2" class="form-check-input" type="checkbox">
                    <label style="color:#000000;" type="text" readonly class="form-control-plaintext" id="staticEmail2">
                        สำเนาทะเบียนบ้านของคนพิการ พร้อมรับรองสำเนาถูกต้อง
                    </label>
                  </div>
                  <div class="form-group mx-sm-3 mb-2">
                    <input type="number" class="form-control" id="inputPassword2" placeholder="จำนวน">
                  </div>
                </div>
                <div class="form-inline">
                  <div class="form-group mb-2">
                    <input for="staticEmail2" class="form-check-input" type="checkbox">
                    <label style="color:#000000;" type="text" readonly class="form-control-plaintext" id="staticEmail2">
                        สำเนาเอกสารรับรองการเข้ารับการฝึกอบรมตามหลักสูตรที่กระทรวงเทคโนโลยีสารสนเทศและการสื่อสารกำหนดพ้อมรับรองสำเนาถูกต้อง (ถ้ามี)
                    </label>
                  </div>
                  <div class="form-group mx-sm-3 mb-2">
                    <input type="number" class="form-control" id="inputPassword2" placeholder="จำนวน">
                  </div>
                </div>
                <div class="form-inline">
                  <div class="form-group mb-2">
                    <input for="staticEmail2" class="form-check-input" type="checkbox">
                    <label style="color:#000000;" type="text" readonly class="form-control-plaintext" id="staticEmail2">email@example.com</label>
                  </div>
                  <div class="form-group mx-sm-3 mb-2">
                    <input type="number" class="form-control" id="inputPassword2" placeholder="จำนวน">
                  </div>
                </div>
                <div class="form-inline">
                  <div class="form-group mb-2">
                    <input for="staticEmail2" class="form-check-input" type="checkbox">
                    <label style="color:#000000;" type="text" readonly class="form-control-plaintext" id="staticEmail2">email@example.com</label>
                  </div>
                  <div class="form-group mx-sm-3 mb-2">
                    <input type="number" class="form-control" id="inputPassword2" placeholder="จำนวน">
                  </div>
                </div>
                  

        </div>  
    </div>
</div>
@endsection
