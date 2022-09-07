@extends('layouts.dashboard_vendor')

<!--hero section-->
@section('container')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Kelola Bangunan</h2>
            </div>
        </div>
    <div class="">
        <div class="cardBox1">
            <div class="card1">
                <div>
                    <a href=" /Vendor/Kelola-kendaraan/kelola_kendaraan" style="text-decoration:none">
                        <div class="cardName1">Kendaraan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card2">
                <div>
                    <a href=" /Vendor/Kelola-Bangunan/kelola_bangunan" style="text-decoration:none">
                        <div class="cardName2">Bangunan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href=" /Vendor/Kelola_Barang/kelola_barangstep1" style="text-decoration:none">
                        <div class="cardName1">Barang
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href=" /Vendor/Kelola_PickUp/kelola_pickup" style="text-decoration:none">
                        <div class="cardName1">Pick Up
                        </div>
                    </a>
                </div>
            </div>
        </div>
    
    
            <div class="justify-content-center container">
                <img src="../../assets/img/Logoo.png" alt="" class="mx-auto d-block img-fluid mb-5 " style="width:300px">
           
        <a href=" /Vendor/Kelola-Bangunan/layanan_step1 " class="mb-5 col-lg-3 justify-content-center"><button class="btn btn-outline-success mb-5 col-sm-12" style="width:100%">Tambah Layanan</button></a>
            </div>
    </div>
   
</section>
@endsection