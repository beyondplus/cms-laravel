<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
    <title>@if (trim($__env->yieldContent('title'))) @yield('title') - Beyond Plus CMS @endif Beyond Plus CMS </title>
    <script src="{{ asset("/misc/beyondplus.js")}}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset("/assets/framework7/css/main.css") }}">
    <link rel="stylesheet" href="https://cdn.bootcss.com/framework7/2.2.5/css/framework7.css">
    <link rel="stylesheet" type="text/css" href="https://framework7io.github.io/framework7-template-vue-simple/css/icons.css">
    <script>
      @if(site_information('mobile_theme')->option_value != 'none')
          bp_mobile_screen("{{ url('/') }}")
      @endif
    </script>

</head>
<body>
    <!-- Sidebar -->
   <!-- @1include('layouts/framework7/slider')  -->

    @yield('content')

    <!-- REQUIRED JS SCRIPTS -->
    
     <script type="text/javascript" src="/js/app.js"></script>
     <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
     </script>

     @stack('scripts')

</body>
</html>
