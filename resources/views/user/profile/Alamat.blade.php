@extends("layouts.user")
@section('container')
    
<section id="services" class="services section-bg" style="padding-top: 100px;">
    <div class="container mt-4 mb-4">

        <div class="row row-cols-1 row-cols-md-2 g-4">
            
            @include('partials.profile')

            <div class="col" style="width: 700px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Alamat Saya</h5>
                        <hr width="100%" color="#c0c0c0">
                        <div class="row" style="width: 650px">
                            <div class="row" style="width: 650px">
                                <div class="col-md">
                                    <p><b>Rebbeca Howard</b></p>
                                    <p>08934364865234</p>
                                    <p>Jln. Sukonandi No. 121 Santrean, <p>Tembelang, Jombang,</p> Timur 35624</p>
                                    <p class="card-text"><small class="text-muted">catatan: masuk gang ke arah timur</small></p>
                                </div>
                                <div class="col-1">
                                    <p class="text-end"><a href="/user/profile/edit_alamat"><i class="bi bi-pencil-square"></i></a></p>
                                </div> 
                                <div class="col-1">
                                    <p class="text-end"><a href="/user/profile/edit_alamat" data-bs-toggle="modal" data-bs-target="#hapusAlamat"><i class="bi bi-trash"></i></a></p>
                                    <!-- Modal -->
                                    <div class="modal fade" id="hapusAlamat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <p>Hapus alamat ?</p>
                                                    <div class="d-grid gap-2">
                                                        <button class="btn btn-outline-secondary" type="button">Nanti saja</button>
                                                        <button class="btn btn-outline-success" type="button">Hapus</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                            <hr width="100%" color="#c0c0c0">
                            <div class="row" style="width: 650px">
                                <div class="col-md">
                                    <p><b>Rebbeca Howard</b></p>
                                    <p>08934364865234</p>
                                    <p>Jln. Sukonandi No. 121 Santrean, <p>Tembelang, Jombang,</p> Timur 35624</p>
                                    <p class="card-text"><small class="text-muted">catatan: masuk gang ke arah timur</small></p>
                                </div>
                                <div class="col-1">
                                    <p class="text-end"><a href="/user/profile/edit_alamat"><i class="bi bi-pencil-square"></i></a></p>
                                </div> 
                                <div class="col-1">
                                    <p class="text-end"><a href="/user/profile/edit_alamat" data-bs-toggle="modal" data-bs-target="#hapusAlamat"><i class="bi bi-trash"></i></a></p>
                                    <!-- Modal -->
                                    <div class="modal fade" id="hapusAlamat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <p>Hapus alamat ?</p>
                                                    <div class="d-grid gap-2">
                                                        <button class="btn btn-outline-secondary" type="button">Nanti saja</button>
                                                        <button class="btn btn-outline-success" type="button">Hapus</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class="row" style="width: 650px">
                                <div class="col-md ">
                                    <p><b>Rebbeca Howard</b></p>
                                    <p>08934364865234</p>
                                    <p>Jln. Sukonandi No. 121 Santrean, <p>Tembelang, Jombang,</p> Timur 35624</p>
                                    <p class="card-text"><small class="text-muted">catatan: masuk gang ke arah timur</small></p>
                                </div>
                                <div class="col-1">
                                    <p class="text-end"><a href="/user/profile/edit_alamat"><i class="bi bi-pencil-square"></i></a></p>
                                </div> 
                                <div class="col-1">
                                    <p class="text-end"><a href="/user/profile/edit_alamat" data-bs-toggle="modal" data-bs-target="#hapusAlamat"><i class="bi bi-trash"></i></a></p>
                                    <!-- Modal -->
                                    <div class="modal fade" id="hapusAlamat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <p>Hapus alamat ?</p>
                                                    <div class="d-grid gap-2">
                                                        <button class="btn btn-outline-secondary" type="button">Nanti saja</button>
                                                        <button class="btn btn-outline-success" type="button">Hapus</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <a href="/user/profile/Tambah_alamat"><button type="button" class="btn btn-outline-success col-md-12 mt-3">Tambah Alamat Baru</button></a>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</section>
@endsection