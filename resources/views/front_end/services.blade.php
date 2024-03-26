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
                        <li class="breadcrumb-item active" aria-current="page">Service</li>
                    </ol>
                </nav>
                <h1 class="pagetitle__heading">What We Do</h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ========================
        Services
    =========================== -->
<section id="services" class="services  bg-gray pb-70">
    <div class="container">
        <div class="row heading  mb-40">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <span class="heading__subtitle">Our Services</span>
            </div><!-- /.col-lg-12 -->
            <div class="col-sm-12 col-md-6 col-lg-5">
                <h2 class="heading__title">We are the solution in your work</h2>
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-6 col-lg-6 offset-lg-1">
                <p class="heading__desc">Provides personalize services for all owners and charterers with their needs of supplies and services within ship operational, With our advantage in several business sectors such as in Ship and Industry Construction, Engineering & Repair, Logistic Services, Tugboat & Barge Charter Services & Ship Chandler for Marine and Shipping Industry, while the sister company.</p>
            </div><!-- /.col-lg-6 -->
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
                        <p class="service__desc">
                            we have established a Strong and Wide network with global partners, allowing us to consistently to be the main source for the best products at the most competitive prices.
                        </p>
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
    </div><!-- /.container -->
</section><!-- /.Services -->

<!-- =========================== 
      fancybox Layout2
    ============================= -->
<section id="fancyboxLayout2" class="fancybox-layout2 pb-60">
    <div class="container">
        <div class="row">
            <div class="heading heading-3 mb-50">
                <h4 class="text-center" style="color:#ff5e14;">Why use our services ?</h4>
                <h2 class="text-center">CEPAT (Customer-Focus, Empathy, Professionalism, Accuracy, Trustworthy)</h2>
            </div>
        </div><!-- /.row -->
        <div class="row">
            <!-- fancybox item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="fancybox-item">
                    <div class="fancybox__icon">
                        <i class="icon-credit-cards"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">Customer Focus</h4>
                        <p class="fancybox__desc">We understand the requirement and expectations of customers.</p>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
            <!-- fancybox item #2 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="fancybox-item">
                    <div class="fancybox__icon">
                        <i class="icon-search-worldwide"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">Empathy</h4>
                        <p class="fancybox__desc">Able to understand the feelings and experiences experienced by your company. </p>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
            <!-- fancybox item #3 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="fancybox-item">
                    <div class="fancybox__icon">
                        <i class="icon-boxes"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">Professionalism</h4>
                        <p class="fancybox__desc">Complete work effectively and with quality.</p>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
            <!-- fancybox item #4 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="fancybox-item">
                    <div class="fancybox__icon">
                        <i class="icon-balance"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">Acuracy & Thrustworthy</h4>
                        <p class="fancybox__desc">Use products that suit your needs in order to achieve the price you want.</p>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-3 -->
            <!-- fancybox item #5 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.fancybox Layout2 -->

<!-- =========================
      Carousel Tabs 
      =========================== -->
<!-- <section id="carouselTabs" class="carousel-tabs pb-70">
    <div class="pricing-bg">
        <div class="bg-img bg-overlay"><img src="{{asset('front_templates')}}/images/backgrounds/1.jpg" alt="background"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-50">
                    <span class="heading__subtitle color-white">Latest Case Studies</span>
                    <h2 class="heading__title color-white">Featured Projects</h2>
                    <div class="divider__line divider__white divider__center"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <nav class="nav nav-tabs nav-tabs-white">
                    <a class="nav__link active" data-toggle="tab" href="#tab1">ALL Works</a>
                    <a class="nav__link" data-toggle="tab" href="#tab2">Distribution</a>
                    <a class="nav__link" data-toggle="tab" href="#tab3">Warehousing</a>
                    <a class="nav__link" data-toggle="tab" href="#tab4">Optimization</a>
                    <a class="nav__link" data-toggle="tab" href="#tab5">Logistics</a>
                    <a class="nav__link" data-toggle="tab" href="#tab6">Analystics</a>
                </nav>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab1">
                        <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2" data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                            
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/1.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div>
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Analystics</a><a href="#">Optimization</a>
                                    </div>
                                    <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

@endsection