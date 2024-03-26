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

            @if(session()->has('pesan'))
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <span class="text-white">{{ session('pesan') }}</span>
                </div>
            </div>
            @endif


            <div class="row">
                <div class="col-md-6">
                    <form action="/Career-management">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search.." name="search" autofocus>
                            <button class="btn btn-warning" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Active Job List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if($data->count())
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Posisi</th>
                                <th>Offering Salary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=($data->currentPage() - 1) * $data->perPage() + 1; @endphp
                            @foreach($data as $career)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$career->position}}</td>

                                @if(isset($career->salary_offer))
                                <td>{{$career->salary_offer}}</td>
                                @else
                                <td>-</td>
                                @endif

                                <td>
                                    <a href="/Career-management/{{$career->slug}}" class="btn btn-success d-inline" title="Preview {{$career->position}}"><i class="far fa-eye"></i></a>
                                    <a href="/Career-management/{{$career->slug}}/edit" class="btn btn-primary d-inline" title="Edit {{$career->position}}"><i class="fas fa-user-edit"></i></a>
                                    <form action="/Career-management/{{$career->slug}}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" title="Hapus {{$career->position}}" onclick="return confirm('Apakah anda yakin ingin menghapus {{$career->position}}?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <p class="text-center fs-4">Career not found</p>
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

            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Add New Career</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/Career-management" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input class="form-control @error('position') is-invalid @enderror" type="text" placeholder="Job Position.." id="position" name="position" value="{{old('position')}}">
                                    @error('position')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('slug') is-invalid @enderror" type="text" placeholder="URL auto fill.." id="slug" name="slug">
                                    @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="">Salary offer</label>
                                    <input class="form-control @error('salary_offer') is-invalid @enderror" type="text" placeholder="kosongkan jika tidak perlu.." id="salary_offer" name="salary_offer">
                                    @error('salary_offer')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Qualifications</label>
                                    <input id="qualification" type="hidden" name="qualification" value="{{old('qualification')}}">
                                    <trix-editor input="qualification"></trix-editor>
                                    @error('qualification')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- /.form-group -->
                                <button class="btn btn-success float-right" type="submit">Add Career</button>
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