@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')

<h3>11.4 จัดการแบบสำรวจ / แก้ไขแบบสำรวจ</h3>

<div>
  <h2>{{ $survey->name }} จำนวน {{ $survey->number_of_question }} ข้อ</h2>
</div>

<form>
{{-- <form action="{{ route('admin.questions.updates', $survey->id) }}" method="POST"> --}}
  @csrf
  @method('put')

  @foreach ( $survey->questions as $question )
    <div>
      <input class="form-control" type="text" name="questions[{{ $question->id }}]" value="{{ $question->text }}" placeholder="คำถามข้อ {{ $loop->iteration }}">
    </div>
  @endforeach

  <button class="btn btn-primary btn-raised">บันทึก</button>
</form>

@endsection