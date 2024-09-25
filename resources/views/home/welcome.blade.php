<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('logo.png') }}" rel="icon">
    <!--Title-->
    <title>Christ the king choir</title>
    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- Owl Slider -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- Revolution Slider -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rs-plugin/css/main-slider/rs6.css') }}">
    <!-- Color Panel -->
    <link href="{{ asset('css/color_panel.css') }}" rel="stylesheet" type="text/css" />
    <!-- Color Panel -->
    <link href="{{ asset('css/color_panel.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/color-schemes/red.css') }}" id="changeable-colors">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" class="main-style">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        #rev_slider_6_1_wrapper .tp-loader.spinner1 {
            background-color: #FFFFFF !important;
        }
    </style>
    <style>
        .rs-layer.Concept-Content a,
        .rs-layer.Concept-Content a:visited {
            color: #fff !important;
            border-bottom: 1px solid #fff !important;
            font-weight: 700 !important
        }

        .rs-layer.Concept-Content a:hover {
            border-bottom: 1px solid transparent !important
        }

        .rs-layer.Concept-Content-Dark a,
        .rs-layer.Concept-Content-Dark a:visited {
            color: #000 !important;
            border-bottom: 1px solid #000 !important;
            font-weight: 700 !important
        }

        .rs-layer.Concept-Content-Dark a:hover {
            border-bottom: 1px solid transparent !important
        }

        @media only screen and (max-width:575px) {
            rs-layer.res-slide-btn {
                padding: 7px 16px !important;
                font-size: 13px !important
            }
        }

        #rev_slider_1_1_wrapper .zeus.tparrows {
            cursor: pointer;
            min-width: 60px;
            min-height: 60px;
            position: absolute;
            display: block;
            z-index: 1000;
            border-radius: 50%;
            overflow: hidden;
            background: rgba(0, 0, 0, 0.38)
        }

        #rev_slider_1_1_wrapper .zeus.tparrows:before {
            font-family: 'revicons';
            font-size: 17px;
            color: #ffffff;
            display: block;
            line-height: 60px;
            text-align: center;
            z-index: 2;
            position: relative
        }

        #rev_slider_1_1_wrapper .zeus.tparrows.tp-leftarrow:before {
            content: '\e824'
        }

        #rev_slider_1_1_wrapper .zeus.tparrows.tp-rightarrow:before {
            content: '\e825'
        }

        #rev_slider_1_1_wrapper .zeus .tp-title-wrap {
            background: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
            top: 0px;
            left: 0px;
            position: absolute;
            opacity: 0;
            transform: scale(0);
            -webkit-transform: scale(0);
            transition: all 0.3s;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            border-radius: 50%
        }

        #rev_slider_1_1_wrapper .zeus .tp-arr-imgholder {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0px;
            left: 0px;
            background-position: center center;
            background-size: cover;
            border-radius: 50%;
            transform: translatex(-100%);
            -webkit-transform: translatex(-100%);
            transition: all 0.3s;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s
        }

        #rev_slider_1_1_wrapper .zeus.tp-rightarrow .tp-arr-imgholder {
            transform: translatex(100%);
            -webkit-transform: translatex(100%)
        }

        #rev_slider_1_1_wrapper .zeus.tparrows.rs-touchhover .tp-arr-imgholder {
            transform: translatex(0);
            -webkit-transform: translatex(0);
            opacity: 1
        }

        #rev_slider_1_1_wrapper .zeus.tparrows.rs-touchhover .tp-title-wrap {
            transform: scale(1);
            -webkit-transform: scale(1);
            opacity: 1
        }

        #rev_slider_1_1[data-slideactive="rs-1"] .zeus.tparrows {
            min-width: 60px !important;
            min-height: 60px !important;
            background: rgba(0, 0, 0, 0.38) !important
        }

        #rev_slider_1_1[data-slideactive="rs-1"] .zeus.tparrows:before {
            line-height: 60px !important;
            font-size: 17px !important
        }

        #rev_slider_1_1[data-slideactive="rs-2"] .zeus.tparrows {
            min-width: 60px !important;
            min-height: 60px !important;
            background: rgba(0, 0, 0, 0.38) !important
        }

        #rev_slider_1_1[data-slideactive="rs-2"] .zeus.tparrows:before {
            line-height: 60px !important;
            color: #ffffff !important;
            font-size: 17px !important
        }

        #rev_slider_1_1[data-slideactive="rs-3"] .zeus.tparrows {
            min-width: 60px !important;
            min-height: 60px !important;
            background: rgba(0, 0, 0, 0.38) !important
        }

        #rev_slider_1_1[data-slideactive="rs-3"] .zeus.tparrows:before {
            line-height: 60px !important;
            font-size: 17px !important
        }
    </style>
</head>
<!--Body Start-->

<body data-res-from="1025">
    <!--Page Loader-->
    <div class="page-loader"></div>
    <!--Zmm Wrapper-->
    <div class="zmm-wrapper"> <a href="#" class="zmm-close close"></a>
        <div class="zmm-inner bg-white typo-dark">
            <div class="text-center mobile-logo-part margin-bottom-30"> <a href="#" class="img-before"><img
                        src="{{ asset('logo.png') }}" class="img-fluid changeable-dark" width="170" height="51"
                        alt="Logo"></a> </div>
            <div class="zmm-main-nav"> </div>
            <div class="search-form-wrapper margin-top-30">
                <form class="search-form" role="search">
                    <div class="input-group add-on"> <input class="form-control" placeholder="Search for.."
                            name="srch-term" type="text">
                        <div class="input-group-btn"> <button class="btn btn-default search-btn" type="submit"><i
                                    class="fas fa-arrow-right"></i></button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Overlay Search -->
    <div class="overlay-search text-center hide"> <a href="#" class="close close-light overlay-search-close"></a>
        <div class="search-form-wrapper">
            <form class="navbar-form search-form sliding-search-form" role="search">
                <div class="input-group add-on"> <input class="form-control" placeholder="Search for.." name="srch-term"
                        type="text">
                    <div class="input-group-btn"> <button class="btn btn-default search-btn" type="submit"><i
                                class="fas fa-arrow-right"></i></button> </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Main wrapper-->
    <div class="page-wrapper">
        <div class="page-wrapper-inner">
            <header>
                <!--Mobile Header-->
                <div class="mobile-header bg-white typo-dark">
                    <div class="mobile-header-inner">
                        <div class="sticky-outer">
                            <div class="sticky-head">
                                <div class="basic-container clearfix">
                                    <ul class="nav mobile-header-items pull-left">
                                        <li class="nav-item"><a href="#" class="zmm-toggle img-before"><i
                                                    class="fa fa-bars"></i></a></li>
                                    </ul>
                                    <ul class="nav mobile-header-items pull-center">
                                        <li> <a href="#" class="img-before"><img src="{{ asset('logo.png') }}"
                                                    class="img-fluid changeable-dark" width="55" height="25"
                                                    alt="Logo"></a> </li>
                                    </ul>
                                    <ul class="nav mobile-header-items pull-right">
                                        <li class="nav-item"><a href="#"
                                                class="img-before overlay-search-switch"><i
                                                    class="icon-magnifier icons"></i></a></li>
                                    </ul>
                                </div>
                                <!-- .basic-container -->
                            </div>
                            <!-- .sticky-head -->
                        </div>
                        <!-- .sticky-outer -->
                    </div>
                    <!-- .mobile-header-inner -->
                </div>
                <!-- .mobile-header -->
                <!--Header-->
                <div class="header-inner header-1 header-absolute">
                    <!--Topbar-->
                    <div class="topbar relative">
                        <div class="basic-container clearfix">
                            <ul class="nav topbar-items pull-left">
                                <li class="nav-item">
                                    <ul class="nav header-info">
                                        <li>
                                            <div class="header-address typo-white"><span
                                                    class="fa fa-location-pin"></span> Cathedral St Michel. Kigali
                                                City, RWANDA</div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav topbar-items pull-right">
                                <li class="nav-item">
                                    <div class="social-icons typo-white">
                                        <a href="#" class="social-fb"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="social-twitter"><span
                                                class="fa fa-youtube"></span></a>
                                        <a href="#" class="social-instagram"><span
                                                class="fa fa-instagram"></span></a>
                                    </div>
                                </li>
                                <li><a href="#" class="full-view-switch text-center"><i
                                            class="ti-search typo-white"></i></a></li>
                            </ul>
                        </div>
                        <!--Search-->
                        <div class="full-view-wrapper hide"> <a href="#" class="close full-view-close"></a>
                            <form class="navbar-form search-form" role="search">
                                <div class="input-group"> <input class="form-control"
                                        placeholder="Search hit enter.." name="srch-term" type="text"> </div>
                            </form>
                        </div>
                    </div>
                    <!--Topbar-->
                    <!--Sticky part-->
                    <div class="sticky-outer">
                        <div class="sticky-head">
                            <!--Navbar-->
                            <nav class="navbar nav-shadow">
                                <div class="basic-container clearfix">
                                    <div class="">
                                        <!--Overlay Menu Switch-->
                                        <ul class="nav navbar-items pull-left">
                                            <li class="list-item"> <a href="#" class="logo-general"><img
                                                        src="{{ asset('logo.png') }}"
                                                        class="img-fluid changeable-light" width="106"
                                                        height="20" alt="Logo" /></a> <a href="#"
                                                    class="logo-sticky"><img src="{{ asset('logo.png') }}"
                                                        class="img-fluid changeable-dark" width="106"
                                                        height="20" alt="Logo" /></a> </li>
                                        </ul>
                                        <!-- Menu -->
                                        <ul class="nav navbar-items pull-right">
                                            <!--List Item-->
                                            <li class="list-item">
                                                <ul class="nav navbar-main menu-white">
                                                    <li class="active dropdown cus-img-menu dropdown-sub"><a href="#">Home</a></li>
                                                    <li><a href="#">About Us</a></li>
                                                    <li><a href="#">Contact Us</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- Menu -->
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <!--sticky-head-->
                    </div>
                    <!--sticky-outer-->
                </div>
            </header>
            <!-- header -->
            <!-- Revolution Slider Section -->
            <p class="rs-p-wp-fix"></p>
            <rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="zegen-home-1" data-source="gallery"
                style="visibility:hidden;background:#000000;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                <rs-module id="rev_slider_1_1" style="" data-version="6.5.31">
                    <rs-slides>
                        <rs-slide style="position: absolute;" data-key="rs-3" data-title="Web Show"
                            data-thumb="{{ asset('rs-plugin/assets/choir.jpeg') }}"
                            data-anim="adpr:false;e:slidingoverlay;ms:2000;" data-in="o:1;x:(100%);"
                            data-out="a:false;">
                            <img src="rs-plugin/assets/dummy.png" alt="Non Profit Wordpress Theme"
                                title="zmain-slider-2.jpg" width="1536" height="864"
                                class="rev-slidebg tp-rs-img rs-lazyload"
                                data-lazyload="{{ asset('rs-plugin/assets/choir.jpeg') }}" data-parallax="5"
                                data-no-retina>
                            <!--							-->
                            <h1 id="slider-1-slide-3-layer-2" class="rs-layer Concept-Title" data-type="text"
                                data-color="#ffffff||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)"
                                data-rsp_ch="on" data-xy="x:c;y:m;yo:10px,0,-10px,-38px;"
                                data-text="w:normal,nowrap,nowrap,normal;s:54,50,45,28;l:52,55,50,30;ls:3px;fw:700;a:center;"
                                data-dim="w:922px,845px,736px,478px;h:62px,auto,auto,35px;" data-padding="b:10;"
                                data-frame_0="sX:2;sY:2;" data-frame_0_mask="u:t;"
                                data-frame_1="e:power2.out;st:2110;sp:1270;sR:2110;" data-frame_1_mask="u:t;"
                                data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:5620;"
                                data-frame_999_reverse="x:true;"
                                style="z-index:10;font-family:'Poppins';text-transform:uppercase;">LET'S BRING THEM
                                HOME </h1>
                            <!--							-->
                            <rs-layer id="slider-1-slide-3-layer-4" class="Concept-SubTitle" data-type="text"
                                data-color="" data-rsp_ch="on" data-xy="x:c;y:m;yo:-42px,-47px,-55px,-76px;"
                                data-text="w:normal,nowrap,nowrap,nowrap;s:21,20,20,15;l:21,25,20,20;fw:700;a:center,center,left,left;"
                                data-dim="w:446px,424px,auto,auto;" data-padding="b:10;" data-frame_0="o:1;"
                                data-frame_0_chars="d:5;y:100%;o:0;rZ:-35deg;" data-frame_0_mask="u:t;"
                                data-frame_1="st:640;sp:1200;sR:640;"
                                data-frame_1_chars="e:power4.inOut;d:10;rZ:0deg;" data-frame_1_mask="u:t;"
                                data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:4960;"
                                data-frame_999_reverse="x:true;"
                                style="z-index:11;font-family:'Open Sans';text-transform:uppercase;">YOU CAN HELP FOR
                                THEM </rs-layer>
                            <!--							-->
                            <rs-layer id="slider-1-slide-3-layer-14" data-type="text" data-rsp_ch="on"
                                data-xy="x:c;y:m,t,t,t;yo:78px,312px,271px,228px;"
                                data-text="w:normal;s:18,18,16,15;l:31,30,30,27;a:center;"
                                data-dim="w:806px,805px,689px,388px;h:auto,auto,auto,89px;" data-frame_0="y:100%;"
                                data-frame_0_mask="u:t;" data-frame_1="st:2680;sp:1360;sR:2680;"
                                data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:4960;"
                                style="z-index:9;font-family:'Open Sans';">Christ The King Choir WordPress Theme comes with
                                sermons, ministries, events, testimonies, staff members, church locations shortcodes to
                                enhance your website. </rs-layer>
                            <!--							--><a id="slider-1-slide-3-layer-16" class="rs-layer res-slide-btn pop rev-btn"
                                href="#" target="_self" data-type="button"
                                data-color="rgba(255,255,255,1)" data-xy="x:c;y:m;yo:162px,156px,128px,112px;"
                                data-text="s:16,16,14,14;l:17;fw:500;a:center;" data-rsp_bd="off"
                                data-padding="t:15,15,10,10;r:35,35,25,25;b:15,15,10,10;l:35,35,25,25;"
                                data-border="bor:3px,3px,3px,3px;" data-frame_0="y:100%;"
                                data-frame_1="e:power4.inOut;st:3160;sp:1200;sR:3160;"
                                data-frame_999="o:0;st:w;sR:4640;"
                                data-frame_hover="bgc:#000;boc:#000;bor:3px,3px,3px,3px;bos:solid;oX:50;oY:50;sp:0;"
                                style="z-index:8;font-family:'Poppins';cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">View
                                Ministries </a>
                            <!--							-->
                            <rs-layer id="slider-1-slide-3-layer-21" data-type="image" data-rsp_ch="on"
                                data-xy="x:c;yo:228px,133px,102px,85px;"
                                data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                data-dim="w:67px,60px,56px,45px;h:67px,60px,56px,45px;" data-frame_0="x:100%;"
                                data-frame_0_mask="u:t;" data-frame_1="st:210;sp:1000;sR:210;"
                                data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7790;" style="z-index:12;"><img
                                    src="rs-plugin/assets/dummy.png" alt="Non Profit Wordpress Theme"
                                    class="tp-rs-img rs-lazyload" width="80" height="80"
                                    data-lazyload="rs-plugin/assets/bible.png" data-no-retina> </rs-layer>
                            <!---->
                        </rs-slide>
                    </rs-slides>
                    <rs-static-layers>
                        <!--					-->
                    </rs-static-layers>
                </rs-module>
                <script></script>
                <script>
                    if (typeof revslider_showDoubleJqueryError === "undefined") {
                        function revslider_showDoubleJqueryError(sliderID) {
                            console.log(
                                "You have some jquery.js library include that comes after the Slider Revolution files js inclusion."
                            );
                            console.log("To fix this, you can:");
                            console.log(
                                "1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"
                            );
                            console.log("2. Find the double jQuery.js inclusion and remove it");
                            return "Double Included jQuery Library";
                        }
                    }
                </script>
            </rs-module-wrap>
            <!-- Revolution Slider Section End -->
            <!-- Page Content -->
            <div class="content-wrapper pad-none">
                <div class="content-inner">
                    <!-- About Section -->
                    <section id="section-about" class="section-about pad-top-90">
                        <div class="container">
                            <!-- Row -->
                            <div class="row">
                                <!-- Col -->
                                <div class="col-xl-6 align-self-center">
                                    <!-- about wrap -->
                                    <div class="about-wrap relative">
                                        <div class="about-wrap-inner">
                                            <!-- about details -->
                                            <div class="about-wrap-details">
                                                <!-- about button -->
                                                <div class="text-center">
                                                    <div class="about-img bf-pattern mb-5 mb-xl-0"> <img
                                                            src="{{asset('logos.jpeg')}}" class=""
                                                            alt="about-img"> </div>
                                                    <!-- .col -->
                                                </div>
                                            </div>
                                            <!-- about details End-->
                                        </div>
                                    </div>
                                    <!-- about wrap end -->
                                </div>
                                <!-- .col -->
                                <!-- Col -->
                                <div class="col-xl-6 px-3 ps-xl-0">
                                    <div class="title-wrap margin-bottom-30">
                                        <div class="section-title"> <span
                                                class="sub-title theme-color text-uppercase">About Us</span>
                                            <h2 class="section-title margin-top-5">We are Taking Small Steps to Make
                                                Earth Better Planet</h2> <span class="border-bottom"></span>
                                        </div>
                                        <div class="pad-top-15">
                                            <p class="margin-bottom-20">Christ the King Choir was founded in 1998. It
                                                is a choir that was created after The 1994 Genocide against the Tutsi in Rwanda when there was a
                                                massive return of Rwandan refugees from different parts of the world.
                                            </p>
                                            <p class="margin-bottom-20">
                                                Upon return of Rwandan refugees from English speaking countries (e.g.:
                                                Tanzania, Uganda Kenya, UK, USA…) there came a need to have an English
                                                mass which would help Christians who use English and also the
                                                international English speaking staff to pray.
                                            </p>
                                            <p class="margin-bottom-20">
                                                The Choir’s main activities are in St Michael Cathedral within the
                                                Archdiocese of Kigali. It animates the 9 o’clock English mass at the
                                                Cathedral every Sunday and on other solemnities of the church but also
                                                participates in other functions of the community members like weddings,
                                                funerals….
                                            </p>
                                            <p class="margin-bottom-20">
                                                Christ the King Choir is a mixed-voice choir, made of a group of about 50 members; students, workers and none-workers aged from 15 and above.
                                            </p>
                                            {{-- <p class="styled-text">The name of the Lord is a strong tower; the
                                                righteous run into it and are safe.</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- Col -->
                            </div>
                            <!-- Row -->
                        </div>
                        <!-- Container -->
                    </section>
                    <!-- About Section End -->
                    <!-- Get a Quote Section -->
                    <section id="get-quote-section" class="get-quote-section section-bg-img"
                        data-bg="images/bg/bg-1.jpg">
                        <div class="container">
                            <!-- Row -->
                            <div class="row text-center">
                                <!-- Col -->
                                <div class="col-md-12">
                                    <div class="get-quote-1">
                                        <!-- video wrap -->
                                        <div class="video-wrap wrap-stretch relative margin-bottom-50">
                                            <!-- video details -->
                                            <div class="video-wrap-details">
                                                <!-- video button -->
                                                <div class="video-play-btn text-center">
                                                    <div class="video-icon"> <a class="popup-youtube box-shadow1"
                                                            href="https://www.youtube.com/watch?v=e1l1-LWTcBs"> <i
                                                                class="fa fa-heart"></i> </a> </div>
                                                </div>
                                            </div>
                                            <!-- video details End-->
                                        </div>
                                        <!-- video wrap end -->
                                        <div class="title-wrap mb-0">
                                            <div class="section-title typo-white margin-bottom-40">
                                                <h2 class="title mb-3">“Pray! And listen to God! You can do this alone,
                                                    but find somebody to do it with you”</h2> <span
                                                    class="dancing-text">Real Story Cross Journey from Anna
                                                    Hampton</span>
                                            </div>
                                            <div class="get-quote-btn">
                                                <a class="btn btn-default" href="#"
                                                    title="Donate Online">Donate Online</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Col -->
                            </div>
                            <!-- Row -->
                        </div>
                        <!-- Container -->
                    </section>
                    <!-- Get a Quote Section End -->
                    <!-- Ministries Section -->
                    <section id="ministries-section" class="ministries-section pad-top-95 pad-bottom-70">
                        <div class="container">
                            <!-- Row -->
                            <div class="row">
                                <div class="offset-md-2 col-md-8">
                                    <div class="title-wrap text-center">
                                        <div class="section-title"> <span
                                                class="sub-title theme-color text-uppercase">Ministries</span>
                                            <h2 class="section-title margin-top-5">Our Ministries</h2> <span
                                                class="border-bottom center"></span>
                                        </div>
                                    </div>
                                </div>
                                <!--Ministries Main Slider-->
                                <div class="owl-carousel ministries-main-wrapper" data-loop="1" data-nav="1"
                                    data-dots="0" data-autoplay="0" data-autoplaypause="1" data-autoplaytime="5000"
                                    data-smartspeed="1000" data-margin="30" data-items="3" data-items-tab="2"
                                    data-items-mob="1">
                                    <!--Item-->
                                    <div class="item">
                                        <div class="ministries-box-style-2">
                                            <!-- Ministries Inner -->
                                            <div class="ministries-inner">
                                                <div class="ministries-thumb"> <img class="img-fluid squared w-100"
                                                        src="images/ministries/childrens_ministry.jpg" width="360"
                                                        height="240" alt="Agricultural Processing"> </div>
                                                <!-- Ministries Content -->
                                                <div class="ministries-content pad-30">
                                                    <div class="ministries-title margin-bottom-15">
                                                        <h4><a href="#"
                                                                class="ministries-link">Children's Ministry</a></h4>
                                                    </div>
                                                    <div class="ministries-desc">
                                                        <p>Children’s ministry is the most important ministry in our
                                                            church. This ministry helps kids learn about the Lord</p>
                                                    </div>
                                                    <div class="ministries-link margin-top-20"> <a target="_blank"
                                                            href="#" class="link">Read
                                                            More</a> </div>
                                                </div>
                                            </div>
                                            <!-- Ministries Inner Ends -->
                                        </div>
                                    </div>
                                    <!--Item Ends-->
                                    <!--Item-->
                                    <div class="item">
                                        <div class="ministries-box-style-2">
                                            <!-- Ministries Inner -->
                                            <div class="ministries-inner">
                                                <div class="ministries-thumb"> <img class="img-fluid squared w-100"
                                                        src="images/ministries/women_ministry.jpg" width="360"
                                                        height="240" alt="Agricultural Processing"> </div>
                                                <!-- Ministries Content -->
                                                <div class="ministries-content pad-30">
                                                    <div class="ministries-title margin-bottom-15">
                                                        <h4><a href="#"
                                                                class="ministries-link">Womens Ministry</a></h4>
                                                    </div>
                                                    <div class="ministries-desc">
                                                        <p>A Women’s ministry includes hosting Bible studies, services,
                                                            support group, and gathering events. The goal of this
                                                            women’s</p>
                                                    </div>
                                                    <div class="ministries-link margin-top-20"> <a target="_blank"
                                                            href="#" class="link">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ministries Inner Ends -->
                                        </div>
                                    </div>
                                    <!--Item Ends-->
                                    <!--Item-->
                                    <div class="item">
                                        <div class="ministries-box-style-2">
                                            <!-- Ministries Inner -->
                                            <div class="ministries-inner">
                                                <div class="ministries-thumb"> <img class="img-fluid squared w-100"
                                                        src="images/ministries/global_ministry.jpg" width="360"
                                                        height="240" alt="Agricultural Processing"> </div>
                                                <!-- Ministries Content -->
                                                <div class="ministries-content pad-30">
                                                    <div class="ministries-title margin-bottom-15">
                                                        <h4><a href="#"
                                                                class="ministries-link">Global Ministry</a></h4>
                                                    </div>
                                                    <div class="ministries-desc">
                                                        <p>We are very grateful for our part in the work of Global
                                                            Ministries and the opportunity to be</p>
                                                    </div>
                                                    <div class="ministries-link margin-top-20"> <a target="_blank"
                                                            href="#" class="link">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ministries Inner Ends -->
                                        </div>
                                    </div>
                                    <!--Item Ends-->
                                    <!--Item-->
                                    <div class="item">
                                        <div class="ministries-box-style-2">
                                            <!-- Ministries Inner -->
                                            <div class="ministries-inner">
                                                <div class="ministries-thumb"> <img class="img-fluid squared w-100"
                                                        src="images/ministries/music_ministry.jpg" width="360"
                                                        height="240" alt="Agricultural Processing"> </div>
                                                <!-- Ministries Content -->
                                                <div class="ministries-content pad-30">
                                                    <div class="ministries-title margin-bottom-15">
                                                        <h4><a href="#"
                                                                class="ministries-link">Music Ministry</a></h4>
                                                    </div>
                                                    <div class="ministries-desc">
                                                        <p>Music is something we get exposed to from childhood through
                                                            adulthood. From the pattering sounds from raindrops</p>
                                                    </div>
                                                    <div class="ministries-link margin-top-20"> <a target="_blank"
                                                            href="#" class="link">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ministries Inner Ends -->
                                        </div>
                                    </div>
                                    <!--Item Ends-->
                                </div>
                                <!--Ministries Owl Slider-->
                            </div>
                            <!-- Row -->
                        </div>
                        <!-- Container -->
                    </section>
                    <!-- Ministries Section End -->
                    <!-- Contact Section -->
                    <section class="contact-form-section typo-white section-bg-img o-visible pad-top-80 pad-bottom-160"
                        data-bg="images/bg/bg-2.jpg">
                        <div class="shape-bottom" data-negative="false"> <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 1000 100" preserveAspectRatio="none">
                                <path class="shape-fill" opacity="0.33"
                                    d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z">
                                </path>
                                <path class="shape-fill" opacity="0.66"
                                    d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z">
                                </path>
                                <path class="shape-fill"
                                    d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z">
                                </path>
                            </svg> </div>
                        <div class="container">
                            <div class="row">
                                <!-- col -->
                                <div class="col-xl-4 pe-xl-4 pb-5 pb-xl-0">
                                    <div class="flip-box broken-top-115 verticalMove">
                                        <div class="flip-box-inner imghvr-flip-3d-horz">
                                            <div class="flip-box-front">
                                                <div class="flip-box-icon margin-bottom-40"><span
                                                        class="text-center flip-icon-middle ti-headphone-alt"></span>
                                                </div>
                                                <h3 class="flip-box-title margin-bottom-30">Call Us</h3>
                                                <div class="flip-content">
                                                    <p>Cathedral St Michel. Kigali City, Rwanda.</p>
                                                    <p><a href="tel:+8(123)985789">+(250) 783 718 367</a></p>
                                                    <p><a
                                                            href="mailto:ctkchoirkigali@gmail.com">ctkchoirkigali@gmail.com</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flip-box-back">
                                                <h3 class="flip-box-title">Call Us</h3>
                                                <div class="flip-content">
                                                    <p>Cathedral St Michel. Kigali City, Rwanda.</p>
                                                    <p><a href="tel:+8(123)985789">+(250) 783 718 367</a></p>
                                                    <p><a
                                                            href="mailto:ctkchoirkigali@gmail.com">ctkchoirkigali@gmail.com</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col-xl-8 ps-xl-4">
                                    <div class="section-title-wrapper">
                                        <div class="title-wrap mb-0">
                                            <div class="section-title"> <span
                                                    class="sub-title theme-color text-uppercase">Get In Touch</span>
                                                <h2 class="section-title margin-top-5">Don't hesitate Contact Us</h2>
                                                <span class="border-bottom"></span>
                                            </div>
                                            <div class="pad-top-15">
                                                <p class="margin-bottom-10">Feel free to Contact Us. Christ The King Choir
                                                    Theme comes with sermons, ministries, events, testimonies, staff
                                                    members, church locations shortcodes to enhance your website.</p>
                                            </div>
                                        </div>
                                        <div class="button-section margin-top-25"> <a class="btn btn-default"
                                                href="#" title="Learn More">Contact Us</a> </div>
                                    </div>
                                </div>
                                <!-- .col -->
                            </div>
                        </div>
                    </section>
                    <!-- Contact Form Section End -->
                </div>
            </div>
        </div>
        <!-- .page-wrapper-inner -->
    </div>
    <!--page-wrapper-->
    <!-- Footer -->
    <footer id="footer" class="footer footer-1 footer-bg-img" data-bg="images/bg/footer-bg.jpg">
        <!--Footer Widgets Columns Posibilities 4-->
        <div class="footer-widgets">
            <div class="footer-middle-wrap footer-overlay-dark">
                <div class="color-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 widget text-widget">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title typo-white">About CTKC</h3>
                            </div>
                            <!-- Text -->
                            <div class="widget-text margin-bottom-30">
                                <p>
                                    Christ the King Choir was founded in 1998. It is a choir that was created after
                                    The 1994 Genocide against the Tutsi in Rwanda when there was a massive return of Rwandan refugees from different
                                    parts of the world.</p>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-lg-3 widget text-widget">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title typo-white">Quick Links</h3>
                            </div>
                            <!-- Text -->
                            <div class="menu-quick-links">
                                <ul class="menu">
                                    <li class="menu-item"><a href="#">Home</a></li>
                                    <li class="menu-item"><a href="#">About Us</a></li>
                                    <li class="menu-item"><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-lg-3 widget recent-posts">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title typo-white">Our Social Media</h3>
                            </div>
                            <div class="social-icons">
                                <a href="#" class="social-fb"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="social-twitter"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="social-instagram"><span class="fa fa-instagram"></span></a>
                                <a href="#" class="social-youtube"><span class="fa fa-youtube"></span></a>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-lg-3 widget contact-info-widget">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title typo-white">Rehearsals Time</h3>
                            </div>
                            <div class="menu-quick-links">
                                <ul class="menu">
                                    <li class="menu-item"><a href="#">Friday at 6:00PM - 8:00PM</a></li>
                                    <li class="menu-item"><a href="#">Saturday at 4:00AM - 6:00PM</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Copyright Columns Posibilities 4-->
        <div class="footer-copyright">
            <div class="footer-bottom-wrap pad-tb-20 typo-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="footer-bottom-items">
                                <li class="nav-item">
                                    <div class="nav-item-inner"> Copyrights ©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> <a href="#">Christ The King Choir All Rights
                                            Reserved</a>.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <!-- End Color Switcher -->
    <!-- jQuery Lib -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- Easing Js -->
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <!-- Carousel Js Code -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Paroller Js -->
    <script src="{{ asset('js/jquery.paroller.min.js') }}"></script>
    <!-- Isotope Js -->
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <!-- Magnific Popup Js -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Validator Js -->
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <!-- Smart Resize Js -->
    <script src="{{ asset('js/smartresize.min.js') }}"></script>
    <!-- Appear Js -->
    <script src="{{ asset('js/jquery.appear.min.js') }}"></script>
    <!-- Theme Custom Js -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('rs-plugin/js/main-slider/rbtools.min.js') }}"></script>
    <script src="{{ asset('rs-plugin/js/main-slider/rs6.min.js') }}"></script>
    <script src="{{ asset('rs-plugin/js/main-slider/home-1.js') }}"></script>
    <!-- Color -->
    <script src="{{ asset('js/color-panel.js') }}"></script>
</body>
<!-- Body End -->
<!-- Body End -->

</html>
