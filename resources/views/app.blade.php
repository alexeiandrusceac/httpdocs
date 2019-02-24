<!DOCTYPE html>
<html lang="en" class="translated-ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Nacleica</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="img/agency/icons/logo.ico" rel="icon" type="image/png">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Default Fonts (IMPORTANT: Delete these if you are using a different body style!) -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet'
          type='text/css'>

    <!-- Modern Style Fonts (IMPORTANT: Delete these unless you are using body.modern!) -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>

    <!-- Vintage Style Fonts (IMPORTANT: Delete these unless you are using body.vintage!) -->
    <link href='https://fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="vendor/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="vendor/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="vendor/formstone/background.css" rel="stylesheet" type="text/css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/device-mockups/device-mockups.min.css" rel="stylesheet" type="text/css">
    <link href="css/lightgallery.css" rel="stylesheet" type="text/css">

    <!-- Vitality Theme CSS -->
    <!-- INSTRUCTIONS: Uncomment the color scheme you want to use. Red is chosen by default. -->
    <link href="css/vitality-red.css" rel="stylesheet" type="text/css">
    <link href="css/slideshowstyle.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/media.css" rel="stylesheet" type="text/css">
    <!--<link href="css/snoweffect.css" rel="stylesheet" type="text/css">-->
    <link href="css/bootstrap-social.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Pentru verificarea numarului de vizitatori pe site Nacleica.md -->
    <!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->

    <!--contul nacleicamail@gmail.com pentru AdSense Google-->
    <!--<script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9875921463556578",
            enable_page_level_ads: true
        });
    </script>-->
    <!--contul nacleicamail@gmail.com pentru AdSense Google-->
    <!-- Pentru verificarea numarului de vizitatori pe site Nacleica.md -->
</head>

<body id="page-top">
<!--
<canvas id="canvas"></canvas>
-->
{{--<div class="loading">--}}
    {{--<div class="load-circle">--}}
    {{--</div>--}}
{{--</div>--}}

<!-- NOTE: Use the .modern or .vintage class to the body element below to see different font pairings! -->
<nav class="navbar navbar-inverse navbar-fixed-top navbar-expanded">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false" onclick="openMenu(this)">
                <span class="sr-only">Toggle navigation</span>
                <div class="icon-bars-container">
                    <div class="icon-bar1"></div>
                    <div class="icon-bar2"></div>
                    <div class="icon-bar3"></div>
                </div>
            </button>
            <a id="left-logo" class="navbar-brand page-scroll hidden" href="#page-top">
                <img src="img/agency/logo2.png" title="Nacleica" class="img-responsive" alt="Nacleica">
            </a>
        </div>

        <div class="top-data">
            <ul class="container-list">
                <li>
                    <a href="tel:+37379665088"><i class="fa fa-phone" aria-hidden="true"></i> <span> 079 665 088</span></a>
                </li>
                <li>
                    <a href="mailto:079665088@mail.ru"><i class="fa fa-envelope" aria-hidden="true"></i> <span> 079665088@mail.ru</span></a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="language" class="nav navbar-nav navbar-right text-center cont-list">
                <li>
                    <a href="{{url('/','services')}}">{{trans('translate.services')}}</a>
                </li>
                <li>
                    <a href="{{url('/','about')}}">{{trans('translate.about')}}</a>
                </li>
                <li>
                    <a href="{{url('/','order')}}">{{trans('translate.order')}}</a>
                </li>
                <li>
                    <a href="{{url('/','contacts')}}">{{trans('translate.contact')}}</a>
                </li>
                <li>
                    <a>
                        <form class="language-select" action="language" method="post">

                            <select name="locale" onclick="event.stopPropagation();" onchange="this.form.submit();">

                                <option alt="{{trans('translate.english')}}"
                                        value="en" {{App::getLocale()=='en' ? ' selected' :''}}>{{trans('translate.english')}}</option>
                                <option alt="{{trans('translate.romanian')}}"
                                        value="ro" {{App::getLocale()=='ro' ? ' selected' :''}}>{{trans('translate.romanian')}}</option>
                                <option alt="{{trans('translate.russian')}}"
                                        value="ru" {{App::getLocale()=='ru' ? ' selected' :''}}>{{trans('translate.russian')}}</option>
                            </select>
                            {{csrf_field()}}
                            <noscript><input type="submit" value="Choose"></noscript>
                        </form>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>
</nav>

@yield('content')
<footer class="footer" style="background-image: url('img/agency/backgrounds/bg-footer.jpg');margin-top:60px;">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <a class="page-scroll" href="#page-top">
                    <img src="img/agency/logo2.png" class="img-responsive" alt="Nacleica">
                </a>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="footer-title"><h3>{{trans('translate.services')}}</h3></div>
                <ul class="list-view">
                    <li><a href="{{url('/','info_auto')}}">{{trans('translate.brandingauto')}}</a></li>
                    <li><a href="{{url('/','info_casete')}}">{{trans('translate.reclame')}}</a></li>
                    <li><a href="{{url('/','info_const')}}">{{trans('translate.tipar')}}</a></li>
                    <li><a href="{{url('/','info_decor')}}">{{trans('translate.decor')}}</a></li>
                    <li><a href="{{url('/','info_autocolant')}}">{{trans('translate.autocolant')}}</a></li>
                    <li><a href="{{url('/','info_litere')}}">{{trans('translate.litere')}}</a></li>
                    <li><a href="{{url('/','info_suprafete')}}">{{trans('translate.suprPrelate')}}</a></li>
                    <li><a href="{{url('/','info_pos')}}">{{trans('translate.pos')}}</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="footer-title"><h3>{{trans('translate.footerCompany')}}</h3></div>
                <ul class="list-view">
                    <li><a href="{{url('/','')}}">{{trans('translate.home')}}</a></li>
                    <li><a href="{{url('/','services')}}">{{trans('translate.services')}}</a></li>
                    <li><a href="{{url('/','about')}}">{{trans('translate.about')}}</a></li>
                    <li><a href="{{url('/','order')}}">{{trans('translate.order')}}</a></li>

                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="footer-title"><h3>{{trans('translate.contact')}}</h3></div>
                <ul class="list-view">
                    <li>
                        <i class="fa fa-phone"></i>
                        <a href="tel:+37379665088">079 665 088</a>
                    </li>
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <a href="https://maps.google.com/maps?q=str%20Mihail%20Frunze%2065%2Fb%20ialoveni&t=&z=13&ie=UTF8&iwloc=&output=embed"
                           target="_blank">{{trans('translate.street')}} Mihail Frunze
                            65/b, {{trans('translate.city')}}</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:079665088@mail.ru">079665088@mail.ru</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="footer-title"><h3>{{trans('translate.social')}}</h3></div>
                <div class="footer-facebook">
                    <a href="https://www.facebook.com/reclamavizual" target="_blank" class="fa fa-facebook"></a>
                </div>
            </div>

        </div>
    </div>
    <div class="bottom-copyright">
        <div class="col-lg-12">
            <p class="small">&copy; <?php echo date('Y') ?> {{trans('translate.rights')}} - nacleica.md</p>
        </div>
    </div>

</footer>

<!-- Core Scripts -->
<!--<script src="js/aos.js"></script>-->
<!--<script src="https://unpkg.com/aos@next/dist/aos.js"></script>-->
<script>
    AOS.init();
</script>
<script src="js/swipe.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
<script type="text/javascript" src="js/slideshow.js"></script>
<script src="js/sidenav.js"></script>
<!-- Plugin Scripts -->
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/owl-carousel/owl.carousel.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/formstone/core.js"></script>
<script src="vendor/formstone/transition.js"></script>
<script src="vendor/formstone/background.js"></script>
<script src="vendor/mixitup/jquery.mixitup.js"></script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/owl-carousel/owl.autoplay.js"></script><!--
<script src="js/snoweffect.js"></script>-->
<!-- Contact Form Scripts -->
<script src="js/contact_me.js"></script>
<script src="js/jqBootstrapValidation.js"></script>

<!-- Vitality Theme Scripts -->
<script src="js/vitality.js"></script>
<script src="js/main.js"></script>
<script src="js/loadingCircle.js"></script>
<script src="js/modalForm.js"></script>
{{--START LIGHTGALLERY--}}

<script type="text/javascript">
    $(document).ready(function () {
        $('#lightgallery_ba').lightGallery();
        $('#lightgallery_casete').lightGallery();
        $('#lightgallery_const').lightGallery();
        $('#lightgallery_decor').lightGallery();
        $('#lightgallery_acol').lightGallery();
        $('#lightgallery_litere').lightGallery();
        $('#lightgallery_pos').lightGallery();
        $('#lightgallery_suprPrelate').lightGallery();
    });
</script>
<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>

<script src="js/lightgallery.js"></script>
</body>
</html>
<!--Pentru vizualizarea GOOGLE MAPS pe pagina Nacleica.md-->
<!--<script src="js/google_maps.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQWjkH3Ycrq0_tVvhzUVWLczNYuMroWXc&v=3.32&callback=initMap"></script>
-->
