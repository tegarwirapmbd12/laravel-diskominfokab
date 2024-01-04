<!DOCTYPE html>
<html lang="zxx">

   <head>
      <!--Meta Tags-->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content=""/>
      <meta name="keywords" content=""/>

      <!--Favicons-->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('nekaton/assets/img/favicon.ico') }}" />

      <!--Page Title-->
      <title>Nekaton - Responsive School Template</title>

      <!-- Bootstrap core CSS -->
      <link href="{{ asset('nekaton/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Google Font  -->
      <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800|Roboto:300,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
      <!-- Icofont CSS -->
      <link rel="stylesheet" href="{{ asset('nekaton/assets/css/icofont.min.css') }}">
      <!-- Meanmenu CSS -->
      <link rel="stylesheet" href="{{ asset('nekaton/assets/css/meanmenu.min.css') }}">
      <!--- owl carousel Css-->
      <link rel="stylesheet" href="{{ asset('nekaton/assets/owlcarousel/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('nekaton/assets/owlcarousel/css/owl.theme.default.min.css') }}">
      <!-- animate CSS -->
      <link rel="stylesheet" href="{{ asset('nekaton/assets/css/animate.css') }}">
      <!-- venobox -->
      <link rel="stylesheet" href="{{ asset('nekaton/assets/venobox/css/venobox.min.css') }}" />
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset('nekaton/assets/css/style.css') }}">
      <!-- Responsive  CSS -->
      <link rel="stylesheet" href="{{ asset('nekaton/assets/css/responsive.css') }}">
   </head>

   <body id="main">

      <!-- START PRELOADER -->
      <div id="page-preloader">
         <div class="loader"></div>
         <div class="loa-shadow"></div>
      </div>
      <!-- END PRELOADER -->

      <!-- START HEADER SECTION -->
      @include('layouts.header')
      <!-- END HEADER SECTION -->

      <!-- START SLIDER SECTION -->
      @include('layouts.slider')
      <!-- END SLIDER SECTION  -->

      <!-- START CONTENT -->
      @yield('content')
      <!-- END CONTENT -->

      <!-- START FOOTER -->
      @include('layouts.footer')
      <!-- END FOOTER -->

      <!-- Latest jQuery -->
      <script src="{{ asset('nekaton/assets/js/jquery-2.2.4.min.js') }}"></script>
      <!-- popper js -->
      <script src="{{ asset('nekaton/assets/bootstrap/js/popper.min.js') }}"></script>
      <!-- Latest compiled and minified Bootstrap -->
      <script src="{{ asset('nekaton/assets/bootstrap/js/bootstrap.min.js') }}"></script>
      <!-- Meanmenu Js -->
      <script src="{{ asset('nekaton/assets/js/jquery.meanmenu.js') }}"></script>
      <!-- Sticky JS -->
      <script src="{{ asset('nekaton/assets/js/jquery.sticky.js') }}"></script>
      <!-- owl-carousel min js  -->
      <script src="{{ asset('nekaton/assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
      <!-- isotope js -->
      <script src="{{ asset('nekaton/assets/js/isotope.3.0.6.min.js') }}"></script>
      <!-- venobox js -->
      <script src="{{ asset('nekaton/assets/venobox/js/venobox.min.js') }}"></script>
      <!-- jquery appear js  -->
      <script src="{{ asset('nekaton/assets/js/jquery.appear.js') }}"></script>
      <!-- countTo js -->
      <script src="{{ asset('nekaton/assets/js/jquery.inview.min.js') }}"></script>
      <!-- scrolltopcontrol js -->
      <script src="{{ asset('nekaton/assets/js/scrolltopcontrol.js') }}"></script>
      <!-- WOW - Reveal Animations When You Scroll -->
      <script src="{{ asset('nekaton/assets/js/wow.min.js') }}"></script>
      <!-- scripts js -->
      <script src="{{ asset('nekaton/assets/js/scripts.js') }}"></script>
   </body>
</html>
