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
                    <h3 class="card-title">Edit Career</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/Career-management/{{$data->slug}}" method="POST">
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input class="form-control @error('position') is-invalid @enderror" type="text" placeholder="Job Position.." id="position" name="position" value="{{old('position', $data->position)}}">
                                    @error('position')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('slug') is-invalid @enderror" type="text" placeholder="URL auto fill.." id="slug" name="slug" value="{{old('slug', $data->slug)}}">
                                    @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="">Salary offer</label>
                                    <input class="form-control @error('salary_offer') is-invalid @enderror" type="text" placeholder="kosongkan jika tidak perlu.." id="salary_offer" name="salary_offer" value="{{old('salary_offer', $data->salary_offer)}}">
                                    @error('salary_offer')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Qualifications</label>
                                    <input id="qualification" type="hidden" name="qualification" value="{{old('qualification', $data->qualification)}}">
                                    <trix-editor input="qualification"></trix-editor>
                                    @error('qualification')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- /.form-group -->
                                <button class="btn btn-success float-right" type="submit">Edit Career</button>
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