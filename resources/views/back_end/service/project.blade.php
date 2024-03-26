@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project Management</h1><span class="text-success">Kelola Project Hansway Indonesia</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Project Management</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari project.." aria-label="Cari project.." aria-describedby="button-addon2">
                        <button class="btn btn-warning" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
            <!-- table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Project</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>project</th>
                                <th>category service</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>HVAC Paxocean</td>
                                <td>NDT Services</td>
                                <td>
                                    <a href="#" class="btn btn-success d-inline" title="Preview"><i class="far fa-eye"></i></a>
                                    <a href="#" class="btn btn-warning d-inline" title="Add Image"><i class="fas fa-images"></i></a>
                                    <a href="#" class="btn btn-primary d-inline" title="Edit"><i class="fas fa-user-edit"></i></a>
                                    <a href="" class="btn btn-danger d-inline" title="Hapus"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.card -->

            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Add Project</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="">
                        <div class="row">

                            <div class="col">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Project name.." id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="slug auto fill.." id="slug" name="slug">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Category Service</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">--pilih category--</option>
                                        <option value="1">NDT service</option>
                                        <option value="2">Food prevision</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">About Project</label>
                                    <input id="about" type="hidden" name="about" value="{{old('about')}}">
                                    <trix-editor input="about"></trix-editor>
                                </div>
                                <!-- /.form-group -->
                                <button class="btn btn-success float-right" type="submit">Add Project</button>
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