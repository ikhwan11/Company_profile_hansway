@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>News & Article Management</h1><span class="text-success">Kelola news dan artikel</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">News & Article</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Add News & Article</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/News-and-article/{{$data->id}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">

                                    <input class="form-control @error('title') is-invalid @enderror" type="text" placeholder="Title.." id="title" name="title" value="{{old('title', $data->title)}}">
                                    @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('slug') is-invalid @enderror" type="text" placeholder="URL.." id="slug" name="slug" value="{{old('slug', $data->slug)}}">
                                    @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('source') is-invalid @enderror" type="text" placeholder="Source.." id="source" name="source" value="{{old('source',$data->source)}}">
                                    @error('source')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Category</label>
                                        <select class="form-control select2 @error('category') is-invalid @enderror" style="width: 100%;" id="category" name="category">
                                            @foreach ($categories as $category)
                                            @if(old('category', $data->category) == $category->slug)
                                            <option value="{{$category->slug}}" selected>{{ $category->name }}</option>
                                            @else
                                            <option value="{{$category->slug}}">{{ $category->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        @error('category')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Status</label>
                                        <select class="form-control select2 @error('status') is-invalid @enderror" style="width: 100%;" id="status" name="status">
                                            @if($data->status == 'Featured')
                                            <option value="">Null</option>
                                            <option value="Featured" selected>Featured News</option>
                                            <option value="Trending">Trending</option>
                                            @elseif($data->status == 'Trending')
                                            <option value="">Null</option>
                                            <option value="Featured">Featured News</option>
                                            <option value="Trending" selected>Trending</option>
                                            @else
                                            <option value="">Null</option>
                                            <option value="Featured">Featured News</option>
                                            <option value="Trending">Trending</option>
                                            @endif

                                        </select>
                                        @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <img src="{{asset('storage/'.$data->image)}}" class="img-preview img-fluid ml-4 mt-4" style="width: 50%;">
                                    <div class="custom-file mt-2 ml-3 col-md-6 mb-3">
                                        <input type="hidden" name="oldImage" value="{{$data->image}}">
                                        <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" value="{{$data->image}}">
                                        @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Body</label>
                                    <input id="body" type="hidden" name="body" value="{{old('body', $data->body)}}">
                                    <trix-editor input="body"></trix-editor>
                                    @error('body')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- /.form-group -->
                                <a href="/News-and-article" class="btn btn-secondary d-inline float-right ml-2">Close</a>
                                <button class="btn btn-success float-right d-inline" type="submit">Update Content</button>
                            </div>
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