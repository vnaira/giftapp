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
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<body>
<div id="app">
    @section('header')
       @include('layouts.header')
    @endsection
    @yield('header')
          <div class="container marketing">

            <div class="row">
                <div class="col-md-12">


                @section('menu-bar')
                    <div class="row">
                        <div class="col-md-12">
                            <ul id="navigation-user" class="list-inline">
                                <li class="list first">
                                    <a title="gifts I'm asking for" href="/list/" class="selected">@upperText(my lists)</a>
                                </li>
                                <li class="gift">
                                    <a title="people I'm shopping for" data-toggle="modal" data-target="#newList">@upperText(Create new list)</a>
                                </li>
                                <li class="group">
                                    <a title="who can see each other's lists" href="/group/">@upperText(my preferences)</a>
                                </li>
                                <li class="event">
                                    <a title="upcoming gift occasions" href="/event/">@upperText(FRIENDS LIST)</a>
                                </li>
                                <li class="settings">
                                    <a title="settings" href="/settings/">@upperText(settings)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endsection
                @yield('menu-bar')
                </div>
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
@yield('additional-scripts')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/datepicker.js') }}"></script>
</body>
</html>
