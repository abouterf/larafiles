<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Admin Panel</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-rtl.min.css') }}">
    <link href="{{ URL::asset('css/admin-custom.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/fontawesome.min.css') }}" rel="stylesheet">
</head>
<body>
@include('partials.nav')
<div class="container" style="text-align: right">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <br>
            <div class="card">
                <div class="card-header">
                    {{isset($panel_title)?$panel_title:''}}
                </div>
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ URL::asset('js/jquery.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</body>
</html>