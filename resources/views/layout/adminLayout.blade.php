<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$title}}</title>
  <link href="{{asset('front_templates')}}/images/logo/favicon-hansway.png" rel="icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/d7f0e40acc.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{asset('back_templates')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('back_templates')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('back_templates')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('back_templates')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('back_templates')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('back_templates')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('back_templates')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <!-- matikan ini -->
  <!-- <link rel="stylesheet" href="{{asset('back_templates')}}/plugins/summernote/summernote-bs4.min.css"> -->
  <!-- trix editor -->
  <link rel="stylesheet" type="text/css" href="{{asset('trix_editor')}}/trix.css">
  <!-- switch -->


  <!-- summernote 2 -->
  <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }

    /* hover image gallery */
    .middle {
      transition: .5s ease;
      opacity: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      text-align: center;
    }

    .hov:hover .image {
      opacity: 0.3;
    }

    .hov:hover .middle {
      opacity: 1;
    }
  </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('front_templates')}}/images/logo/favicon-hansway.png" alt="Hansway Logo" height="60" width="60">
    </div>

    @if ($title != 'Log in')
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{asset('back_templates')}}/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>

        <!-- Sign out -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-cog"></i>
          </a>
          <div class="dropdown-menu  dropdown-menu-right">
            <form action="/Sign-out" method="post">
              @csrf
              <button type="submit" class="dropdown-item d-flex align-items-center">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </button>
            </form>

          </div>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/Admin" class="brand-link">
        <img src="{{asset('front_templates')}}/images/logo/favicon-hansway.png" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
        <span class="brand-text font-weight-bold">Adminstrator Page</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('storage/'.auth()->user()->image)}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{auth()->user()->name}}</a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header"></li>

            @if(auth()->user()->role == '1')
            <!-- website management content -->
            <li class="nav-item">
              <a href="#" class="nav-link {{ ($title === "Content Management") ? 'active' : ''}}">
                <i class="nav-icon fas fa-images"></i>
                <p>
                  Manage Content
                  <i class="fas fa-angle-left right"></i>
                  <!-- <span class="badge badge-info right">6</span> -->
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/Page" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Page title</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/Slider" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sliders</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/About" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>About Company</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/Service-text" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Services</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Contact info</p>
                  </a>
                </li>

              </ul>
            </li>

            <!-- News & Article -->
            <li class="nav-item">
              <a href="#" class="nav-link {{ ($title === "News & Article") ? 'active' : ''}}">
                <i class="nav-icon far fa-newspaper"></i>
                <p>
                  News & Article
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/News-and-article" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add News & Article</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Career -->
            <li class="nav-item">
              <a href="#" class="nav-link {{ ($title === "Career Management") ? 'active' : ''}}">
                <i class="nav-icon fas fa-briefcase"></i>
                <p>
                  Career
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/Career-management" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Career Management</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/Applicants-management" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Job Aplicant</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Company management -->
            <li class="nav-item ">
              <a href="/Company" class="nav-link {{ ($title === "Companies") ? 'active' : ''}}">
                <i class="nav-icon fas fa-building"></i>
                <p>
                  Companies
                </p>
              </a>
            </li>

            <!-- Client management -->
            <li class="nav-item ">
              <a href="/Clients" class="nav-link {{ ($title === "Clients") ? 'active' : ''}}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Clients
                </p>
              </a>
            </li>

            <!-- Gallery management -->
            <li class="nav-item ">
              <a href="/Gallery" class="nav-link {{ ($title === "Gallery") ? 'active' : ''}}">
                <i class="nav-icon far fa-images"></i>
                <p>
                  Gallery
                </p>
              </a>
            </li>

            <!-- services & project -->
            <li class="nav-item">
              <a href="#" class="nav-link {{ ($title === "Service & Project Management") ? 'active' : ''}}">
                <i class="nav-icon fas fa-wrench"></i>
                <p>
                  Service & Project
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/Service-management" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Services</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/Project-management" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Project</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- testimonial-->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-comment-alt"></i>
                <p>
                  Testimonials
                </p>
              </a>
            </li>

            <!-- Ads-->
            <li class="nav-item">
              <a href="/Ads" class="nav-link {{ ($title === "Advertisement Management") ? 'active' : ''}}">
                <i class="nav-icon fa-solid fa-rectangle-ad"></i>
                <p>
                  Advertisement
                </p>
              </a>
            </li>



            <!-- user management -->
            <li class="nav-item">
              <a href="/User" class="nav-link {{ ($title === "User Management") ? 'active' : ''}}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  User Management
                </p>
              </a>
            </li>

            @elseif(auth()->user()->role == '2')

            <!-- website management content -->
            <li class="nav-item">
              <a href="#" class="nav-link {{ ($title === "Content Management") ? 'active' : ''}}">
                <i class="nav-icon fas fa-images"></i>
                <p>
                  Manage Content
                  <i class="fas fa-angle-left right"></i>
                  <!-- <span class="badge badge-info right">6</span> -->
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/Page" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Page title</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/Slider" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sliders</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/About" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>About Company</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/Service-text" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Services</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Contact info</p>
                  </a>
                </li>

              </ul>
            </li>

            <!-- News & Article -->
            <li class="nav-item">
              <a href="#" class="nav-link {{ ($title === "News & Article") ? 'active' : ''}}">
                <i class="nav-icon far fa-newspaper"></i>
                <p>
                  News & Article
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/News-and-article" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add News & Article</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- services & project -->
            <li class="nav-item">
              <a href="#" class="nav-link {{ ($title === "Service & Project Management") ? 'active' : ''}}">
                <i class="nav-icon fas fa-wrench"></i>
                <p>
                  Service & Project
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/Service-management" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Services</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/Project-management" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Project</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- testimonial-->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-comment-alt"></i>
                <p>
                  Testimonials
                </p>
              </a>
            </li>

            @else

            <!-- Career -->
            <li class="nav-item">
              <a href="#" class="nav-link {{ ($title === "Career Management") ? 'active' : ''}}">
                <i class="nav-icon fas fa-briefcase"></i>
                <p>
                  Career
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/Career-management" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Career Management</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/Applicants-management" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Job Aplicant</p>
                  </a>
                </li>
              </ul>
            </li>

            @endif
          </ul>

        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    @endif


    @yield('body')

    @if ($title != 'Log in')
    <footer class="main-footer">
      <div class="float-right d-none d-sm-inline-block">
        PT. Hansway Indonesia
      </div>
    </footer>
    @endif

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


  <!-- summernote -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <!-- Bootstrap 4 JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- Summernote JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#body').summernote({
        height: 500, // set editor height
        width: 1200,
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: true, // set focus to editable area after initializing summernote
        toolbar: [
          // [groupName, [list of button]]
          ['style', ['bold', 'italic', 'underline', 'style']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['fontsize', ['fontsize']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          ['insert', ['link', 'table']],
          ['view', ['fullscreen', 'codeview', 'help']],

        ]
      });
    });
  </script>


  <!-- matikan ini -->
  <!-- jQuery -->
  <!-- <script src="{{asset('back_templates')}}/plugins/jquery/jquery.min.js"></script> -->
  <!-- jQuery UI 1.11.4 -->
  <!-- <script src="{{asset('back_templates')}}/plugins/jquery-ui/jquery-ui.min.js"></script> -->
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <!-- matikan ini -->
  <!-- <script src="{{asset('back_templates')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <!-- ChartJS -->
  <script src="{{asset('back_templates')}}/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="{{asset('back_templates')}}/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="{{asset('back_templates')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="{{asset('back_templates')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('back_templates')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="{{asset('back_templates')}}/plugins/moment/moment.min.js"></script>
  <script src="{{asset('back_templates')}}/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('back_templates')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <!-- <script src="{{asset('back_templates')}}/plugins/summernote/summernote-bs4.min.js"></script> -->
  <!-- overlayScrollbars -->
  <script src="{{asset('back_templates')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('back_templates')}}/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('back_templates')}}/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('back_templates')}}/dist/js/pages/dashboard.js"></script>
  <!-- trix editor -->
  <script type="text/javascript" src="{{asset('trix_editor')}}/trix.umd.min.js"></script>



  <script>
    const title = document.querySelector("#title , #name , #position, #headline, #company_name");
    const slug = document.querySelector("#slug");

    title.addEventListener("keyup", function() {
      let preslug = title.value;
      preslug = preslug.replace(/ /g, "-");
      slug.value = preslug.toLowerCase();
    });

    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    })

    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }

    function showPass() {
      var show = document.getElementById("password");
      if (show.type === "password") {
        show.type = "text";
      } else {
        show.type = "password";
      }
    }
  </script>



</body>

</html>