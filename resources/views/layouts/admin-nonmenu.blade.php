<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.css') }}">
    @yield('header')
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-css.css') }}" rel="stylesheet">
    <style>
        a:link {
            text-decoration: none;
            color: #337ab7;
        }

        a:visited {
            text-decoration: none;
            color: #337ab7;
        }

        a:hover {
            text-decoration: none;
            color: #337ab7;
        }

        a:active {
            text-decoration: none;
            color: #337ab7;
        }

    </style>
</head>

        <!-- BODY CONTENT -->
                @yield('content')
</html>
