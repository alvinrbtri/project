@extends('layouts.dashboard_vendor')

<!--hero section-->
@section('container')
<section class="home-section"  >
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Pesanan</h2>
            </div>
        </div>
                <div class="row justify-content-center">
                    <div class="col-md-11 container">
                        <div class="" style="background-color: #fff;">
                            <div class="card-body rounded-3">
                                <div class="row">
                                    <div class="col-md">
                                        <label for="faq" class="form-label" style="font-size: 20px"><b>Status Vendor</b></label>
                                        <p class="text-secondary" style="margin-left:10px; font-size:15px;"><i class="bi bi-geo-fill p-1"></i>Umbulharjo, Yogyakarta</p>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="switch">
                                               <input type="checkbox" checked>
                                               <span class="slider round"></span>
                                               <label class="switch ps-2 mt-2" for="checkbox">
                                                <b>Buka</b>
                                            </label>
                                       </label>
                                   </div>
                                </div>
                                <div class="container">
                                    <div class="card-body rounded col-md-11 ps-5" style="background: #F2F2F2E3">
                                        <div class="row">
                                            <div class="col-md">
                                                <p class="mb-1"><b>Earnings</b></p>
                                                <b><p>Rp 10.000.000</p></b>
                                            </div>
                                            <div class="col-md-1 text-success">
                                                <a href="/vendor/keuangan/saldo">
                                                <h3><i class="bi bi-arrow-right"></i></h3>
                                                </a>
                                            </div>   
                                        </div>
                                    </div>
                                        <div class="details3 col-md-11">
                                            <div class="recentOrders3">
                                              
                                                    <div class="row col-sm-auto">
                                                        <div class="col-md" style="padding-top: 10px">
                                                          <h5>Pesanan Baru</h5>
                                                        </div>  
                                                        <div class="col-md-2" style="padding-top: 10px; padding-left: 55px">
                                                            <a href="/orderan_baru"><p class="text-dark">See All</p></a>
                                                        </div>
                                                    </div>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <td>Kategori</td>
                                                            <td>Pemesan</td>
                                                            <td>Nama & jumlah Item</td>
                                                            <td>Total Item</td>
                                                            <td>Aksi</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Kendaraan</td>
                                                            <td>Mori Ucing</td>
                                                            <td>2 Mobil, 1 Motor</td>
                                                            <td>3</td>
                                                            <td class="td" style="font-size: 12px;">
                                                                <a href="/rincian_baru"><button class="btnedit">Terima</button></a>
                                                                <button class="btndelete"> Tolak</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bangunan</td>
                                                            <td>Rebecca Howward</td>
                                                            <td>Apartement</td>
                                                            <td>1</td>
                                                            <td class="td" style="font-size: 12px;">
                                                                <a href="/rincian_baru" role="button"><button class="btnedit">Terima</button></a>
                                                                <button class="btndelete"> Tolak</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barang</td>
                                                            <td>Dila Triyani</td>
                                                            <td>2 Tas, Sepatu</td>
                                                            <td>3</td>
                                                            <td class="td" style="font-size: 12px;">
                                                                <a href="/rincian_baru" role="button"><button class="btnedit">Terima</button></a>
                                                                <button class="btndelete"> Tolak</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bangunan</td>
                                                            <td>Angelie Shakira</td>
                                                            <td>Rumah</td>
                                                            <td>1</td>
                                                            <td class="td" style="font-size: 12px;">
                                                                <a  href="/rincian_baru"><button class="btnedit">Terima</button></a>
                                                                <button class="btndelete"> Tolak</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
    </section>
@endsection