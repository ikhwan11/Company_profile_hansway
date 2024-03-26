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
        </div>
    </section>

    <div class="container">
        <div class="row">

            <div class="col">
                <div class="card" style="width: 50rem;">
                    <img class="card-img-top" src="{{asset('storage/'.$data->image)}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{{$data->name}}</p>
                        <span>Link:</span>
                        <p>
                            <a href="{{$data->link}}">{{$data->link}}</a>
                        </p>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <span>Tipe:</span>
                                <p>
                                    {{$data->tipe}}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <span>Status:</span>
                                <p>
                                    {{$data->status}}
                                </p>
                            </div>
                        </div>
                        <a href="/Ads" class="btn btn-primary">Back</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>


@endsection