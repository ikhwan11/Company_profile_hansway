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

            <form action="/Slider" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Add slider</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('default-images')}}/slider-default.jpg" class="img-fluid img-preview" alt="..." style="padding-left: 5%; padding-top: 5%;">

                            <div class="col-sm-8 mt-2 ml-3 mb-3">
                                <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" value="{{old('image')}}">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <input class="form-control @error('headline') is-invalid @enderror" type="text" placeholder="headline.." name="headline" id="headline" value="{{old('headline')}}">
                                @error('headline')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <input class="form-control" type="hidden" placeholder="slug auto fill.." name="slug" id="slug"><br>
                                <textarea class=" form-control @error('body') is-invalid @enderror" rows="6" placeholder="Keterangan.." id="body" name="body">{{old('body')}}</textarea>
                                @error('body')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror<br>
                                <br>
                                <button type="submit" class="btn btn-success">Add Slider</button>
                            </div>
                        </div>
                    </div>

                    <!-- /.card-body -->
                </div>
            </form>

        </div>
    </section>
</div>

@endsection