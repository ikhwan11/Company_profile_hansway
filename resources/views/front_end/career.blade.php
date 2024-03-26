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
                        <li class="breadcrumb-item active" aria-current="page">Careers</li>
                    </ol>
                </nav>
                <h1 class="pagetitle__heading">Work With Us</h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ========================= 
         careers
    =========================  -->
<section id="careers" class="careers bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-50">
                    <span class="heading__subtitle">Join Our Team</span>
                    <h2 class="heading__title">Current Openings</h2>
                    <div class="divider__line divider__center"></div>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div>
        <!-- career -->
        <div class="row mt-3">
            <div class="col">
                @if(session()->has('pesan'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat!</strong> {{ session('pesan') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                @foreach($careers as $index => $career)
                <!-- job item #{{ $index + 1 }} -->
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="heading{{ $index }}">
                            <h2 class="mb-0">
                                <button class="text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $index }}" aria-expanded="true" aria-controls="collapse{{ $index }}">
                                    <h6>{{ $career->position }}</h6>
                                </button>
                            </h2>
                        </div>

                        <div id="collapse{{ $index }}" class="collapse " aria-labelledby="heading{{ $index }}" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>{!!$career->qualification!!}</p><br>
                                <a href="/Apply-job/{{$career->slug}}" class="btn btn__primary btn__hover3 btn__lg mt-20"> Apply Now </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->


    </div><!-- /.container -->
</section><!-- /.careers -->

@endsection