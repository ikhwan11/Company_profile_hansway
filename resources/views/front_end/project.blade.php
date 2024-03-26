@extends('layout.mainLayout')
@section('body')

<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img"><img src="{{asset('front_templates')}}/images/page-titles/project-title.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Company</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Projects</li>
                    </ol>
                </nav>
                <h1 class="pagetitle__heading">Our Projects</h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- =========================
      Carousel Tabs 
      =========================== -->
<section id="carouselTabs" class="carousel-tabs pb-70">
    <div class="pricing-bg">
        <div class="bg-img bg-overlay"><img src="{{asset('front_templates')}}/images/backgrounds/1.jpg" alt="background"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-50">
                    <h2 class="heading__title color-white">Our latest Projects</h2>
                    <div class="divider__line divider__white divider__center"></div>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <nav class="nav nav-tabs nav-tabs-white">
                    <!-- masukan jenis services -->
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
                            <!-- project item #1 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/1.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Analystics</a><a href="#">Optimization</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <!-- project item #2 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/2.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Warehousing</a><a href="#">Distribution</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <!-- project item #3 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/3.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Logistics</a><a href="#">Analytics</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                                    <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                                        spend by
                                        utilizing an extensive .</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <!-- project item #4 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/4.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Warehousing</a><a href="#">Distribution</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                        </div><!-- /.carousel -->
                    </div><!-- /.tab-pane -->
                    <div class="tab-pane fade" id="tab2">
                        <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2" data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                            <!-- project item #1 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/5.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Analystics</a><a href="#">Optimization</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <!-- project item #2 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/6.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Warehousing</a><a href="#">Distribution</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <!-- project item #3 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/1.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Logistics</a><a href="#">Analytics</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                                    <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                                        spend by
                                        utilizing an extensive .</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <!-- project item #4 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/4.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Warehousing</a><a href="#">Distribution</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                        </div><!-- /.carousel -->
                    </div><!-- /.tab-pane -->
                    <div class="tab-pane fade" id="tab3">
                        <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2" data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                            <!-- project item #1 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/4.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Analystics</a><a href="#">Optimization</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <!-- project item #2 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/6.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Warehousing</a><a href="#">Distribution</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <!-- project item #3 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/1.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Logistics</a><a href="#">Analytics</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                                    <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                                        spend by
                                        utilizing an extensive .</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <!-- project item #4 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/2.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Warehousing</a><a href="#">Distribution</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                        </div><!-- /.carousel -->
                    </div><!-- /.tab-pane -->
                    <div class="tab-pane fade" id="tab4">
                        <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2" data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                            <!-- project item #1 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/5.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Analystics</a><a href="#">Optimization</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <!-- project item #2 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/6.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Warehousing</a><a href="#">Distribution</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <!-- project item #3 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/1.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Logistics</a><a href="#">Analytics</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                                    <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                                        spend by
                                        utilizing an extensive .</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <!-- project item #4 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/4.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Warehousing</a><a href="#">Distribution</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                        </div><!-- /.carousel -->
                    </div><!-- /.tab-pane -->
                    <div class="tab-pane fade" id="tab5">
                        <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2" data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                            <!-- project item #1 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/6.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Warehousing</a><a href="#">Distribution</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <!-- project item #3 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/1.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Logistics</a><a href="#">Analytics</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                                    <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                                        spend by
                                        utilizing an extensive .</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <!-- project item #4 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/4.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Warehousing</a><a href="#">Distribution</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                        </div><!-- /.carousel -->
                    </div><!-- /.tab-pane -->
                    <div class="tab-pane fade" id="tab6">
                        <div class="projects-carousel-3 carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2" data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                            <!-- project item #1 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/3.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Analystics</a><a href="#">Optimization</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <!-- project item #2 -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="{{asset('front_templates')}}/images/case-studies/grid/6.jpg" alt="project img">
                                    <a href="#" class="zoom__icon"></a>
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <div class="project__cat">
                                        <a href="#">Warehousing</a><a href="#">Distribution</a>
                                    </div><!-- /.project-cat -->
                                    <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                        and
                                        optimizing your supply chain performance.</p>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                        </div><!-- /.carousel -->
                    </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Carousel Tabs  -->


@endsection