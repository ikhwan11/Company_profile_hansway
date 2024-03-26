@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Service</h1><span class="text-success">Kelola service text website</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Service</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            @if(session()->has('pesan'))
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <span class="text-white">{{ session('pesan') }}</span>
                </div>
            </div>
            @endif

            @foreach($text as $service_text)
            <form action="/Service-text/{{$service_text->id}}" method="POST">
                @method('put')
                @csrf
                <div class="card card-success">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control text-bold  @error('title') is-invalid @enderror" type="text" placeholder="Title" id="title" name="title" value="{{old('title', $service_text->title)}}">
                                    @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="text" type="hidden" name="text" value="{{old('text', $service_text->text)}}">
                                    <trix-editor input="text" placeholder="Tulis disini.."></trix-editor>
                                    @error('text')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                    <!-- /.card-body -->
                </div>
            </form>
            @endforeach

            @foreach($why as $service_why)
            <form action="/Service-why/{{$service_text->id}}" method="POST">
                @method('put')
                @csrf
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Why Use Our Services </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Headline</label>
                                    <input class="form-control text-bold @error('title') is-invalid @enderror" type="text" placeholder="Title" id="title" name="title" value="{{old('title', $service_why->title)}}">
                                    @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Customer-Focus</label>
                                    <textarea class="form-control @error('customer_focus') is-invalid @enderror" name="customer_focus" id="customer_focus" rows="5" placeholder="Customer-focus..">{{old('customer_focus', $service_why->customer_focus)}}</textarea>
                                    @error('customer_focus')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Emphaty</label>
                                    <textarea class="form-control @error('emphaty') is-invalid @enderror" name="emphaty" id="emphaty" rows="5" placeholder="Emphaty..">{{old('emphaty', $service_why->emphaty)}}</textarea>
                                    @error('emphaty')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Professionalism</label>
                                    <textarea class="form-control @error('professionalism') is-invalid @enderror" name="professionalism" id="professionalism" rows="5" placeholder="Professionalism..">{{old('professionalism', $service_why->professionalism)}}</textarea>
                                    @error('professionalism')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Acuracy & Trustworthy</label>
                                    <textarea class="form-control @error('acuracy_trustworthy') is-invalid @enderror" name="acuracy_trustworthy" id="acuracy_trustworthy" rows="5" placeholder="Acuracy & Thrustworthy..">{{old('acuracy_trustworthy', $service_why->acuracy_trustworthy)}}</textarea>
                                    @error('acuracy_trustworthy')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                    <!-- /.card-body -->
                </div>
            </form>
            @endforeach
        </div>
    </section>
</div>

@endsection