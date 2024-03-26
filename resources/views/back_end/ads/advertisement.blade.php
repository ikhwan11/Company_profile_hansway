@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Advertisement</h1><span class="text-success">Ads management</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Advertisemet</li>
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

    @error('status')
    <div class="container">
        <div class="col-md-6">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">{{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @enderror

    <!-- table -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Ads</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if($data->count())
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Name</th>
                        <th>image</th>
                        <th>status</th>
                        <th>tipe iklan</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=($data->currentPage() - 1) * $data->perPage() + 1;
                    @endphp

                    @foreach($data as $ads)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$ads->name}}</td>
                        <td><img src="{{asset('storage/'.$ads->image)}}" width="50%"></td>
                        <td>{{$ads->status}}</td>
                        <td>{{$ads->tipe}}</td>

                    </tr>
                    <tr>
                        <td colspan="5">
                            <a href="/Ads/{{$ads->id}}" class="btn btn-success d-inline" title="Preview {{$ads->name}}"><i class="far fa-eye"></i></a>
                            <form action="/Ads/{{$ads->id}}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" title="Hapus {{$ads->name}}" onclick="return confirm('Apakah anda yakin ingin menghapus {{$ads->name}}?')"><i class="fas fa-trash"></i></button>
                            </form>
                            <button type="button" class="btn btn-warning float-right" data-toggle="modal" data-target="#exampleModalCenter">
                                Change Status
                            </button>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/Ads/{{$ads->id}}" method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control select2 @error('status') is-invalid @enderror" style="width: 100%;" id="status" name="status">
                                                <option value="" selected>--pilih Status--</option>
                                                <option value="ON">ON</option>
                                                <option value="OFF">OFF</option>
                                            </select>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
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

    <section class="content">
        <div class="container-fluid">

            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Add Ads</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/Ads" method="POST" enctype="multipart/form-data">
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
                                    <input class="form-control @error('link') is-invalid @enderror" type="text" placeholder="link" id="link" name="link" value="{{old('link')}}">
                                    @error('link')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tipe</label>
                                    <select class="form-control select2 @error('tipe') is-invalid @enderror" style="width: 100%;" id="tipe" name="tipe">
                                        <option value="" selected>--pilih Tipe--</option>
                                        <option value="Landscape">Landscape</option>
                                        <option value="Square">Square</option>
                                    </select>
                                    @error('tipe')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control select2 @error('status') is-invalid @enderror" style="width: 100%;" id="status" name="status">
                                        <option value="" selected>--pilih Status--</option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                                    @error('status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
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
                            <button class="btn btn-success" type="submit" style="float:inline-end">Add Ads</button>
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