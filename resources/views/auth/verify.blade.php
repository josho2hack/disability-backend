@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ยืนยันอีเมล์การสมัคร') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('กำลังส่งอีเมล์เพื่อยืนยันการสมัครอีกครั้ง') }}
                        </div>
                    @endif

                    {{ __('โปรดตรวจสอบอีเมล์ เพื่อยืนยันการสมัคร') }}
                    {{ __('หากยังไม่ได้รับอีเมล์ยืนยันการสมัครโปรคคลิกลิงค์ด้านล่าง') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('ส่งอีเมล์เพื่อยืนยันการสมัครอีกครั้ง') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
