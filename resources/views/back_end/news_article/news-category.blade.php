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
                    <h3 class="card-title">Add News & Article Category</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/News-category" method="POST">
                        @csrf
                        <div class=" row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Category name.." id="name" name="name" value="{{old('name')}}">
                                    @error('name')
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

                                <!-- /.form-group -->
                                <button class="btn btn-success float-right" type="submit">Add Category</button>
                                <a href="/News-and-article" class="btn btn-warning">Cancel</a>
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