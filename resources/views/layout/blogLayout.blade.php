<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{$title}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('front_templates')}}/images/logo/favicon-hansway.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('blog-templates')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('blog-templates')}}/css/style.css" rel="stylesheet">

    <style>
        /* floating bttn */
        .btn-floating {
            position: fixed;
            right: 25px;
            overflow: hidden;
            width: 80px;
            height: 80px;
            border-radius: 100px;
            border: 0;
            z-index: 9999;
            color: white;
            transition: .2s;
        }

        .btn-floating:hover {
            width: auto;
            padding: 0 20px;
            cursor: pointer;
        }

        .btn-floating span {
            font-size: 16px;
            margin-left: 5px;
            transition: .2s;
            line-height: 0px;
            display: none;
        }

        .btn-floating:hover span {
            display: inline-block;
        }

        .btn-floating:hover img {
            margin-bottom: -3px;
        }

        .btn-floating.whatsapp {
            bottom: 25px;
            background-color: #34af23;
            border: 2px solid #fff;
        }

        .btn-floating.whatsapp:hover {
            background-color: #1f7a12;
        }

        .btn-floating.facebook {
            bottom: 85px;
            background-color: #1876f3;
            border: 2px solid #fff;
        }

        .btn-floating.facebook:hover {
            background-color: #1876f3;
        }
    </style>
</head>

<body>

    @php

    $timezone = 'Asia/Jakarta';
    $timestamp = time();
    $dt = new DateTime("now", new DateTimeZone($timezone));
    $dt->setTimestamp($timestamp);

    @endphp
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#">{{$dt->format('l, M, d Y')}}</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="/Contact-us">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body small" href="/login">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 text-right d-none d-md-block">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-auto mr-n2">
                        <li class="nav-item">
                            <a class="nav-link text-body" href="https://www.linkedin.com/company/31341198"><small class="fab fa-linkedin-in"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="https://www.instagram.com/hanswayindonesia/"><small class="fab fa-instagram"></small></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="/" class="navbar-brand p-0 d-none d-lg-block">
                    <img src="{{asset('front_templates')}}/images/logo/logo-News.png" width="80%" alt="">
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
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
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <img src="{{asset('front_templates')}}/images/logo/logo-News-White.png" width="80%" alt="">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Hansway Group</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            @foreach($navbar as $nav)
                            <a href="{{$nav->link}}" class="dropdown-item" target="_blank">{{$nav->company_name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Services</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="/Our-Service/Ship-services" class="dropdown-item">Ship Maintenance Service</a>
                            <a href="/Our-Service/Ship-Chandlers" class="dropdown-item">Ship Chandler</a>
                            <a href="/Our-Service/Warehousing-and-Logistic" class="dropdown-item">Warehouse & Logistic</a>
                        </div>
                    </div>
                    <a href="/About-us" class="nav-item nav-link">About Us</a>
                    <a href="/News-&-Article" class="nav-item nav-link {{ ($title === "News & Article") ? 'active' : ''}}">News & Article</a>
                    <a href="/Galleries" class="nav-item nav-link">Gallery & Client</a>
                    <a href="/Career" class="nav-item nav-link">Career</a>
                </div>
                <!-- <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i class="fa fa-search"></i></button>
                    </div>
                </div> -->
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @yield('body')

    <a href="https://api.whatsapp.com/send?phone=628161111699" target="_blank">
        <button class="btn-floating whatsapp">
            <img src="{{asset('front_templates')}}/icons/wa.png" alt="WhatsApp Us" width="40px">
            <span>WhatsApp Us</span>
        </button>
    </a>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch</h5>
                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>Komp. Citra Super Mall Blok B No.5-6 Harbour Bay Jl Duyung - Batu Ampar Batam 29432 - Indonesia</p>
                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>(+62)778-7415227</p>
                <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>inquiry@hanswayindonesia.com</p>
                <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <script type="IN/FollowCompany" data-id="31341198" data-counter="bottom"></script>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="https://www.instagram.com/hanswayindonesia/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Popular News</h5>
                @foreach($featured as $popular)
                <div class="mb-3">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">{{$popular->category}}</a>
                        <a class="text-body" href=""><small>{{ date('M, d Y', strtotime($popular->created_at)) }}</small></a>
                    </div>
                    <a class="small text-body text-uppercase font-weight-medium" href="">{{$popular->excerpt}}</a>
                </div>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categories</h5>
                <div class="m-n1">
                    @foreach($cat as $category)
                    <a href="" class="btn btn-sm btn-secondary m-1">{{$category->name}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Flickr Photos</h5>
                <div class="row">
                    @foreach($trending as $foto)
                    <div class="col-4 mb-3">
                        <img class="w-100" src="{{asset('storage/'.$foto->image)}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <a href="#">Hansway Indonesia</a>. All Rights Reserved.

            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            Design by <a href="https://htmlcodex.com">HTML Codex</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('blog-templates')}}/lib/easing/easing.min.js"></script>
    <script src="{{asset('blog-templates')}}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('blog-templates')}}/js/main.js"></script>

    <!-- linkedin plugin -->
    <script src="https://platform.linkedin.com/in.js" type="text/javascript">
        lang: en_US
    </script>

    <script>
        // Function to extract search term from URL
        function getSearchTerm() {
            // Get the current URL
            var url = window.location.href;
            // Split the URL by '?' to get the query string
            var queryString = url.split('?')[1];
            if (queryString) {
                // Split the query string by '&' to get individual parameters
                var params = queryString.split('&');
                // Loop through the parameters to find the 'search' parameter
                for (var i = 0; i < params.length; i++) {
                    var param = params[i].split('=');
                    // If the parameter key is 'search'
                    if (param[0] === 'search') {
                        // Decode the URI component to handle special characters
                        var searchTerm = decodeURIComponent(param[1]);
                        // Replace plus and dash signs with spaces
                        searchTerm = searchTerm.replace(/\+/g, ' ').replace(/-/g, ' ');
                        return searchTerm;
                    }
                }
            }
            return null; // Return null if search term is not found
        }

        // Get the search term
        var searchTerm = getSearchTerm();
        // Display the search term in the HTML
        if (searchTerm) {
            document.getElementById('searchTerm').textContent = searchTerm;
        }
    </script>
</body>

</html>