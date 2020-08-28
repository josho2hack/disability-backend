@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')

<h3>
  11.4 จัดการแบบสำรวจ
</h3>

<div class="text-right">
  <a href="{{ route('admin.surveys.create') }}" class="btn btn-primary btn-raised">สร้างแบบสำรวจ</a>
</div>

<table id="searchTextResults" data-filter="#filter" data-page-size="25" class="footable table table-custom table-hover">
  <thead>
    <tr>
      <th>ลำดับที่</th>
      <th>กลุ่มหลัก</th>
      <th colspan=3>ดำเนินการ</th>
    </tr>
  </thead>
  <tbody>
    @if ( $surveys->isNotEmpty() )
      @foreach ( $surveys as $survey )
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $survey->name }}</td>
          <td>
            <a href="{{ route('admin.surveys.show', $survey->id) }}">ดู</a>
            |
            <a href="{{ route('admin.surveys.edit', $survey->id) }}">แก้ไข</a>
          </td>
        </tr>
      @endforeach
    @endif
  </tbody>
  <tfoot class="hide-if-no-paging">
    <tr>
      <td colspan="3" class="text-right">
        <ul class="pagination">
        </ul>
      </td>
    </tr>
  </tfoot>
</table>

@endsection