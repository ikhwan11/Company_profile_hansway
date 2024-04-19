<!DOCTYPE html>

<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cluster Oasis Mas &mdash; contemporary living for your beloved family </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />
    <link href="{{asset('oasismas_templates')}}/images/logo.png" rel="icon">

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300' rel='stylesheet' type='text/css'>

    <script src="https://kit.fontawesome.com/d7f0e40acc.js" crossorigin="anonymous"></script>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('oasismas_templates')}}/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('oasismas_templates')}}/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('oasismas_templates')}}/css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{asset('oasismas_templates')}}/css/superfish.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('oasismas_templates')}}/css/flexslider.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('oasismas_templates')}}/css/magnific-popup.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('oasismas_templates')}}/css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{asset('oasismas_templates')}}/css/cs-select.css">
    <link rel="stylesheet" href="{{asset('oasismas_templates')}}/css/cs-skin-border.css">

    <link rel="stylesheet" href="{{asset('oasismas_templates')}}/css/style.css">


    <!-- Modernizr JS -->
    <script src="{{asset('oasismas_templates')}}/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <style>
        .fa {
            line-height: 30px;
            font-size: 30px;
            display: inline-bloxk;
            width: 35px;
            height: 35px;
        }

        .hidden {
            display: none;
        }

        input[type=checkbox]+label {
            position: absolute;
        }

        input[type=checkbox]:checked+label {
            animation: closing 0.3s forwards ease-in-out,
                moving 0.3s forwards ease-in-out;
        }

        .pointer-cursor {
            cursor: pointer;
            cursor: hand;
        }

        .close {

            float: right;
            color: #b94b45;
            cursor: pointer;
            cursor: hand;
        }

        .alert-message {
            text-align: center;
            background-color: #f2dede;
            border: 1px solid rgba(#34495e, 0.25);
            color: #b94b45;
            margin-top: 5%;
            border-radius: 3px;
            line-height: 30px;
            position: absolute;
            z-index: 9999999999999999999;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            color: rgba(255, 255, 255, .9);
            box-shadow: 0px 10px 50px rgba(0, 0, 0, .6);
            background: #ffbd59;
        }

        @keyframes closing {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        @keyframes moving {

            0%,
            90% {
                top: 0;
                left: 0;
            }

            100% {
                top: -100px;
                left: 0;
            }
        }

        html {
            scroll-behavior: smooth;
        }

        /* floating bttn */
        .btn-floating {
            position: fixed;
            right: 25px;
            overflow: hidden;
            width: 80px;
            height: 80px;
            border-radius: 100px;
            border: 0;
            z-index: 9999;
            color: white;
            transition: .2s;
        }

        .btn-floating:hover {
            width: auto;
            padding: 0 20px;
            cursor: pointer;
        }

        .btn-floating span {
            font-size: 16px;
            margin-left: 5px;
            transition: .2s;
            line-height: 0px;
            display: none;
        }

        .btn-floating:hover span {
            display: inline-block;
        }

        .btn-floating:hover img {
            margin-bottom: -3px;
        }

        .btn-floating.whatsapp {
            bottom: 25px;
            background-color: #34af23;
            border: 2px solid #fff;
        }

        .btn-floating.whatsapp:hover {
            background-color: #1f7a12;
        }

        .btn-floating.facebook {
            bottom: 85px;
            background-color: #1876f3;
            border: 2px solid #fff;
        }

        .btn-floating.facebook:hover {
            background-color: #1876f3;
        }
    </style>

</head>

<body>




    <div id="fh5co-wrapper">
        <div id="fh5co-page">

            <header id="fh5co-header-section" class="sticky-banner">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                        <a href="#"><img src="{{asset('oasismas_templates')}}/images/logo.png" style="margin-top: 10px;" width="150px"></a>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li class="active"><a href="#Home">Home</a></li>
                                <li><a href="#Why-us">Why Choose Us</a></li>
                                <li><a href="#House-type">House Type</a></li>
                                <li><a href="#Floor-plan">Floor Plan</a></li>
                                <li><a href="#Strategic">Strategic Location</a></li>
                                <li><a href="#Contact">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

            @if(session()->has('pesan'))
            <div class="container">
                <input type="checkbox" id="one" class="hidden" name="ossm">
                <label for="one" class="alert-message">
                    <strong> Thank You!</strong> {{ session('pesan') }}
                    <span class="close">×</button>
                </label>
            </div>
            @endif
            <!-- end:header-top -->
            @php

            $slide1 = asset('oasismas_templates');

            @endphp

            <aside id="fh5co-hero" class="js-fullheight">
                <div class="flexslider js-fullheight" id="Home">
                    <ul class="slides">
                        <li style="background-image: url({{$slide1}}/images/slider/palm-1.jpg);">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                                        <div class="slider-text-inner">
                                            <div class="desc">
                                                <span class="status">Sale</span>
                                                <h1><strong>Contemporary living for your beloved family</strong></h1>
                                                <h2 class="price">Rp. 1,5 M</h2>
                                                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                                                <p class="details">
                                                <div class="row">
                                                    <div class="col-md-6 details" style="color: white;">
                                                        <span>8x17,5 m</span>
                                                        <span>3 Bedrooms</span>
                                                        <span>3 Bathrooms</span>
                                                        <span>1 Carport</span>
                                                        <span>1 Living Room</span>
                                                    </div>
                                                    <div class="col-md-6 details" style="color: white;">
                                                        <span>1 Family Room</span>
                                                        <span>3 Balcony</span>
                                                        <span>Spacious Garden</span>
                                                        <span>Growing House</span>
                                                    </div>
                                                </div>
                                                </p>
                                                <p><a class="btn btn-primary btn-lg" href="https://drive.google.com/file/d/14YeJ7t4YoYSm_QvyuPY-QB4mT65bIw12/view?usp=sharing" target="_blank">Get Brochure</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="background-image: url({{$slide1}}/images/slider/palm-2.jpg);">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                                        <div class="slider-text-inner">
                                            <div class="desc">
                                                <span class="status">Sale</span>
                                                <h1><strong>Contemporary living for your beloved family</strong></h1>
                                                <h2 class="price">Rp. 1,5 M</h2>
                                                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                                                <p class="details">
                                                <div class="row">
                                                    <div class="col-md-6 details" style="color: white;">
                                                        <span>8x17,5 m</span>
                                                        <span>3 Bedrooms</span>
                                                        <span>3 Bathrooms</span>
                                                        <span>1 Carport</span>
                                                        <span>1 Living Room</span>
                                                    </div>
                                                    <div class="col-md-6 details" style="color: white;">
                                                        <span>1 Family Room</span>
                                                        <span>3 Balcony</span>
                                                        <span>Spacious Garden</span>
                                                        <span>Growing House</span>
                                                    </div>
                                                </div>
                                                </p>
                                                <p><a class="btn btn-primary btn-lg" href="https://drive.google.com/file/d/14YeJ7t4YoYSm_QvyuPY-QB4mT65bIw12/view?usp=sharing" target="_blank">Get Brochure</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </aside>

            <!-- <div id="fh5co-search-map">
                <div class="search-property">
                    <div class="s-holder">
                        <h2>Search Properties</h2>
                        <div class="row">
                            <div class="col-xxs-12 col-xs-12">
                                <div class="input-field">
                                    <label for="from">Keyword:</label>
                                    <input type="text" class="form-control" id="from-place" placeholder="Any" />
                                </div>
                            </div>
                            <div class="col-xxs-12 col-xs-12">
                                <section>
                                    <label for="class">Property Status:</label>
                                    <select class="cs-select cs-skin-border">
                                        <option value="" disabled selected>Any</option>
                                        <option value="1">Rent</option>
                                        <option value="2">Sale</option>
                                    </select>
                                </section>
                            </div>
                            <div class="col-xxs-12 col-xs-12">
                                <section>
                                    <label for="class">Property Type:</label>
                                    <select class="cs-select cs-skin-border input-half">
                                        <option value="" disabled selected>Any</option>
                                        <option value="1">Building</option>
                                        <option value="2">Office</option>
                                    </select>
                                </section>
                            </div>
                            <div class="col-xxs-12 col-xs-12">
                                <div class="input-field">
                                    <label for="from">Location:</label>
                                    <input type="text" class="form-control" id="from-place" placeholder="Any" />
                                </div>
                            </div>
                            <div class="col-xxs-12 col-xs-12">
                                <section>
                                    <label for="class">Price:</label>
                                    <div class="wide">
                                        <select class="cs-select cs-select-half cs-skin-border input-half">
                                            <option value="" disabled selected>Any</option>
                                            <option value="1">Building</option>
                                            <option value="2">Office</option>
                                        </select>
                                        <select class="cs-select cs-select-half cs-skin-border input-half">
                                            <option value="" disabled selected>Any</option>
                                            <option value="1">Building</option>
                                            <option value="2">Office</option>
                                        </select>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xxs-12 col-xs-12">
                                <section>
                                    <label for="class">Bedrooms:</label>
                                    <div class="wide">
                                        <select class="cs-select cs-select-half cs-skin-border input-half">
                                            <option value="" disabled selected>Any</option>
                                            <option value="1">Building</option>
                                            <option value="2">Office</option>
                                        </select>
                                        <select class="cs-select cs-select-half cs-skin-border input-half">
                                            <option value="" disabled selected>Any</option>
                                            <option value="1">Building</option>
                                            <option value="2">Office</option>
                                        </select>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xxs-12 col-xs-12">
                                <section>
                                    <label for="class">Bathrooms:</label>
                                    <div class="wide">
                                        <select class="cs-select cs-select-half cs-skin-border input-half">
                                            <option value="" disabled selected>Any</option>
                                            <option value="1">Building</option>
                                            <option value="2">Office</option>
                                        </select>
                                        <select class="cs-select cs-select-half cs-skin-border input-half">
                                            <option value="" disabled selected>Any</option>
                                            <option value="1">Building</option>
                                            <option value="2">Office</option>
                                        </select>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xxs-12 col-xs-12">
                                <section>
                                    <label for="class">Area:</label>
                                    <div class="wide">
                                        <select class="cs-select cs-select-half cs-skin-border input-half">
                                            <option value="" disabled selected>Any</option>
                                            <option value="1">Building</option>
                                            <option value="2">Office</option>
                                        </select>
                                        <select class="cs-select cs-select-half cs-skin-border input-half">
                                            <option value="" disabled selected>Any</option>
                                            <option value="1">Building</option>
                                            <option value="2">Office</option>
                                        </select>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xxs-12 col-xs-12">
                                <section>
                                    <label for="class">Parking spots:</label>
                                    <div class="wide">
                                        <select class="cs-select cs-select-half cs-skin-border input-half">
                                            <option value="" disabled selected>Any</option>
                                            <option value="1">Building</option>
                                            <option value="2">Office</option>
                                        </select>
                                        <select class="cs-select cs-select-half cs-skin-border input-half">
                                            <option value="" disabled selected>Any</option>
                                            <option value="1">Building</option>
                                            <option value="2">Office</option>
                                        </select>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xxs-12 col-xs-12 text-center">
                                <p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map" style="background-image: url({{$slide1}}/images/cover_bg_1.jpg);">
                </div>
            </div> -->



            <div id="fh5co-features">
                <div class="container" id="Why-us">

                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <h1>Why Choose <br><strong style="color:#ffbd59;"> Cluster Oasis Mas?</strong></h1><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 animate-box">

                            <div class="feature-left">
                                <span class="icon">
                                    <i class="fa-solid fa-map-location-dot"></i>
                                </span>
                                <div class="feature-copy">
                                    <h3>Strategic Location</h3>
                                    <p style="color: black;">Terletak di dalam kawasan Palm Spring Batam Center, Lokasi strategis ini menawarkan akses mudah ke fasilitas umum, pusat perbelanjaan, institusi pendidikan, dan banyak lagi, memastikan bahwa setiap aspek kehidupan Anda terpenuhi dengan sempurna. setiap kebutuhan gaya hidup Anda berada tepat di depan pintu Anda.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 animate-box">
                            <div class="feature-left">
                                <span class="icon">
                                    <i class="fa-solid fa-house-circle-check"></i>
                                </span>
                                <div class="feature-copy">
                                    <h3>Contemporary Home Design</h3>
                                    <p style="color: black;">Desain bangunan yang kekinian, dengan palet warna natural yang lembut, menciptakan suasana yang nyaman dan estetik. Setiap elemen dirancang untuk menonjolkan keindahan alami, memastikan bahwa rumah Anda bukan hanya tempat kembali, tetapi juga sebuah karya seni yang dapat dinikmati setiap hari.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box">
                            <div class="feature-left">
                                <span class="icon">
                                    <i class="fa-solid fa-seedling"></i>
                                </span>
                                <div class="feature-copy">
                                    <h3>Growing House Concept</h3>
                                    <p style="color: black;">Memiliki sisa tanah belakang yang luas, Lahan ini menawarkan potensi tak terbatas, baik untuk ekspansi arsitektural atau sebagai ruang pribadi untuk mengejar hobi yang Anda cintai.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 animate-box">

                            <div class="feature-left">
                                <span class="icon">
                                    <i class="fa-solid fa-tree"></i>
                                </span>
                                <div class="feature-copy">
                                    <h3>Full Facilities</h3>
                                    <p style="color: black;">Dirancang untuk kesehatan dan kebahagiaan Anda, terdapat taman bermain hijau, jogging track, dan seating area untuk menciptakan momen berharga karena setiap momen adalah menciptakan kenangan yang akan Anda hargai selamanya. </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 animate-box">
                            <div class="feature-left">
                                <span class="icon">
                                    <i class="fa-solid fa-wind"></i>
                                </span>
                                <div class="feature-copy">
                                    <h3>Cross Ventilation</h3>
                                    <p style="color: black;">Ruangan dirancang dengan kecerdasan, dengan sirkulasi udara yang optimal, menjanjikan oase ketenangan yang mengundang Anda untuk berkumpul dan berbagi momen tak terlupakan bersama keluarga.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box">
                            <div class="feature-left">
                                <span class="icon">
                                    <i class="fa-solid fa-sun"></i>
                                </span>
                                <div class="feature-copy">
                                    <h3>Natural Light</h3>
                                    <p style="color: black;">Dengan desain yang elegan dan fungsional,menghubungkan Anda dengan dunia luar sambil memastikan privasi dan efisiensi energi. Setiap sudutnya bersinar dengan kehangatan dan kecerahan, menciptakan suasana yang sempurna untuk produktivitas dan kenyamanan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </p>
                    <p><a class="btn btn-primary btn-lg" href="https://drive.google.com/file/d/14YeJ7t4YoYSm_QvyuPY-QB4mT65bIw12/view?usp=sharing" target="_blank">Get Brochure</a></p>
                </div>
            </div>

            <div id="fh5co-popular-properties" style="background-image: url({{$slide1}}/images/slider/aa.jpg)">
                <div class=" container" id="House-type">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                            <h3 style="color: white;"><strong>House Type</strong></h3>
                            <p style="color: white;">Kami menawarkan dua tipe eksklusif: Tipe <strong>Standard</strong> menawarkan keanggunan dan efisiensi ruang yang optimal, cocok untuk mereka yang menghargai kesederhanaan dan kenyamanan. Tipe <strong>Hook</strong> dengan tambahan ruang yang dapat diadaptasi untuk keinginan Anda, baik itu taman mini atau area santai pribadi. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 animate-box">
                            <a href="#" class="fh5co-property" style="background-image: url({{$slide1}}/images/slider/palm-1.jpg);">
                                <span class="status">Sale</span>
                                <div class="prop-details">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <span class="price">Rp. 1,3 M</span>
                                            <h3>Type Standard</h3>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="{{$slide1}}/images/slider/feature.png" width="340px" style="margin-bottom: 10px;">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 animate-box">
                            <a href="#" class="fh5co-property" style="background-image: url({{$slide1}}/images/slider/palm-2.jpg);">
                                <span class="status">Sale</span>
                                <div class="prop-details">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <span class="price">Rp. 1,3 M</span>
                                            <h3>Type Hook</h3>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="{{$slide1}}/images/slider/feature.png" width="340px" style="margin-bottom: 10px;">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <p><a class="btn btn-primary btn-lg" href="https://drive.google.com/file/d/14YeJ7t4YoYSm_QvyuPY-QB4mT65bIw12/view?usp=sharing" target="_blank">Get Brochure</a></p>
                </div>
            </div>

            <!-- <div id="fh5co-testimonial" style="background-image: url({{$slide1}}/images/img_bg_2.jpg);">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <h2>Happy Clients</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-testimony animate-box">
                                <blockquote>
                                    <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                                <p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="box-testimony animate-box">
                                <blockquote>
                                    <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
                                </blockquote>
                                <p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
                            </div>


                        </div>
                        <div class="col-md-4">
                            <div class="box-testimony animate-box">
                                <blockquote>
                                    <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                                <p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div id="fh5co-properties" class="fh5co-section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                            <h3>Newest Properties</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 animate-box">
                            <div class="property">
                                <a href="#" class="fh5co-property" style="background-image: url({{$slide1}}/images/property-1.jpg);">
                                    <span class="status">Sale</span>
                                    <ul class="list-details">
                                        <li>2000 ft sq
                                        <li>
                                        <li>5 Bedroom:</li>
                                        <li>4 Bathroom:</li>
                                        <li>3 Garage:</li>
                                    </ul>
                                </a>
                                <div class="property-details">
                                    <h3>Properties Near in Beach</h3>
                                    <span class="price">$3,000</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                                    <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box">
                            <div class="property">
                                <a href="#" class="fh5co-property" style="background-image: url({{$slide1}}/images/property-2.jpg);">
                                    <span class="status">Rent</span>
                                    <ul class="list-details">
                                        <li>2000 ft sq
                                        <li>
                                        <li>5 Bedroom:</li>
                                        <li>4 Bathroom:</li>
                                        <li>3 Garage:</li>
                                    </ul>
                                </a>
                                <div class="property-details">
                                    <h3>Modern House at NZ</h3>
                                    <span class="price">$200/mos</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                                    <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box">
                            <div class="property">
                                <a href="#" class="fh5co-property" style="background-image: url({{$slide1}}/images/property-3.jpg);">
                                    <span class="status">Sale</span>
                                    <ul class="list-details">
                                        <li>2000 ft sq
                                        <li>
                                        <li>5 Bedroom:</li>
                                        <li>4 Bathroom:</li>
                                        <li>3 Garage:</li>
                                    </ul>
                                </a>
                                <div class="property-details">
                                    <h3>Bonggalo House</h3>
                                    <span class="price">$3,000</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                                    <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box">
                            <div class="property">
                                <a href="#" class="fh5co-property" style="background-image: url({{$slide1}}/images/property-4.jpg);">
                                    <span class="status">Sale</span>
                                    <ul class="list-details">
                                        <li>2000 ft sq
                                        <li>
                                        <li>5 Bedroom:</li>
                                        <li>4 Bathroom:</li>
                                        <li>3 Garage:</li>
                                    </ul>
                                </a>
                                <div class="property-details">
                                    <h3>Properties at Alaska</h3>
                                    <span class="price">$3,000</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                                    <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box">
                            <div class="property">
                                <a href="#" class="fh5co-property" style="background-image: url({{$slide1}}/images/property-5.jpg);">
                                    <span class="status">Rent</span>
                                    <ul class="list-details">
                                        <li>2000 ft sq
                                        <li>
                                        <li>5 Bedroom:</li>
                                        <li>4 Bathroom:</li>
                                        <li>3 Garage:</li>
                                    </ul>
                                </a>
                                <div class="property-details">
                                    <h3>Modern Properties</h3>
                                    <span class="price">$200/mos</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                                    <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box">
                            <div class="property">
                                <a href="#" class="fh5co-property" style="background-image: url({{$slide1}}/images/property-6.jpg);">
                                    <span class="status">Sale</span>
                                    <ul class="list-details">
                                        <li>2000 ft sq
                                        <li>
                                        <li>5 Bedroom:</li>
                                        <li>4 Bathroom:</li>
                                        <li>3 Garage:</li>
                                    </ul>
                                </a>
                                <div class="property-details">
                                    <h3>House at the Top of Mountain</h3>
                                    <span class="price">$3,000</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                                    <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="container" id="Floor-plan">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="margin-top: 50px;">
                        <h1>Floor Plan <br><strong style="color:#ffbd59;"> Cluster Oasis Mas</strong></h1><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <span>Denah Tipe Standard</span>
                        <img src="{{$slide1}}/images/slider/Denah-standard.png" alt="" width="100%">
                    </div>
                    <div class="col-md-6">
                        <span>Denah Tipe Hook</span>
                        <img src="{{$slide1}}/images/slider/Denah-Hook.png" alt="" width="100%">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="margin-top: 50px;">
                        <h1>Modern Living at <br><strong style="color:#ffbd59;"> Cluster Oasis Mas</strong></h1><br>
                        <p>sebuah enclave eksklusif di mana setiap detail dirancang dengan keindahan dan fungsi. Konsep cluster kami menawarkan tatanan yang rapi dan terstruktur, menciptakan lingkungan yang harmonis dan estetis. Dengan jalur yang jelas dan taman yang terawat, setiap langkah di komunitas ini adalah pengalaman yang menenangkan. Ini bukan hanya tempat tinggal, ini adalah pilihan gaya hidup bagi mereka yang menghargai ketertiban dan keindahan dalam setiap aspek kehidupan mereka.</p>
                    </div>
                </div>
                <div>
                    <img src="{{$slide1}}/images/slider/1.jpg" alt="" width="100%">
                </div>
                <div>
                    <img src="{{$slide1}}/images/slider/2.jpg" alt="" width="100%" style="margin-bottom: 50px;">
                </div>
                <a class="btn btn-primary btn-lg" style="margin-bottom: 5%;" href="https://drive.google.com/file/d/14YeJ7t4YoYSm_QvyuPY-QB4mT65bIw12/view?usp=sharing" target="_blank">Get Brochure</a>
            </div>



            <div id="fh5co-about" class="fh5co-agent">
                <div class="container" id="Strategic">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                            <h3>Strategic Location</h3>
                            <p>Terletak di dalam kawasan Palm Spring Batam Center, Lokasi strategis ini menawarkan akses mudah ke fasilitas umum, pusat perbelanjaan, institusi pendidikan, dan banyak lagi, memastikan bahwa setiap aspek kehidupan Anda terpenuhi dengan sempurna. setiap kebutuhan gaya hidup Anda berada tepat di depan pintu Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <img src="{{$slide1}}/images/slider/surround.png" alt="" width="100%">
                </div>
            </div>

            <!-- <div id="fh5co-blog-section" class="fh5co-section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                            <h3>Recent From Blog</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row row-bottom-padded-md">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="fh5co-blog animate-box">
                                <a href="#"><img class="img-responsive" src="{{$slide1}}/images/property-4.jpg" alt=""></a>
                                <div class="blog-text">
                                    <div class="prod-title">
                                        <h3><a href="#">Properties for sale</a></h3>
                                        <span class="posted_by">Sep. 15th</span>
                                        <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <p><a href="#">Learn More...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="fh5co-blog animate-box">
                                <a href="#"><img class="img-responsive" src="{{$slide1}}/images/property-2.jpg" alt=""></a>
                                <div class="blog-text">
                                    <div class="prod-title">
                                        <h3><a href="#">Modern Home</a></h3>
                                        <span class="posted_by">Sep. 15th</span>
                                        <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <p><a href="#">Learn More...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="fh5co-blog animate-box">
                                <a href="#"><img class="img-responsive" src="{{$slide1}}/images/property-3.jpg" alt=""></a>
                                <div class="blog-text">
                                    <div class="prod-title">
                                        <h3><a href="#">15% Deal Discount For House</a></h3>
                                        <span class="posted_by">Sep. 15th</span>
                                        <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <p><a href="#">Learn More...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-md-block"></div>
                    </div>
                </div>
            </div> -->
            <!-- fh5co-blog-section -->

            <div id="fh5co-contact" class="fh5co-contact">
                <div class="half-contact">
                    <div class="container-fluid" id="Contact">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-0 text-center heading-section animate-box">
                                <h3>Contact Us</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box">
                                <div class="row">
                                    <form action="/Contact-Oasis" method="POST">
                                        @csrf
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{old('name')}}">
                                                @error('name')
                                                <span class="text-danger mt-1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="{{old('email')}}">
                                                @error('email')
                                                <span class="text-danger mt-1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Write here.." name="request" id="request"></textarea>
                                                @error('request')
                                                <span class="text-danger mt-1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-center" style="margin-bottom: 2%;">
                                                {!! NoCaptcha::renderJs() !!}
                                                {!! NoCaptcha::display() !!}
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="half-bg" style="background-image: url({{$slide1}}/images/cover_bg_2.jpg);"></div>
            </div>


            <a href="https://api.whatsapp.com/send?phone=628161111699" target="_blank">
                <button class="btn-floating whatsapp">
                    <img src="{{asset('front_templates')}}/icons/wa.png" alt="WhatsApp Us" width="40px">
                    <span>Consultation Now</span>
                </button>
            </a>

            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="margin-top: 50px;">
                        <h1>Sales Gallery <br><strong style="color:#ffbd59;"> Cluster Oasis Mas</strong></h1><br>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.009142133563!2d104.0003746919628!3d1.1539593222365339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98a23810bd189%3A0x87f4647174aa3225!2sPT.Hansway%20Indonesia%20%7CJasa%20Steel%20Work%7CKeagenan%20Ship%7CSupply%20Jasa%7CShip%20Chandler%20Batam%20-%20MGO%2Cprovisions%20%26%20Ship%20spares%7CLSA%20%26%20FFA!5e0!3m2!1sen!2sid!4v1708499142890!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


            <footer>
                <div id="footer">
                    <div class="container">
                        <div class="row row-bottom-padded-md">
                            <div class="col-md-6">
                                <h3 class="section-title">About Oasis Mas Cluster</h3>
                                <p>Komplek perumahan mewah yang di kembangkan oleh Hansway Group. yang menawarkan lebih dari sekadar tempat tinggal; ini adalah simbol dari gaya hidup eksklusif. setiap unit di komplek ini dirancang dengan standar tertinggi, menjanjikan kenyamanan, keamanan, dan kemewahan yang tak tertandingi. Dengan lokasi yang strategis, arsitektur yang memukau, dan fasilitas yang dapat memenuhi kebutuhan penghuni. </p>
                            </div>

                            <div class="col-md-6 col-md-push-1">
                                <h3 class="section-title">Quick Links</h3>
                                <ul>
                                    <li><a href="#Home">Home</a></li>
                                    <li><a href="#Why-us">Why Choose Us</a></li>
                                    <li><a href="#House-type">House Type</a></li>
                                    <li><a href="#Floor-plan">Floor Plan</a></li>
                                    <li><a href="#Strategic">Strategic Location</a></li>
                                    <li><a href="#Contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="fh5co-social-icons">
                                    <a href="#"><i class="icon-facebook2"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                </p>
                                <p>Copyright {{date("Y")}} Oasis Mas Cluster</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>



        </div>
        <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->


    <script src="{{asset('oasismas_templates')}}/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('oasismas_templates')}}/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('oasismas_templates')}}/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="{{asset('oasismas_templates')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('oasismas_templates')}}/js/sticky.js"></script>
    <!-- Superfish -->
    <script src="{{asset('oasismas_templates')}}/js/hoverIntent.js"></script>
    <script src="{{asset('oasismas_templates')}}/js/superfish.js"></script>
    <!-- Flexslider -->
    <script src="{{asset('oasismas_templates')}}/js/jquery.flexslider-min.js"></script>
    <!-- Date Picker -->
    <script src="{{asset('oasismas_templates')}}/js/bootstrap-datepicker.min.js"></script>
    <!-- CS Select -->
    <script src="{{asset('oasismas_templates')}}/js/classie.js"></script>
    <script src="{{asset('oasismas_templates')}}/js/selectFx.js"></script>


    <!-- Main JS -->
    <script src="{{asset('oasismas_templates')}}/js/main.js"></script>

</body>

</html>