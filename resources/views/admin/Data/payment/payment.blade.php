@extends('Layoutsadmin.adminlayout')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Orderan</h2>
            </div>
        </div>

        <!-- top nav -->
       
        <!-- data list -->
        <div class="details1">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Data Payment</h2>
                    <a href="#" class="btn btn-thema"><i class="bi bi-printer-fill p-1"></i>Cetak</a>
                </div>
                <a href="" class="text-end">View All</a>
                <table class="table-borderless mt-3 w-auto">
                    <thead>
                        <tr>
                            <td>Nama</td>
                            <td>Tanggal</td>
                            <td>Jenis Layanan</td>
                            <td>Metode Pembayaran</td>
                            <td>Total Pembayaran</td>
                            <td>Alamat</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>02/02/2022</td>
                            <td>Kendaraan</td>
                            <td>Transfer Bank</td>
                           <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>

                        </tr>
                        <tr>
                            <td>Katryn</td>
                            <td>23/02/2022</td>
                            <td>Bangunan</td>
                            <td>Transfer Bank</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>24/03/2022</td>
                            <td>Barang</td>
                            <td>COD</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>

                        </tr>
                      
                    </tbody>
                </table>
            </div>

            <!-- New Customer -->

        </div>

    </div>
</section>
@endsection
