@extends('layouts.login')
@section('content')
    <div class="container">
        @if (session('confirmation'))
            <div class="alert alert-info" role="alert">
                {!! session('confirmation') !!}
            </div>
        @endif

        @if ($errors->has('confirmation') > 0)
            <div class="alert alert-danger" role="alert">
                {!! $errors->first('confirmation') !!}
            </div>
        @endif
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center"><strong>{{ __('เข้าสู่ระบบ') }}</strong></div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('อีเมล์') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-left">{{ __('รหัสผ่าน') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class=" form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                                <div class="col-md-6 checkbox">
                                    <label class="form-check-label" for="remember">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('จำรหัสผ่าน') }}
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-raised btn-primary">
                                        {{ __('เข้าสู่ระบบ') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-raised btn-link" href="{{ route('password.request') }}">
                                            {{ __('ลืมรหัสผ่าน') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
