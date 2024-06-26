@extends('layout.blogLayout')
@section('body')

<!-- News With Sidebar Start -->
<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Category: <span id="searchTerm" class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"></span> </h4>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <div class="row news-lg mx-0 mb-3">
                            @foreach($data as $news)
                            @php
                            $num_char = 50;
                            $text = $news->title;
                            @endphp

                            <div class="col-md-12">
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{asset('storage/'.$news->image)}}" width="21%" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">#{{$news->category}}</a>
                                            <a class="text-body" href=""><small>{{ date('M, d Y', strtotime($news->created_at)) }}</small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">{{substr($text, 0, $num_char) . '...'}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{$data->links()}}
                            </ul>
                        </div>
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
                        <a href="https://www.linkedin.com/company/31341198" target="_blank" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                            <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">Connects with Us</span>
                        </a>
                        <a href="https://www.instagram.com/hanswayindonesia/" target="_blank" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                            <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">Follow Us</span>
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
                        <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <div class="d-flex flex-wrap m-n1">
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