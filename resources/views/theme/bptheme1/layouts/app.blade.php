<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
    <title>@if (trim($__env->yieldContent('title'))) @yield('title') - Beyond Plus CMS @endif Beyond Plus CMS </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="{{ asset("/misc/beyondplus.js")}}"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="{{ asset("/assets/bptheme1/css/main.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("/assets/bptheme1/css/menu.css") }}">
    
    <script>
        // Theme switching 
        @if(site_information('mobile_theme')->option_value != 'none')
            bp_desktop_screen("{{ url('/') }}")
        @endif
    </script>

</head>
<body>
    <div class="container-fluid">
    <!-- Header -->

    @include('theme.bptheme1.layouts.header')

    <!-- Sidebar -->
   <!-- @1include('layouts/bptheme1/slider')  -->

    @yield('content')

    <!-- Footer -->
    @include('theme.bptheme1.layouts.footer')
    </div>

    <!-- REQUIRED JS SCRIPTS -->

    <script type="text/javascript">
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
     </script>
     
    @stack('scripts')
    

</body>
</html>
