@extends('Layoutsadmin.adminlayout')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Vendor + Verifikasi</h2>
            </div>
            <!-- Search -->
            <div class="search">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
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
                            <td>No.Telp</td>
                            <td>Alamat</td>
                            <td>Saldo</td>
                            <td>Email</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PT. Sinamar</td>
                            <td>0397456235638</td>
                            <td>Jln. Jend Sudirman no4</td>
                            <td>IDR 5.436.000</td>
                            <td>cahaya@mail.com</td>

                            <td class="td" style="size: 30px;">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    class="btndetail">
                                    <i class='bx bx-detail'></i>
                                </button>

                                <button class="btnedit" data-bs-toggle="modal" data-bs-target="#Modaledit">
                                    <i class='bx bx-edit'></i>
                                </button>

                                <button class="btndelete">
                                    <i class='bx bxs-trash'></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>PT. Cahaya Gelap</td>
                            <td>0867364654372</td>
                            <td>Jln. Jend Sudirman no14</td>
                            <td>IDR 2.436.000</td>
                            <td>cahaya@mail.com</td>
                            <td class="td" style="size: 30px;">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    class="btndetail">
                                    <i class='bx bx-detail'></i>
                                </button>

                                <button class="btnedit" data-bs-toggle="modal" data-bs-target="#Modaledit">
                                    <i class='bx bx-edit'></i>
                                </button>

                                <button class="btndelete">
                                    <i class='bx bxs-trash'></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>PT. Jaya Abadi</td>
                            <td>0877637624635</td>
                            <td>Jln. Jend Sudirman no14</td>
                            <td>IDR 8.436.000</td>
                            <td>cahaya@mail.com</td>

                            <td class="td" style="size: 30px;">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    class="btndetail">
                                    <i class='bx bx-detail'></i>
                                </button>

                                <button class="btnedit" data-bs-toggle="modal" data-bs-target="#Modaledit">
                                    <i class='bx bx-edit'></i>
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

    <!-- Modal -->
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
                    <label class="label">No.Telp</label>
                    <input type="number" class="form-control" id="namavendor" placeholder="086376483456">
                    <label class="label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="nama" placeholder="Ahmad Arif">
                    <label class="label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username">
                    <label class="label">Saldo</label>
                    <input type="text" class="form-control" id="saldo" placeholder="Rp 10,000,000">
                    <label class="label">Alamat</label>
                    <textarea type="text" class="form-control" id="alamat"
                        placeholder="Jln. Jend Sudirman no14"></textarea>
                    <div class="kk">
                        <h4>Scan KK & KTP</h4>
                        <img src="{{ asset('assets/img/kaka.png') }}">
                        <img src="{{ asset('assets/img/kttp.png') }}" style="margin-left: 20px;">
                    </div>
                </div>
                <div class="modal-footer d-md-block">
                    <button type="button" class="btn btn-success col-md-12" data-bs-dismiss="modal">Verifikasi</button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal edit --}}
    <div class="modal fade" id="Modaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <label class="label">No.Telp</label>
                    <input type="number" class="form-control" id="namavendor" placeholder="086376483456">
                    <label class="label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="nama" placeholder="Ahmad Arif">
                    <label class="label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username">
                    <label class="label">Saldo</label>
                    <input type="text" class="form-control" id="saldo" placeholder="Rp 10,000,000">
                    <label class="label">Alamat</label>
                    <textarea type="text" class="form-control" id="alamat"
                        placeholder="Jln. Jend Sudirman no14"></textarea>
                    <div class="kk">
                        <h4>Scan KK & KTP</h4>
                        <img src="{{ asset('assets/img/kaka.png') }}">
                        <img src="{{ asset('assets/img/kttp.png') }}" style="margin-left: 20px;">
                    </div>
                </div>
                <div class="modal-footer d-md-block">
                    <button type="button" class="btn btn-success col-md-12" data-bs-dismiss="modal">Simpan</button>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection