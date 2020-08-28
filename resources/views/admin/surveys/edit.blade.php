@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')

<x-alert />

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
              <li class="active">แก้ไขแบบสำรวจ</li>
          </ol>
      </div>
  </div>
</div>

<div class="boxs">
  <div class="boxs-body">
    <div>
      <h2>{{ $survey->name }} จำนวน {{ $survey->number_of_question }} ข้อ</h2>
    </div>
    
    <form action="{{ route('admin.questions.updates', [$survey->id]) }}" method="POST">
      @csrf
    
      @foreach ( $survey->questions as $question )
        <div>
          <input class="form-control" type="text" name="questions[{{ $question->id }}]" value="{{ $question->text }}" placeholder="คำถามข้อ {{ $loop->iteration }}">
        </div>
      @endforeach
    
      <button class="btn btn-primary btn-raised">บันทึก</button>
    </form>
  </div>
</div>

@endsection