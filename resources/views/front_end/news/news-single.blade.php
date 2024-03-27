@extends('layout.blogLayout')
@section('body')

<!-- Breaking News Start -->





<div class="container-fluid mt-5 mb-3 pt-3">
    <div class="container">

        @if(session()->has('pesan'))
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <span class="text-dark">{{ session('pesan') }}</span>
            </div>
        </div>
        @endif
        @if(session()->has('error'))
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <span class="text-dark">{{ session('error') }}</span>
            </div>
        </div>
        @endif

        <div class="row align-items-center">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div class="section-title border-right-0 mb-0" style="width: 180px;">
                        <h4 class="m-0 text-uppercase font-weight-bold">Tranding</h4>
                    </div>
                    <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0" style="width: calc(100% - 180px); padding-right: 100px;">
                        @foreach($trending as $trend)
                        <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="/News-&-Article/{{$trend->slug}}">{{$trend->excerpt}}</a></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breaking News End -->


<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="{{asset('storage/'.$data->image)}}" style="object-fit: cover;">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">#{{$data->category}}</a>
                            <a class="text-body" href="">{{ date('M, d Y', strtotime($data->created_at)) }}</a>
                        </div>
                        <h2 class="mb-3 text-secondary text-uppercase font-weight-bold">{{$data->title}}</h2>
                        {!!$data->body!!}
                    </div>
                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle mr-2" src="{{asset('storage/'.$data->user->image)}}" width="25" height="25" alt="">
                            <span>{{$data->user->name}}</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="ml-3"><i class="far fa-eye mr-2"></i>{{ $data->views }}</span>
                            <span class="ml-3"><i class="far fa-comment mr-2"></i>{{$jum_com}}</span>
                        </div>
                    </div>
                </div>
                <!-- News Detail End -->

                <div class="col-lg-8 text-center text-lg-right mb-2">
                    @if($ads_land)
                    <a href="{{ $ads_land->link }}" target="_blank">
                        <img class="img-fluid" src="{{ asset('storage/' . $ads_land->image) }}" alt="">
                    </a>
                    @else
                    <a href="#" target="_blank">
                        <img class="img-fluid" src="{{ asset('blog-templates/img/ads-728x90.png') }}" alt="">
                    </a>
                    @endif
                </div>

                <!-- Comment List Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">{{$jum_com}} Comments</h4>
                    </div>
                    @foreach($comment as $komen)
                    <div class="bg-white border border-top-0 p-4">
                        <div class="media mb-4">
                            <!-- <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;"> -->
                            <div class="media-body">
                                <h6><a class="text-secondary font-weight-bold" href="">{{$komen->name}} </a> <small><i>{{ date('M, d Y', strtotime($komen->created_at)) }}</i></small></h6>
                                <p>{{$komen->komen}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Comment List End -->

                <!-- Belum buat fitur komen-->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4">
                        <form action="/News-&-Article/komen/{{$data->slug}}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="hidden" id="news_id" name="news_id" value="{{$data->id}}">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Name.." id="name" name="name" value="{{old('name')}}">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control @error('komen') is-invalid @enderror" placeholder="Comment.." name="komen" id="komen"></textarea>
                                @error('komen')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="d-flex mb-2">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>

                            @error('g-recaptcha-response')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <div class="form-group mb-0">
                                <input type="submit" value="Leave a comment" class="btn btn-primary font-weight-semi-bold py-2 px-3">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Comment Form End -->
            </div>

            <div class="col-lg-4">
                <!-- Social Follow Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                            <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Connects</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                            <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                    </div>
                </div>
                <!-- Social Follow End -->

                <!-- Ads Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                    </div>
                    <div class="bg-white text-center border border-top-0 p-3">
                        <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>
                    </div>
                </div>
                <!-- Ads End -->

                <!-- Popular News Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        @foreach($trending as $trend)
                        @php
                        $num_char = 80;
                        $text = $trend->title;
                        @endphp
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="text-body" href=""><small>{{ date('M, d Y', strtotime($trend->created_at)) }}</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary" href="/News-&-Article/{{$trend->slug}}">{{substr($text, 0, $num_char) . '...'}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Popular News End -->

                <!-- Tags Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Category</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <div class="d-flex flex-wrap m-n1">
                            @foreach($cat as $category)
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">{{$category->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Tags End -->
            </div>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->


@endsection