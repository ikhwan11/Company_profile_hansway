@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gallery</h1><span class="text-success">Our Photo Gallery</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Galleries</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    @if(session()->has('pesan'))
    <div class="container-fluid">
        <div class="alert alert-success fade show col-md-6" role="alert">
            {{ session('pesan') }}
        </div>
    </div>
    @endif

    <section class="content">
        <div class="container-fluid">

            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Add Photo</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/Gallery" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Photo name.." id="name" name="name" value="{{old('name')}}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('slug') is-invalid @enderror" type="text" placeholder="Slug" id="slug" name="slug" value="{{old('slug')}}">
                                    @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control select2 @error('id_kategori') is-invalid @enderror" style="width: 100%;" id="id_kategori" name="id_kategori">
                                        <option value="" selected>--pilih category--</option>
                                        @foreach($kategori as $kat)
                                        <option value="{{$kat->id}}">{{$kat->category_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <img src="{{asset('default-images')}}/news-default.jpg" class="img-fluid img-preview" alt="..." style="width:50%;">
                                    <div class="custom-file form-group mt-3">
                                        <label for="">Add Photo</label>
                                        <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                                        @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md">
                            <button class="btn btn-success" type="submit">Add Photo</button>
                            <a href="/Gallery/List" class="btn btn-warning" style="float:inline-end">Gallery List</a>
                            <a href="/Gallery/Category" class="btn btn-primary mr-2" style="float:inline-end">Add Category</a>
                        </div>
                    </form>
                    <!-- /.row -->
                </div>
            </div>

        </div>
    </section>
</div>
<!-- /.card -->


@endsection