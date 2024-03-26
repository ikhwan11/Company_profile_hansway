@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Client</h1><span class="text-success">Our clients data</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Client</li>
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
                    <h3 class="card-title">Add Client</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/Clients" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control @error('name_client') is-invalid @enderror" type="text" placeholder="Client name.." id="name_client" name="name_client" value="{{old('name_client')}}">
                                    @error('name_client')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <img src="{{asset('default-images')}}/about-default.jpg" class="img-fluid img-preview" alt="..." style="width:30%;">
                                    <div class="custom-file form-group mt-3">
                                        <label for="">Logo</label>
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
                            <button class="btn btn-success" type="submit">Add Client</button>
                        </div>
                    </form>
                    <!-- /.row -->
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Client</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Logo</th>
                                <th>Nama Client</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=($data->currentPage() - 1) * $data->perPage() + 1;
                            @endphp

                            @foreach($data as $client)
                            <tr>
                                <td style="vertical-align: middle;">{{$no++}}</td>
                                <td width="20%"><img src="{{asset('storage/'. $client->image)}}" alt="" width="50%"></td>
                                <td style="vertical-align: middle;">{{$client->name_client}}</td>
                                <td style="vertical-align: middle; text-align:center;">
                                    <form action="/Clients/{{$client->id}}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" title="Hapus {{$client->name_client}}" onclick="return confirm('Apakah anda yakin ingin menghapus {{$client->name_client}}?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
                <div class="card-footer clearfix">
                    <ul class="pagination m-0 float-right">
                        {{$data->links()}}
                    </ul>
                </div>
            </div>



        </div>
    </section>
</div>
<!-- /.card -->


@endsection