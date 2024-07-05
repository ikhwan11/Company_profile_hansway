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

            <!-- kolom pencarian -->
            <div class="row">
                <div class="col-md-6">
                    <form action="/News-&-Article">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search.." name="search" autofocus>
                            <button class="btn btn-warning" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
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

            <!-- table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Latest News</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if($data->count())
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Title</th>
                                <th>Penulis</th>
                                <th>Sumber</th>
                                <th>Category</th>
                                <th>Views</th>
                                <th>comments</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=($data->currentPage() - 1) * $data->perPage() + 1;
                            @endphp

                            @foreach($data as $news)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$news->title}}</td>
                                <td>{{$news->user->name ?? ''}}</td>

                                @if(isset($news->source))
                                <td><a href="{{$news->source}}">{{$news->source}}</a></td>
                                @else
                                <td> - </td>
                                @endif
                                <td>{{$news->category}}</td>
                                <td>{{$news->views}}</td>
                                <td>0</td>


                            </tr>
                            <tr>
                                <td colspan="5">
                                    <a href="/News-and-article/{{$news->slug}}" class="btn btn-success d-inline" title="Preview {{$news->title}}"><i class="far fa-eye"></i></a>
                                    <a href="/News-and-article/{{$news->slug}}/edit" class="btn btn-primary d-inline" title="Edit {{$news->title}}"><i class="fas fa-user-edit"></i></a>
                                    <form action="/News-and-article/{{$news->slug}}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" title="Hapus {{$news->title}}" onclick="return confirm('Apakah anda yakin ingin menghapus {{$news->title}}?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    @else
                    <p class="text-center fs-4">Post not found</p>
                    @endif
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{$data->links()}}
                    </ul>
                </div>
            </div>
            <!-- /.card -->

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
                    <form action="/News-and-article" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input class="form-control @error('title') is-invalid @enderror" type="text" placeholder="Title.." id="title" name="title" value="{{old('title')}}">
                                    @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('slug') is-invalid @enderror" type="text" placeholder="URL.." id="slug" name="slug" value="{{old('slug')}}">
                                    @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('source') is-invalid @enderror" type="text" placeholder="Source.." id="source" name="source" value="{{old('source')}}">
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
                                            <option value="" selected>--pilih category--</option>
                                            @foreach($category as $cat)
                                            <option value="{{$cat->slug}}">{{$cat->name}}</option>
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

                                            <option value="" selected>Null</option>
                                            <option value="Featured">Featured News</option>
                                            <option value="Trending">Trending</option>

                                        </select>
                                        @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <img src="{{asset('default-images')}}/news-default.jpg" class="img-preview img-fluid ml-4 mt-4" style="width: 40%;">
                                    <div class="custom-file mt-2 ml-3 col-md-6 mb-3">
                                        <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" value="{{old('image')}}">
                                        @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="">Body</label>
                                    <input id="body" type="hidden" name="body" value="{{old('body')}}">
                                    <trix-editor input="body"></trix-editor>
                                    @error('body')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> -->
                                <div class="form-group">
                                    <label for="">Body</label>
                                    <textarea id="body" name="body">{{old('body')}}</textarea>
                                    @error('body')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- /.form-group -->
                                <button class="btn btn-success float-right" type="submit">Add Content</button>
                                <a href="/News-category" class="btn btn-warning">Add Category</a>
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