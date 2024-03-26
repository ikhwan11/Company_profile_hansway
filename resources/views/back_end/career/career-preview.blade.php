@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Career Management</h1><span class="text-success">Kelola data career</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Career</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">


            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Career preview</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <span>Job Position :</span>
                        <input type="text" class="form-control form-control-border text-bold" id="exampleInputBorder" value="{{$data->position}}">
                    </div>
                    <div class="form-group">
                        <span>Salary offer :</span>
                        <input type="text" class="form-control form-control-border text-bold" id="exampleInputBorder" @if(isset($data->salary_offer))value="{{$data->salary_offer}}" @else value="-"@endif>
                    </div>
                    <div class="form-group">
                        <h3 class="text-bold">Qualification :</h3>
                        <p>{!!$data->qualification!!}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/Career-management" class="btn btn-secondary float-right btn-lg ml-2">Back</a>
                    <a href="/Career-management/{{$data->slug}}/edit" class="btn btn-success float-right btn-lg">Edit</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.card -->

<script>
    const salaryInput = document.getElementById('salary_offer');

    // Add an event listener to format the input on input
    salaryInput.addEventListener('input', function() {
        // Remove any non-numeric characters
        let numericValue = salaryInput.value.replace(/[^0-9]/g, '');

        // Add the thousands separator
        numericValue = numericValue.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        // Update the input value
        salaryInput.value = numericValue;
    });
</script>

@endsection