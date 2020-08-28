@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')

<h3>11.4 จัดการแบบสำรวจ / สร้างแบบสำรวจ</h3>

<form action="{{ route('admin.surveys.store') }}" method="POST">
  @csrf

  <div>
    <select class="form-control" name="survey_type_id">
      <option value="1">แบบสำรวจความพึงพอใจ</option>
      {{-- @if ( $survey_types->isNotEmpty() )
        @foreach ( $survey_types as $type )
          <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
      @endif --}}
    </select>
  </div>
  
  <div>
    <input class="form-control" type="text" name="name" placeholder="ชื่อโพล">
  </div>

  <div>
    <input class="form-control" type="number" name="number_of_question" placeholder="จำนวนคำถาม">
  </div>

  <div>
    <input class="form-control" type="date" name="start_date" placeholder="วันที่เริ่ม">
  </div>

  <div>
    <input class="form-control" type="date" name="end_date" placeholder="วันที่สิ้นสุด">
  </div>

  <button class="btn btn-primary btn-raised">สร้างโพล</button>
</form>

@endsection