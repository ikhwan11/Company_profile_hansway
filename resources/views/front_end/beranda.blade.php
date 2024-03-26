@extends('layout.mainLayout')
@section('body')

<!-- ============================
        Slider
    ============================== -->
<section id="slider2" class="slider slider-2">
    <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="3000" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">

        @foreach ($sliders as $slider)
        <div class="slide-item align-v-h bg-overlay">
            <div class="bg-img"><img src="{{asset('storage/'. $slider->image)}}" alt="slide img"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="slide__content">
                            <h2 class="slide__title">{{$slider->headline}}</h2>
                            <p class="slide__desc">{{$slider->body}}</p>
                            <a href="/Service" class="btn btn__primary mr-30">Learn more</a>
                        </div><!-- /.slide-content -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.slide-item -->
        @endforeach

    </div><!-- /.carousel -->
</section><!-- /.slider -->
<!-- ========================
      About 4
    =========================== -->
<!-- <section id="about4" class="about about-2 about-4 pb-40">
    <div class="container">
        <div class="row">
            @foreach($abouts as $about)
            <div class="col-sm-12 col-md-12 col-lg-7">
                <div class="row heading heading-2">
                    <div class="col-sm-12 col-md-12 col-sm-12">
                        <h2 class="heading__title">Provide Best Services and High Quality Products</h2>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-5">
                        <div class="carousel owl-carousel carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="700">

                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-transfer"></i>
                                </div>
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Vision statement</h4>
                                    {!!$about->vision!!}
                                </div>
                            </div>
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-worldwide"></i>
                                </div>
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Mission statement</h4>
                                    {!!$about->mission!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        {!!$about->about_text!!}
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-9 col-lg-5">
                <div class="about__img mb-60">
                    <img src="{{asset('storage/'.$about->image)}}" alt="about img" class="img-fluid">
                    <span>More About Us!</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> -->


<!-- ========================
        Services
    =========================== -->
<section id="services" class="services pt-0 bg-gray">
    <div class="container">
        <div class="row heading mb-40">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <span class="heading__subtitle mt-3">Our services</span>
            </div><!-- /.col-lg-12 -->
            @foreach($service_texts as $service_text)
            <div class="col-sm-12 col-md-6 col-lg-5">
                <h2 class="heading__title">{{$service_text->title}}</h2>
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-6 col-lg-6 offset-lg-1">
                <p class="heading__desc">
                    {!!$service_text->text!!}
                </p>
            </div><!-- /.col-lg-6 -->
            @endforeach
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="service-item">
                    <div class="service__img">
                        <img src="{{asset('front_templates')}}/images/services/1.jpg" alt="service" class="img-fluid">
                    </div><!-- /.service-img -->
                    <div class="service__overlay">
                        <div class="service__icon"><img width="30%" src="{{asset('front_templates')}}/images/icon-service/ship-service.png"></div>
                        <h4 class="service__title">Ship services</h4>
                        <p class="service__desc">We are able to carry out our tasks in our workshop, onboard vessels especially in Batam Island and within the Indonesian Sea. We will maintain our service with the best quality, professionalism and we ensure that each project awarded to us will achieved excellent result and reached the customer satisfaction.</p>
                        <a href="/Our-Service/Ship-services" class="btn btn__white btn__link btn__underlined">Learn More</a>
                    </div>
                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="service-item">
                    <div class="service__img">
                        <img src="{{asset('front_templates')}}/images/services/2.jpg" alt="service" class="img-fluid">
                    </div><!-- /.service-img -->
                    <div class="service__overlay">
                        <div class="service__icon"><img width="30%" src="{{asset('front_templates')}}/images/icon-service/ship-chandler.png"></div>
                        <h4 class="service__title">Ship Chandler</h4>
                        <p class="service__desc">we have established a Strong and Wide network with global partners, allowing us to consistently to be the main source for the best products at the most competitive prices.</p>
                        <a href="/Our-Service/Ship-Chandlers" class="btn btn__white btn__link btn__underlined">Learn More</a>
                    </div>
                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="service-item">
                    <div class="service__img">
                        <img src="{{asset('front_templates')}}/images/services/3.jpg" alt="service" class="img-fluid">
                    </div><!-- /.service-img -->
                    <div class="service__overlay">
                        <div class="service__icon"><img width="30%" src="{{asset('front_templates')}}/images/icon-service/warehouse-logistic.png"></div>
                        <h4 class="service__title">Warehouse & Logistics</h4>
                        <p class="service__desc">
                            PT. Hansway Indonesia understands when it comes to supplying Goods to the Vessel, punctuality is a first and foremost, equally to the importance of Efficiency, Effectiveness, Reliability and Costing in Logistic Solutions. And we're confident that the goods will be delivered to your vessel with Lower Cost & Minimum Time.
                        </p>
                        <a href="/Our-Service/Warehousing-and-Logistic" class="btn btn__white btn__link btn__underlined">Learn More</a>
                    </div>
                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <a href="/Contact-us" class="btn btn__primary btn__hover3 btn__lg mt-20">Contact Us</a>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Services -->

<!-- =========================== 
      fancybox Layout2
    ============================= -->
<section id="fancyboxLayout2" class="fancybox-layout2 pb-60">
    <div class="container">
        @foreach($service_whies as $why)
        <div class="row">
            <div class="heading heading-3 mb-50">
                <h4 class="text-center" style="color:#ff5e14;">Why use our services ?</h4>
                <h2 class="text-center">{{$why->title}}</h2>
            </div>
        </div><!-- /.row -->
        <div class="row">
            <!-- fancybox item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="fancybox-item">
                    <div class="fancybox__icon">
                        <i class="fa-solid fa-users"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">Customer Focus</h4>
                        <p class="fancybox__desc">{{$why->customer_focus}}</p>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
            <!-- fancybox item #2 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="fancybox-item">
                    <div class="fancybox__icon">
                        <i class="fa-solid fa-handshake"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">Empathy</h4>
                        <p class="fancybox__desc">{{$why->emphaty}}</p>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
            <!-- fancybox item #3 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="fancybox-item">
                    <div class="fancybox__icon">
                        <i class="fa-solid fa-user-tie"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">Professionalism</h4>
                        <p class="fancybox__desc">{{$why->professionalism}}</p>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
            <!-- fancybox item #4 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="fancybox-item">
                    <div class="fancybox__icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">Acuracy & Thrustworthy</h4>
                        <p class="fancybox__desc">{{$why->acuracy_trustworthy}}</p>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
            <!-- fancybox item #5 -->
        </div><!-- /.row -->
        @endforeach
    </div><!-- /.container -->
</section><!-- /.fancybox Layout2 -->

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


@endsection