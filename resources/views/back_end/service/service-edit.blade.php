@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Service Management</h1><span class="text-success">Kelola Service Hansway Indonesia</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Service Management</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">


            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Edit Service</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/Service-management/{{$data->slug}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Service name.." id="name" name="name" value="{{old('name', $data->name)}}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('slug') is-invalid @enderror" type="text" placeholder="URL auto fill.." id="slug" name="slug" value="{{old('slug', $data->slug)}}">
                                    @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Category</label>
                                    <select class="form-control select2 @error('category') is-invalid @enderror" style="width: 100%;" id="category" name="category">

                                        @if($data->category == '1')
                                        <option value="1" selected>Ship Service</option>
                                        <option value="2">Ship Chandler</option>
                                        <option value="3">Warehouse & Logistic</option>
                                        @elseif($data->category == '2')
                                        <option value="2" selected>Ship Chandler</option>
                                        <option value="1">Ship Service</option>
                                        <option value="3">Warehouse & Logistic</option>
                                        @else
                                        <option value="3" selected>Warehouse & Logistic</option>
                                        <option value="2">Ship Chandler</option>
                                        <option value="1">Ship Service</option>
                                        @endif

                                    </select>
                                    @error('category')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <img src="{{asset('storage/'.$data->image)}}" class="img-fluid img-preview" alt="..." style="width: 50%;">
                                    <div class="col-md-6 custom-file form-group mt-3">
                                        <input type="hidden" name="oldImage" value="{{$data->image}}">
                                        <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" value="{{old('image', $data->image)}}">
                                        @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">About Service</label>
                                    <input id="about_services" type="hidden" name="about_services" value="{{old('about_services', $data->about_services)}}">
                                    <trix-editor input="about_services"></trix-editor>
                                    @error('about_services')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- /.form-group -->
                                <a href="/Service-management" class="btn btn-secondary d-inline float-right ml-2">Cancel</a>
                                <button class="btn btn-success float-right d-inline" type="submit">Update Services</button>
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