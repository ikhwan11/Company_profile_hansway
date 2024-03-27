@extends('layout.blogLayout')
@section('body')


<!-- Main News Slider Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7 px-0">
            <div class="owl-carousel main-carousel position-relative">

                @foreach($hot as $hotnews)
                @php
                $num_char = 100;
                $text = $hotnews->title;
                @endphp
                <div class="position-relative overflow-hidden" style="height: 500px;">
                    <img class="img-fluid h-100" src="{{asset('storage/'.$hotnews->image)}}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">#{{$hotnews->category}}</a>
                            <a class="text-white" href="">{{ date('M, d Y', strtotime($hotnews->created_at)) }}</a>
                        </div>
                        <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="/News-&-Article/{{$hotnews->slug}}">{{substr($text, 0, $num_char) . '...'}}</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="col-lg-5 px-0">
            <div class="row mx-0">
                @foreach($data_atas as $atas)
                @php
                $num_char = 50;
                $text = $atas->title;
                @endphp
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="{{asset('storage/'.$atas->image)}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">#{{$atas->category}}</a>
                                <a class="text-white" href=""><small>{{ date('M, d Y', strtotime($atas->created_at)) }}</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/News-&-Article/{{$atas->slug}}">{{substr($text, 0, $num_char) . '...'}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Main News Slider End -->


<!-- Breaking News Start -->
<div class="container-fluid bg-dark py-3 mb-3">
    <div class="container">
        <div class="row align-items-center bg-dark">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Breaking News</div>

                    <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 170px); padding-right: 90px;">
                        @foreach ($hot as $breaking)
                        <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="/News-&-Article/{{$breaking->slug}}">{{$breaking->excerpt}}</a></div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breaking News End -->


<!-- Featured News Slider Start -->
<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="section-title">
            <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
        </div>
        <div class="owl-carousel news-carousel carousel-item-4 position-relative">

            @foreach($featured as $all)
            @php
            $num_char = 50;
            $text = $all->title;
            @endphp
            <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid h-100" src="{{asset('storage/'.$all->image)}}" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">#{{$all->category}}</a>
                        <a class="text-white" href=""><small>{{ date('M, d Y', strtotime($all->created_at)) }}</small></a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/News-&-Article/{{$all->slug}}">{{substr($text, 0, $num_char) . '...'}}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Featured News Slider End -->


<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                            <!-- <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a> -->
                        </div>
                    </div>
                    @foreach($semua as $news)
                    @php
                    $num_char = 50;
                    $text = $news->title;

                    @endphp
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="{{asset('storage/'.$news->image)}}" style="object-fit: cover;">
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">{{$news->category}}</a>
                                    <a class="text-body" href=""><small>{{ date('M, d Y', strtotime($news->created_at)) }}</small></a>
                                </div>
                                <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="/News-&-Article/{{$news->slug}}">{{substr($text, 0, $num_char) . '...'}}</a>
                                <p class="mt-2">{{$news->excerpt}}</p>
                            </div>
                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle mr-2" src="{{asset('storage/'.$news->user->image)}}" width="25" height="25" alt="">
                                    <small>{{$news->user->name}}</small>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>{{$news->views}}</small>
                                    <small class="ml-3"><i class="far fa-comment mr-2"></i>{{$news->count_comm}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- error, data yang di banner tidak mucul -->
                    <ul class="pagination pagination m-0 float-right">
                        {{$semua->links()}}
                    </ul>

                    <div class="col-lg-12 mt-2 mb-2">
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

                </div>
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
                        @if($ads_square)
                        <a href="{{ $ads_square->link }}" target="_blank">
                            <img class="img-fluid" src="{{ asset('storage/' . $ads_square->image) }}" alt="">
                        </a>
                        @else
                        <a href="#" target="_blank">
                            <img class="img-fluid" src="{{ asset('blog-templates/img/news-800x500-2.jpg') }}" alt="">
                        </a>
                        @endif
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
                            <!-- <a href="/News-&-Article/" class="btn btn-sm btn-outline-secondary m-1"></a> -->
                            @foreach($cat as $category)
                            <form action="/News-&-Article/category">
                                <div class="input-group mb-3">
                                    <input type="hidden" class="form-control" placeholder="Search.." name="search" value=" {{$category->slug}}">
                                    <button class="btn btn-sm btn-outline-secondary m-1" type="submit">{{$category->name}}</button>
                                </div>
                            </form>
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