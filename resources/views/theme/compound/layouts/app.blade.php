<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Beyond Plus  </title>
  <meta name="keywords" content="beyondplusmyanmar.com, beyondplus, beyondplus myanmar, PHP, JAVA, Android, Beyond Plus in Myanmar">
  <meta name="description" content="Beyond Plus, Yangon,  web development company, specialises in creative web design,
   web development and computer training centre."/>
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/compound/img/favicon.ico')}}" >
  <link href="{{ url('assets/compound/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('assets/compound/css/animate.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('assets/compound/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('assets/compound/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('assets/compound/js/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('assets/compound/js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('assets/compound/js/plugins/bootstrap.summernote/summernote.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('assets/compound/js/plugins/datepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('assets/compound/js/plugins/select2/select2.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('assets/compound/css/mango.css') }}" rel="stylesheet" type="text/css" />

  <script type="text/javascript" src="{{ url('assets/compound/js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/compound/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/compound/js/fancybox/source/jquery.fancybox.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/compound/js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7s') }}"></script>
  <script type="text/javascript" src="{{ url('assets/compound/js/fancybox/source/jquery.fancybox.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/compound/js/plugins/select2/select2.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/compound/js/jquery.mixitup.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/compound/js/plugins/jquery.jCombo.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/compound/js/plugins/bootstrap.summernote/summernote.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/compound/js/mango.js') }}"></script>
  <script type="application/ld+json">
  {
    "@context" : "http://schema.org",
    "@type" : "IT Training & Service Centre",
    "name" : "Beyond Plus",
    "url" : "http://www.beyondplus.net/",
    "sameAs" : [
      "https://twitter.com/bplusmyanmar",
      "https://plus.google.com/+bplusmyanmar",
      "https://www.facebook.com/beyondpluscentre"
    ]
  }
  </script>

  	</head>
<body>


    <!-- Header -->

    @include('theme.compound.layouts.header')

    <!-- Sidebar -->
   <!-- @1include('layouts/compound/slider')  -->

    @yield('content')

    <!-- Footer -->
    @include('theme.compound.layouts.footer')


<!-- REQUIRED JS SCRIPTS -->

    <script src="{{ asset("/assets/compound/js/main.js") }}"></script>
    <script src="{{ asset("/node_modules/bootstrap/dist/js/bootstrap.min.js") }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
          $('.bxslider').bxSlider();
        });
    </script>
</body>
</html>
