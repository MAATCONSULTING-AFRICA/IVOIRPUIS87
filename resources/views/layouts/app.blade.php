
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1/">
<meta http-equiv="Cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta name="keywords" content="Ivoire Puissance 87" />
<meta name=”keywords” content="Ivoire Puissance 87 est une entreprise spécialisée dans plusieurs domaines dont le BTP, la gestion immobilière, l'imprimerie, la construction métallique, l'entretien et le nettoyage">
<meta name="description" content="Ivoire Puissance 87" />
<meta name="author" content="#" >
<title>IVOIR PUISSANCE 87 </title>

<link rel=“canonical” href="" />
<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/themify-icons.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/prettyPhoto.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/shortcodes.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/base.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/megamenu.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}"/>

<!-- REVOLUTION LAYERS STYLES -->
<link rel='stylesheet' id='rs-plugin-settings-css' href="{{asset('revolution/css/rs6.css')}}"> 

</head>
<body>

    <!--page start-->
    <div class="page">
       
       <div id="preloader" class="blobs">
            <div class="loader-blob-center"></div>
            <div class="loader-blob"></div>
            <div class="loader-blob"></div>
            <div class="loader-blob"></div>
            <div class="loader-blob"></div>
            <div class="loader-blob"></div>
            <div class="loader-blob"></div>
        </div>  

        <!--header start-->
        @include('partials.header')
        <!--header end-->


    <!--site-main start-->
        @yield('content')
    <!--site-main end-->


    <!--footer start-->
    @include('partials.footer')
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/tether.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>  
    <script src="{{asset('js/jquery-waypoints.js')}}"></script>    
    <script src="{{asset('js/jquery-validate.js')}}"></script> 
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.min.js')}}"></script>
    <script src="{{asset('js/jquery-isotope.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/numinate.min.js')}}"></script>
    <script src="{{asset('js/circle-progress.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>


    <!-- Revolution Slider -->    
    <script src="{{asset('revolution/js/slider.js')}}"></script>

  
    <script  src="{{asset('revolution/js/revolution.tools.min.js')}}"></script>
    <script  src="{{asset('revolution/js/rs6.min.js')}}"></script>

</body>

</html>