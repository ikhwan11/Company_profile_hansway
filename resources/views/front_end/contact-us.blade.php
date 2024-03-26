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
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
                <h1 class="pagetitle__heading">Contact Us</h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ==========================
        contact 1
    =========================== -->
<section id="contact1" class="contact text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-50">
                    <span class="heading__subtitle">Get In Touch</span>
                    <h2 class="heading__title">Contact Us</h2>
                    <div class="divider__line divider__theme divider__center mb-0"></div>
                    <p class="heading__desc">We understand the importance of approaching each work integrally and believe in
                        the power of simple and easy communication.</p>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">

                @if(session()->has('pesan'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Selamat!</strong> {{ session('pesan') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <form action="/Contact-us/submit" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{old('name')}}" autofocus>
                                @error('name')
                                <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="{{old('email')}}">
                                @error('email')
                                <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone" value="{{old('phone')}}">
                                @error('phone')
                                <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="company" id="company" placeholder="Company" value="{{old('company')}}">
                                @error('company')
                                <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Request Details" name="request" id="request"></textarea>
                                @error('request')
                                <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-center">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>
                            @error('g-recaptcha-response')
                            <span class="text-danger mt-1">{{ $message }}</span>
                            @enderror

                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                            <button type="submit" class="btn btn__secondary btn__hover3">Submit Request</button>
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </form>
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact 1 -->


@endsection