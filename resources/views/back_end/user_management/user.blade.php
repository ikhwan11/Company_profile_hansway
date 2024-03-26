@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1><span class="text-success">Kelola data user</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
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
                    <h3 class="card-title">Add User</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/User" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Nama.." id="name" name="name" value="{{old('name')}}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="email.." id="email" name="email" value="{{old('email')}}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <br>
                                    <label>Select role</label>
                                    <select class="form-control select2 @error('role') is-invalid @enderror" style="width: 100%;" id="role" name="role">
                                        <option value="">--pilih role--</option>
                                        <option value="1">Adminstrator</option>
                                        <option value="2">Social Media Specialist</option>
                                        <option value="3">Human Resource</option>
                                    </select>
                                    @error('role')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <img src="{{asset('default-images')}}/about-default.jpg" class="img-fluid img-preview" alt="..." style="width:50%;">
                                    <div class="custom-file form-group mt-3">
                                        <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
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
                                    <input class="form-control @error('jabatan') is-invalid @enderror" type="text" placeholder="jabatan.." id="jabatan" name="jabatan" value="{{old('jabatan')}}">
                                    @error('jabatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="password..">
                                    <input type="checkbox" onclick="showPass()"> Show Password
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Masukkan no hp jika ada</label>
                                    <input class="form-control @error('no_hp') is-invalid @enderror" type="number" id="no_hp" name="no_hp" placeholder="no hp.." value="{{old('no_hp')}}">
                                    @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <button class="btn btn-success" type="submit">Add User</button>

                        </div>
                    </form>
                    <!-- /.row -->
                </div>
            </div>

            <!-- table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data User</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1
                            @endphp

                            @foreach($data as $user)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->jabatan}}</td>

                                @if($user->role == 1)
                                <td>Adminstrator</td>
                                @elseif($user->role == 2)
                                <td>Social Media Specialist</td>
                                @else
                                <td>Human Resource</td>
                                @endif

                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="/User/{{$user->id}}/edit" class="btn btn-primary d-inline"><i class="fas fa-user-edit"></i></a>
                                    <form action="/User/{{$user->id}}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" title="Hapus {{$user->name}}" onclick="return confirm('Apakah anda yakin ingin menghapus {{$user->name}}?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card -->


        </div>
    </section>
</div>
<!-- /.card -->


@endsection