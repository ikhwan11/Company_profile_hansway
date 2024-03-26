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

            <div class="row">
                <div class="col-md-6">
                    <form action="/Service-management">
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
                    <h3 class="card-title">Data Services</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if($data->count())
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Image</th>
                                <th>Service</th>
                                <th>category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=($data->currentPage() - 1) * $data->perPage() + 1;
                            @endphp
                            @foreach($data as $service)
                            <tr>
                                <td>{{$no++;}}</td>
                                <td width="20%"><img src="{{asset('storage/'.$service->image)}}" class="img-fluid"></td>
                                <td>{{$service->name}}</td>

                                @if($service->category == '1')
                                <td>Ship Service</td>
                                @elseif($service->category == '2')
                                <td>Ship Chandler</td>
                                @else
                                <td>Warehouse & Logistic</td>
                                @endif

                                <td>
                                    <a href="/Service-management/{{$service->slug}}/edit" class="btn btn-primary d-inline" title="Edit {{$service->name}}"><i class="fas fa-user-edit"></i></a>
                                    <form action="/Service-management/{{$service->slug}}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" title="Hapus {{$service->name}}" onclick="return confirm('Apakah anda yakin ingin menghapus {{$service->name}}?')"><i class="fas fa-trash"></i></button>
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
                    <h3 class="card-title">Add Service</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/Service-management" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Service name.." id="name" name="name" value="{{old('name')}}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('slug') is-invalid @enderror" type="text" placeholder="URL auto fill.." id="slug" name="slug" value="{{old('slug')}}">
                                    @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Category</label>
                                    <select class="form-control select2 @error('category') is-invalid @enderror" style="width: 100%;" id="category" name="category">
                                        <option selected="selected">--pilih category--</option>
                                        <option value="1">Ship Service</option>
                                        <option value="2">Ship Chandler</option>
                                        <option value="3">Warehouse & Logistic</option>
                                    </select>
                                    @error('category')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <img src="{{asset('default-images')}}/service-default.jpg" class="img-fluid img-preview" alt="..." style="width: 50%;">
                                    <div class="col-md-6 custom-file form-group mt-3">
                                        <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" value="{{old('image')}}">
                                        @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">About Service</label>
                                    <input id="about_services" type="hidden" name="about_services" value="{{old('about_services')}}">
                                    <trix-editor input="about_services"></trix-editor>
                                    @error('about_services')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- /.form-group -->
                                <button class="btn btn-success float-right" type="submit">Add Services</button>
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