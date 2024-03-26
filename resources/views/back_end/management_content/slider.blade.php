@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sliders</h1><span class="text-success">Kelola banner utama website</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sliders</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <a href="/Slider/create" class="btn btn-success mb-3">Add Slide</a>

            @if(session()->has('pesan'))
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <span class="text-white">{{ session('pesan') }}</span>
                </div>
            </div>
            @endif

            @foreach($data as $slider)
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Active sliders</h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('storage/'.$slider->image)}}" class="img-fluid img-preview" alt="..." style="padding-left: 5%; padding-top: 5%; padding-bottom: 5%;">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <input class="form-control text-bold" type="text" placeholder="Title" value="{{$slider->headline}}" readonly>
                            <br>
                            <textarea class=" form-control" rows="6" placeholder="Tulis disini.." readonly>{{$slider->body}}</textarea>
                            <br>
                            <a href="/Slider/{{$slider->id}}/edit" class="btn btn-warning">Edit Slider</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            @endforeach

        </div>
    </section>
</div>

@endsection