@extends('layouts.shownews')
@section('content')

@foreach ($news as $item)
<section class="boxs boxs-simple">
    <div class="boxs-body p-5">
        <h2>{{ $item["title"] }}</h2>
        <div role="tabpanel">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="mypost">
                    <div class="wrap-reset">
                        <div class="mypost-list mt-20">
                            <div class="post-box">
                                <div class="post-img text-center">
                                    <img src="{{ asset('uploads/news/'.$item['cover_name']) }}" class="{{ $item["title"] }}" alt="">
                                </div>
                                <div class="panel panel-default">
                                    <h4 class="mt-20">{{ $item["title"] }}</h4>
                                    <p class="mb-0">{{ $item["description"] }}</p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /boxs body -->
</section>

@endforeach


@endsection