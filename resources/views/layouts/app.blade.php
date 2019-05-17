<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GiftApplication') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @section('header')
       @include('layouts.header')
    @endsection
    @yield('header')
          <div class="container marketing">

            <div class="row">
                @section('header-image')
                    <img src="{{ asset('assets/img/bg.jpg') }}" alt="" class="img-responsive">
                @endsection
                @yield('header-image')
            </div>
            <div class="row">
                @section('sidebar')
                    @endsection
                @yield('sidebar')
                <div class="col-md-3">

                </div>

                    @yield('content')




            </div>
        </div><!-- /.container -->


</div>
@section('footer')
    @include('layouts.footer')
@endsection
@yield('footer')
