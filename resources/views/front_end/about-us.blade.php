@extends('layout.mainLayout')
@section('body')

<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax">

    <div class="bg-img"><img src="{{asset('storage/'.$image->image)}}" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
                <h1 class="pagetitle__heading">About Us</h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ========================
      About 2
    =========================== -->
<section id="about2" class="about about-2 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-5">
                <div class="about__img mb-60">
                    <img src="{{asset('front_templates')}}/images/about/2.jpg" alt="about img" class="img-fluid">
                </div><!-- /.about-img -->
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-7">
                <div class="row heading heading-2">
                    <div class="col-sm-12 col-md-12 col-sm-12">
                        <h2 class="heading__title">Provide Best Services and High Quality Products</h2>
                    </div><!-- /.col-lg-12 -->
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        <p class="heading__desc mb-30">
                            PT. Hansway Indonesia was established in 2010 as a strategic partner company to PT. Widi Jasa Ekspress - Batam due to the market growth of its client in marine and shipping industry.
                        </p>
                        <p>
                            PT. Hansway Indonesia consistently provides personalize services for all owners and charterers with their needs of supplies and services within ship operational, With our advantage in several business sectors such as in Ship and Industry Construction, Engineering & Repair, Logistic Services, Tugboat & Barge Charter Services & Ship Chandler for Marine and Shipping Industry, while the sister company, PT. Pelayaran Samudra Tujuh ranged in Ship Management and Agency.
                        </p>
                        <p>
                            PT. Hansway Indonesia provide best services and high quality products with leading brands in the market with very competitive price for the material supply & services with professionalism of the team with high skill & experienced personnel within marine & shipping industry.
                        </p>

                    </div><!-- /.col-lg-7 -->
                    <div class="col-sm-12 col-md-5 col-lg-5">
                        <div class="carousel owl-carousel carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="700">
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-transfer"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Vision statement</h4>
                                    <p class="fancybox__desc">Following the rapid development in the domestic as well as the international marine industry, ships are constantly being built or renewed and the marine logistic is in rising demand, therefore to support this business chain, "PT. Hansway Indonesia" cultivates and maintains 4 business sectors that cater to industries' needs such as equipment and services.</p><br>
                                    <p>
                                        Our Vision is to become a ship chandler enterprise, that could do trading in the local as well as the international market and to be recognized as "QUICKER and BETTER" as Ship's equipment and Services provider
                                    </p>
                                    <p>
                                        The Quality of Our service, demonstrating professionalism from every personnel who are actively involved in supporting the marine industry through our services in covering the business area, dedicated to be the "Customers' first choice and delivering positive impact for the local and international marine industry".
                                    </p>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-worldwide"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Mission statement</h4>
                                    <p class="fancybox__desc">
                                    <ol>
                                        <li>Provide Services and Solutions to customers.</li><br>
                                        <li>Serve all Customers to the convenience level of a "one-stop-service".</li><br>
                                        <li>Supply Ship Equipment with the quality of an accepted standard.</li><br>
                                        <li> Improve Company's values by encouraging creativity, innovation and cultivate competence in human resources for every parties involved.</li><br>
                                        <li>Operate business activities that benefit all parties and with a concern for good cooperation.</li><br>
                                    </ol>
                                    </p>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                        </div><!-- /.carousel -->
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.About 2 -->

<!-- =====================
       Clients 1
    ======================== -->
<section id="clients1" class="clients clients-1 border-top">
    <div class="container">
        <div class="heading heading-3 mb-50">
            <h4 class="text-center" style="color:#ff5e14;">Our Clients</h4>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="carousel-client owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">
                    @foreach($clients as $client)
                    <div class="client">
                        <a href="#"><img src="{{asset('storage/'. $client->image)}}" alt="client" width="100px"></a>
                    </div><!-- /.client -->
                    @endforeach

                </div><!-- /.carousel -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="row mt-3">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <a href="/Galleries" class="btn btn__primary btn__hover3 btn__lg mt-20">See More</a>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.clients 1 -->

<!-- ======================
           banner 1
      ========================= -->
<section id="banner1" class="banner banner-1 video fancybox-layout2 p-0 bg-theme">
    <div class="container-fluid col-padding-0">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 equal-height">
                <div class="inner-padding">
                    <div class="heading heading-2 mb-50">
                        <h2 class="heading__title color-white">Your Maritime Partner in Services, Supplies,
                            and Management.</h2>
                        <p class="heading__desc color-white">In the maritime and shipping industries, PT. Hansway Indonesia offers the best services and premium products from top brands at prices that are extremely competitive. The team's professional approach to material supply and services is complemented by highly skilled and experienced individuals.</p>
                    </div><!-- /.heading -->
                    <div class="row">
                        @foreach($service_whies as $why)
                        <!-- fancybox item #1 -->
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-credit-cards"></i>
                                </div>
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Customer Focus</h4>
                                    <p class="fancybox__desc">{{$why->customer_focus}}</p>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                        </div><!-- /.col-lg-3 -->

                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-credit-cards"></i>
                                </div>
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Emphaty</h4>
                                    <p class="fancybox__desc">{{$why->emphaty}}</p>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                        </div><!-- /.col-lg-3 -->

                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-credit-cards"></i>
                                </div>
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Professionalism</h4>
                                    <p class="fancybox__desc">{{$why->professionalism}}</p>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                        </div><!-- /.col-lg-3 -->

                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-credit-cards"></i>
                                </div>
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Acuracy and Trustworthy</h4>
                                    <p class="fancybox__desc">{{$why->acuracy_trustworthy}}</p>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                        </div><!-- /.col-lg-3 -->
                        @endforeach
                    </div><!-- /.row -->
                    <a href="#" class="btn  btn__white btn__hover2 btn__lg">Contact Us</a>
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="bg-overlay">
                    <div class="bg-img"><img src="{{asset('front_templates')}}/images/video/2.jpg" alt="background"></div>
                    <div class="video__btn video__btn-white align-v-h equal-height">
                        <a class="popup-video" href="https://www.youtube.com/embed/mVx243X-uDE?si=lY0pTHF6Dio6eKPn">
                            <span class="video__player-animation"></span>
                            <div class="video__player">
                                <i class="fa fa-play"></i>
                            </div>
                        </a>
                    </div>
                </div><!-- /.video -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.banner 1 -->

@endsection