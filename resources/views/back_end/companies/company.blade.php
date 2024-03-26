@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Company</h1><span class="text-success">Company List</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Companies</li>
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
                    <h3 class="card-title">Add Company</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/Company" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control @error('company_name') is-invalid @enderror" type="text" placeholder="Company name.." id="company_name" name="company_name" value="{{old('company_name')}}" autofocus>
                                    @error('company_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('slug') is-invalid @enderror" type="text" placeholder="Slug.." id="slug" name="slug" value="{{old('slug')}}">
                                    @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('link') is-invalid @enderror" type="text" placeholder="Link Compro.." id="link" name="link" value="{{old('link')}}">
                                    @error('link')
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
                            <div class="form-group">
                                <label for="">About Company:</label>
                                <input id="about" type="hidden" name="about" value="{{old('about')}}">
                                <trix-editor input="about"></trix-editor>
                                @error('about')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md">
                            <button class="btn btn-success" type="submit">Add Company</button>
                        </div>
                    </form>
                    <!-- /.row -->
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Hansway Group Companies</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Logo</th>
                                <th>Company Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php $no=1 @endphp
                        @foreach($data as $company)
                        <tbody>
                            <tr>
                                <td style="vertical-align: middle;">{{$no++}}</td>
                                <td width="20%" style="vertical-align: middle;"><img src="{{asset('storage/'. $company->image)}}" alt="" width="50%"></td>
                                <td style="vertical-align: middle;">{{$company->company_name}}</td>
                                <td style="vertical-align: middle;">
                                    <a href="/Company/{{$company->slug}}" class="btn btn-success d-inline" title="Preview {{$company->company_name}}"><i class="far fa-eye"></i></a>
                                    <a href="/Company/{{$company->slug}}/edit" class="btn btn-primary d-inline" title="Edit {{$company->company_name}}"><i class="fas fa-user-edit"></i></a>

                                    <form action="/Company/{{$company->slug}}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" title="Hapus {{$company->company_name}}" onclick="return confirm('Apakah anda yakin ingin menghapus {{$company->company_name}}?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                <div class="card-footer clearfix">
                    <ul class="pagination m-0 float-right">

                    </ul>
                </div>
            </div>



        </div>
    </section>
</div>
<!-- /.card -->


@endsection