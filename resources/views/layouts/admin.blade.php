<!doctype html>
<html class="no-js " lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ICT for Disability') }}</title>

    <link rel="icon" type="image/ico" href="{{ asset('assets/images/favicon.ico') }}" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animsition.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/sweetalert/sweetalert2.css') }}">

    @yield('header')

    <!-- project main css files -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body id="falcon" class="main_Wrapper">
    <div id="wrap" class="animsition">

        @include('layouts.admin-header')

        <div id="controls">
            @include('layouts.admin-leftmenu')
            @include('layouts.admin-rightmenu')
        </div>
        <!-- CONTENT -->
        <section id="content">
            <div class="page dashboard-page">
                @yield('content')
            </div>
        </section>

    </div>

    @include('layouts.admin-footer')

    @yield('footer')
</body>

</html>
