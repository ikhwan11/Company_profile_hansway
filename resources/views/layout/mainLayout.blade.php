<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Logisti ">
    <link href="{{asset('front_templates')}}/images/logo/favicon-hansway.png" rel="icon">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700%7cWork+Sans:400,600,700&display=swap">
    <link rel="stylesheet" href="{{asset('font-awesome')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('front_templates')}}/css/libraries.css" />
    <link rel="stylesheet" href="{{asset('front_templates')}}/css/style.css" />

    <!-- phone -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"> -->

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/d7f0e40acc.js" crossorigin="anonymous"></script>

    <!-- gallery -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- trix editor -->
    <link rel="stylesheet" type="text/css" href="{{asset('trix_editor')}}/trix.css">

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

        /* gallery */
        .portfolio-menu {
            text-align: center;
        }

        .portfolio-menu ul li {
            display: inline-block;
            margin: 0;
            list-style: none;
            cursor: pointer;
            -webkit-transition: all 05s ease;
            -moz-transition: all 05s ease;
            -ms-transition: all 05s ease;
            -o-transition: all 05s ease;
            transition: all .5s ease;
        }

        .portfolio-item .item {
            /*width:303px;*/
            float: left;
            margin-bottom: 10px;
        }

        .portfolio-item .item img {
            width: 100%;
            /* Ensure the image takes up the full width of its container */
            height: auto;
            display: block;
        }

        .client-image {
            width: 70px;
            height: 70px;
            object-fit: fill;
            border-radius: 50%;
        }
    </style>
</head>


<body>

    <div class="preloader">
        <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->
    <div class="wrapper">
        <!-- =========================
        Header
    =========================== -->
        @php
        $judul = ["Career-apply","Gallery & Client","News & Article"];
        @endphp

        <header id="header" class="header 
        @if (!in_array($title, $judul))
        header-transparent
        @else
        @endif
        ">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="{{asset('front_templates')}}/images/logo/logo-light.png" class="logo-light" alt="logo">
                        <img src="{{asset('front_templates')}}/images/logo/logo-dark.png" class="logo-dark" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="menu-lines"><span></span></span>
                    </button>
                    <div class="header__top-right d-none d-lg-block">
                        <ul class="list-unstyled d-flex justify-content-end align-items-center">
                            <li><i class="icon-phone"></i><span>(+62) 778-7415227</span></li>
                            <li><a href="/Contact-us" class="btn 
                            
                            @if (!in_array($title, $judul))
                            btn__white
                            @else
                            btn__primary btn__hover3
                            @endif">
                                    <span>CONTACT US</span></a></li>
                        </ul>
                    </div><!-- /.header-top-right -->
                    <div class="collapse navbar-collapse" id="mainNavigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav__item">
                                <a href="/" class="dropdown-toggle nav__item-link {{ ($title === "PT. HANSWAY INDONESIA") ? 'active' : ''}}">Home</a>
                            </li><!-- /.nav-item -->

                            <li class="nav__item with-dropdown">
                                <a href="#" class="nav__item-link">Hansway Group</a>
                                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                                <ul class="dropdown-menu">
                                    @foreach($navbar as $nav)
                                    <li class="nav__item"><a href="{{$nav->link}}" class="nav__item-link" target="_blank">{{$nav->company_name}}</a></li>
                                    @endforeach
                                </ul><!-- /.dropdown-menu -->
                            </li><!-- /.nav-item -->

                            <li class="nav__item">
                                <a href="/About-us" class="dropdown-toggle nav__item-link {{ ($title === "About Us") ? 'active' : ''}}">About Us</a>
                            </li><!-- /.nav-item -->

                            <li class="nav__item with-dropdown">
                                <a href="/Service" class="nav__item-link {{ ($title === "Our Services") ? 'active' : ''}}">Our Services</a>
                                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                                <ul class="dropdown-menu">
                                    <li class="nav__item"><a href="/Our-Service/Ship-services" class="nav__item-link">Ship Maintenance Service</a></li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item"><a href="/Our-Service/Ship-Chandlers" class="nav__item-link">Ship Chandler</a></li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item"><a href="/Our-Service/Warehousing-and-Logistic" class="nav__item-link">Warehouse & Logistic</a></li>
                                    <!-- /.nav-item -->
                                </ul><!-- /.dropdown-menu -->
                            </li><!-- /.nav-item -->

                            <!-- <li class="nav__item">
                                <a href="/Our-project" class="nav__item-link {{ ($title === "Our Project") ? 'active' : ''}}">Our Projects</a>
                            </li> -->

                            <li class="nav__item">
                                <a href="/News-&-Article" class="nav__item-link {{ ($title === "News & Article") ? 'active' : ''}}">News & Article</a>
                            </li><!-- /.nav-item -->

                            <li class="nav__item">
                                <a href="/Galleries" class="dropdown-toggle nav__item-link {{ ($title === "Gallery & Client") ? 'active' : ''}}">Gallery & Client</a>
                            </li><!-- /.nav-item -->

                            <li class="nav__item">
                                <a href="/Career" class="nav__item-link {{ ($title === "Career") ? 'active' : ''}}">Career</a>
                            </li><!-- /.nav-item -->

                        </ul><!-- /.navbar-nav -->
                    </div><!-- /.navbar-collapse -->
                    <!-- <div class="navbar-modules">
                        <div class="modules__wrapper d-flex align-items-center">
                            <a href="#" class="module__btn module__btn-search"><i class="fa fa-search"></i></a>
                        </div>
                    </div> -->
                </div><!-- /.container -->
            </nav><!-- /.navabr -->
        </header><!-- /.Header -->

        @yield('body')

        <!-- ========================= 
            Testimonial #2
    =========================  -->

        @php
        $dataTitle = ["Career-apply","Gallery & Client", "News & Article"];
        @endphp

        @if (!in_array($title, $dataTitle))
        <!-- <section id="testimonial2" class="testimonial testimonial-2 text-center pt-0 pb-170">
            <div class="bg-img"><img src="{{asset('front_templates')}}/images/backgrounds/2.jpg" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center">
                            <span class="heading__subtitle mb-0 mt-4">Client’s Testimonials</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                        <div class="owl-carousel thumbs-carousel" data-slider-id="1" data-nav="false" data-dots="false">
                           
                            <div class=" testimonial-item">
                                <div class="testimonial__content">
                                    <p class="testimonial__desc">Logisti team is the best of the best, and expertly trained team members
                                        who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver
                                        innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global
                                        environment.</p>
                                </div>
                            </div><
                            
                            <div class=" testimonial-item">
                                <div class="testimonial__content">
                                    <p class="testimonial__desc">Logisti team is the best of the best, and expertly trained team members
                                        who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver
                                        innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global
                                        environment.</p>
                                </div>
                            </div>
                            
                            <div class=" testimonial-item">
                                <div class="testimonial__content">
                                    <p class="testimonial__desc">Logisti team is the best of the best, and expertly trained team members
                                        who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver
                                        innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global
                                        environment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="owl-thumbs" data-slider-id="1">
                            <button class="owl-thumb-item">
                                <span class="testimonial__meta">
                                    <span class="testimonial__thumb">
                                        <img src="{{asset('front_templates')}}/images/testimonials/thumbs/1.jpg" alt="author thumb">
                                    </span>
                                    <span class="testimonial__meta-title">Sami Wade</span>
                                    <span class="testimonial__meta-desc">WhiteMov</span>
                                </span>
                            </button>
                            <button class="owl-thumb-item">
                                <span class="testimonial__meta">
                                    <span class="testimonial__thumb">
                                        <img src="{{asset('front_templates')}}/images/testimonials/thumbs/2.jpg" alt="author thumb">
                                    </span>
                                    <span class="testimonial__meta-title">John Peter</span>
                                    <span class="testimonial__meta-desc">Mov Inc</span>
                                </span>
                            </button>
                            <button class="owl-thumb-item">
                                <span class="testimonial__meta">
                                    <span class="testimonial__thumb">
                                        <img src="{{asset('front_templates')}}/images/testimonials/thumbs/1.jpg" alt="author thumb">
                                    </span>
                                    <span class="testimonial__meta-title">Martin Hope</span>
                                    <span class="testimonial__meta-desc">ProMov</span>
                                </span>
                            </button>
                        </div>
                    </div><
                </div>
            </div>
        </section> -->
        @endif

        <!-- ======================
      Blog Grid
    ========================= -->

        @php
        $dataTitle = ["News & Article", "Contact Us", "About Us", "Our Services", "Career", "Career-apply", "Gallery & Client"];
        @endphp

        @if (!in_array($title, $dataTitle))
        <section id="blogGrid" class="blog blog-grid pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center mb-50">
                            <span class="heading__subtitle">Hansway News & Article</span>
                            <h2 class="heading__title">Recent News & Article</h2>
                            <div class="divider__line divider__theme divider__center mb-0"></div>
                            <p class="heading__desc">Follow our latest news and thoughts which focuses exclusively on insight,
                                industry trends, top news headlines.</p>
                        </div><!-- /.heading -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <!-- Blog Item #1 -->
                    @foreach($news as $new)
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog__img">
                                <a href="/News-&-Article/{{$new->slug}}">
                                    <img src="{{asset('storage/'.$new->image)}}" alt="blog image">
                                </a>
                            </div><!-- /.entry-img -->
                            <div class="blog__content">
                                <div class="blog__meta">
                                    <!-- <div class="blog__meta-cat">
                                        <a href="#">Insights</a><a href="#">Management</a>
                                    </div> -->
                                    <span class="blog__meta-date">{{ date('M, d Y', strtotime($new->created_at)) }}</span>
                                </div><!-- /.blog-meta -->
                                <h4 class="blog__title"><a href="#">{{$new->title}}</a></h4>
                                <p class="blog__desc">{{$new->excerpt}}
                                </p>
                                <a href="/News-&-Article/{{$new->slug}}" class="btn btn__secondary btn__link">Read More</a>
                            </div><!-- /.entry-content -->
                        </div><!-- /.blog-item -->
                    </div>
                    @endforeach
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                        <a href="/News-&-Article" class="btn btn__primary btn__hover3 btn__lg mt-20">More News & Article</a>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog Grid -->
        @endif

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.009142133563!2d104.0003746919628!3d1.1539593222365339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98a23810bd189%3A0x87f4647174aa3225!2sPT.Hansway%20Indonesia%20%7CJasa%20Steel%20Work%7CKeagenan%20Ship%7CSupply%20Jasa%7CShip%20Chandler%20Batam%20-%20MGO%2Cprovisions%20%26%20Ship%20spares%7CLSA%20%26%20FFA!5e0!3m2!1sen!2sid!4v1708499142890!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


        <!-- whatsapp -->
        <!--Use the below code snippet to provide real time updates to the live chat plugin without the need of copying and paste each time to your website when changes are made via PBX-->
        <call-us-selector phonesystem-url="https://1429.3cx.cloud" party="hanswayindonesia"></call-us-selector>

        <!--Incase you don't want real time updates to the live chat plugin when options are changed, use the below code snippet. Please note that each time you change the settings you will need to copy and paste the snippet code to your website-->
        <!--<call-us 
 phonesystem-url="https://1429.3cx.cloud" 
 style="position:fixed;font-size:16px;line-height:17px;z-index: 99999;--call-us-main-accent-color:#D63004;--call-us-main-background-color:#FFFFFF;--call-us-plate-background-color:#D97E18;--call-us-plate-font-color:#E6E6E6;--call-us-main-font-color:#292929;--call-us-agent-bubble-color:#29292910;right: 20px; bottom: 20px;" 
 id="wp-live-chat-by-3CX" 
 minimized="false" 
 animation-style="slidefromside" 
 party="hanswayindonesia" 
 minimized-style="bubbleright" 
 allow-call="false" 
 allow-video="false" 
 allow-soundnotifications="true" 
 enable-mute="true" 
 enable-onmobile="true" 
 offline-enabled="true" 
 enable="true" 
 ignore-queueownership="false" 
 authentication="both" 
 show-operator-actual-name="true" 
 aknowledge-received="true" 
 gdpr-enabled="false" 
 message-userinfo-format="both" 
 message-dateformat="both" 
 lang="en" 
 button-icon-type="doublebubble" 
 greeting-visibility="none" 
 greeting-offline-visibility="none" 
 chat-delay="2000" 
 enable-direct-call="false" 
 enable-ga="false" 
 ></call-us>-->
        <script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>


        <footer id="footer" class="footer footer-1">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- location -->
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-panel contact-panel-2">
                                <div class="contact__panel-header d-flex align-items-center">
                                    <i class="icon-placeholder"></i>
                                    <h4 class="contact__panel-title">Our Locations</h4>
                                </div>
                                <div id="accordion">
                                    <div class="accordion-item">
                                        <div class="accordion__item-header opened" data-toggle="collapse" data-target="#collapse1">
                                            <a class="accordion__item-title" href="#">Office</a>
                                        </div>
                                        <div id="collapse1" class="collapse  show" data-parent="#accordion">
                                            <div class="accordion__item-body">
                                                <ul class="contact__list list-unstyled">
                                                    <li>(+62)778-7415227</li>
                                                    <li>Email: inquiry@hanswayindonesia.com</li>
                                                    <li>Address: Komp. Citra Super Mall Blok B No.5-6 Harbour Bay Jl Duyung - Batu Ampar Batam 29432 - Indonesia</li>
                                                    <li>Hours: Mon-Fri: 8.30 am – 05.30 pm</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                                            <a class="accordion__item-title" href="#">Warehouse</a>
                                        </div>
                                        <div id="collapse2" class="collapse" data-parent="#accordion">
                                            <div class="accordion__item-body">
                                                <ul class="contact__list list-unstyled">
                                                    <li>(+62)778-7415227</li>
                                                    <li>Email: inquiry@hanswayindonesia.com</li>
                                                    <li>Address: Batu Ampar, Union Industrial Park Blok H No.8 Jl Yos Sudarso, Tj. Sengkuan Bengkong Laut 29444 - Indonesia</li>
                                                    <li>Hours: Mon-Fri: 8.30 am – 05.30 pm</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 footer__widget footer__widget-nav">
                            <h3>Our Company</h3>
                            <div class="footer__widget-content">
                                <nav>
                                    <ul class="list-unstyled">
                                        @foreach($navbar as $nav)
                                        <li><a href="{{$nav->link}}" target="_blank">{{$nav->company_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div><!-- /.footer-widget-content -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-md-2 footer__widget footer__widget-nav mt-4">
                            <h6 class="footer__widget-title">What We Do</h6>
                            <div class="footer__widget-content">
                                <nav>
                                    <ul class="list-unstyled">
                                        <li><a href="/Our-Service/Ship-services">Ship Services</a></li>
                                        <li><a href="/Our-Service/Ship-Chandlers">Ship Chandler</a></li>
                                        <li><a href="/Our-Service/Warehousing-and-Logistic">Warehouse & Logistics</a></li>
                                    </ul>
                                </nav>
                            </div><!-- /.footer-widget-content -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-md-2 footer__widget footer__widget-nav mt-4">
                            <h6 class="footer__widget-title">Quick Links</h6>
                            <div class="footer__widget-content">
                                <nav>
                                    <ul class="list-unstyled">
                                        <li><a href="/About-us">About Us</a></li>
                                        <li><a href="/Service">Our Services</a></li>
                                        <!-- <li><a href="#">Our Projects</a></li> -->
                                        <li><a href="/News-&-Article">News & Article</a></li>
                                        <li><a href="/Career">Career</a></li>
                                    </ul>
                                </nav>
                            </div><!-- /.footer-widget-content -->
                        </div><!-- /.col-lg-2 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-top -->
            <div class="container">
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-sm-12 col-md-9 col-lg-9">
                            <div class="footer__copyright">
                                <nav>
                                    <ul class="list-unstyled footer__copyright-links d-flex flex-wrap">
                                        <li><a href="/login">Adminstrator Page</a></li>
                                    </ul>
                                </nav>

                                <!-- login modal -->

                                <span>Copyright &copy; <script>
                                        document.write(new Date().getFullYear())
                                    </script>, PT. Hansway Indonesia</span>
                            </div><!-- /.Footer-copyright -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-12 col-md-3 col-lg-3 d-flex align-items-center">
                            <div class="social__icons justify-content-end w-100">
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div><!-- /.social-icons -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.Footer-bottom -->
            </div><!-- /.container -->
        </footer><!-- /.Footer -->

        <!-- <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button> -->
        <!-- <div class="floatingButtonWrap">
            <div class="floatingButtonInner">
                <a href="#" class="floatingButton">
                    <i class="fa-solid fa-comments"></i>
                </a>
                <ul class="floatingMenu">
                    <li>
                        <a href="#"><i class="fa-brands fa-whatsapp text-white whatsapp"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-regular fa-envelope text-white mail"></i></a>
                    </li>
                </ul>
            </div>
        </div> -->

        <div class="module__search-container">
            <i class="fa fa-times close-search"></i>
            <form class="module__search-form">
                <input type="text" class="search__input" placeholder="Search Here">
                <button class="module__search-btn"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /.module-search-container -->

    </div><!-- /.wrapper -->

    <script src="{{asset('front_templates')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('front_templates')}}/js/plugins.js"></script>
    <script src="{{asset('front_templates')}}/js/main.js"></script>
    <!-- trix editor -->
    <script type="text/javascript" src="{{asset('trix_editor')}}/trix.umd.min.js"></script>

    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        // floating button

        $(document).ready(function() {
            $('.floatingButton').on('click',
                function(e) {
                    e.preventDefault();
                    $(this).toggleClass('open');
                    if ($(this).children('.fa').hasClass('fa-plus')) {
                        $(this).children('.fa').removeClass('fa-plus');
                        $(this).children('.fa').addClass('fa-close');
                    } else if ($(this).children('.fa').hasClass('fa-close')) {
                        $(this).children('.fa').removeClass('fa-close');
                        $(this).children('.fa').addClass('fa-plus');
                    }
                    $('.floatingMenu').stop().slideToggle();
                }
            );
            $(this).on('click', function(e) {

                var container = $(".floatingButton");
                // if the target of the click isn't the container nor a descendant of the container
                if (!container.is(e.target) && $('.floatingButtonWrap').has(e.target).length === 0) {
                    if (container.hasClass('open')) {
                        container.removeClass('open');
                    }
                    if (container.children('.fa').hasClass('fa-close')) {
                        container.children('.fa').removeClass('fa-close');
                        container.children('.fa').addClass('fa-plus');
                    }
                    $('.floatingMenu').hide();
                }

                // if the target of the click isn't the container and a descendant of the menu
                if (!container.is(e.target) && ($('.floatingMenu').has(e.target).length > 0)) {
                    $('.floatingButton').removeClass('open');
                    $('.floatingMenu').stop().slideToggle();
                }
            });
        });
    </script>

    <!-- galery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

    <!-- tel -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script>
        var input = document.querySelector("#phone");
        var iti = window.intlTelInput(input, {
            separateDialCode: true,
            preferredCountries: ["us", "gb", "in"],
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script> -->


</body>

</html>