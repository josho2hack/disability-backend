@extends('layouts.admin')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
@endsection

@section('content')
    <x-alert />

  <div class="b-b mb-10">
    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <h3 class="h3 m-0">12.1 จัดการข่าวสาร</h3>
            <small class="text-muted">ข่าวสารทั้งหมด</small>
        </div>
        <div class="btn-group pull-right">
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-home"></i> 12 ระบบจัดการหน้าเว็บไซต์</a>
                </li>
                <li class="active">12.1 จัดการข่าวสาร</li>
            </ol>
        </div>
    </div>
  </div>

  <section class="boxs">
    <div class="boxs-header">
      <h3 class="custom-font hb-cyan">
        <strong>รายการข่าวสาร</strong>
      </h3>
    </div>

    <div class="boxs-body">
      <div class="text-right">
        <a href="{{ route('admin.news.create') }}" class="btn btn-primary btn-raised">สร้างข่าวสาร</a>
      </div>
      
      <table id="searchTextResults" data-filter="#filter" data-page-size="25"
          class="footable table table-custom table-hover">
          <thead>
              <tr>
                  <th>#</th>
                  <th>หัวข้อ</th>
                  <th>จัดการ</th>
              </tr>
          </thead>
          <tbody>
            @if ( $news->isNotEmpty() )
                @foreach ( $news as $item )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <a href="{{ route('admin.news.edit', $item->id) }}">แก้ไข</a>
                            |
                            <a href="#" onclick="document.getElementById('deleteItem{{ $item->id }}').submit()">ลบ</a>
                            <form action="{{ route('admin.news.destroy', $item->id) }}" id="deleteItem{{ $item->id }}" method="POST">
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

    <div class="boxs-footer">
    </div>
  </section>

@endsection

@section('footer')
    <script src="{{ asset('assets/js/vendor/footable/footable.all.min.js') }}"></script>

    <!--  Page Specific Scripts  -->
    <script>
        $(function() {
            $('.footable').footable();

        });

        // $(document).on('click', '.del', function(e) {
        //     e.preventDefault();
        //     var form = e.target.form; // storing the form
        //     swal({
        //         title: "คุณต้องการลบข้อมูลใช่หรือไม่?",
        //             text: "การลบจะไม่สามารถกู้คืนได้ คุณต้องสร้างใหม่",
        //             type: "warning",
        //             showCancelButton: true,
        //             confirmButtonColor: '#DD6B55',
        //             confirmButtonText: 'ไช่, ลบข้อมูล!',
        //             cancelButtonText: "ไม่, ยกเลิก",
        //             closeOnConfirm: false
        //         },
        //         function() {
        //             form.submit();
        //             //swal("ลบข้อมูลเรียบร้อยแล้ว", "ข้อมูลของคุณถูกลบแล้ว", "success");
        //         });
        // });

    </script>
@endsection
