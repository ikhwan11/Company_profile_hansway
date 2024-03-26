@extends('layout.mainLayout')
@section('body')

<!-- ========================= 
         careers
    =========================  -->
<section id="careers" class="careers bg-gray">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-50">
                    <span class="heading__subtitle">Our Client</span>
                    <h2 class="heading__title">Our Global Clients With Expertise</h2>
                    <div class="divider__line divider__center"></div>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div>
        <div class="row">
            @foreach($clients as $client)
            <div class="col-md-2 image-grid mb-3">
                <img src="{{asset('storage/'.$client->image)}}" title="{{$client->name_client}}">
            </div>
            @endforeach
        </div>

        <nav class="pagination-area mb-3 mt-3">
            <ul class="pagination justify-content-center">
                <!-- Previous Page Link -->
                <li><a href="{{ $clients->previousPageUrl() }}" rel="prev">&laquo;</a></li>

                <!-- Pagination Elements -->
                @foreach ($clients as $element)
                @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $clients->currentPage())
                <li class="active"><span>{{ $page }}</span></li>
                @else
                <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
                @endforeach
                @endif
                @endforeach

                <!-- Additional Pagination Numbers -->
                @for ($i = max(1, $clients->currentPage() - 1); $i <= min($clients->currentPage() + 1, $clients->lastPage()); $i++)
                    <li><a href="{{ $clients->url($i) }}">{{ $i }}</a></li>
                    @endfor

                    <!-- Next Page Link -->
                    <li><a href="{{ $clients->nextPageUrl() }}" rel="next">&raquo;</a></li>
            </ul>
        </nav>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-50">
                    <span class="heading__subtitle">Our photo gallery</span>
                    <h2 class="heading__title">Galleries</h2>
                    <div class="divider__line divider__center"></div>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div>
        <!-- career -->
        <div class="row mt-3">
            <div class="col">

                <div class="portfolio-menu mt-2 mb-4">
                    <ul>
                        <li class="btn btn-outline-dark active" data-filter="*">All</li>
                        @foreach($kategori as $kat)
                        <li class="btn btn-outline-dark" data-filter=".{{$kat->id}}">{{$kat->category_name}}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="portfolio-item row">
                    @foreach($data as $foto)
                    <div class="item {{$foto->id_kategori}} col-lg-3 col-md-4 col-6 col-sm">
                        <a href="{{asset('storage/'.$foto->image)}}" class="fancylight popup-btn" data-fancybox-group="light">
                            <img class="img-fluid" src="{{asset('storage/'.$foto->image)}}" alt="">
                        </a>
                    </div>
                    @endforeach
                </div>


            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->


    </div><!-- /.container -->
</section><!-- /.careers -->

<script>
    $('.portfolio-menu ul li').click(function() {
        $('.portfolio-menu ul li').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.portfolio-item').isotope({
            filter: selector
        });
        return false;
    });
    $(document).ready(function() {
        var popup_btn = $('.popup-btn');
        popup_btn.magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });
</script>

@endsection