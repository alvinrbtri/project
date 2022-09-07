@extends('layouts.dashboard_vendor')

<!--hero section-->
@section('container')
<section class="home-section">
    <div class="">
        <div class="cardBox1">
            <div class="card1">
                <div>
                    <a href="/Vendor/Kelola-Kendaraan/layanan_step1" style="text-decoration:none">
                        <div class="cardName1">Kendaraan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href="/Vendor/Kelola-Bangunan/layanan_step1" style="text-decoration:none">
                        <div class="cardName1">Bangunan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card2">
                <div>
                    <a href="/Vendor/Kelola_Barang/layanan_step1" style="text-decoration:none">
                        <div class="cardName2">Barang
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href=" /Vendor/Kelola-PickUp/layanan_step1" style="text-decoration:none">
                        <div class="cardName1">Pick Up
                        </div>
                    </a>
                </div>
            </div>
        </div>
    
    
            <div class="justify-content-center container">
                <img src="../../assets/img/Logoo.png" alt="" class="mx-auto d-block img-fluid mb-5 " style="width:300px">
           
        <a href="/Vendor/Kelola_Barang/layanan_step1 " class="mb-5 col-lg-3 justify-content-center"><button class="btn btn-outline-success mb-5 col-sm-12" style="width:100%">Tambah Layanan</button></a>
            </div>
    </div>
   
    
    
</section>
@endsection