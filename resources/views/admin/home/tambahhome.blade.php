@extends('Layoutsadmin.adminlayout')
@section('content')
    <section class="home-section">

    <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <!-- Search -->
                <div class="search" data-aos="fade-left" data-aos-duration="1000">
                    <label>
                        <input type="text" placeholder="Cari Disini">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
            </div>
    </div>
    <br>
    <div class="details3">
        <div class="recentOrders3">
            <div class="cardHeader" >
                <h4>Tambah Data Home</h4>
            </div>
            <div class="row">
                <div class="col-8">
                    <form action="/admin/home/inserthome" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="inputjudul" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" id="inputjudul">
                        </div>
                        <div class="mb-3">
                            <label for="inputSubJudul" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" id="inputSubJudul" >
                        </div>
                        <div class="mb-3">
                            <label for="inputdeskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="my-editor form-control" id="my-editor" cols="30" rows="10" ></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="inputgambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                {{-- </div> --}}
            </div>
        </div>
    </div>

    </section>

{{--Text Editor--}}
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor');
</script>
@endsection
