@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Our Companies</h1><span class="text-success">Preview Company</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Company</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <img class="card-img-top" src="{{asset('storage/'.$data->image)}}" alt="Card image cap" style="width: 30%;">
                <div class="card-body">
                    <span>Title:</span>
                    <h2 class=" text-bold">{{$data->company_name}}</h2>
                    <span>Link Compro:</span>
                    <a href="{{$data->link}}" target="_blank">{{$data->link}}</a><br><br>
                    <span>About:</span>
                    <p class="card-text">{!!$data->about!!}</p>
                </div>
                <div class="card-footer">
                    <a href="/Company" class="btn btn-secondary d-inline">Back</a>
                    <a href="/Company/{{$data->slug}}/edit" class="btn btn-primary d-inline" title="Edit {{$data->company_name}}">Edit</a>

                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.card -->

@endsection