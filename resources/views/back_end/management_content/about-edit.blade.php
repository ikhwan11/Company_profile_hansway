@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>About Company</h1><span class="text-success">Kelola konten about company</span>
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
            <div class="alert alert-success fade show col-md-6" role="alert">
                {{ session('pesan') }}
            </div>
            @endif

            @foreach($data as $about)
            <form action="/About/{{$about->slug}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">About Company edit</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            @if($about->image)
                            <img src="{{asset('storage/'. $about->image)}}" class="img-preview img-fluid ml-4 mt-4" style="width: 70%;">
                            @else
                            <img src="{{asset('default-images')}}/about-default.jpg" class="img-preview img-fluid ml-4 mt-4" style="width: 70%;">
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div class="custom-file form-group mt-3">

                                <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" value="{{$about->image}}">

                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="title" value="{{old('title', $about->title)}}">
                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                <input type="hidden" class="mt-3 form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="slug" value="{{old('slug', $about->slug)}}">
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">vision</label>
                                    <input id="vision" type="hidden" name="vision" value="{{old('vision', $about->vision)}}">
                                    <trix-editor input="vision"></trix-editor>
                                    @error('vision')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Mission</label>
                                    <input id="mission" type="hidden" name="mission" value="{{old('mission', $about->mission)}}">
                                    <trix-editor input="mission"></trix-editor>
                                    @error('mission')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">About text</label>
                            <input id="about_text" type="hidden" name="about_text" value="{{old('about_text', $about->about_text)}}">
                            <trix-editor input="about_text"></trix-editor>
                            @error('about_text')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>

                </div>
            </form>
            @endforeach

            <!-- /.card-body -->
        </div>

    </section>
</div>



@endsection