@extends('layout.adminLayout')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gallery</h1><span class="text-success">Our Photo Gallery</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="/Gallery">Gallery</a></li>
                        <li class="breadcrumb-item active">Galleries List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="container-lg">
                <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                    @foreach($data as $galeri)
                    <div class="col mt-3 hov">
                        <img width="100%" src="{{asset('storage/'. $galeri->image)}}" class="gallery-item image" alt="gallery">
                        <div class="middle">
                            <h5>{{$galeri->name}}</h5>
                            <form action="/Gallery/{{$galeri->slug}}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus?')"><i class="fas fa-trash"></i> Delete Photo</button>
                            </form>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <div class="card-footer clearfix">
                <ul class="pagination m-0 ">
                    {{$data->links()}}
                </ul>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">

                        </div>

                        <div class="modal-body">
                            <img width="100%" src="{{asset('default-images')}}/news-default.jpg" class="modal-img" alt="modal img">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<!-- /.card -->

<script>
    document.addEventListener("click", function(e) {
        if (e.target.classList.contains("gallery-item")) {
            const src = e.target.getAttribute("src");
            document.querySelector(".modal-img").src = src;
            const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
            myModal.show();
        }
    })
</script>

@endsection