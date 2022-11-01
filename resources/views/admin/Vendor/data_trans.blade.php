@extends('Layoutsadmin.adminlayout')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Data Pengambilan</h2>
            </div>
            <div class="search">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>
        <div class="cardBox1">
            <div class="card2">
                <div>
                    <a href="/admin/vendor/data_trans=berlangsung" style="text-decoration:none">
                        <div class="cardName2">Berlangsung
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="/admin/vendor/data_trans=selesai" style="text-decoration:none">
                        <div class="cardName1">Selesai
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="details3">
            <div class="recentOrders3">
                <div class="cardHeader3">
                    <h2>Data Vendor</h2>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Nama</td>
                            <td>Tanggal</td>
                            <td>Rek.Tujuan</td>
                            <td>Jumlah penarikan</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PT. Sinamar</td>
                            <td>22/03/2022</td>
                            <td>3346235758382</td>
                            <td>IDR 5.436.000</td>
                            <td style="color:gold">Di proses</td>
                        </tr>
                        <tr>
                            <td>PT. Jaya Abadi</td>
                            <td>23/03/2022</td>
                            <td>3346235758378</td>
                            <td>IDR 5.000.000</td>
                            <td style="color:gold">Di proses</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
         
    </section>
@endsection