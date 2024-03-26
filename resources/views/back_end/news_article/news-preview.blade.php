@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>News & Article Management</h1><span class="text-success">Preview News</span>
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
            <div class="card">
                <img class="card-img-top" src="{{asset('Storage/'.$data->image)}}" alt="Card image cap" style="width: 50%;">
                <div class="card-body">
                    <span>Title:</span>
                    <h2 class=" text-bold">{{$data->title}}</h2>
                    <span>Body:</span>
                    <p class="card-text">{!!$data->body!!}</p>
                </div>
                <div class="card-footer">
                    <a href="/News-and-article" class="btn btn-secondary d-inline">Back</a>
                    <a href="/News-and-article/{{$data->slug}}/edit" class="btn btn-primary d-inline" title="Edit {{$data->title}}">Edit</a>

                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.card -->

@endsection