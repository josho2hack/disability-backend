@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
  <div>
    {{ $survey->name }} จำนวน {{ $survey->number_of_question }} ข้อ
  </div>

  <form action="{{ route('admin.questions.store', $survey->id) }}" method="POST">
    @csrf
    @for ( $i = 0; $i < $survey->number_of_question; $i++ )
      <div>
        <input class="form-control" type="text" name="questions[]" placeholder="คำถามข้อ {{ $i+1 }}">
      </div>
    @endfor

    <button class="btn btn-primary btn-raised">ยืนยัน</button>
  </form>
@endsection