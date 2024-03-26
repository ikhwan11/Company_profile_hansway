@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>About Company</h1><span class="text-success">Kelola konten about us perusahaan</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">About Company</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            @if(session()->has('pesan'))
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <span class="text-white">{{ session('pesan') }}</span>
                </div>
            </div>
            @endif

            @foreach($about_data as $data)

            <div class="card">
                @if($data->image)
                <img class=" card-img-top mt-4" src="{{asset('storage/'. $data->image)}}" style=" padding-left:2%; width:30%;">
                @else
                <img class="card-img-top mt-4" src="{{asset('default-images')}}/about-default.jpg" style="padding-left:2%; width:30%;">
                @endif
                <div class="card-body">
                    <!-- bagian data -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Headline</h3>
                        </div>
                        <div class="card-body">
                            <input class="form-control form-control-lg text-bold" type="text" placeholder=".form-control-lg" value="{{$data->title}}" readonly>
                        </div>
                    </div>
                    <!-- bagian data -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">About Company</h3>
                        </div>
                        <div class="card-body">{!! $data->about_text !!}
                        </div>
                    </div>
                    <!-- bagian data -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Vision statement</h3>
                        </div>
                        <div class="card-body">{!! $data->vision !!}
                        </div>
                    </div>
                    <!-- bagian data -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Mission statement</h3>
                        </div>
                        <div class="card-body">{!! $data->mission !!}
                        </div>
                    </div>
                    <a href="/About/{{$data->slug}}/edit" class="btn btn-warning float-right"> Edit </a>
                </div>

            </div>
            @endforeach
        </div>

    </section>
</div>



@endsection