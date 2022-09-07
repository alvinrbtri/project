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
                <h2>Kelola Kendaraan</h2>
            </div>
        </div>
    <div class="">
        <div class="cardBox1">
            <div class="card2">
                <div>
                    <a href="/Vendor/Kelola-kendaraan/kelola_kendaraanr" style="text-decoration:none">
                        <div class="cardName2">Kendaraan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href="/Vendor/Kelola-Bangunan/kelola_bangunan" style="text-decoration:none">
                        <div class="cardName1">Bangunan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href="/Vendor/Kelola-Barang/kelola_barang" style="text-decoration:none">
                        <div class="cardName1">Barang
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="/Vendor/Kelola-PickUp/kelola_pickup" style="text-decoration:none">
                        <div class="cardName1">Pick Up
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container mb-5" style="width: 800px">
            <div class="card ">
              <div class="card-body">
                <h5 class="card-title">Rincian lahan</h5>
                <hr width="100%" color="#c0c0c0">
               
                  <div class="mb-3">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><b>Ketersediaan lahan parkir </b>
                          <p class="text-muted">Mohon masukan jumlah kapasitas dan luas lahan parkir Anda</p>
                      </label>
  
                      </div>
                      <div class="col-md-12">
                        <label for="exampleFormControl" class="form-label"><b>Berapa luas lahan parkir Anda?</b></label>
                        <p class="text-muted">ukuran luas lahan parkir Anda</p>
                        <input class="form-control" type="text" placeholder="50m x 50m">
                      </div>
                    
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><b>Catatan kapasitas</b></label>
                        <p><small class="text-muted">Deskripsikan berapa banyak kendaraan yang
                            bisa parkir?</small></p>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <a href="/Vendor/Kelola-Kendaraan/layanan_step4"> <button type="button" class="btn btn-success col-md-12 mt-3">Selanjutnya</button></a>
            </div>
          </div>
        </div>
        </div>
</div>             
</section>
@endsection