<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PaccoSpedito') }}</title>


    <title>PaccoSpedito</title>
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link rel='stylesheet' href="{{ asset('assets/css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
<div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="material-icons">view_week</i>
        </a>
        @yield("content")
<!-- page-content" -->
</div>
<!-- page-wrapper -->

<!-- Scripts -->


<!-- page-wrapper -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- <script src='js/jquery-3.4.1.min.js'></script> -->
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5.4.2-90/tinymce.min.js"></script>
<script src="{{asset('assets/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
@yield('scripts')
@stack('script')

</body>
</html>
