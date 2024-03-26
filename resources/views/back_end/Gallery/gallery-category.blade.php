@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gallery</h1><span class="text-success">Our Gallery Category</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category Galleries</li>
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
                    <h3 class="card-title">Add Galleries Category </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/Gallery/Category" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control @error('category_name') is-invalid @enderror" type="text" placeholder="Photo name.." id="category_name" name="category_name" value="{{old('category_name')}}">
                                    @error('category_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md">
                            <button class="btn btn-success" type="submit">Add Category</button>
                            <a href="/Gallery" class="btn btn-secondary">Back</a>
                        </div>
                    </form>
                    <!-- /.row -->
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Gallery Categories List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Category Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=($data->currentPage() - 1) * $data->perPage() + 1;
                            @endphp

                            @foreach($data as $category)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$category->category_name}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{$data->links()}}
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>
<!-- /.card -->


@endsection