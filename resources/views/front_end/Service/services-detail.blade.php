@extends('layout.mainLayout')
@section('body')

<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img"><img src="{{asset('storage/'.$data->image)}}" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/Service">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$data->name}}</li>
                    </ol>
                </nav>
                <h1 class="pagetitle__heading">{{$data->name}}</h1>
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
                                @foreach($whies as $why)
                                <li><a href="#" class="active">Why us our services?</a></li>
                                <li class="text-white mt-2" style="list-style-type:circle;">Customer Focus : {{$why->customer_focus}}</li>
                                <li class="text-white" style="list-style-type:circle;">Emphaty : {{$why->emphaty}}
                                </li>
                                <li class="text-white" style="list-style-type:circle;">Professionalism : {{$why->professionalism}}</li>
                                <li class="text-white" style="list-style-type:circle;">Acuracy & Thrustworthy : {{$why ->acuracy_trustworthy}}</li>
                                @endforeach
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
                                <p class="text__block-desc">
                                    {!!$data->about_services!!}
                                </p>

                            </div><!-- /.text-block -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.case-single-item -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.case studies Single -->

@endsection