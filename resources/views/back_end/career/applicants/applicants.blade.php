@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Career Management</h1><span class="text-success">Kelola data pelamar</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pelamar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

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


            <!-- <div class="row">
                <div class="col-md-6">
                    <form action="/Applicant-management">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search.." name="search" autofocus>
                            <button class="btn btn-warning" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div> -->

            <!-- table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data pelamar</h3>
                </div>
                <div class="card-body">
                    @if($data->count())
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Nama pelamar</th>
                                <th>Posisi</th>
                                <th>Tanggal Melamar</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=($data->currentPage() - 1) * $data->perPage() + 1; @endphp
                            @foreach($data as $pelamar)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$pelamar->applicant_name}}</td>
                                <td>{{$pelamar->career->position}}</td>
                                <td>{{ date('l, d-M-Y', strtotime($pelamar->created_at)) }}</td>
                                <td>{{$pelamar->alamat}}</td>

                                <td>
                                    <a href="/Applicants-management/{{$pelamar->id}}" class="btn btn-success d-inline" title="Preview"><i class="far fa-eye"></i></a>
                                    <form action="/Applicants-management/{{$pelamar->id}}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <p class="text-center fs-4">Applicant not found</p>
                    @endif
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{$data->links()}}
                    </ul>
                </div>

            </div>
            <!-- /.card -->

        </div>
    </section>
</div>

@endsection