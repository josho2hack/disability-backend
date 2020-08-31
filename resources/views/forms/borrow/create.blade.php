@extends('layouts.admin')
@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="col-sm-6 col-xs-12">
            <h3 class="h3 m-0">6.1 แบบฟอร์มยืม</h3>
        </div>
    </div>

    <!-- row -->
    <div class="row">
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
                        <div class="form-group">
                            <label for="name" class="col-sm-8 control-label text-left">เขียนที่</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="write_at" placeholder="">
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
                                {{-- <a href="{{ route('maingroups.index') }}" class="btn btn-raised btn-default">ยกเลิก</a> --}}
                            </div>
                        </div>
                    </form>
                </div>
                <div class="boxs-footer">
                </div>
            </section>
        </div>
    </div>
@endsection
