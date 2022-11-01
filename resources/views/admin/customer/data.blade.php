@extends('Layoutsadmin.adminlayout')
@section('content')
    <section class="home-section">

        <div class="main">
            {{-- @include('admin.profile.partials') --}}
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

        <div class="details3">
            <div class="recentOrders3">
                <div class="cardHeader" >
                    <h4>Data Pengguna</h4>
                    <a href="#" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#ModalTambah" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end"> + Tambah</a>
                </div>
                <br>
                <table>
                    <thead>
                        <tr>
                            <td>Nama</td>
                            <td>Email</td>
                            <td>Jabatan</td>
                            <td class="col-md-2 text-center" style="">Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
        
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="td" style="width:35px;">
                                <a href="" class="btn btn-success">
                                    Edit</i>
                                </a>

                                <a href="#" class="btn btn-danger">
                                    Hapus</i>
                                </button>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 50%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">
                        Tambah Data Pengguna
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Pengguna</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" value="{{ old('jabatan') }}">
                            @error('jabatan')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer d-md-block">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <button type="button" class="btn btn-danger btn-sm">Batal</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
    <!-- END -->
    </section>
@endsection