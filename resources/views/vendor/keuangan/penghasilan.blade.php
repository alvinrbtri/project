@extends('Layouts.dashboard_vendor')
@section('container')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <!-- Extend Navbar >> bermasalah khusus dashboard -->
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

        <div class="ps-4" >
            <div style="font-size:20px">Pilih tahun</div>
            <div class="col-sm-6">
                <select class="form-select" aria-label="Default select example">
                    <option selected>2022</option>
                    <option value="1">2022</option>
                    <option value="2">2021</option>
                    <option value="3">2020</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="recentOrders">
                    <div class="details3">
                        <div class="recentOrders3">
                          <div class="row"> 
                            <div class="col-md-8">
                                <ol class="breadcrumb" style="font-size:25px">
                                    <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Penghasilan</li>
                                </ol>
                            </div>
                          </div>
                            <table class="mt-2" >
                                <thead>
                                    <tr>
                                        <td>Bulan</td>
                                        <td>Tahun</td>
                                        <td>Total Penghasilan</td>
                                        <td style="width:15%">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Januari</td>
                                        <td>2022</td>
                                        <td>Rp3.300.000</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button type="button" class="btndetail">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Februari</td>
                                        <td>2022</td>
                                        <td>Rp3.300.000</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button type="button" class="btndetail">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Maret</td>
                                        <td>2022</td>
                                        <td>Rp3.300.000</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button type="button" class="btndetail">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>April</td>
                                        <td>2022</td>
                                        <td>Rp3.300.000</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button type="button" class="btndetail">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mei</td>
                                        <td>2022</td>
                                        <td>Rp3.300.000</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button type="button" class="btndetail">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Juni</td>
                                        <td>2022</td>
                                        <td>Rp3.300.000</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button type="button" class="btndetail">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Juli</td>
                                        <td>2022</td>
                                        <td>Rp3.300.000</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button type="button" class="btndetail">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Agustus</td>
                                        <td>2022</td>
                                        <td>Rp3.300.000</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button type="button" class="btndetail">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>September</td>
                                        <td>2022</td>
                                        <td>Rp0</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button type="button" class="btndetail">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Oktober</td>
                                        <td>2022</td>
                                        <td>Rp0</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button type="button" class="btndetail">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Novenber</td>
                                        <td>2022</td>
                                        <td>Rp0</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button type="button" class="btndetail">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Desember</td>
                                        <td>2022</td>
                                        <td>Rp0</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button type="button" class="btndetail">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    </div>
     
    {{-- modal detail --}}
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content" style="width: 800px">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                            <div class="row mt-1">
                                <div class="col-md-4">
                                Username
                                </div>
                                <div class="col-md-8 text-end">
                                    Dilla
                                </div>
                             </div>
                             <div class="row mt-2">
                                <div class="col-md-6">
                                Nama pemilik rek.
                                </div>
                                <div class="col-md-6 text-end">
                               Dila Triyani
                                </div>
                             </div>
                             <div class="row mt-2">
                                <div class="col-md-4">
                                Rekening
                                </div>
                                <div class="col-md-8 text-end">
                                13214536347456 
                                </div>
                             </div>
                             <div class="row mt-2">
                                <div class="col-md-4">
                                Bank
                                </div>
                                <div class="col-md-8 text-end">
                                 Mandiri
                                </div>
                             </div>
                             <div class="row mt-2">
                                <div class="col-md-4">
                                Alamat
                                </div>
                                <div class="col-md-8 text-end">
                                    Gg arjuna, Banguntapan, Bantul, Yogyakarta
                                </div>
                             </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                                <div class="col-md-12" style="font-size:25px">
                                    Penghasilan Saya
                                </div>
                                <div class="col-md-6 text-muted">
                                    Bulan Agustus
                                </div>
                                <div class="col-md-8 mt-4" style="font-size:18px; color:#00b56a">
                                Total
                                </div>
                                <div class="col-md-8 mt-1 mb-3" style="font-size:30px; color:#00b56a">
                                IDR  3.300.000
                                </div>
                            </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
</section>
@endsection