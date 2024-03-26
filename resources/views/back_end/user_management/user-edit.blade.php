@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1><span class="text-success">Edit data user</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Edit User</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/User/{{$user->id}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Nama.." id="name" name="name" value="{{old('name', $user->name)}}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="email.." id="email" name="email" value="{{old('email', $user->email)}}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <br>
                                    <label>Change role</label>
                                    <select class="form-control select2 @error('role') is-invalid @enderror" style="width: 100%;" id="role" name="role">
                                        <option value="{{$user->role}}" selected>
                                            @if($user->role == '1')
                                            Adminstrator
                                            @elseif($user->role == '2')
                                            Social Media Specialist
                                            @else
                                            Human Resource
                                            @endif
                                        </option>

                                        @if($user->role == '1')
                                        <option value="2">Social Media Specialist</option>
                                        <option value="3">Human Resource</option>
                                        @elseif($user->role == '2')
                                        <option value="1">Adminstrator</option>
                                        <option value="3">Human Resource</option>
                                        @else
                                        <option value="1">Adminstrator</option>
                                        <option value="2">Social Media Specialist</option>
                                        @endif

                                    </select>
                                    @error('role')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <img src="{{asset('storage/'. $user->image)}}" class="img-preview img-fluid ml-4 mt-4" style="width: 70%;">
                                    <div class="custom-file form-group mt-3">
                                        <input type="hidden" name="oldImage" value="{{$user->image}}">
                                        <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" value="{{$user->image}}">
                                        @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control @error('jabatan') is-invalid @enderror" type="text" placeholder="jabatan.." id="jabatan" name="jabatan" value="{{old('jabatan', $user->jabatan)}}">
                                    @error('jabatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('no_hp') is-invalid @enderror" type="number" id="no_hp" name="no_hp" placeholder="no hp.." value="{{old('no_hp', $user->no_hp)}}">
                                    @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <button class="btn btn-success d-inline" type="submit">Update User</button>
                            <a href="" class="btn btn-warning d-inline ml-3">Forget Password</a>

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