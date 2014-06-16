<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Blue Crystal Group
            @yield('title')
        </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta content="" name="description">
        <meta content="" name="keywords">
        <meta content="" name="author">

        <meta property="" content="-CUSTOMER VALUE-">
        <meta property="" content="-CUSTOMER VALUE-">
        <meta property="" content="-CUSTOMER VALUE-">
        <meta property="" content="website">
        <meta property="" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
        <meta property="" content="-CUSTOMER VALUE-">

        <!-- Fonts START -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CPT+Sans+Narrow%7CSource+Sans+Pro:200,300,400,600,700,900&subset=all" rel="stylesheet" type="text/css">
        <!-- Fonts END -->

        <!-- Global styles START -->          
        <link href="/assets/global/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Global styles END --> 

        <!-- Page level plugin styles START -->
        <link href="/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
        <link href="/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="/assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">
        <!-- Page level plugin styles END -->

        <!-- Theme styles START -->
        <link href="/assets/global/css/components.css" rel="stylesheet">
        <link href="/assets/frontend/layout/css/style.css" rel="stylesheet">
        <link href="../../assets/frontend/pages/css/portfolio.css" rel="stylesheet">
        <link href="/assets/frontend/pages/css/style-revolution-slider.css" rel="stylesheet"><!-- metronic revo slider styles -->
        <link href="/assets/frontend/layout/css/style-responsive.css" rel="stylesheet">
        <link href="/assets/frontend/layout/css/themes/red.css" rel="stylesheet" id="style-color">
        <link href="/assets/frontend/layout/css/custom.css" rel="stylesheet">
        <!-- Theme styles END -->
        <!-- stylesheets -->
        {{-- {{ HTML::style('/css/bootstrap.min.css') }} --}}
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
        @yield('stylesheet')
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--[if IE 7]>
        <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
        <![endif]-->
    </head>

    <body class="corporate">
        @include('sites.layout.pre_header')
        @include('sites.layout.header')
        @yield('body_content')
        {{-- {{ HTML::script('/js/jquery.js') }} --}}

    <script src="/assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="/assets/frontend/layout/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->

    <!-- BEGIN RevolutionSlider -->
  
    <script src="/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script> 
    <script src="/assets/frontend/pages/scripts/revo-slider-init.js" type="text/javascript"></script>
    <!-- END RevolutionSlider -->

    <script src="/assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
            Layout.initTwitter();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
    </script>

@yield('javaScript')
@yield('customscripts')
</body>
</html>


