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
          <li class="active">แบบสำรวจ</li>
        </ol>
      </div>
  </div>
</div>

<div class="boxs">
  <div class="boxs-body">
    <div>
      <h2>{{ $survey->name }} จำนวน {{ $survey->number_of_question }} ข้อ</h2>
    </div>
  
    @if ( $survey->questions->isNotEmpty() )
      @foreach ( $survey->questions as $question )
        <div class="mb-4">
          <div class="question mb-2">
            <strong>{{ $loop->iteration }}. {{ $question->text }}</strong>
          </div>
          <div class="question-answer">
            <div style="padding-left: 2rem;">
              <input type="radio" name="{{ $question->id }}" value="1">
              <label for="male">มากที่สุด</label><br>
            </div>
  
            <div style="padding-left: 2rem;">
              <input type="radio" name="{{ $question->id }}" value="2">
              <label for="female">มาก</label><br>
            </div>
  
            <div style="padding-left: 2rem;">
              <input type="radio" name="{{ $question->id }}" value="3">
              <label for="other">ปานกลาง</label><br>
            </div>
  
            <div style="padding-left: 2rem;">
              <input type="radio" name="{{ $question->id }}" value="4">
              <label for="other">น้อย</label><br>
            </div>
  
            <div style="padding-left: 2rem;">
              <input type="radio" name="{{ $question->id }}" value="5">
              <label for="other">น้อยที่สุด</label><br>
            </div>
          </div>
        </div>
      @endforeach
    @endif
  </div>
</div>

@endsection