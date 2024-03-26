@extends('layout.adminLayout')
@section('body')

<style>
    .center {
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        margin-top: 15%;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-5 center">
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header" style="background-color: white;">
                    <img src="{{asset('front_templates')}}/images/logo/favicon-hansway.png" alt="" style="width: 50px;">
                    <h4 class="text-dark d-inline ml-3 mt-2">Please Login</h4>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                @if(session()->has('pesan'))
                <div class="alert alert-danger fade show" role="alert">
                    {{ session('pesan') }}
                </div>
                @endif
                <form class="form-horizontal" method="post" action="/login">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" autofocus>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                                <input type="checkbox" onclick="showPass()"> Show Password
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Sign in</button>
                        <button type="submit" class="btn btn-danger float-right">Cancel</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>



@endsection