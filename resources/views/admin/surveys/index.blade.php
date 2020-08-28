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
              <li class="active">รายการแบบสำรวจ</li>
          </ol>
      </div>
  </div>
</div>

<div class="boxs">
  <div class="boxs-body">
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
                |
                <a href="#" onclick="document.getElementById('deleteItem{{ $survey->id }}').submit()">ลบ</a>
                <form action="{{ route('admin.surveys.destroy', $survey->id) }}" id="deleteItem{{ $survey->id }}" method="POST">
                  @csrf @method('delete')
                </form>
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
  </div>
</div>

@endsection