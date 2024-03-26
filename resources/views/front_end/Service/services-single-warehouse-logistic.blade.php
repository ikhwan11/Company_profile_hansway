@extends('layout.mainLayout')
@section('body')

<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img"><img src="{{asset('front_templates')}}/images/services/warehouse-logistic.JPG" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/Service">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Warehousing and Logistic</li>
                    </ol>
                </nav>
                <h1 class="pagetitle__heading">Warehousing and Logistic</h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ======================
      case studies Single
    ========================= -->
<section id="caseStudiesSingle" class="case-studies-single">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <aside class="sidebar mb-30">
                    <div class="widget widget-categories widget-categories-2">
                        <div class="widget-content">
                            <ul class="list-unstyled">
                                <li><a href="#" class="active">Why Us</a></li>
                                <li class="text-white mt-2" style="list-style-type:circle;">Express Delivery</li>
                                <li class="text-white" style="list-style-type:circle;">Time Flexibility
                                </li>
                                <li class="text-white" style="list-style-type:circle;">Door to Door Service</li>
                                <li class="text-white" style="list-style-type:circle;">Smooth Custom Clearance
                                    Handling (Singapore-Indonesia)</li>
                                <li class="text-white" style="list-style-type:circle;">Transparent Document
                                </li>
                            </ul>
                        </div><!-- /.widget-content -->
                    </div><!-- /.widget-categories -->
                    <div class="widget widget-download">
                        <h5 class="widget__title">Download</h5>
                        <div class="widget__content">
                            <!-- <a href="#" class="btn btn__primary btn__block btn__hover2 mb-20 d-flex justify-content-between">
                                <span>Company Report 2018</span>
                                <img src="{{asset('front_templates')}}/icons/pdf.png" alt="pdf">
                            </a> -->
                            <a href="#" class="btn btn__primary btn__block btn__hover2">
                                <span>Company Brochure</span>
                                <img src="{{asset('front_templates')}}/icons/pdf.png" alt="pdf">
                            </a>
                        </div><!-- /.widget-content -->
                    </div><!-- /.widget-download -->
                    <div class="widget widget-help bg-theme">
                        <div class="widget__content">
                            <h5>How Can <br> We Help You!</h5>
                            <p>We understand the importance approaching each work integrally and believe in the power of simple
                                and easy communication.</p>
                            <a href="/Contact-us" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i>Contact Us</a>
                        </div><!-- /.widget-download -->
                    </div><!-- /.widget-help -->
                </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="case-single-item">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="text__block mb-40">
                                <h5 class="text__block-title">Overview</h5>
                                <p class="text__block-desc">PT. Hansway Indonesia understands when it comes to supplying
                                    Goods to the Vessel, punctuality is a first and foremost, equally
                                    to the importance of Efficiency, Effectiveness, Reliability and
                                    Costing in Logistic Solutions. And we're confident that the goods
                                    will be delivered to your vessel with Lower Cost & Minimum
                                    Time
                                </p>

                            </div><!-- /.text-block -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <h5 class="text__block-title">Our Services</h5>
                            <div class="projects-carousel-2 carousel owl-carousel carousel-dots" data-slide="4" data-slide-md="3" data-slide-sm="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                                @foreach($data as $service)
                                <div class="project-item">
                                    <div>
                                        <img src="{{asset('storage/'.$service->image)}}">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <h4 class="project__title"><a href="/Our-Service/{{$service->slug}}">{{$service->name}}</a></h4><br>
                                        <p>{{$service->excerpt}}</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                @endforeach
                            </div><!-- /.carousel -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.case-single-item -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.case studies Single -->

@endsection