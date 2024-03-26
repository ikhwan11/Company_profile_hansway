@extends('layout.mainLayout')
@section('body')

<!-- ========================= 
         careers
    =========================  -->
<section id="careers" class="careers bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-50">
                    <span class="heading__subtitle">Form lamaran kerja</span>
                    <h2 class="heading__title">{{$data->position}}</h2>
                    <div class="divider__line divider__center"></div>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div>
        <!-- career -->
        <div class="row mt-3">
            <div class="col">

                <form action="/Apply-job" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id_lowongan" class="form-control" id="id_lowongan" value="{{$data->id}}">

                        <input type="text" name="applicant_name" class="form-control" id="applicant_name" value="{{old('applicant_name')}}" autofocus>
                        @error('applicant_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{old('alamat')}}">
                        @error('alamat')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Surat lamaran</label>
                        <input id="surat_lamaran" type="hidden" name="surat_lamaran" value="{{old('surat_lamaran')}}">
                        <trix-editor input="surat_lamaran"></trix-editor>
                        @error('surat_lamaran')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group custom-file col-md-6">
                        <label>Email</label>
                        <input type="file" class="custom-file-input" id="cv" name="cv">
                        <label class="custom-file-label" for="cv">Upload CV..</label>
                        @error('cv')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                    @error('g-recaptcha-response')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <button type="submit" class="btn btn__primary btn__hover3 btn__lg mt-20">Submit</button>
                </form>

            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->


    </div><!-- /.container -->
</section><!-- /.careers -->

@endsection