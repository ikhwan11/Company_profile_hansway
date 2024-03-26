@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Page Title</h1><span class="text-success">Kelola page title images website</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Page title</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari page.." aria-label="Cari page.." aria-describedby="button-addon2">
                        <button class="btn btn-warning" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>

            @if(session()->has('pesan'))
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <span class="text-white">{{ session('pesan') }}</span>
                </div>
            </div>
            @endif

            @foreach($data as $page)
            <form action="/Page/{{$page->id}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">{{$page->title}}</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('storage/'. $page->image)}}" class="img-preview img-fluid ml-4 mt-4" style="width: 70%;">
                            <div class="custom-file mt-2 ml-3 col-md-6 mb-3">
                                <input type="hidden" name="oldImage" value="{{$page->image}}">
                                <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" value="{{$page->image}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="title" value="{{old('title', $page->title)}}">
                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="slug" value="{{old('slug', $page->slug)}}">
                                <br>
                                <br>
                                <button class="btn btn-success float-right" type="submit">Update</button>
                            </div>
                        </div>
                    </div>

                    <!-- /.card-body -->
                </div>

            </form>
            @endforeach

        </div>
    </section>
</div>

@endsection