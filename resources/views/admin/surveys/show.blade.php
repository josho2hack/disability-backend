@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')

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

@endsection