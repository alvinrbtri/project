@extends('superadmin.Layouts.superadminlayout')
@section('content')
    <section class="home-section">
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="cardHeader-title">
                    <h2>Vendor</h2>
                </div>
            </div>
            <div class="tit">
                <h2> Data Diri User Vendor + verifikasi</h2>
            </div>

            <div class="search2" style="margin-top: 10px;">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
            <div class="btn2">
                <a href="#" class="btn btn-thema">Cari</a>
            </div>

            <!-- data list -->
            <div class="details3">
                <div class="recentOrders3">
                    <div class="cardHeader3">
                        <h2>Data Vendor</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Alamat</td>
                                <td>Saldo</td>
                                <td>Email</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PT. Sinamar</td>
                                <td>Jln. Jend Sudirman no4</td>
                                <td>IDR 5.436.000</td>
                                <td>cahaya@mail.com</td>

                                <td class="td" style="size: 30px;">
<<<<<<< HEAD
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
=======
                                    <button class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class='bx bx-edit'></i>
                                    </button>

                                    <button class="btndelete">
                                        <i class='bx bx-trash'></i>
                                    </button>

                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1" 
>>>>>>> 6d38ed5d0c44e571a0cc720f79769f942f543f57
                                        class="btndetail">
                                        <i class='bx bx-detail'></i>
                                    </button>
                                    <button class="btndelete">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>PT. Cahaya Gelap</td>
                                <td>Jln. Jend Sudirman no14</td>
                                <td>IDR 2.436.000</td>
                                <td>cahaya@mail.com</td>

                                <td class="td" style="size: 30px;">
<<<<<<< HEAD
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
=======
                                    <button class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class='bx bx-edit'></i>
                                    </button>
                                    <button class="btndelete">
                                        <i class='bx bxs-trash'></i>
                                    </button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1"
>>>>>>> 6d38ed5d0c44e571a0cc720f79769f942f543f57
                                        class="btndetail">
                                        <i class='bx bx-detail'></i>
                                    </button>
                                    <button class="btndelete">
                                        <i class='bx bx-trash'></i>
                                    </button>

                                </td>
                            </tr>
                            <tr>
                                <td>PT. Jaya Abadi</td>
                                <td>Jln. Jend Sudirman no14</td>
                                <td>IDR 8.436.000</td>
                                <td>cahaya@mail.com</td>

                                <td class="td" style="size: 30px;">
<<<<<<< HEAD
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
=======
                                    <button class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class='bx bx-edit'></i>
                                    </button>
                                    <button class="btndelete">
                                        <i class='bx bxs-trash'></i>
                                    </button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1"
>>>>>>> 6d38ed5d0c44e571a0cc720f79769f942f543f57
                                        class="btndetail">
                                        <i class='bx bx-detail'></i>
                                    </button>
                                    <button class="btndelete">
                                        <i class='bx bxs-trash'></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>PT. Jaya Abadi</td>
                                <td>Jln. Jend Sudirman no14</td>
                                <td>IDR 8.436.000</td>
                                <td>cahaya@mail.com</td>

                                <td class="td" style="size: 30px;">
<<<<<<< HEAD
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        class="btndetail">
=======
                                    <button class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class='bx bx-edit'></i>
                                    </button>
                                    <button class="btndelete">
                                        <i class='bx bxs-trash'></i>
                                    </button>

                                    <button type="button" 
                                        class="btndetail" data-bs-toggle="modal" data-bs-target="#exampleModal1">
>>>>>>> 6d38ed5d0c44e571a0cc720f79769f942f543f57
                                        <i class='bx bx-detail'></i>
                                    </button>
                                    <button class="btndelete">
                                        <i class='bx bxs-trash'></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal edit -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header hader">
                        <h2 class="modal-title" id="exampleModalLabel">Data Vendor</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label class="label">Vendor ID</label>
                        <input type="text" class="form-control" id="id" placeholder="2374627">
                        <label class="label">Nama Vendor</label>
                        <input type="text" class="form-control" id="namavendor" placeholder="PT. Sinamar">
                        <label class="label">Nama Pemilik</label>
                        <input type="text" class="form-control" id="nama" placeholder="Ahmad Arif">
                        <label class="label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username">
                        <label class="label">Saldo</label>
                        <input type="text" class="form-control" id="saldo" placeholder="Rp 10,000,000">

                        <div class="kk">
                            <h4>Scan KK & KTP</h4>
                            <img src="{{ asset('assets/img/kaka.png') }}">
                            <img src="{{ asset('assets/img/kttp.png') }}" style="margin-left: 20px;">
                        </div>
                    </div>
                    <div class="modal-footer d-md-block">
                        {{-- <button type="button" class="btn-sm btn-primary">Edit</button> --}}
                        <button type="button" class="btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- modal detail --}}
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header hader">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <img src="../../assets/img/foto1.jpg" class="rounded-circle" alt="..." style="width: 150px; height:150px">
                            <p>CV.BRAXY PANDA</p>
                        </div>
                        <div class="text-center">
                            <div class="col-md-12 text-muted">
                                Saldo Vendor
                            </div>
                            <div class="col-md-12" style="font-size:30px; color:rgb(85, 194, 140)">
                                IDR 2.000.000
                            </div>
                        </div>
                        
                       
                        <div class="">
                            <div class="row">
                                <div class="col-md-6">
                                    Saldo Vendor
                                </div>
                                <div class="col-md-6">
                                    IDR 2.000.000
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                ID Vendor
                            </div>
                            <div class="col-md-6">
                            12343434
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                               Nama Vedor
                            </div>
                            <div class="col-md-6">
                                CV. Braxy Panda
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                Nama pemilik
                            </div>
                            <div class="col-md-6">
                               Ahmad Arif
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </section>
@endsection
