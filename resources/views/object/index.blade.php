@extends('layouts.admin')
@section('content')
    <!-- bradcome -->
    <div class="b-b mb-10">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h2 class="h3 m-0">รายการครุภัณฑ์ว่าง</h2>
                <small class="text-muted">&nbsp;</small>
            </div>
        </div>
    </div>

    <!-- cards row -->
    @foreach($data as $name => $assets)
        <div class="col-md-3 col-sm-6 col-xs-12">
            <section class="boxs boxs-simple text-center">
                <div class="boxs-widget l-green ">
                    <i class="fa fa-dropbox fa-3x"></i>
                </div>
                <div class="boxs-body">
                    <h2 class="m-0">{{ $assets }}</h2>
                    <span class="text-muted">{{ $name }}</span>
                </div>
            </section>
        </div>
    @endforeach
    
    
   

@endsection
