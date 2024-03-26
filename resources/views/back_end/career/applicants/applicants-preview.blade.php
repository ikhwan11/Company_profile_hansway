@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Applicants</h1><span class="text-success">Data pelamar</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Applicant</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">


            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Applicant preview</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <span>Nama pelamar :</span>
                        <input type="text" class="form-control form-control-border text-bold" id="exampleInputBorder" value="{{$data->applicant_name}}">
                    </div>
                    <div class="form-group">
                        <span>Job Position :</span>
                        <input type="text" class="form-control form-control-border text-bold" id="exampleInputBorder" value="{{$data->career->position}}">
                    </div>
                    <div class="form-group">
                        <h3 class="text-bold">Surat Lamaran :</h3>
                        <p>{!!$data->surat_lamaran!!}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('applicants.cv', ['applicant' => $data->id]) }}" target="_blank" class="btn btn-warning float-right btn-lg ml-2">Show CV</a>

                    <a href="/Applicants-management" class="btn btn-secondary float-right btn-lg ml-2">Back</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.card -->

@endsection