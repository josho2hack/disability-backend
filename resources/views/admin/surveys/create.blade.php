@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')

<div class="b-b mb-10">
  <div class="row">
      <div class="col-sm-6 col-xs-12">
          <h3 class="h3 m-0">12 ระบบจัดการหน้าเว็บไซต์</h3>
          <small class="text-muted">12.1 จัดการแบบสำรวจ</small>
      </div>
      <div class="btn-group pull-right">
          <ol class="breadcrumb">
              <li>
                  <a href="#"><i class="fa fa-home"></i> 12 ระบบจัดการหน้าเว็บไซต์</a>
              </li>
              <li>
                  <a href="#">12.1 จัดการแบบสำรวจ</a>
              </li>
              <li class="active">สร้างแบบสำรวจ</li>
          </ol>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-6">
    <section class="boxs">
      <div class="boxs-header">
          <h3 class="custom-font hb-cyan">
            <strong>ฟอร์มสร้างแบบสำรวจ</strong>
          </h3>
      </div>
    
      <div class="boxs-body">
        <form action="{{ route('admin.surveys.store') }}" method="POST">
          @csrf
          
          <div class="form-group">
            <label for=""></label>
            <select class="form-control" name="survey_type_id">
              <option value="1">แบบสำรวจความพึงพอใจ</option>
              {{-- @if ( $survey_types->isNotEmpty() )
                @foreach ( $survey_types as $type )
                  <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
              @endif --}}
            </select>
          </div>
    
          <div class="form-group">
            <label for="">ชื่อแบบสำรวจ</label>
            <input class="form-control" type="text" name="name" placeholder="">
          </div>
        
          <div class="form-group">
            <label for="">จำนวนคำถาม</label>
            <input class="form-control" type="number" name="number_of_question" placeholder="">
          </div>
        
          <div class="form-group">
            <label for="">วันที่เริ่ม</label>
            <input class="form-control" type="date" name="start_date" placeholder="">
          </div>
        
          <div class="form-group">
            <label for="">วันที่สิ้นสุด</label>
            <input class="form-control" type="date" name="end_date" placeholder="">
          </div>
        
          <button class="btn btn-primary btn-raised">สร้างโพล</button>
          
        </form>
      </div>
    </section>
  </div>
</div>

@endsection