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

    @yield('header')

    <!-- project main css files -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
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

<body id="falcon" class="main_Wrapper">
    <div id="wrap" class="animsition">

        @include('layouts.admin-header')

        <div id="controls">
            @guest
                @include('layouts.admin-leftmenu')
            @else
                @if (Auth::user()
            ->roles()
            ->first()->name == 'User')
                    <style>
                        table{
                            font-size: 1.2em;
                        }
                        span {
                            font-size: 1.2em;
                        }

                        #header {
                        @if (Auth::user()->disability_type_id == 1)background-color: green;
                        @elseif(Auth::user()->disability_type_id==2) background-color: brown;
                        @elseif(Auth::user()->disability_type_id==3) background-color: purple;
                        @elseif(Auth::user()->disability_type_id==4) background-color: orange;
                        @elseif(Auth::user()->disability_type_id==5) background-color: #c9c900;
                        @elseif(Auth::user()->disability_type_id==6) background-color: pink;
                        @elseif(Auth::user()->disability_type_id==7) background-color: blue;
                            @endif
                        }

                    </style>
                    @include('layouts.user-leftmenu')

                @else
                    <style>
                        #leftmenu,
                        #navigation {
                            @if (Auth::user()->role()->id == 1)background-color: #d9cde4;
                            @elseif(Auth::user()->role()->id == 2)background-color: #FFF6ED;
                            @elseif(Auth::user()->role()->id==3) background-color: #F4FCF1;
                            @endif
                        }

                        #header {
                            @if (Auth::user()->role()->id == 2)background-color: #f5710c;
                            @elseif(Auth::user()->role()->id==3) background-color: #008000;
                            @endif
                        }

                    </style>
                    @include('layouts.admin-leftmenu')
                @endif
            @endguest

            {{-- @include('layouts.admin-rightmenu') --}}
        </div>
        <!-- CONTENT -->
        <section id="content">
                @yield('content')
        </section>

    </div>

    <!-- Vendor JavaScripts -->
    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>

    @yield('footer')

    <!-- page Js -->
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>

    <!-- Page Specific Scripts -->
    @yield('footer-script')
    <!--/ Page Specific Scripts -->
</body>

</html>
