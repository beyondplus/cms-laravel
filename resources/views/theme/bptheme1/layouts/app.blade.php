<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
    <title>@if (trim($__env->yieldContent('title'))) @yield('title') - Beyond Plus CMS @endif Beyond Plus CMS </title>
    
    <link rel="stylesheet" type="text/css" href="{{ asset("/node_modules/bootstrap/dist/css/bootstrap.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("/assets/bptheme1/css/main.css") }}">
   
    <style >
    //div {border:1px solid blue;} </style>
</head>
<body>

    <!-- Header -->

    @include('theme.bptheme1.layouts.header')

    <!-- Sidebar -->
   <!-- @1include('layouts/bptheme1/slider')  -->

    @yield('content')

    <!-- Footer -->
    @include('theme.bptheme1.layouts.footer')


<!-- REQUIRED JS SCRIPTS -->

    <script src="{{ asset ("/bower_components/adminlte/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
    <script src="{{ asset("/assets/bptheme1/js/main.js") }}"></script>
    <script src="{{ asset("/node_modules/bootstrap/dist/js/bootstrap.min.js") }}"></script>

</body>
</html>
